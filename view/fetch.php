<?php 
include '../model/pdo.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <title>Danh sách sản phẩm</title>
    <style>
        img{
            width: 200px;
            height: 200px;
        }
        .container{
            text-align: center;
            margin-top: 100px;
        }
        h3{
            color: rgb(246, 50, 1);
        }
    </style>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>DANH SÁCH SẢN PHẨM</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead  class="thead-dark">
                                <tr style="background-color: black;color:white">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM shoes.products";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();

                                    $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->id; ?></td>
                                                <td><?= $row->name; ?></td>
                                                <td><?= $row->description; ?></td>
                                                <td><?= $row->price; ?></td>
                                                <td>
                                                <?php
                                                    echo "<img src='data:image/jpeg;base64," . base64_encode($row->image) . "'><br><br>";
                                                ?>
                                                </td>
                                                <td>
                                                    <form action="index.php?act=edit" method="post">
                                                        <input type="hidden" name="id" value="<?=$row->id?>" />
                                                        <input type="submit" class="btn btn-primary" value="Edit">
                                                    </form>
                                                </td>
                                                <td>
                                                <form action="index.php?act=code_delete" method="POST">
                                                   <button type="submit" name="delete_products" value="<?=$row->id;?>" class="btn btn-danger">Delete</button>
                                                </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
 
    </script>
  </body>
</html>