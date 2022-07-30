<?php

abstract class BaseController
{
    /**
     * @desc biến lưu trữ các view đã load
	 */
    protected $__content = array();
    
    /**
	 * Load view
     * 
	 * @param 	string
     * @param   array
     * @desc    hàm load view, tham số truyền vào là tên của view và dữ liệu truyền qua view
	 */
    public function load($view, $data = array()) 
    {
        // Chuyển mảng dữ liệu thành từng biến
        extract($data);
        
        // Chuyển nội dung view thành biến thay vì in ra bằng cách dùng ob_start()
        ob_start();
        require_once '../Views/Pages/' . $view . '.php';
        $content = ob_get_contents();
        ob_end_clean();
        
        // Gán nội dung vào danh sách view đã load
        $this->__content[] = $content;
    }

     /**
     * Show view
     * 
     * @desc    Hàm hiển thị toàn bộ view đã load, được dùng ở controller
     */
    public function show()
    {
        foreach ($this->__content as $html){
            echo $html;
        }
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
