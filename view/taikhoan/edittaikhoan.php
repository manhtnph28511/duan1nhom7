<div class="pro">
    <?php
    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
        extract($_SESSION['user']);
    }
    ?>
    <form class="form-update form-signup" action="index.php?act=edittaikhoan" method="post">
        <h1>Cập Nhật Tài Khoản</h1>
        <div class="signup-form">
            <h3>Email</h3>
            <input class="form-input" type="email" id="dk" name="email" value="<?= $email ?>">
        </div>
        <div class="signup-form">
            <h3>Tên Đăng Nhập</h3>
            <input class="form-input" type="text" id="dk" name="user" value="<?= $user ?>">
        </div>
        <div class="signup-form">
            <h3>Mật Khẩu</h3>
            <input class="form-input" type="password" id="dk" name="pass" value="<?= $pass ?>">
        </div>
        <div class="signup-form">
            <h3>Địa Chỉ</h3>
            <input class="form-input" type="text" id="dk" name="address" value="<?= $address ?>">
        </div>
        <div class="signup-form">
            <h3>Điện Thoại</h3>
            <input class="form-input" type="text" id="dk" name="tel" value="<?= $tel ?>">
        </div>
        <div class="btn-update">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input class="btn-submit" type="submit" name="capnhat" id="dki" value="Cập Nhập">
            <input class="btn-submit" type="reset" value="Nhập Lại">
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>