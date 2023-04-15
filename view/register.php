<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .container{
            border: 3px solid orangered ;
            margin-top:50px;
            width: 600px;
            border-radius: 10px;
        }
        h1{
            margin-top:100px;
            text-align: center;
            color: orangered;
        }

        h3{
            text-align: center;
            color: green;
        }
        .h3{
            text-align: center;
            color: red;
        }
    </style>
</head>
<body>
    <h1 >Welcome To Ananas</h1>
    <div class="container" > 
        <form action="index.php?act=register" method="post">
            <div class="row">
                <h3 class="alert alert-primary bm">Đăng Ký</h3>
            </div>
            <div class="form-group row justify-content-center">
                <label for="username" class="col-sm-3 col-form-label text-right"><b>Username :</b></label>
                <div class="col-sm-9">
                    <input type="text" name="username" class="form-control" placeholder="Ít nhất 5 kí tự, tối đa 50 kí tự" required  minlength="5" maxlength="50">
                </div>
            </div>
            <div class="form-group row  justify-content-center">
                <label for="password" class="col-sm-3 col-form-label text-right"><b>Password:</b></label>
                <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" placeholder="8 kí tự, có 1 kí hoa, 1 kí tự thường" required  pattern= "^(?=.*[a-z])(?=.*[A-Z]).{8}$">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="full_name" class="col-sm-3 col-form-label text-right"><b>Fullname :</b></label>
                <div class="col-sm-9">
                    <input type="text" name="full_name" class="form-control" placeholder="Ít nhất 10 kí tự, tối đa 100 kí tự" required  minlength="10" maxlength="100">
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