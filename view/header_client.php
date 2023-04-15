<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <link rel="icon" href="images/main/Logo_Ananas_Header.svg" type="image/svg">
    <title>Ananas - DiscoverYOU</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="content_header">
                <marquee behavior="alternative" direction="left">
                    <strong>
                            MIỄN PHÍ GIAO HÀNG VỚI HÓA ĐƠN TỪ 1.300.000 <span class="lienhe">LIÊN HỆ ĐẶT HÀNG NGAY: 0388135076</span>
                        </strong>
                </marquee>
            </div>
            <div class="nav_1 d-flex" style ='margin-left:50%'>
                <span style="padding: 10px;">
                    <i class="fa-solid fa-house"></i>
                    <a href="index.php?act=home_client" class="a">Trang chủ </a>
                </span>
                <span  style="padding: 10px;">
                    <i style="margin-left: 10px;" class="fa-brands fa-product-hunt"></i>
                    <a href="index.php?act=fetch_client" class="a">Sản phẩm</a>
                </span>
                <?php
               
                    if(isset($_SESSION['username'])) {
                       echo '<span  style="padding: 10px;">
                            <i style="margin-left: 10px;"  class="fa-solid fa-cart-plus"></i>
                            <a href="index.php?act=fetch_donhang" class="a">Giỏ hàng</a>
                            </span>';
                        echo '<span style="padding: 10px;">
                                <i style="margin-left: 10px;" class="fa-solid fa-bag-shopping"></i>
                                <a href="index.php?act=donhangdadat" class="a" >Đơn hàng của tôi</a>
                                </span>';
                        echo '<span style="padding: 10px;">
                                <i style="margin-left: 10px;" class="fa-solid fa-user"></i>
                                <a href="#" class="a" style="color:deeppink;">'.$_SESSION['username'].'</a>
                            </span>';
                        echo '<span style="padding: 10px;">
                                <i style="margin-left: 10px;"class="fa-solid fa-arrow-right-from-bracket"></i>
                                <a href="index.php?act=logout" class="a">Đăng xuất</a>
                            </span>';
                    }else{
                        echo '<span style="padding: 10px;">
                                <i class="fa-solid fa-registered" style="margin-left: 10px;" ></i>
                                <a href="index.php?act=register" class="a">Đăng ký</a>
                                </span>
                            <span  style="padding: 10px;">
                                <i style="margin-left: 10px;" class="fa-solid fa-right-to-bracket"></i>
                                <a href="index.php?act=login" class="a">Đăng nhập</a>
                            </span>';
                    }
                ?>
            </div>
        </div>