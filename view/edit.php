<?php
session_start();
include '../model/pdo.php';

include 'header.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="css/main">
    <style>
           h3{
            color: rgb(246, 50, 1);
        }
    </style>
</head>
<body>
    
    <div class="container"  style = "margin-top:80px">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>SỬA VÀ CẬP NHẬT SẢN PHẨM
                            <a href="index.php?act=fetch" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_POST['id']))
                        {
                            $id = $_POST['id'];
                            $query = "SELECT * FROM shoes.products WHERE id=:id LIMIT 1 ";
                            $statement = $conn->prepare($query);
                            $data = [':id' => $id
                                ];
                            $statement->execute($data);

                            $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                        }
                        ?>
                        <form action="index.php?act=code_edit" method="POST" enctype="multipart/form-data" >

                            <input type="hidden" name="id" value="<?=$result->id?>" />

                            <div class="mb-3">
                                <label><b>Name</b></label>
                                <input type="text" name="name" value="<?= $result->name; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label><b>Description</b></label>
                                <input type="text" name="description" value="<?= $result->description; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label><b>Price</b></label>
                                <input type="text" name="price" value="<?= $result->price; ?>" class="form-control" />
                            </div>
                            <div class="mb-3">
                                <label><b>Image</b></label>
                                <input type="file" name="image"class="form-control" required/>
                            </div>
                            <div class="mb-3">
                                <button type="submit"  name="update_products_btn" class="btn btn-primary">Update Product</button>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>