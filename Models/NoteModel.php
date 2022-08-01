<?php

include_once 'BaseModel.php';

class NoteModel extends BaseModel
{
    public function __construct() 
    {
        parent::__construct();
    }

    function getAllNotes($id): bool
    {
        $sql = "SELECT * FROM `notes` WHERE id = '$id'";
        return mysqli_query($this->conn, $sql);
    }
}