<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/5dd6f63e97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/trangchu.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="top">
            <div class="logo">
                <img src="https://electronic-09.web4s.vn/uploads/plugin/setting/3/ph-ki-n-cong-ngh-logo.jpg" alt="">
            </div>
            <div class="search">
                <input type="search" placeholder="Từ khóa tìm kiếm">
                <i class="fas fa-search"></i>
                <a class="search-open">
                    <span class="open-pruduct">Sản phẩm</span>
                    <span class="caret"></span>
                    <ul class="ul-header">
                        <li>Sản phẩm</li>
                        <li>Tin tức</li>
                    </ul>
                </a>
            </div>
            <div class="log">
                <div class="inout">
                    <a href="index.php?act=dangki" id="icon"><i class="fas fa-user-plus"></i></a>
                    <a href="index.php?act=thoat" id="icon"><i class="fas fa-sign-out-alt"></i></a>
                    <a href="index.php?act=mybill" id="icon"><i class="fas fa-cart-arrow-down"></i></a>
                    <a href="index.php?act=dangnhap" id="icon"><i class="far fa-user"></i></a>
                </div>
            </div>
        </div>
        <div>
            <div class="product-header">
                <div class="product-nav">
                    <div class="product-nav-menu">
                        <i class="fa-solid fa-bars"></i>
                        <span>Sản phẩm</span>
                    </div>
                    <ul class="search-ul">
                        <li>
                            <a href="">
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                <p>Phụ kiện điện thoại</p>
                            </a>
                        </li>
                        <li><a href=""><i class="fa-solid fa-desktop"></i>
                                <p>Phụ kiện Mackbook</p>
                            </a>
                        </li>
                        <li><a href=""><i class="fa-solid fa-tablet-screen-button"></i>
                                <p>Phụ kiện Ipad</p>
                            </a>
                        </li>
                        <li><a href="">
                                <p>Phụ kiện công nghệ khác</p>
                            </a>
                        </li>

                    </ul>
                </div>
                <ul>
                    <li><a href="">Trang Chủ</a></li>
                    <li><a href="">Giới Thiệu</a></li>
                    <li><a href="">Tin Tức</a></li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="">Khác</a></li>
                </ul>
                <div class="product-cacial">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-google-plus-g"></i>
                    <i class="fa-brands fa-pinterest-p"></i>
                </div>
            </div>
        </div>
        <div class="banner-header">
            <img src="./img/banner1.png" alt="">
        </div>
        <div class="sildeshow">
            <div class="slideshow-container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <img src="./img/sl1.jpg" width="1400px" height="500px">
                    <div class="text">Caption Text</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <img src="./img/sl2.jpg" width="1400px" height="500px">
                    <div class="text">Caption Two</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <img src="./img/sl3.jpg" width="1400px" height="500px">
                    <div class="text">Caption Three</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="./img/sl4.jpg" width="1400px" height="500px">
                    <div class="text">Caption Three</div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </div>