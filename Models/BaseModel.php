<?php
include_once '../Config/Database.php';

abstract class BaseModel 
{
    protected $conn;

    public function  __construct()
    {
        $database = new Database();
        $this->conn = $conn = $database->connect();
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }

    public function getFirst($array)
    {
        return (object)mysqli_fetch_assoc($array);
    }
}