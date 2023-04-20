<?php
include 'pdo.php';
include '../view/header.php';
if(isset($_POST['delete_products']))
{

    $_SESSION['id'] = $_POST['delete_products'];
    echo '<form action="index.php?act=code_delete" method="post"  style ="text-align:center;margin:0 auto;">';
    echo '<h3 style="margin-top: 90px;" >Bạn có muốn xóa sản phẩm không?</h3>';
    echo  '<input type="submit" class="btn btn-success"  name="dongy" value="Đồng ý">';
    echo ' ';
    echo  '<input type="submit" class="btn btn-danger"  name="khongdongy" value="Không đồng ý">';
    echo '</form>';
}

if(isset($_POST['dongy'])){
        $id = $_SESSION['id'];
        $query = "DELETE FROM products WHERE id=:id";
        $statement = $conn->prepare($query);
        $data = [
            ':id' => $id
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Deleted Successfully";
            header('location: index.php?act=fetch');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Deleted";
            header('location: index.php?act=fetch');
            exit(0);
        }
}

if(isset($_POST['khongdongy'])){
    header('location: index.php?act=fetch');
    exit(0);
}
?>