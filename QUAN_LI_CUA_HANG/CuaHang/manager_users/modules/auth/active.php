<?php 
    if(!defined('_CODE'))
    {
        die(' không vào được ');
    }

    $token = filter()['token'];
    if(!is_array($token))
    {
        $tokenQuery = oneRaw("SELECT id FROM users WHERE activeToken = '$token'");
        if(!empty($tokenQuery))
        {
            $userId = $tokenQuery['id'];
            $dataUpdate = [
                'status' => 1,
                'activeToken' => null,
            ];
            $updateStatus = update('users', $dataUpdate, "id=$userId");
            if($updateStatus)
            {
                setFlashData(' msg', ' kích hoạt tài khoản thành công, bạn có thể đăng nhập ');
                setFlashData('msg_type', 'success');
            }
            else 
            {
                setFlashData('msg', ' kích hoạt tài khoản không thành công ');
                setFlashData('msg_type', 'danger');
            }
            redirect('?module=auth&action=login');
        }
        else 
        {
            getSmg(' liên kết không tồn tại hoặc đã hết hạn 1', 'danger');
        }
    }
    else 
    {
        getSmg(' liên kết không tồn tại hoặc đã hết hạn', 'danger');
    }
?>
<h1>hello active</h1>