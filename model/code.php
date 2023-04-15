<?php
include 'pdo.php';

if(isset($_POST['save_products_btn']) && (isset($_FILES['image']))) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = file_get_contents($_FILES['image']['tmp_name']);
    
    $query = "INSERT INTO products (name,description, price, image) VALUES (:name,:description, :price, :image)";
    $query_run = $conn->prepare($query);

    $data = [
        ':name' => $name,
        ':description' => $description,
        ':price' => $price,
        ':image' => $image
    ];

    $query_execute = $query_run->execute($data);
    if($query_execute)
    {
        header('location: index.php?act=fetch');
        exit(0);
        //header('Location: index.php?act=fetch');
        
    }
    else
    {
        header('location: index.php?act=fetch');
        exit(0); 
    }
}

?>