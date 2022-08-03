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

    function getNoteFromId($id)
    {
        $sql = "SELECT * FROM `notes` WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return $this->getFirst($result);
    }

    function createNote($content, $user_id): bool
    {
        $sql = "INSERT INTO `notes`(`title`, `content`, `user_id`) VALUES (' ','$content','$user_id')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return true;
        }
        return false;
    }

    function updateNote($note_id, $content): bool
    {
        $sql = "UPDATE `notes` SET `content`='$content' WHERE `id` = '$note_id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return true;
        }
        return false;
    }

    function deleteNote($note_id): bool
    {
        $sql = "DELETE FROM `notes` WHERE id = $note_id";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return true;
        }
        return false;
    }
}