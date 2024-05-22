<?php 
    if(!defined('_CODE'))
    {
        die('k vào đc ');
    }
    // $data = [
    //     'pageTitle' => 'Đăng kí tài khoản'
    // ];

    // $data1 = [
    //     'fullname' => 'Vỹ',
    //     'email' => 'nguyenvydn2004@gmail.com',
    //     'phone' => '0899335129',
    // ]; 


    // $data = [
    //     'fullname' => 'Nam',
    //     'email' => 'Namdn2004@gmail.com',
    //     'phone' => '0899335129',
    // ];
    // insert('users',$data1);
    // update('users', $data, 'id=1');
    // $kq = delete('users', 'id=6');
    // var_dump($kq);

    
    // phần xử lí đăng kí 
    if(isPost())
    {
        $filterAll = filter();
        $error = [];
        // phần xử lí với name
        if(empty($filterAll['fullname']))
        {
            $error['fullname']['required'] = ' họ tên bắt buộc phải nhập';
        }
        else 
        {
            if(strlen($filterAll['fullname'])<5)
            {
                $error['fullname']['required'] = ' họ tên phải ít nhất 5 kí tự ';
            }
        }


        // phần xử lí với email
        if(empty($filterAll['email']))
        {
            $error['email']['required'] = 'vui lòng nhập email';
        }
        else 
        {
            $email = $filterAll['email'];
            $sql = "SELECT id FROM users WHERE email = '$email'";
            if(getRows($sql)>0)
            {
                $error['email']['required'] = 'email đã tồn tại ';
            }
        }

        // phần xử lí số điện thoại 
        if(empty($filterAll['phone']))
        {
            $error['phone']['required'] = ' vui lòng nhập số điện thoại ';
        }
        else 
        {
            if(!isPhone($filterAll['phone']))
            {
                $error['phone']['required'] = ' số điện thoại chưa đúng ';
            }
        }

        // xử lí mật khẩu 
        if(empty($filterAll['password']))
        {
            $error['password']['required'] = ' vui lòng nhập mật khẩu ';
        }
        else 
        {
            if(strlen($filterAll['password'])<8)
            {
                $error['password']['required'] = ' mật khẩu ít nhất 8 kí tự ';
            }
        }

        // xử lí nhập lại mật khẩu 
        if(empty($filterAll['password_confirm']))
        {
            $error['password_confirm']['required'] = ' vui lòng nhập mật khẩu ';
        }
        else 
        {
            if($filterAll['password']!=$filterAll['password_confirm'])
            {
                $error['password_confirm']['required'] = ' mật khẩu nhập lại chưa trùng khớp ';
            }
        }



        // phần xử lí khi có lỗi hoặc điền thông tin đầy đủ
        if(empty($error))
        {
            // phần xử lí lưu thông tin đăng kí vào data
            $activeToken = sha1(uniqid().time());
            $dataInsert = [
                'fullname' => $filterAll['fullname'],
                'email' => $filterAll['email'],
                'phone' => $filterAll['phone'],
                'password' => password_hash($filterAll['password'], PASSWORD_DEFAULT),
                'activeToken' => $activeToken,
                'create_at' => date('Y-m-d H:i:s'),
            ];
            $insertStatus = insert('users', $dataInsert);
            if($insertStatus)
            {
                // tạo tài khoản rồi kích hoạt 
                $linkActive = _WEB_HOST . '?module=auth&action=active&token=' . $activeToken;
                $subject = $filterAll['fullname'] . 'Vui lòng kích hoạt tài khoản ';
                $content = ' Chào ' . $filterAll['fullname'] . '</br>';
                $content .= ' Vui lòng click vào đường link để kích hoạt tài khoản ' . '</br>';
                $content .= $linkActive . '</br>';
                $content .= ' Cảm ơn ';

                $sendMail = sendEmail($filterAll['email'], $subject, $content);

                if($sendMail)
                {
                    setFlashData('smg', ' đăng kí thành công, vui lòng kiểm tra email để kích hoạt tài khoản');
                    setFlashData('smg_type', 'success');
                }
                else 
                {
                    setFlashData('smg', 'hệ thống lỗi , đợi giây lát ');
                    setFlashData('smg_type', 'danger');
                }
            }
            else 
            {
                setFlashData('smg', 'đăng kí không thành công');
                setFlashData('smg_type', 'danger');
            }
            // redirect('?module=auth&action=login');
        }
        else 
        {
            setFlashData('smg', 'vui lòng kiểm tra dữ liệu');
            setFlashData('smg_type', 'danger');
            setFlashData('error', $error);
            // xử lí phần dữ liệu đúng và lưu lại 
            setFlashData('old', $filterAll);
            redirect('?module=auth&action=register');
        }
        
    }


    // phần lấy dữ liệu khi nhập sai 
    $smg = getFlashData('smg');
    $smg_type = getFlashData('smg_type');
    $errors = getFlashData('error'); 
    $old = getFlashData('old');
    // echo '<pre>';
    // print_r($error);
    // echo '</pre>';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng kí</title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE;?> /css/style_form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- form register -->

    <div class="row">
            <div class="col-4" style="margin: 50px auto;">
                <h2 class="text-center text-uppercase">Đăng kí tài khoản </h2>
                <?php 
                    if(!empty($smg))
                    {
                        getSmg($smg, $smg_type);
                    }
                ?>
                <form action="" method="post">
                    <div class="form-group mg-form">
                        <label for="">Họ tên</label>
                        <input name="fullname" type="fullname" class="form-control" placeholder="Họ tên"
                        value="<?php 
                            echo old('fullname', $old);
                        ?>"> 
                        <?php 
                            echo form_error('fullname', '<span class="check">' , '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Email</label>
                        <input name="email" type="email" class="form-control" placeholder="Địa chỉ email"
                        value="<?php 
                            echo old('email', $old);
                        ?>">
                        <?php 
                            echo form_error('email', '<span class="check">' , '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Số điện thoại</label>
                        <input name="phone" type="number" class="form-control" placeholder="Số điện thoại" value="<?php 
                            echo old('phone', $old);
                        ?>">
                        <?php 
                            echo form_error('phone', '<span class="check">', '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Pasword</label>
                        <input name="password" type="password" class="form-control" placeholder="Mật khẩu" value="<?php 
                            echo old('password', $old);
                        ?>">
                        <?php 
                            echo form_error('password', '<span class="check">', '</span>', $errors);
                        ?>
                    </div>
                    <div class="form-group mg-form">
                        <label for="">Nhập lại mật khẩu</label>
                        <input name="password_confirm" type="password" class="form-control" placeholder="Nhập mật khẩu" value="<?php 
                            echo old('password_confirm', $old);
                        ?>">
                        <?php 
                            echo form_error('password_confirm', '<span class="check">', '</span>', $errors);
                        ?>
                    </div>
                    <button type="submit" id="btn_form" class="mg-btn btn btn-primary btn-block">Đăng kí</button>
                    <hr>
                    <p class="text-center"><a href="?module=auth&action=login">Đăng nhập tài khoản</a></p>
                </form>
            </div>
        </div>
        
</body>
</html>