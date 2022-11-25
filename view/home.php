<div class="sildeshow">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="/duan1/img/iphone14.jpg" width="1400px" height="500px">
                <div class="text">Caption Text</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="/duan1/img/oppo.jpg" width="1400px" height="500px">
                <div class="text">Caption Two</div>
            </div>
            
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="/duan1/img/samsung.webp" width="1400px" height="500px">
                <div class="text">Caption Three</div>
            </div>
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="/duan1/img/xiaomi m12.jpg" width="1400px" height="500px" >
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
    <div class="product">
        <div class="pro1">
            <div class="sanpham1">
                <img src="/duan1/img/ipad.jpg" alt="">
            </div>
            <div class="sanpham1">
                <img src="/duan1/img/airpost.jpg" alt="">
            </div>
            <div class="sanpham1">
                <img src="/duan1/img/iphonexsmax.jpg" alt="">
            </div>
            <div class="sanpham1">
                <img src="/duan1/img/smartwatch.jpg" alt="">
            </div>
        </div>
        <h1> SẢN PHẨM PHỔ BIẾN</h1>
        <div class="pro2">
        <?php
         $i=0;
         foreach($spnew as $sp){
             extract($sp);
             $linksp="index.php?act=sanphamct&idsp=".$id;
             $hinh=$img_path.$img;
             if(($i==2)||($i==5)||($i==8)){
                 $mr="mr";
             }else{
                 $mr="";
             }
             echo '<div class="prod2" '.$mr.'>
             <div class="content">
                 <img src="'.$hinh.'" alt="">
             </div>
             <div class="name">'.$name.'</div>
             <div class="price">'.$price.'</div>
             <form action="index.php?act=addtocart" method="post">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="name" value="'.$name.'">
                <input type="hidden" name="img" value="'.$img.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="submit" name="addtocart" id="add"value="thêm vào giỏ hàng" >
            </form>
         </div>';
            $i+=1;
        }
        ?>
        
    <div class="below">
    </div>