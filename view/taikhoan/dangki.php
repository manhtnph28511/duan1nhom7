<div class="pro">
<<<<<<< HEAD
     <h2>Đăng kí thành viên</h2>
        <form action="index.php?act=dangnhap" method="post">
            <div class="dk">
                <h3>Email</h3>
                <input type="email" id="dk" name="email" >
            </div>
            <div class="dk">
                <h3>Tên đăng nhập</h3>
                <input type="text" id="dk" name="user" >
            </div>
            <div class="dk">
                <h3>Mật khẩu</h3>
                <input type="password" id="dk" name="pass" >
            </div>
            <input type="submit" name="dangki" id="dki" value="Đăng kí">
        </form>
        <?php
        if(isset($thongbao)&&($thongbao!="")){
            echo $thongbao;
        }
        ?>
               
           
       
  
</div>



    


=======
    <form class="form-signup" action="index.php?act=dangki" method="post">
        <h1>Đăng Kí Thành viên</h1>
        <div class="signup-form">
            <input class="form-input" type="text" id="dk" name="email" placeholder="Nhập Email">
        </div>
        <div class="signup-form">
            <input class="form-input" type="text" id="dk" name="user" placeholder="Nhập Tên Đăng Nhập">
        </div>
        <div class="signup-form">
            <input class="form-input sign-input" type="password" id="dk" name="pass" placeholder="Nhập Mật khẩu">
        </div>
        <div class="signup-submit signup-btn">
            <input class="addcart-product" type="submit" name="dangki" id="dki" value="Đăng kí">
        </div>
        <? header('index.php') ?>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>
>>>>>>> 6987bbe40b7d635f21c76a05e99dccd2ea95bbb6
