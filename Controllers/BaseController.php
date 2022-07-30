<?php

abstract class BaseController
{   
    /**
	 * Load view
     * 
	 * @param 	string
     * @param   array
     * @desc    hàm load view, tham số truyền vào là tên của view và dữ liệu truyền qua view
	 */
    public function show($view, $data = array()) 
    {
        // Chuyển mảng dữ liệu thành từng biến
        extract($data);
        include '../Views/Pages/' . $view . '.php';
    }

    /**
     * check request is post 
     * 
     * @desc  kiểm tra request có phải là post
     */
    public function isPost()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            return true;
        }

        return false;
    }

    /**
     * get value request 
     * 
     * @desc  lấy giá trị request
     */
    public function request($name = null)
    {
        if (!$name) {
            array_shift($_REQUEST);
            return $_REQUEST;
        }

        if ($_REQUEST[$name]) {
            return $_REQUEST[$name];
        }

        return null;
    }
}
