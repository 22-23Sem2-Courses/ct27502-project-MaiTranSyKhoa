<?php

include 'pdo.php';

 if(isset($_POST['update_products_btn']) && (isset($_FILES['image'])))
{
    $id=$_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = file_get_contents($_FILES['image']['tmp_name']);

    try {

        $query = " UPDATE products SET name=:name, description=:description, price=:price, image=:image  WHERE id=:id LIMIT 1"; 
        $statement = $conn->prepare($query);
        $data = [
            ':id' => $id,
            ':name' => $name,
            ':description' => $description,
            ':price' => $price,
            ':image' => $image
        ];
        $query_execute = $statement->execute($data);

        if($query_execute)
        {
            $_SESSION['message'] = "Updated Successfully";
            header('location: index.php?act=fetch');
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Updated";
            header('location: index.php?act=fetch');
            exit(0);
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>