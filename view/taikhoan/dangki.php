<div class="pro">
     <h2>Đăng kí thành viên</h2>
        <form action="index.php?act=dangki" method="post">
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



    


