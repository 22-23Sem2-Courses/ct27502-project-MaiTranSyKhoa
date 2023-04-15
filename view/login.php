<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
    <style>
        body{
            
        }
        form{
            border: 1px solid black;
        }
        h2 {
        text-align: center; /* canh giữa nội dung của thẻ */
        font-size: 32px; /* kích thước chữ */
        font-weight: bold; /* độ đậm của chữ */
        color: #333; /* màu chữ */
        text-transform: uppercase; /* chữ in hoa */
        letter-spacing: 2px; /* khoảng cách giữa các chữ cái */
        margin-top: 20px; /* khoảng cách từ phía trên của thẻ đến đầu trang */
        margin-bottom: 20px; /* khoảng cách từ phía dưới của thẻ đến các phần tử khác */
        border-bottom: 2px solid #333; /* đường viền bên dưới của thẻ */
        padding-bottom: 10px; /* khoảng cách giữa đường viền và nội dung của thẻ */
        }
    </style>
</head>
<body>
<div class="container" style="margin-top:110px">
        <h2 style="text-align: center">Welcome To Ananas</h2>
        <form action="index.php?act=code_login" method ="post">
            <div class="form-group ">
                <h3 class="alert alert-primary bm" style="text-align: center" >Đăng Nhập</h3>
            </div>
            <div class="form-group"  class="a" style="margin-left: 10px" > 
                <label for="username"><b>Username:</b></label>
                <input type="text" class=" form-control" name="username" id="username" placeholder="Nhập vào username" required>
            </div>
            <div class="form-group"  class="a" style="margin-left: 10px">
                <label for="password"><b>Password:</b></label>
                <input type="password" class=" form-control" name="password" id="password" placeholder="Nhập vào username" required>
            </div>
            <div class="form-group form-check" class="a" style="margin-left: 16px">
                <input type="checkbox" name="rm" id="rm" class="form-check-input">
                <label for="rm" class="form-check-lable">Ghi nhớ tôi</label>
            </div>
            <div class="form-group" class="a" style="margin-left: 10px">
                <input type="submit"  name="submit" class="btn btn-primary text-white" value="Đăng Nhập"></input>
            </div>
        </form>
</div>
</body>
</html>