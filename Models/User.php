<?php

include_once 'BaseModel.php';

class User extends BaseModel
{
    public function __construct() 
    {
        parent::__construct();
    }

    function getUser()
    {
        $sql = "SELECT * FROM users limit 1";
        // thực thi
        $result = mysqli_query($this->conn, $sql);

        return $this->getFirst($result);
    }

    function checkUserLogin($request)
    {
        $sql = "SELECT * FROM users WHERE name = '" . $request['name'] . "' AND password = '" . $request['password'] . "'";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            return true;
        }
        return false;
    }
}