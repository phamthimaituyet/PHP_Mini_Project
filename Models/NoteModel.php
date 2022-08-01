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
        $sql = "SELECT * FROM `notes` WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}