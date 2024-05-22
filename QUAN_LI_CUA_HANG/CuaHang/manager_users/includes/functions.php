<?php 
    if(!defined('_CODE'))
    {
        die('k vào đc ');
    }

    // function layouts($layoutName = 'trangchu', $data=[])
    // {
    //     if(file_exists(_WEB_PATH_TEMPLATE.'/layout/'.$layoutName.'.php'))
    //     {
    //         require_once _WEB_PATH_TEMPLATE.'/layout/'.$layoutName.'.php';
    //     }
    // }

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;
        // hàm gửi email

        function sendEmail($to, $subject, $content)
        {
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
    
            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;  //SEVER                    //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'nguyenvy2004dn@gmail.com';                     //SMTP username
                $mail->Password   = 'kgdr lfkm mklc bdxk';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                //Recipients
                $mail->setFrom('nguyenvy2004dn@gmail.com', 'nguyenvy');
                $mail->addAddress($to);     //Add a recipient
    
                //Content
                $mail->CharSet = "UTF-8";
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $content;
    
                // phần xử lí và bảo mật mail 
                //PHPMailer SSL certificate verify failed
                $mail->SMTPOptions = array
                (
                    'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                    )
                );
    
    
                $senMail = $mail->send();
                if($senMail)
                {
                    return $senMail;
                }
                echo 'gửi thành công';
                
            } 
            catch (Exception $e) 
            {
                echo "Gửi mail thất bại. Mailer Error: {$mail->ErrorInfo}";
            }
        }

        // kiểm tra phương thức GET
        function isGet()
        {
            if($_SERVER['REQUEST_METHOD']=='GET')
            {
                return true;
            }
            return false;
        }
        // hàm xử lí POST
        function isPost()
        {
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                return true;
            }
            return false;
        }


        // hàm filter lọc dữ liệu khi người dùng cố tình thêm các kí tự trên thanh seach
        function filter()
        {
            // xử lí với GET
            $filterArr = [];
            if(isGet())
            {
                // xử lí dữ liệu trước khi hiển thị ra
                // return $_GET;
                if(!empty($_GET))
                {
                    foreach($_GET as $key => $value)
                    {
                        $key = strip_tags($key);
                        if(is_array($key))
                        {
                            $filterArr[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                        }
                        else 
                        {
                            $filterArr[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                        }
                    }
                }
            }
            // xử lí với POST
            if(isPost())
            {
                // xử lí dữ liệu trước khi hiển thị ra
                // return $_POST;
                if(!empty($_POST))
                {
                    foreach($_POST as $key => $value)
                    {
                        $key = strip_tags($key);
                        if(is_array($key))
                        {
                            $filterArr[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
                        }
                        else 
                        {
                            $filterArr[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
                        }
                    }
                }
            }
            return $filterArr;
        }

        // hàm kiểm tra email
        function isEmail($email)
        {
            $checkEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
            return $checkEmail; 
        }

        // hàm kiểm tra INT
        function isNumberInt($number)
        {
            $checkNumberInt = filter_var($number, FILTER_VALIDATE_INT);
            return $checkNumberInt;
        }
        // hàm kiểm tra float
        function isNumberFloat($number)
        {
            $checkNumberFloat = filter_var($number, FILTER_VALIDATE_FLOAT);
            return $checkNumberFloat;
        }

        // hàm kiểm tra số điện thoại 
        function isPhone($phone)
        {
            // bắt đầu bằng số 0
            $checkZero = false;
            if($phone[0]=='0')
            {
                $checkZero=true;
                $phone = substr($phone, 1); // cắt số 0 đi
            }
            // kiểm tra xem đúng 9 số chưa
            $checkNumber = false;
            if(isNumberInt($phone) && (strlen($phone)==9))
            {
                $checkNumber=true;
            }

            if($checkZero && $checkNumber)
            {
                return true;
            }
            return false;
        }

        // hàm kiểm tra lỗi ở form đăng kí hoặc đăng nhập
        function getSmg($smg, $type='success')
        {
            echo '<div class="alert alert-' .$type. '">';
            echo $smg;
            echo '</div>';
        }


        // hàm xử lí chuyển hướng
        function redirect($path='index.php')
        {
            header("location: $path");
            exit;
        }

        // hàm xử lí form lỗi
        function form_error($fileName, $beforHtml='',$afterHtml, $errors)
        {
            return (!empty($errors[$fileName])) ? $beforHtml. reset($errors[$fileName]) .$afterHtml : null;
        }

        // hàm hiển thị dữ liệu cũ
        function old($fileName, $oldData, $default=null)
        {
            return (!empty($oldData[$fileName])) ? $oldData[$fileName] : $default;
        }

        // hàm kiểm tra trạng thái đăng nhập 
        function isLogin()
        {
            // kiểm tra trạng thái đăng nhập 
            $checkLogin = false;
            if(getSession('loginToken'))
            {
                $tokenLogin =  getSession('loginToken');
                // kiểm tra xem token có giống trong database không
                $queryToken = oneRaw("SELECT user_Id FROM loginToken WHERE token = '$tokenLogin'");
                if(!empty($queryToken))
                {
                    $checkLogin = true;
                }
                else 
                {
                    removeSession('loginToken');
                }
            }
            return $checkLogin;
        }


?>