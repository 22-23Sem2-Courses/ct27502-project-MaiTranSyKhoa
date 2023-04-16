<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        .container {
            margin-top: 100px;
            width: 600px;
            border-radius: 10px;
        }

        h1 {

            text-align: center;
            color: orangered;
            text-align: center;
            /* canh giữa nội dung của thẻ */
            font-size: 32px;
            /* kích thước chữ */
            font-weight: bold;
            /* độ đậm của chữ */
            color: #333;
            /* màu chữ */
            text-transform: uppercase;
            /* chữ in hoa */
            letter-spacing: 2px;
            /* khoảng cách giữa các chữ cái */
            margin-top: 20px;
            /* khoảng cách từ phía trên của thẻ đến đầu trang */
            margin-bottom: 20px;
            /* khoảng cách từ phía dưới của thẻ đến các phần tử khác */
            border-bottom: 2px solid #333;
            /* đường viền bên dưới của thẻ */
            padding-bottom: 10px;
            /* khoảng cách giữa đường viền và nội dung của thẻ */
            background-image: linear-gradient(pink, white);
        }

        h3 {
            text-align: center;
            color: green;
        }

        .h3 {
            text-align: center;
            color: grey;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome To Ananas</h1>
        <form action="index.php?act=register" method="post">
            <div class="row">
                <h3 class="alert alert-primary bm">Đăng Ký</h3>
            </div>
            <div class="form-group row justify-content-center">
                <label for="username" class="col-sm-3 col-form-label text-right"><b>Username :</b></label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" placeholder="Ít nhất 5 kí tự, tối đa 50 kí tự" required minlength="5" maxlength="50">
                </div>
            </div>
            <div class="form-group row  justify-content-center">
                <label for="password" class="col-sm-3 col-form-label text-right"><b>Password:</b></label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" placeholder="8 kí tự, có ít nhất 1 kí tự hoa" required pattern="^(?=.*[a-z])(?=.*[A-Z]).{8}$">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="full_name" class="col-sm-3 col-form-label text-right"><b>Fullname :</b></label>
                <div class="col-sm-9">
                    <input type="text" name="full_name" class="form-control" placeholder="Ít nhất 10 kí tự, tối đa 100 kí tự" required minlength="10" maxlength="100">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="email" class="col-sm-3 col-form-label text-right"><b>Email :</b></label>
                <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" placeholder="Ví dụ: abc@gmail.com.vn" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="address" class="col-sm-3 col-form-label text-right"><b>Address :</b></label>
                <div class="col-sm-9">
                    <input type="text" name="address" class="form-control" placeholder="Ví dụ: Ninh Kiều, Cần Thơ" required maxlength="200">
                </div>
            </div>
            <div class="form-group row  justify-content-center">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <input type="submit" name="submit" class="btn btn-primary text-white" value="Đăng Ký"></input>
                </div>
            </div>
        </form>
    </div>
</body>

</html>