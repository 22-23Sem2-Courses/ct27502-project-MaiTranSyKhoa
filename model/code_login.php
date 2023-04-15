<?php

include 'pdo.php';
include '../view/header_client.php';
?>
<?php

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password =  $_POST['password'];

    // Kiểm tra thông tin đăng nhập
    $stmt = $conn->prepare('SELECT * from shoes.users where username=:username and password=:password');
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    $result = $stmt->fetch();

    // Kiểm tra xem người dùng có tồn tại trong cơ sở dữ liệu không
    if ($result) {
      // Lưu thông tin người dùng vào session
      $_SESSION['id'] = $result['id'];
      $_SESSION['username'] = $result['username'];
      $_SESSION['role'] = $result['role'];
    
      // Điều hướng đến trang tương ứng với vai trò của người dùng
      if ($_SESSION['role'] == 'admin') {
          header('Location: index.php?act=header');
          
      }
      if ($_SESSION['role'] == null) {
            header('Location: index.php?act=home_client'); 
        } 
    }  
    else{
        echo "<h3 style='margin-top: 100px; color:red;text-align:center'>  Đăng Nhập không Thành Công </h3>";
    }
}

?>