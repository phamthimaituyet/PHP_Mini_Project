<?php
include_once 'BaseController.php';
include_once '../Models/NoteModel.php';

class HomeController extends BaseController
{
    public function __construct()
    {
        if (!isset($_SESSION['name'])) {
            return header('Location: login');
        }
    }

    public function showAllNote()
    {
        $noteModel = new NoteModel();
        $notes = $noteModel->getAllNotes(1);
        $this->render('home', compact('notes'));
    }
}