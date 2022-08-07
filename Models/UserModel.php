<?php

include_once 'BaseModel.php';

class UserModel extends BaseModel
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
            return $this->getFirst($result);
        }
        return false;
    }

    function checkIsLoggedIn(): bool
    {
        try {
            if (array_key_exists('id',$_SESSION)) {
                return true;
            }
            return false;
        } catch (Exception $e) {
            return false;
        }
    }

    function singupUser($request)
    {
        $sql = "SELECT * FROM users WHERE name = '" . $request['name'] . "' AND password = '" . $request['password'] . "'";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            return false;
        } else {
            $sql = "INSERT INTO users (name, password) VALUES ('$request[name]' ,'$request[password]')";
            mysqli_query($this->conn, $sql);
        }

        return true;
    }
}