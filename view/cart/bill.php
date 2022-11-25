<div class="pro">
    <form action="index.php?act=billcomfirm" method="post">
    <h2>Thông tin đặt hàng</h2>
    <div class="dat">
        <table>
            <?php
            if(isset($_SESSION['user'])){
                $name=$_SESSION['user']['user'];
                $address=$_SESSION['user']['address'];
                $email=$_SESSION['user']['email'];
                $tel=$_SESSION['user']['tel'];
            }else{
                $name="";
                $address="";
                $email="";
                $tel="";

            }
            ?>
            <tr>
            <td>Người đặt hàng</td>
            <td><input type="text" name="name" id="dk2" value="<?=$name?>"></td>
            </tr>
            <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="address" id="dk2" value="<?=$address?>"></td>
            </tr>
            <tr>
            <td>Email</td>
            <td><input type="text" name="email" id="dk2" value="<?=$email?>"></td>
            </tr>
            <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="tel" id="dk2" value="<?=$tel?>"></td>
            </tr>
        </table>
        </div>
        <div class="dat">
        <h4>Phuong thức thanh toán</h4>
            <table>
                <tr>
                    <td><input type="radio" value="1" name="pttt" checked>trả khi giao hàng</td>
                    <td><input type="radio" value="3" name="pttt" checked>thanh toán online</td>
                </tr>
            </table>
        </div>
        <div class="dat">
            <table>
                <?php viewcart(0);?>
            </table>
        
        <div class="dat">
            <a href="#"><input type="submit" id="" value="đồng ý đặt hàng" name="dongydathang"></a>
        </div>
        </div>
        </form>
    </div>
        
        </div>
        
     </div>