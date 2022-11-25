<div class="pro">
        <div class="pro">
            <?php
            if(isset($_SESSION['user'])){
                extract($_SESSION['user']);
            ?>
            <div class="dk">
                    <h2>WELLCOME :<?=$user?></h2> 
                    
               </div>
               <a href="index.php?act=mybill" id="dk1">Đơn hàng của tôi</a>
               <a href="index.php?act=quenmk" id="dk1">Quên mật khẩu</a>
               <a href="index.php?act=edittaikhoan" id="dk1">Cập nhật tài khoản</a>
               <?php
               if($role==1){
               ?>
               <a href="admin/index.php" id="dk1">đăng nhập admin</a>
               <?php } ?>
               <a href="index.php?act=thoat" id="dk1">exits</a>
            <?php
            }else{

            ?>
            <form action="index.php?act=dangnhap" method="post">
             <h1>Tài khoản</h1>
               <div class="dk">
                    <h3>Tên đăng nhập</h3>
                    <input type="text" id="dk"name="user">
               </div>
               <div class="dk">
                    <h3>Mật khẩu</h3>
                    <input type="password" id="dk" name="pass">
               </div>
               <input type="submit" name="dangnhap" id="dki" value="dangnhap">
            </form>
            <?php } ?>
        </div> 
    </div>
        
    