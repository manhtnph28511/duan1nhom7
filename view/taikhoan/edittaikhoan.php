<div class="pro">
            <h2>Cập nhật</h2>
            <div class="pro">
                <?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
                }
                ?>
                    <form action="index.php?act=edittaikhoan" method="post">
                        <div class="dk">
                            <h3>Email</h3>
                           <input type="email" id="dk" name="email" value="<?=$email?>" >
                        </div>
                        <div class="dk">
                            <h3>Ten dang nhap</h3>
                           <input type="text" id="dk"name="user" value="<?=$user?>">
                        </div>
                        <div class="dk">
                            <h3>Mat khau</h3>
                            <input type="password" id="dk" name="pass" value="<?=$pass?>">
                        </div>
                        <div class="dk">
                            <h3>Dia chi</h3>
                            <input type="text" id="dk" name="address" value="<?=$address?>">
                        </div>
                        <div class="dk">
                            <h3>Dien thoai</h3>
                            <input type="text" id="dk" name="tel" value="<?=$tel?>">
                        </div>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" id="dki" value="cap nhat">
                        <input type="reset" value="nhap lai">
                    </form>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div> 
</div>



    


