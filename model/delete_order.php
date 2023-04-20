<?php
include 'pdo.php';
if(isset($_POST['confirm_delete'])){
    $stmt = $conn->prepare("DELETE From chitietgiohang");
    $stmt->execute();
    if($stmt){
        header('location: index.php?act=fetch_donhang');
        exit(0);
    }
    else{
        echo "Khong xoa duoc";
    }
  
}

if(isset($_POST['delete_1sp'])){
    $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE from chitietgiohang where id=$id");
    $stmt->execute();
    if($stmt){
        header('location: index.php?act=fetch_donhang');
        exit(0);
    }
}

if(isset($_POST['cancel'])){
   header('location: index.php?act=fetch_donhang');
   exit(0);
}
?>