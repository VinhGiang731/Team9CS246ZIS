
<?php 
    if(!defined('_CODE'))
    {
        die('k vào đc ');
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CỬA HÀNG</title>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE;?>/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo _WEB_HOST_TEMPLATE;?>/css/gioHang.css">
</head>
<body>
    <div class="container">
        <!-- phần đầu trang -->

        <!-- header 1  -->
        <div class="header_wrapper">
            <div class="wrapper">
                <div class="wrapper_logo">
                    <a href="#">
                        <img src="<?php echo _WEB_HOST_TEMPLATE;?> /image/logo.png" alt="">
                    </a>
                </div>
                <div class="wrapper_nav">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Thanh toán</a></li>
                        <li><a href="#">Chính sách</a></li>
                        <li><a href="#">Cài đặt</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="wrapper_btn">
                    <button>
                        <i class='bx bx-store-alt'></i>
                        <a id="cartValueLink">Giỏ hàng (0)</a>
                        <div id="notification"></div>
                    </button>
                </div>
                <div id="cartOverlay" class="overlay">
                    <div id="closeIcon" class="circle">
                        <i class='bx bxs-x-circle'></i>
                    </div>
                    <div class="cart">
                        <div class="name">Cart</div>
                        <div class="listCart">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header 2 -->
        <div class="header_nav">
            <div class="nav">
                <div class="nav_left">
                    <ul>
                        <li><a href="#">Rau củ</a></li>
                        <li><a href="#">Hải sản</a></li>
                        <li><a href="#">Trái cây</a></li>
                        <li><a href="#">Hoa quả</a></li>
                        <li><a href="#">Bánh kẹo</a></li>
                        <li><a href="#">Thực phẩm</a></li>
                        <li><a href="#">Mì nhập</a></li>
                        <li><a href="#">Tin tức</a></li>
                    </ul>
                </div>
                <div class="nav_right">
                    <div class="login active-dk">
                        <button>
                            <a href="?module=auth&action=login">
                                <?php 
                                    if(isLogin())
                                    {
                                        echo '<a href="?module=auth&action=logout"> LOGOUT </a>';
                                    }
                                    else 
                                    {
                                        echo 'LOGIN';
                                    }
                                ?>
                            </a>
                        </button>
                    </div>
                    <div class="register active-dk">
                        <button>
                            <a href="?module=auth&action=register">REGISTER</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- header 3 -->
        <div class="header_title">
            <div class="title">
                <div class="title_induct">
                    <h1>Thực phẩm sạch 03 tiêu chí</h1>
                </div>
                <div class="title_info">
                    <p>Không hóa chất - An toàn hơn - Giao hàng tận nơi</p>
                </div>
                <div class="title_seach">
                    <div class="seach_title">
                        <input type="text" name="seach" placeholder="Tìm kiếm">
                    </div>
                    <div class="title_icon">
                        <i class='bx bx-search'></i>
                    </div>
                </div>
                <div class="title_best-selling-promotion">
                    <div class="title-bsp title_active">Mua nhiều nhất</div>
                    <div class="title-bsp title_active">Mua nhiều nhất</div>
                    <div class="title-bsp">Mua nhiều nhất</div>
                </div>
            </div>
        </div>
        <!-- phần nội dung sản phẩm -->
        <div class="main">
            <div class="main_content">
                <!-- sản phẩm 1 -->
                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiBxOEQsSCPWrjvRg4nBZ-V2J43v-ZY9pPKi9kN1a4IU24v4PXz7QB11-9WjBgC54KMhwYAeHc76bjzALJv1fAX-1djNBu8uvaCxpLIDvhy10H6Pp73SdapeDYw7xIzZjZAh2d5B4GY_23p/w310-h155-p-k-no-nu/thom-dua.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>Dứa ngọt</h4>
                            <p>40.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(1); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 22</p>
                        </div>
                    </div>
                </div>

                <!--  sản phầm 2 -->
                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgjrmLhWPFVdh4OK3pdkrJyflC1KZGj7aSK1wj5EBnuA2sIOboJFszJNAl6zsU-XxH6bcZ6FkPbs2_mYDeTDHloJTcaeAFJThVQwNiC6rclZtLmMvOkPe6I8ZvuS1FhTSJeeOfVQbAodyMX/w310-h155-p-k-no-nu/dua-hau-long-an.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>Dưa hấu Long An</h4>
                            <p>30.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(2); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 33</p>
                        </div>
                    </div>
                </div>

                <!-- sản phầm 3 -->
                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjOFdIZDepjVrgXZaUT5KxYTNSrqcL5SBE4orKnNqTmtXnZJWkURj5kX64d5lXDkJaM2MrW9u7_OwP4K3-vrIdRInWdRorJ4XqAS28M60OhaXwy-4dSiuQAWA5-tiDMW6DBeiVYOqgSWk-m/w310-h155-p-k-no-nu/rau-cai.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>Rau cải</h4>
                            <p>20.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(3); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 12</p>
                        </div>
                    </div>
                </div>

                <!-- sản phầm 4 -->

                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgjRjLWaBGrUYKgunrIeyzrPuJZnopwhThZ63QZLh5W_oP1Crf9HlQ08uHxi05HeAwwPqiinOpt5OAws-e3-OIdiBYZjbDgxY-8Jphv7SRy2ICt764Xikeg4oK_aWBrZHlOPtbWiZKlt2cx/w310-h155-p-k-no-nu/kiwi.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>KiWi</h4>
                            <p>500.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(4); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 2</p>
                        </div>
                    </div>
                </div>

                <!-- sản phầm 5 -->
                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgbhF788avyovyMDNEsn5KOTSHhOGf6EPewCyAe-YUNwcCIzwsJk1AccrsFrnOkdRpN5W2A6Nm3tZSCb1a_Mkq1wY26Y7ItlPzx1vZsJ-8SGCwnRqlnK_8xGNVtLRnmSgTlot-c9ToI-2z3/w310-h155-p-k-no-nu/nho.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>Nho tím</h4>
                            <p>800.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(5); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 4</p>
                        </div>
                    </div>
                </div>


                <!-- sản phầm 6 -->
                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjhMphEUnXajQcYofBXz_lTjw7kVc9-p43Y-pX-pdsJ5znb2J5UjUKQfK8-Rg5rZX-zDjMm_eUU_9wWzf8En__GnxvzTFVSJQDlnFArxlmaa1Z0Fs_K7MNoSe1vx0bYQhvKsIKdyBhLyEz3/w310-h155-p-k-no-nu/ca-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>Cà chua bi</h4>
                            <p>10.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(6); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 6</p>
                        </div>
                    </div>
                </div>


                <!-- sản phầm 7 -->
                <div class="main_content--product">
                    <div class="main_image">
                        <a href="">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEidMUCyR2UIw9lrXI_7EDr5y9yTKuDvqNJYfK_XTYkjxfh8B5N_N6pHE4f8XYkbCCSkocq4-ZXGAJUtgQanPE3_oM6P0Y3isQAKz7yspQGE6DsmSBoCsV8tmT2-EXlw9kugPT-0QDR-tqjs/w310-h155-p-k-no-nu/ca.jpg" alt="">
                        </a>
                    </div>
                    <div class="main_product">
                        <div class="product_left">
                            <h4>Cà chua Nam Mỹ</h4>
                            <p>36.000 đ</p>
                            <div class="product_star">
                                <ul>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product_right">
                            <div class="product_store">
                                <a onclick="addCart(7); event.preventDefault();" href="#"><i class='bx bx-store-alt'></i></a>
                            </div>
                            <p>Đã bán 8</p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
        <!-- phần giới thiệu sản phẩm nổi bật -->
        <div class="introduction">
            <div class="introduction_main">
                <div class="main_view">
                    <div class="main_view-h3">
                        <h3>Bán chạy nhất</h3>
                    </div>
                    <div class="main_view-a">
                        <a href="#">Xem thêm</a>
                    </div>
                </div>
                <div class="main_introduction--content">
                    <!-- sản phầm 1 -->
                    <div class="main_content--product">
                        <div class="main_image">
                            <a href="">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEilQ0Iy2_K5SKysOdGRC95CGia4Ow8g3CaJaBVTjTuO8annBIv0upsjRzNyLUbOSBXoJ0e0cDhs5wWrEmIL1c126FsNNrTAaYc1EiAuTXbd04KYLabmLIyLvtAB6PNETlk5-Djc6Y9Sgd4B/w310-h155-p-k-no-nu/xoai.jpg" alt="">
                            </a>
                        </div>
                        <div class="main_product">
                            <div class="product_left">
                                <h4>Xoài Nam Phi</h4>
                                <p>136.000 đ</p>
                                <div class="product_star">
                                    <ul>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_right">
                                <div class="product_store">
                                    <a href=""><i class='bx bx-store-alt'></i></a>
                                </div>
                                <p>Đã bán 18</p>
                            </div>
                        </div>
                    </div>

                    <!-- sản phầm 2 -->
                    <div class="main_content--product">
                        <div class="main_image">
                            <a href="">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiBxOEQsSCPWrjvRg4nBZ-V2J43v-ZY9pPKi9kN1a4IU24v4PXz7QB11-9WjBgC54KMhwYAeHc76bjzALJv1fAX-1djNBu8uvaCxpLIDvhy10H6Pp73SdapeDYw7xIzZjZAh2d5B4GY_23p/w310-h155-p-k-no-nu/thom-dua.jpg" alt="">
                            </a>
                        </div>
                        <div class="main_product">
                            <div class="product_left">
                                <h4>Dứa ngọt</h4>
                                <p>40.000 đ</p>
                                <div class="product_star">
                                    <ul>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_right">
                                <div class="product_store">
                                    <a href=""><i class='bx bx-store-alt'></i></a>
                                </div>
                                <p>Đã bán 22</p>
                            </div>
                        </div>
                    </div>
                    <!-- sản phầm 3 -->
                    <div class="main_content--product">
                        <div class="main_image">
                            <a href="">
                                <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh9bKJnSHStYm1L8rfWHWz2aqlVo_S1yF17L2s26DcVtAcBNS06CIKE8nBFPmwTaDrRq-Pmb_DlpLJcG7lqhCOryvmLTkplBYaQFvSI4kdDn-9O2Sa3vtET9ctzP3o3wbQBlryBMNCttw5b/w310-h155-p-k-no-nu/bo.jpg" alt="">
                            </a>
                        </div>
                        <div class="main_product">
                            <div class="product_left">
                                <h4>Bơ Trung Đông</h4>
                                <p>300.000 đ</p>
                                <div class="product_star">
                                    <ul>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                        <li><a href="#" class="star"><i class='bx bx-star'></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_right">
                                <div class="product_store">
                                    <a href=""><i class='bx bx-store-alt'></i></a>
                                </div>
                                <p>Đã bán 50</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- phần footer -->
        <div class="footer"></div>
        <script src="<?php echo _WEB_HOST_TEMPLATE;?> /js/main.js"></script>
</body>
</html>