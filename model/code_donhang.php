<?php

include('pdo.php');
include "../view/header_client.php";
if (isset($_POST['submit_items'])) {
    if(isset($_SESSION['id'])){
        $user_id = ($_SESSION['id']);
    }
    $id = $_POST['id'];
    $quantity = $_POST['quantity'];
    
    $stmt = $conn->prepare("SELECT * from chitietgiohang where product_id=$id and chitietgiohang.user_id=$user_id");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC
    $result = $stmt->fetchAll();
    if($result){
        $new_quantity =  $result[0]['quantity'] + $quantity;
        if($new_quantity > 10){
            echo "<h3 style='margin-top: 100px'>Quá số lượng cho phép(Tối thiểu 10 sản phẩm trên 1 mặt hàng)</h3> ";
            echo"<form action='index.php?act=fetch_donhang' method='post' style='text-align-center'>
                <input type='submit' class='btn btn-dark' style='color:white' value='Quay lại đơn hàng'/></form>";
        }
        else{
            $stmt1 = $conn->prepare("UPDATE chitietgiohang set user_id=:user_id,product_id=:id,quantity=:new_quantity where product_id=$id");
            $stmt1->bindParam(':user_id', $user_id);
            $stmt1->bindParam(':id', $id);
            $stmt1->bindParam(':new_quantity', $new_quantity);
            $result1 = $stmt1->execute();
            if($result1){
                header('location: index.php?act=fetch_donhang');
            }
        }
    }
    else{
        $stmt2 = $conn->prepare("INSERT INTO chitietgiohang (user_id,product_id,quantity) VALUES (:user_id,:id, :quantity)");
        $stmt2->bindParam(':user_id', $user_id);
        $stmt2->bindParam(':id', $id);
        $stmt2->bindParam(':quantity', $quantity);
        $result2 = $stmt2->execute();
        if($result2){
            header('location: index.php?act=fetch_donhang');
        }

    }
}

if (isset($_POST['submit'])) {
    if(isset($_SESSION['id'])){
        $user_id = ($_SESSION['id']);
    }
    $id = $_POST['id'];
    echo "$id";
    $quantity = $_POST['quantity'];

    $stmt3 = $conn->prepare("SELECT * from chitietgiohang where product_id=$id and chitietgiohang.user_id=$user_id");
    $stmt3->execute();
    $stmt3->setFetchMode(PDO::FETCH_ASSOC);
    $result3 = $stmt3->fetchAll();

    if($result3){
        $stmt4 = $conn->prepare("UPDATE chitietgiohang set quantity=:quantity where product_id=$id");
        $stmt4->bindParam(':quantity', $quantity);
        $result4 = $stmt4->execute();
        if($result4){
            header('location: index.php?act=fetch_donhang');
        }   
    }
}

    //Kiểm tra nếu người dùng đã nhấn nút xóa
    if (isset($_POST["delete"])) {
        // Hiển thị thông báo xác nhận xóa
        
        echo "<form  method='post' action='index.php?act=delete_order'  style ='text-align:center;margin:0 auto;'>";
        echo "<h3 style='margin-top: 90px;'>Bạn có muốn xóa giỏ hàng?</h3>";// Chỉnh sửa đường dẫn đến file xử lý xóa đơn hàng (trong trường hợp này là 'delete_order.php')
        echo "<input type='submit' class='btn btn-success'  name='confirm_delete' value='Xác nhận'>"; // Nút xác nhận xóa
        echo ' ';
        echo "<input type='submit' class='btn btn-danger' name='cancel' value='Hủy bỏ'>"; // Nút hủy bỏ
        echo "</form>";
    }

    // Kiểm tra nếu người dùng đã nhấn nút xóa
    if (isset($_POST["xoa_1sp"])) {
    // Hiển thị thông báo xác nhận xóa
   
    echo "<form method='post' action='index.php?act=delete_order' style ='text-align:center;margin:0 auto;'>"; // Chỉnh sửa đường dẫn đến file xử lý xóa đơn hàng (trong trường hợp này là 'delete_order.php')
    echo "<h3 style='margin-top: 90px;' >Bạn có muốn xóa sản phẩm này không? </h3>";
    echo "<input type='hidden' name='id' value='" . $_POST['id'] . "'>"; // Đưa dữ liệu mã đơn hàng vào trong form
    echo "<input type='submit'  class='btn btn-success' name='delete_1sp' value='Xác nhận'>"; // Nút xác nhận xóa
    echo ' ';
    echo "<input type='submit' class='btn btn-danger' name='cancel' value='Hủy bỏ'>"; // Nút hủy bỏ
    echo "</form>";
} 
?>

