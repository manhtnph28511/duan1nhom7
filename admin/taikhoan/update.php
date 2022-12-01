<?php
    if(is_array($tk)){
        extract($tk);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <H1>SỬA TÀI KHOẢN/H1>
            </div>
            <div class="row frmcontent">
            <form action="index.php?act=updatetk" method="post">
                    <div class="row mb">
                        Mã tài khoản<br>    
                        <input type="text" name="masp" disabled>
                    </div>
                    <div class="row mb">
                    Tên đăng nhập
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb">
                    Mật khẩu
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb">
                    Email
                        <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb">
                    Địa chỉ
                        <input type="text" name="address"  value="<?=$address?>">
                    </div>
                    <div class="row mb">
                            Số điện thoại
                        <input type="text" name="tel"  value="<?=$tel?>">
                        </div>
                    <div class="row mb">
                        <br>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dskh"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>