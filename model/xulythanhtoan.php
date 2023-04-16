<?php
include 'pdo.php';
include '../view/header_client.php';

if(isset($_POST['order'])  && isset($_SESSION['id'])){
    $user_id =  $_SESSION['id'];

   
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    
   // Tao don hang moi
    $stmt = $conn->prepare("INSERT into shoes.orders (user_id,name,address,sdt,email) values(:user_id,:name,:address,:sdt,:email)");
    $stmt->bindParam(':user_id',$user_id);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':address',$address);
    $stmt->bindParam(':sdt',$sdt);
    $stmt->bindParam(':email',$email);
    $stmt->execute();

    // Lay don hang moi
    $stmt1 =  $conn->prepare("SELECT * from orders where orders.id not in (select order_id from chitietorder)");
    $stmt1->execute();
    $stmt1->setFetchMode(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC
    $result1 = $stmt1->fetchAll();
    $order_id = $result1[0]['id'];
    $_SESSION['order_id'] = $order_id;
    $a = $_SESSION['order_id'];
    
    // Chuyen chi iet gio hang va chi tiet order
    $stmt2 =  $conn->prepare("SELECT * from chitietgiohang where user_id=$user_id");
    $stmt2->execute();
    $stmt2->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
    $result2 = $stmt2->fetchAll();
    if($result2){
        foreach($result2 as $row){
            $cart_user_id = $row->user_id;
            $cart_product_id =  $row->product_id;
            $cart_quantity= $row->quantity;
            $stmt3 = $conn->prepare("INSERT INTO chitietorder values(null,:user_id,:order_id,:product_id,:quantity)");
            $stmt3->bindParam(':user_id',$cart_user_id);
            $stmt3->bindParam(':order_id',$order_id);
            $stmt3->bindParam(':product_id',$cart_product_id);
            $stmt3->bindParam(':quantity',$cart_quantity);
            $stmt3->execute();
            
            $stmt4 = $conn->prepare("DELETE from chitietgiohang where id=$row->id");
            $stmt4->execute();    
        }
       
        echo '<form action="index.php?act=thanhtoan" method="post"  style ="text-align:center;margin:0 auto;">';
        echo '<h3 style="margin-top: 90px;" >Bạn có đồng ý thanh toán không?</h3>';// Chỉ
        echo  '<input type="submit" class="btn btn-success"  name="dongy" value="Đồng ý thanh toán">';
        echo  '<input type="submit" class="btn btn-danger"  name="huy" value="Hủy đơn hàng">';
        echo '</form>';
 
    }
}



?>