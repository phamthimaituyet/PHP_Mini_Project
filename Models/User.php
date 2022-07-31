<?php

include_once 'BaseModel.php';

class User extends BaseModel
{
    public function __construct() 
    {
        parent::__construct();
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

    function singupUser($request)
    {
        $sql = "SELECT * FROM users WHERE name = '" . $request['name'] . "' AND password = '" . $request['password'] . "'";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) > 0){
            return false;
        }else{
            $sql = "INSERT INTO users (name, password) VALUES ('$request[name]' ,'$request[password]')";
            $result = mysqli_query($this->conn, $sql);
            return true;
        }
    }
}