<?php 

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm sản phẩm</title>
    <style>
        h3{ 
            color: rgb(246, 50, 1);       
        }
    </style>
</head>
<body>
    
    <div class="container"  style = "margin-top:100px">
        <div class="row">
            <div class="col-md-8 mt-4">

                <?php if(isset($_SESSION['message'])) : ?>
                    <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
                <?php 
                    unset($_SESSION['message']);
                    endif; 
                ?>
                <div class="card">
                    <div class="card-header">
                        <h3>THÊM SẢN PHẨM</h3>
                    </div>
                    <div class="card-body">
                        
                        <form action="index.php?act=code_add" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label><b>Name</b></label>
                                <input type="text" name="name" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label><b>Description</b></label>
                                <input type="text" name="description" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label><b>Price</b></label>
                                <input type="number" name="price" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label><b>Image</b></label>
                                <input type="file" name="image" class="form-control" required />
                            </div>
                            
                            <div class="mb-3">
                                <button type="submit" name="save_products_btn" class="btn btn-primary">Save Products</button>
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