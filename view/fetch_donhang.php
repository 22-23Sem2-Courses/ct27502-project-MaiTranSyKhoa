<?php 
session_start();
include '../model/pdo.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <title>Đơn hàng</title>
    <style>
        img{
            width: 200px;
            height: 200px;
        }
        .thongtinnhanhang{
            margin: 0 auto;
            background-color: rgb(236, 226, 117);
            border-radius: 10px; 
        }
        .container{
            text-align: center;
        }
        .tongthanhtoan{
            color: rgb(241, 101, 8);
            font-size: 1.5rem;
        }
    </style>
  </head>
  <body>
    
    <div class="container">
    <div class="row mb ">
            <div class="boxtrai mr abc" id="bill">
                <div class="row" >
                    <h1 style="margin-top:90px">THÔNG TIN NHẬN HÀNG</h1>
                    <form action="index.php?act=xulythanhtoan" method ="POST">
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%"><b>Họ tên: </b></td>
                            <td><input type="text" name="name" required></td>
                        </tr>
                        <tr>
                            <td> <b>Địa chỉ: </b</td>
                            <td><input type="text" name="address" required></td>
                        </tr>
                        <tr>
                            <td><b>Điện thoại: </b></td>
                            <td><input type="text" name="sdt" required></td>
                        </tr>
                        <tr>
                            <td><b>Email: </b></td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                    if(isset($_SESSION['id'])){
                                    $user_id =  $_SESSION['id'];
                                     $stmt0 =  $conn->prepare("SELECT * from chitietgiohang where  user_id= $user_id  ");
                                     $stmt0->execute();
                                     $stmt0->setFetchMode(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC
                                     $result0 = $stmt0->fetchAll();
                                     if($result0){
                                        ?>
                                         </td>
                                         <td>
                                            <?php
                                         echo'<input class="btn btn-primary" type="submit" value="Thanh Toán" name="order">';
                                    }
                                    else    
                                        { 
                                            ?>
                                            </td>
                                            <td>
                                            <?php
                                            echo'<input  type="submit" value="Thanh Toán" name="order" disabled>';
                                        }
                                        ?>
                                        </td>
                                        <?php
                                    } 
                                ?>
                            
                          
                            
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Giỏ Hàng</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr style="background-color: black;color:white ">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Delete</th>
                                    <th>ToTal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $user_id  =$_SESSION['id'];
                                    $query = "SELECT * FROM shoes.products join shoes.chitietgiohang on products.id = chitietgiohang.product_id where chitietgiohang.user_id = $user_id ";
                                    $statement = $conn->prepare($query);
                                    $statement->execute();
                                    $a= 0;
                                    $b =0;
                                    $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                    $result = $statement->fetchAll();
                                    if($result)
                                    {
                                        foreach($result as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row->product_id; ?></td>
                                                <td><?= $row->name; ?></td>
                                                <td><?= $row->description; ?></td>
                                                <td><?= $row->price; ?></td>
                                                <td>
                                                <?php
                                                    echo "<img src='data:image/jpeg;base64," . base64_encode($row->image) . "'><br><br>";
                                                ?>
                                                </td>
                                                <td>
                                                    <form action="index.php?act=code_donhang" method="POST">
                                                        <input type="hidden" name="id" value="<?=$row->product_id?>">
                                                        <input type="number" value="<?= $row->quantity; ?>" name="quantity" min="1" max="10">
                                                        <input type="submit" class="btn btn-success" value="Cập nhật số lượng" name="submit">
                                                    </form>
                                                   
                                                </td>
                                                <td>
                                                <form action="index.php?act=code_donhang" method="POST">
                                                        <input type="hidden" name="id" value="<?=$row->id?>">
                                                        <input type="submit" class="btn btn-danger" value="Xóa" name="xoa_1sp">
                                                </form>
                                                </td>
                                                <td>
                                                    <?php $a = $row->price * $row->quantity;
                                                    $b = $b + $a;
                                                    echo "$a";
                                                    ?>
                                                </td>
                                            
                                            </tr>             
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <tr>
                                            <td colspan="5"><b style="color:red">Không có sản phẩm nào!</b</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                                <?php  echo"<b class='tongthanhtoan'>Tổng Thanh Toán = $b VND</b> " ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb" style="margin-top: 20px">
            <div>
                <form action="index.php?act=code_donhang" method="POST">
                    <input  class="btn btn-danger" type="submit" value="Xóa giỏ hàng" name="delete">
                 </form>
                 <form action="index.php?act=fetch_client" method="POST"style="margin-top: 10px; margin-bottom: 40px ">
                    <input type="submit" class="btn btn-success" value="Tiếp tục mua hàng" >
                 </form>
            </div>
    </div>
  </body>
</html>