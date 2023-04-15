<?php
session_start();
include 'pdo.php';

if(isset($_POST['order'])  && isset($_SESSION['id'])){
    $user_id =  $_SESSION['id'];
    $stmt = $conn->prepare("SELECT * from chitietgiohang where chitietgiohang.user_id=$user_id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC
    $result = $stmt->fetchAll();
    if($result){
            // Hiển thị thông báo xác nhận xóa
            echo "Bạn có muốn thanh toan khong?";
            echo "<form method='post' action='xulythanhtoan.php'>"; // Chỉnh sửa đường dẫn đến file xử lý xóa đơn hàng (trong trường hợp này là 'delete_order.php')
            echo "<input type='submit' name='confirm_order' value='Xác nhận'>"; // Nút xác nhận xóa
            echo "<input type='submit' name='cancel' value='Hủy bỏ'>"; // Nút hủy bỏ
            echo "</form>";
        }
    else{
        echo"Ban khog co sa pham trong gio hang";
    }
}
else  echo "abc";
?>
