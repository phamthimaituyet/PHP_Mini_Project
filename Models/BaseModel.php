<?php
include '../Config/Database.php';

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
}