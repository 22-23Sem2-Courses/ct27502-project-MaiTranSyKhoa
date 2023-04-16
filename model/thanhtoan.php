<?php
include "pdo.php";
if(isset($_SESSION['id']) && isset($_POST['dongy'])){
    header('location: index.php?act=donhangdadat');
}
if(isset($_SESSION['id']) && isset($_POST['huy'])){
    $a = $_SESSION['order_id'];

    $stmt3 = $conn->prepare("DELETE from chitietorder where order_id=$a");
    $stmt3->execute();   

    $stmt4 = $conn->prepare("DELETE from orders  where id=$a");
    $stmt4->execute();   
    
    header('location: index.php?act=fetch_donhang');
}
?>