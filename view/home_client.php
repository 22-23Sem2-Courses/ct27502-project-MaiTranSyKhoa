<?php
    include 'header_client.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/trangchu.css">
</head>
<body>
<div class="img_logo">
            <a href="index.php?act=home_client"><img src="images/main/Logo_Ananas_Header.svg" alt=""></a>
            <img style="width: 200px; margin-left: 550px;" src="images/main/Ananas-Logo-PNG-2.png">
        </div>
        <nav class="navbar navbar-expand-lg bg-light">
            <!-- Example single danger button -->
            <p id="nav_navbar">
                <div class="btn-group" class="frm_search">
                    <form class="d-flex" role="search" action="index.php?act=code_search" method="post">
                        <button class="btn btn-outline-success" type="submit" style="width:350px;">TÌM KIẾM SẢN PHẨM YÊU THÍCH CỦA BẠN</button>
                    </form>
                </div>
            </p>
            </div>
            </div>
        </nav>
    </header>
    <main>
        <div style="margin-top:30px ;" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="height: 900px;" src="images/trangchu/LowHigh_Desktop-1920x1050.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block" id="button">
                        <button class="button" onclick="buyItem()">Mua Ngay</button>
                        </br>
                        <button class="button" style="margin-top: 10px;" onclick="register()">Đăng Ký Thành Viên</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="height: 900px;" src="images/trangchu/Hi-im-Mule_1920x1050-Desktop.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img style="height: 900px;" src="images/trangchu/kv_basas_mobileBanner_4_2019.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
        </div>
        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <div class="col">
                    <span>
                        <a href="#"><img  style="width: 600px; height: 350px;" src="images/trangchu/banner-phụ_2m-600x320.jpg" alt=""></a>
                        <a href="#" style="color: black;"><h2>ALL BLACK IN BLACKS</h2></a>
                        </br>
                        Mặc dù được ứng rất nhiều, nhưng đến sắc đen lúc nào cũng toát lên  một vẻ huyền bí không nhàm chán.
                    </span>
                </div>
                <div class="col">
                    <span>
                        <a href="#"><img  style="width: 600px; height: 350px;" src="images/trangchu/Banner_Sale-off-1.jpg" alt=""></a>
                        <a href="#" style="color: black;"><h2>OUTLET SALE</h2> </a>
                        </br>
                        Danh mục những sản phẩm bán tại "giá tốt hơn" chỉ được bán kênh online - Online Only, chúng đã từng làm mưa làm gió một thời và hiện đang
                        rơi vào tình trạng bể size, bể số.
                    </span>
                </div>
            </div>
        </div>
        <div id="danhmuc">
            <h1><span class="text1">DANH MỤC MUA HÀNG</span> </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col" id="col1_danhmuc" style=" background-image: url('images/trangchu/catalogy-1.jpg'); ">
                    <div id="giaynam">
                        <h4 style="color: #ed4290;">GIÀY NAM</h4>
                        </br>
                        <h5><a href="#">New Arrivals</a></h5>
                        <h5><a href="#">Best Seller</a></h5>
                        <h5><a href="#">Sale Off</a></h5>
                    </div>
                </div>
                <div class="col" id="col1_danhmuc" style="background-image: url('images/trangchu/catalogy-2.jpg');">
                    <div id="giaynu">
                        <h4 style="color: #ed4290 ;">GIÀY NỮ</h4>
                        </br>
                        <h5><a href="#">New Arrivals</a></h5>
                        <h5><a href="#">Best Seller</a></h5>
                        <h5><a href="#">Sale Off</a></h5>
                    </div>
                </div>
                <div class="col" id="col1_danhmuc" style="background-image: url('images/trangchu/catalogy-3.jpg');">
                    <div id="dongsp">
                        <h4 style="color: #ed4290;">DÒNG SẢN PHẨM</h4>
                        </br>
                        <h5><a href="#">Basas</a></h5>
                        <h5><a href="#">Vintas</a></h5>
                        <h5><a href="#">Urbas </a></h5>
                        <h5><a href="#">Pattas</a></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_clothing">
            <a href="sanpham.html"><img style="margin-top: 30px ;width: 100%;" src="images/trangchu/Banner_Clothing.jpg" alt=""></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 style="margin-top: 20px; text-align: center; margin-bottom: 30px;"><span class="text">GIỚI THIỆU</span> </h1>
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/trangchu/ins_5.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/trangchu/ins_6.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    <div class="content_GT">
                        <div class="content_GT2">
                            <p style="margin-top: 30px;">Ananas trong tiếng anh nghĩa là “Trái Dứa” (theo Wikipedia). Tuy nhiên, Ananas ở bài này lại là một thương hiệu giày sneaker trẻ, mới xuất hiện ở Việt Nam và đang rất hot trong cộng đồng sneaker cờ đỏ sao vàng.</p>
                            <p>
                                Sau nhiều khó khăn khi ra mắt thị trường năm 2010, nhãn hiệu giày này bừng tỉnh và trở lại mạnh mẽ trong ngành công nghiệp giày việt nam. Với kinh nghiệm 20 năm của xưởng sản xuất giày từng hợp tác với nhiều thương hiệu nổi tiếng như Puma, Reebok, Keds,
                                Burberry,…

                            </p>
                            <p>
                                2017 Ananas quyết định quay lại với cái tên thân thuộc của mình và chọn đây là điểm bắt đầu cho thương hiệu. Sản phẩm của Ananas 100% sản xuất tại Việt Nam và tập trung vào đối tượng là những người trẻ tuổi từ 18 đến 26.
                            </p>
                            <p>
                                Trực tiếp thực hiện từng công đoạn thủ công, đường may tỉ mỉ, cẩn thận, chăm chút từ thiết kế đến truyền thông, chăm sóc khách hàng không khác gì một thương hiệu lớn. Ananas đã sẵn sàng bay cao hơn nữa. Là một thương hiệu đóng góp giá trị cho cộng đồng
                                và phát triển thương hiệu bền vững. Ananas không hề mang tư duy lợi nhuận như khái niệm kinh tế xưa cũ.
                            </p>
                        </div>

                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <h1 style="text-align: center;margin-bottom: 30px;"><span class="text">TIN TỨC VÀ BÀI VIẾT</span> </h1>
                        <div class="col-sm-6"><img src="images/trangchu/urbas.hpg.jpg" alt="">
                            <a href="">
                                <h2 class="tt">URBAS CORLURAY PACK </h2>
                            </a>
                            <p>
                                Urbas Corluray Pack đem đến lựa chọn “làm mới mình” với sự kết hợp 5 gam màu mang sắc thu; phù hợp với những người trẻ năng động, mong muốn thể
                            </p>
                            <p>
                                <a href="#"><i id="dt" style="color: orangered;" >Đọc thêm</i></a></p>
                        </div>
                        <div class="col-sm-6"><img src="images/trangchu/vintas.jpg" alt="">
                            <a href="#">
                                <h2 class="tt">VINTAS SAIGON 1980S</h2>
                            </a>
                            <p>
                                Với bộ 5 sản phẩm, Vintas Saigon 1980s Pack đem đến một sự lựa chọn “cũ kỹ thú vị” cho những người trẻ sống giữa thời hiện đại nhưng lại yêu nét
                            </p>
                            <p>
                                <a href="#"><i id="dt" style="color: orangered;">Đọc thêm</i></a>
                            </p>
                        </div>
                    </div>
                    <div class="row" class="row_distance">
                        <div class="col-sm-6"><img style="margin-top: 27px;" src="images/trangchu/sneaker.jpg" alt="">
                            <a href="#">
                                <H2 class="tt">SNEAKER FEST VIETNAM </H2>
                            </a>
                            <p>
                                Việc sử dụng dáng giày Vulcanized High Top của Ananas trong thiết kế và cảm hứng bắt nguồn từ linh vật Peeping - đại diện cho tinh thần xuyên
                            </p>
                            <p>
                                <a href="#"><i id="dt" style="color: orangered;">Đọc thêm</i></a>
                            </p>
                        </div>
                        <div class="col-sm-6"><img style="margin-top: 27px;" src="images/trangchu/giai-phau.jpg" alt="">
                            <a href="#">
                                <h2 class="tt">"GIẢI PHẨU GIÀY VULCANIZED</h2>
                            </a>
                            <p>
                                Trong phạm vi bài viết ngắn hãy cùng nhau tìm hiểu cấu tạo giày Vulcanized Sneaker loại sản phẩm mà Ananas đã chọn làm cốt lỗi để theo đuổi trong...
                            </p>
                            <p>
                                <a href="#"><i  style="color: orangered;">Đọc thêm</i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>
