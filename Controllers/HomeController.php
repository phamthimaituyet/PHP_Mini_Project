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
        $notes = $this->noteModel->getAllNotes($_SESSION['id']);
        header('Location: ../home');
    }

    public function updateNote()
    {
//        $noteModel = new NoteModel();
//        $notes = $noteModel->getAllNotes(1);
//        $this->render('home', compact('notes'));
    }

    public function deleteNote($noteId)
    {
        $this->noteModel->deleteNote($noteId);
        $notes = $this->noteModel->getAllNotes($_SESSION['id']);
        header('Location: ../home');
    }


}