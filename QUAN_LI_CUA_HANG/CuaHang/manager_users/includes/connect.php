<?php
    // kiểm tra hằng số _CODE có tồn tại hay k 
    if(!defined('_CODE'))
    {
        die('k vào đc ');
    }
    try{
        if(class_exists('PDO'))    
        {
            $dsn = 'mysql:dbname='._DB.';host='._HOST;
            $options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //Set utf8
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Tạo thông báo ra ngoại lệ khi gặp lỗi
            ];
            $con = new PDO($dsn, _USER, _PASS,$options);
            // var_dump($con);
        }
    }
    catch(Exception $e)
    {
        echo $e -> getMessage() .'<br>';
        die();
    }

?>