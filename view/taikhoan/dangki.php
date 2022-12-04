<div class="pro">
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
