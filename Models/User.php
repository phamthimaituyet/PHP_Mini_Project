<?php

include 'BaseModel.php';

class User extends BaseModel
{
    public function __construct() {
        parent::__construct();
    }

    function getUser()
    {
        $sql = "SELECT * FROM users limit 1";
        // thực thi
        $result = mysqli_query($this->conn, $sql);

        return $this->getFirst($result);
    }
}