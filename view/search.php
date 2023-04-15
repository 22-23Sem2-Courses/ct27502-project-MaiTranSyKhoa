<?php
include '../model/pdo.php';
include '../view/header_client.php'; ?>

<?php
include '../model/pdo.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fetch.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to bottom right, rgba(204, 204, 204, 0.5), rgba(102, 102, 102, 0.8));
            background-size: 400% 400%;
            /* thiết lập kích thước ảnh nền lớn hơn kích thước thực */
            animation: gradient-animation 10s ease infinite;
            /* thiết lập animation */
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            /* đặt bắt đầu tại vị trí 0% 50% */
            50% {
                background-position: 100% 50%;
            }

            /* di chuyển gradient tới vị trí 100% 50% */
            100% {
                background-position: 0% 50%;
            }

            /* trở lại vị trí ban đầu 0% 50% */
        }

        h1 {
            color: rgba(42, 39, 39, 0.897);
            /* màu sắc theo ý muốn */
            text-shadow: 1px 1px 2px greenyellow;
            /* đổ bóng cho text */
            box-shadow: 10px 3px 3px rgba(0, 0, 0, 0.25);
            /* đổ bóng cho khung */
            font-weight: bold;
            /* độ đậm của font chữ */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* font chữ */
            text-align: center;
            /* canh giữa theo chiều ngang */
        }

        .container {
            padding-top: 100px;
        }

        .product {
            background-color: rgba(121, 204, 177, 0.897);
            background-size: 400% 400%;
            /* thiết lập kích thước ảnh nền lớn hơn kích thước thực */
            background-image: linear-gradient(to bottom right, rgba(204, 204, 204, 0.5), rgba(102, 102, 102, 0.8));
            border: 1px solid #ccc;
            border-radius: 20px;
            height: 570px;
            margin-bottom: 20px;
            padding: 10px;
            transition: all 0.3s;
            animation: gradient-animation 10s ease infinite;
            /* thiết lập animation */
        }

        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }

            /* đặt bắt đầu tại vị trí 0% 50% */
            50% {
                background-position: 100% 50%;
            }

            /* di chuyển gradient tới vị trí 100% 50% */
            100% {
                background-position: 0% 50%;
            }

            /* trở lại vị trí ban đầu 0% 50% */
        }

        .product:hover {
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
            transform: translateY(-5px);
            animation: none;
            /* ngưng animation khi hover */
        }

        .product:hover {
            border-color: #8bc34a;
            box-shadow: 1px 1px 8px 0px rgba(0, 0, 0, 0.3);
        }

        .product-image img {
            text-align: center;
            margin: 0 auto;
            width: 100%;
            height: 100%;
            border: solid 1px white;
            border-radius: 20px;

        }

        .product-image img:hover {
            transform: scale(1.1);
            /* phóng to ảnh lên 110% so với kích thước ban đầu */
        }

        .product-name {
            font-weight: bold;
            margin: 10px 0;
            text-align: center;
            width: 100%;
            height: 40px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            font-size: 30px;
        }

        .product-price {
            font-size: 18px;
            color: white;
            margin: 5px 0;
            text-align: center;
        }

        .product-desc {
            margin: 5px 0;
            height: 30px;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 20px;
            font-weight: bold;
        }

        .product-action {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: auto;
        }


        .product-action label {
            margin-right: 10px;
        }

        .btn-buy {
            background-color: green;
            font-weight: bold;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-buy:hover {
            background-color: darkgreen;
        }

        form {
            justify-content: center;
            /* căn form giữa trang */
            align-items: center;
            /* căn nội dung form theo chiều dọc */
        }

        input[type="text"],
        input[type="submit"] {
            padding: 8px 12px;
            /* khoảng cách giữa border và nội dung input */
            border: none;
            /* bỏ border */
            border-radius: 4px;
            /* bo viền cho input */
            font-size: 16px;
            /* kích thước chữ */
            margin-right: 5px;
            /* khoảng cách giữa 2 input */
        }

        input[type="text"] {
            width: 300px;
            /* độ rộng của input */
        }

        input[type="submit"]:hover {
            background-color: #0062cc;
            /* màu nền của input khi hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <form method="post" action="">
            <input type="text" name="keyword" placeholder="Nhập từ khóa" required>
            <input type="submit" name="submit" value="Tìm kiếm">
        </form>
        <br>
        <div class="row">
            <?php
            if (isset($_POST['submit'])) {
                $keyword = $_POST['keyword'];
                $stmt = $conn->prepare("SELECT * FROM products WHERE name LIKE :keyword");
                $stmt->bindValue(':keyword', '%' . $keyword . '%');
                $stmt->execute();
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($results as $product) {
            ?>
                    <div class="col-md-4">
                        <div class="product">
                            <div class="product-image">
                                <img src="<?= "data:image/jpeg;base64," . base64_encode($product['image']) ?>">
                            </div>
                            <div class="product-name text-center"><?= $product['name'] ?></div>
                            <div class="product-price text-center"><?= $product['price'] ?> VND</div>
                            <div class="product-desc text-center"><?= $product['description'] ?></div>
                            <div class="product-action text-center">
                                <form action="index.php?act=code_donhang" method="post">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <label for="quantity">Số lượng:</label>
                                    <input type="number" name="quantity" min="1" max="10">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        echo '<input class="btn btn-success" type="submit" name="submit_items"  value="Mua Ngay">';
                                    } else {
                                        echo '<input class="btn btn-success" type="submit" name="submit_items"  value="Mua Ngay" disabled >';
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                    </div>
            <?php
                }

            }else echo '<h1>BẠN CHƯA TÌM KIẾM SẢN PHẨM NÀO</h1>' ?> 

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>