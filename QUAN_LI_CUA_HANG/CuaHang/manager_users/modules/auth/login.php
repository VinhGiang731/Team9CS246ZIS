<?php 
    if(!defined('_CODE'))
    {
        die('k vào đc ');
    }
    $data = [
        'pageTitle' => 'Đăng nhập tài khoản'
    ];

    // phần xử lí đăng kí 
    if(isLogin())
    {
        redirect('?module=Shop&action=TrangChu');
    }

      if(isPost())
      {
          $filterAll = filter();
          if(!empty(trim($filterAll['email'])) && !empty(trim($filterAll['password'])))
          {
              $email = $filterAll['email'];
              $password = $filterAll['password'];
              // truy vấn lấy dữ liệu email và mật khẩu 
              $userQuery = oneRaw("SELECT password, id FROM users WHERE email = '$email'");
          } 
          echo '<pre>';
          print_r($userQuery);
          echo '</pre>';

          // kiểm tra email và mật khẩu có đúng chưa
          if(!empty($userQuery))
          {
            $passwordHash = $userQuery['password'];
            $userId = $userQuery['id'];
            if(password_verify($password, $passwordHash))
            {
              // tạo token login 
              $tokenLogin = sha1(uniqid().time());
              // insert dữ liệu vào tokenLogin 
              $dataInsert = [
                'user_Id' => $userId,
                'token' => $tokenLogin,
                'create_at' => date('Y-m-d H:i:s'),
              ];
              // xử lí phần thêm token vào Login 
              $insertStatus = insert('loginToken', $dataInsert);
              if($insertStatus)
              {
                // lưu thông tin vào session
                setSession('loginToken', $tokenLogin);
                redirect('?module=Shop&action=TrangChu');
              }
              else 
              {
                setFlashData('msg', ' không thể đăng nhập được vui lòng thử lại sau ');
                setFlashData('msg_type', 'danger');
              }
            }
            else 
            {
              setFlashData(' msg', 'mật khẩu không chính xác ');
              setFlashData('msg_type', 'danger');
            }
          }
          else 
          {
            setFlashData('msg', ' vui lòng nhập email và mật khẩu ');
            setFlashData(' msg_type', 'danger');
          }
          redirect('?module=auth&action=login');
      }

      $msg = getFlashData('msg');
      $msg_type = getFlashData('msg_type');
?>

<html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang đăng nhập</title>
        <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE;?> /css/style_form.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  </head>
<body>
      <!-- form login -->
      <div class="row">
        <div class="col-4" style="margin: 50px auto;">
            <h2 class="text-center text-uppercase">Đăng nhập tài khoản </h2>
            <?php 
              if(!empty($msg))
              {
                getSmg($msg, $msg_type);
              }
            ?>
            <form action="" method="post">
                <div class="form-group mg-form">
                    <label for="">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Địa chỉ email">
                </div>
                <div class="form-group" mg-form>
                    <label for="">Pasword</label>
                    <input name="password" type="text" class="form-control" placeholder="Mật khẩu">
                </div>
                <button type="submit" id="btn_form" class="mg-btn btn btn-primary btn-block">Đǎng Nhập</button>
                <hr>
                <p class="text-center"><a href="?module=auth&action=forgot">Quên mật khẩu</a></p>
                <p class="text-center"><a href="?module=auth&action=register"> Đăng ký tài khoản</a></p>
            </form>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





