<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>ADMIN</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/trangchu.css">
    <style>
        body {
            background-image: linear-gradient(to bottom right, white, rgba(102, 102, 102, 0.8));
            background-size: 400% 400%;
            /* thiết lập kích thước ảnh nền lớn hơn kích thước thực */
            animation: gradient-animation 10s ease infinite;
            /* thiết lập animation */
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            /* đặt bắt đầu tại vị trí 0% 50% */
            50% {
                background-position: 100% 50%;
            }

            /* di chuyển gradient tới vị trí 100% 50% */
            100% {
                background-position: 0% 50%;
            }

            /* trở lại vị trí ban đầu 0% 50% */
        }
        .nd{
            text-align:center;
            margin-top:30px;
        }
    </style>
</head>
<body>
    <div class="img_logo">
            <a href="home.php"><img src="images/main/Logo_Ananas_Header.svg" alt=""></a>
            <img style="width: 200px; margin-left: 550px;" src="images/main/Ananas-Logo-PNG-2.png">
    </div>
    <div class="nd">
        <h2>HELLO ADMIN</h2>
        <p><i class="fa-solid fa-face-smile fa-2xl" style="color: #50d520;"></i></p>
    </div>
  
</body>
