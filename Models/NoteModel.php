<?php

include_once 'BaseModel.php';

class NoteModel extends BaseModel
{
    public function __construct() 
    {
        parent::__construct();
    }

    function getAllNotes($id)
    {
        $sql = "SELECT * FROM `notes` WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        return $this->getFirst($result);
    }
}