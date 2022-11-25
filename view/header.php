<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/trangchu.css"> 
    <script src="https://kit.fontawesome.com/5dd6f63e97.js" crossorigin="anonymous"></script>
    
<head>
  
<body>
    <div class="top">
        <div class="logo">
            <img src="/duan1/img/logo.jpg" alt="" >
        </div>
        <div class="search">
            
           <input type="search" id="search" placeholder="search">
           <i class="fas fa-search"></i>
        </input>
        </div>
        <div class="log">
            <div class="inout">
                <a href="index.php?act=dangki" id="icon"><i class="fas fa-user-plus" ></i></a>
                <a href="index.php?act=thoat" id="icon"><i class="fas fa-sign-out-alt"  ></i></a>
                <a href="index.php?act=mybill" id="icon"><i class="fas fa-cart-arrow-down"  ></i></a>
                 <a href="index.php?act=dangnhap" id="icon"><i class="far fa-user" ></i></a>
            </div>
        </div>
    </div>
    <header>
        <div class="sanpham">
            <label for="cars">SẢN PHẨM</label>
            <select id="phone">
              <option value="iphone">Iphone</option>
              <option value="samsung">Sam Sung</option>
              <option value="xiaomi">Xiaomi</option>
              <option value="oppo" selected>Oppo</option>
              <option value="realme" selected>Realme</option>
            </select>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                <li><a href="index.php?act=tintuc">Tin tức</a></li>
                <li><a href="index.php?act=hoidap">Hỏi đáp</a></li>
            </ul>
        </nav>
        <div class="phai">
    
             <i class="fab fa-facebook-square" id="icon2"></i>
            <i class="fab fa-instagram" id="icon2"></i>
            <i class="fab fa-weibo" id="icon2"></i>
            <i class="fab fa-google-plus-g" id="icon2"></i> 
        </div>
    </header>