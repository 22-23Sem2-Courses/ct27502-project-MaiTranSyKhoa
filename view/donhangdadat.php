<?php
    //session_start();
    include '../model/pdo.php';
    function show_user($id){
        include '../model/pdo.php';
        if(isset($_SESSION['id'])){
      
            $query1 = "SELECT * from  shoes.orders join shoes.chitietorder on orders.id = chitietorder.order_id where orders.id = $id ";
            $statement1 = $conn->prepare($query1);
            $statement1->execute();
            $statement1->setFetchMode(PDO::FETCH_ASSOC); //PDO::FETCH_ASSOC
            $result1 = $statement1->fetchAll();
            if($result1){
                
    ?>
        <div style="width: 700px">  
            <table  class="a2">
                <tr class="a2" >
                    <td><b>Họ Và Tên</b></td>
                    <td class="a3" ><?=$result1[0]['name'];?></td>
                </tr>
                <tr class="a2" >
                    <td><b>Địa chỉ</b></td>
                    <td class="a3"><?=$result1[0]['address'];?></td>
                </tr>
                <tr class="a2" >
                    <td><b>Số Điện Thoại</b></td>
                    <td class="a3"><?=$result1[0]['sdt'];?></td>
                </tr>
                <tr class="a2" >
                    <td><b>Email</b></td>
                    <td class="a3"><?=$result1[0]['email'];?></td>
                </tr>
            </table>
        </div>
        
    <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐƠN HÀNG</title>
    <style>
    img {
        width: 300px;
    }
    .h1{
        margin-left:20px;
        color: rgb(246, 50, 1);
    }
    .table1{
        border: 1px solid black;
    }
    .a2{
        margin-left:20px ;
        margin-bottom:20px;
        border: 1px solid black;
    }
    .a2 td{
        border: 1px solid black;
        text-align:center;
    }
    .a3{
        color: rgb(1, 21, 246);
    }

    .tongtien{
        color: green;
        font-size: 1.5rem;
    }
    </style>
</head>

<body>
  
    <div  class="ccontainer" style="margin-top:100px">
    <h1 class="h1">THÔNG TIN CÁC ĐƠN HÀNG</h1>
    </br>
                <?php // lay id order
                    if(isset($_SESSION['id'])){
                        $user_id = $_SESSION['id'];
                            
                        $query = "SELECT id from  shoes.orders where user_id = $user_id";
                        $statement = $conn->prepare($query);
                        $statement->execute();
                        $statement->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                        $result = $statement->fetchAll();
                        $a= 0;
                        $b =0;
                        ?>
                        <?php  
                        if($result){
                            foreach($result as $row1){       
                                $row= $row1->id;
                                show_user($row);
                                $query2 = "SELECT * FROM shoes.orders join shoes.chitietorder on orders.id=chitietorder.order_id
                                join shoes.products on products.id = chitietorder.product_id where orders.id = $row and
                                orders.user_id = chitietorder.user_id";
                                $statement2 = $conn->prepare($query2);
                                $statement2->execute();
                                $statement2->setFetchMode(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                                $result2 = $statement2->fetchAll();
                                if($result2){
                                    ?>
                                     <table class="table table-bordered table-striped">
                                    <thead >
                                        <tr  style="background-color: black;color:white">
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Image</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    foreach($result2 as $row2){       
                ?>                      
                                        <tbody>
                                            <tr>
                                                <td><?= $row2->name; ?></td>
                                                <td><?= $row2->description; ?></td>
                                                <td><?= $row2->price; ?></td>
                                                <td>
                    <?php                                                         
                                                echo "<img src='data:image/jpeg;base64," . base64_encode($row2->image) . "'><br><br>";
                    ?>
                                                </td>
                                                <td>
                                                    <?= $row2->quantity; ?>
                                                </td>
                                                <td>
                                                    <?php $a = $row2->price * $row2->quantity;
                                                            $b = $b + $a;
                                                            echo "<b>$a</b>";
                                                            ?>
                                                </td>
                
                                            </tr>
                    <?php
                                        }
                                }else{
                ?>
                                        <tr>
                                            <td colspan="5">No Record Found</td>
                                        </tr>
                <?php
                                    }
                                    echo "<b class='tongtien' style='margin-left:20px'>Tổng Tiền = $b VND</b>"; 
                                    $b = 0;
                            }
                ?>
            </tbody>
        </table>
                       
        <?php
                        }   
        ?>

        <?php
                     }
                    
        ?>
    </div>
</body>
</html>