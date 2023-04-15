<?php
//session_start();
include('pdo.php');

if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $query = "INSERT INTO  shoes.users  (username ,password,full_name, email, address) VALUES (:username, :password, :full_name, :email, :address)";
    $query_run = $conn->prepare($query);

    $data = [
        ':username' => $username,
        ':password' => $password,
        ':full_name' => $full_name,
        ':email' => $email,
        ':address' => $address
    ];
    
    $stmt = $conn->prepare('SELECT * from shoes.users where username=:username');
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Kiểm tra số lượng bản ghi trả về
    $count1 = $stmt->rowCount();
    if($count1 > 0) {
        echo '<h3  class="h3" >Tài khoản đã tồn tại!</h3>';
    } else {
        $query_execute = $query_run->execute($data);
        echo "<h3>Đăng ký thành công, vui lòng đăng nhập để sử dụng hệ thống</h3>";
    }
}



?>