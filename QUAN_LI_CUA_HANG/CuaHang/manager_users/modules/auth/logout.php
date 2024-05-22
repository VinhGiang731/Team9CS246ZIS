<?php 
    if(!defined('_CODE'))
    {
        die(' không vào được ');
    }


    // đăng xuất mật khẩu 
    if(isLogin())
    {
        $token = getSession('loginToken');
        delete('loginToken', "token='$token'");
        removeSession('loginToken');
        redirect('?module=Shop&action=TrangChu');
    }

?> 
<h1>đăng xuất thành công</h1>