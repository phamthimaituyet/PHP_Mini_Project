<?php
include_once 'BaseController.php';
include_once '../Models/NoteModel.php';

class HomeController extends BaseController
{
    private $noteModel;

    public function __construct()
    {
        $this->noteModel = new NoteModel();
        if (!isset($_SESSION['name'])) {
            return header('Location: login');
        }
    }

    public function showAllNote()
    {
        $notes = $this->noteModel->getAllNotes($_SESSION['id']);
        $this->render('home', compact('notes'));
    }

    public function createNote($content)
    {
        $this->noteModel->createNote($content, $_SESSION['id']);
        $this->noteModel->getAllNotes($_SESSION['id']);
        header('Location: ../home');
    }

    public function updateNote($note_id, $content)
    {
        $this->noteModel->updateNote($note_id, $content);
        header('Location: ../home');
    }

    public function deleteNote($noteId)
    {
        $this->noteModel->deleteNote($noteId);
        header('Location: ../home');
    }

    public function toEditPage($note_id)
    {
        $note = $this->noteModel->getNoteFromId($note_id);
        $this->render('update', compact('note'));
    }


}