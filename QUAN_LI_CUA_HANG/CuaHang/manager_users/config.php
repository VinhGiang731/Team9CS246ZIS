<?php 
    const _MODULE = 'home';
    const _ACTION = 'dashboard';
    // kiểm tra trường hợp user truy cập thẳng vào file 
    const _CODE = true;

    // thiết lập host 
    define('_WEB_HOST', 'http://' .$_SERVER['HTTP_HOST'] . '/QUAN_LI_CUA_HANG/CuaHang/manager_users');
    define('_WEB_HOST_TEMPLATE', _WEB_HOST . '/template');

    // thiết lập path 
    define('_WEB_PATH', __DIR__);
    define('_WEB_PATH_TEMPLATE', _WEB_PATH . '/template');

    // thông tin liên kết database
    const _HOST = 'localhost';
    const _DB = 'quanlicuahang';
    const _USER = 'root';
    const _PASS = '';
?>