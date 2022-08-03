<?php

include_once 'BaseModel.php';

class NoteModel extends BaseModel
{
    public function __construct() 
    {
        parent::__construct();
    }

    function getAllNotes($id): array
    {
        $sql = "SELECT * FROM `notes` WHERE user_id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function createNote($content, $user_id) {
        $sql = "INSERT INTO `notes`(`title`, `content`, `user_id`) VALUES (' ','$content','$user_id')";
        $result = mysqli_query($this->conn, $sql);
        if ($result)
        {
            return true;
        }
        return false;
    }

//    function updateNote($note_id, $content, $current_user_id) {
//        $sql = "DELETE FROM `notes` WHERE id = $note_id";
//        $result = mysqli_query($this->conn, $sql);
//        return true;
//    }

    function deleteNote($note_id) {
        $sql = "DELETE FROM `notes` WHERE id = $note_id";
        $result = mysqli_query($this->conn, $sql);
        if ($result)
        {
            return true;
        }
        return false;
    }
}