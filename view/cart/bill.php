<div class="pro">
    <form action="index.php?act=billcomfirm" method="post">
        <h2>Thông Tin Đặt Hàng</h2>
        <div class="dat">
            <table>
                <?php
                if (isset($_SESSION['user'])) {
                    $name = $_SESSION['user']['user'];
                    $address = $_SESSION['user']['address'];
                    $email = $_SESSION['user']['email'];
                    $tel = $_SESSION['user']['tel'];
                } else {
                    $name = "";
                    $address = "";
                    $email = "";
                    $tel = "";
                }
                ?>
                <tr>
                    <td>Người Dặt Hàng</td>
                    <td><input class="bill-input" type="text" name="name" id="dk2" value="<?= $name ?>"></td>
                </tr>
                <tr>
                    <td>Địa Chỉ</td>
                    <td><input class="bill-input" type="text" name="address" id="dk2" value="<?= $address ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input class="bill-input" type="text" name="email" id="dk2" value="<?= $email ?>"></td>
                </tr>
                <tr>
                    <td>Điện Thoại</td>
                    <td><input class="bill-input" type="text" name="tel" id="dk2" value="<?= $tel ?>"></td>
                </tr>
            </table>
        </div>
        <div class="dat">
            <table>
                <?php viewcart(0); ?>
            </table>
    </form>
        <div class="dat">
            <h4>Phương Thức Thanh Toán</h4>
            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="view/cart/xulythanhtoanmomo.php">
                          <input type="submit" name="momo" value="Thanh toán momo">
            </form><br>
            <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="view/cart/xulythanhtoanmomo_atm.php">
                          <input type="submit" name="momo" value="Thanh toán momo ATM">
            </form>
        </div>
        
</div>

</div>

</div>