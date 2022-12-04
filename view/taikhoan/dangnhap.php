<div class="form-signup">
    <div class="signup">
        <div class="signin">
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
            ?>
                <div class="dk">
                    <h2>WELLCOME :<?= $user ?></h2>
                </div>
                <a href="index.php?act=mybill" id="dk1">Đơn Hàng Của Tôi</a>
                <a href="index.php?act=quenmk" id="dk1">Quên Mật Khẩu</a>
                <a href="index.php?act=edittaikhoan" id="dk1">Cập Nhật Tài Khoản</a>
                <?php
                if ($role == 1) {
                ?>
                    <a href="admin/index.php" id="dk1">Đăng Nhập Admin</a>
                <?php } ?>
                <a href="index.php?act=thoat" id="dk1">Thoát</a>
        </div>
    <?php
            } else {

    ?>
        <form action="index.php?act=dangnhap" method="post">
            <h1>Ace Mobile</h1>
            <div class="signup-form">
                <input class="form-input" type="text" id="dk" name="user" placeholder="Tên đăng nhập/Email/Số điện thoại">
            </div>
            <div class="signup-form">
                <input class="form-input sign-input" type="password" id="dk" name="pass" placeholder="Mật khẩu">
            </div>
            <div class="signup-submit">
                <input class="addcart-product" type="submit" name="dangnhap" id="dki" value="Đăng Nhập">
            </div>
        </form>
    <?php } ?>
    </div>
</div>