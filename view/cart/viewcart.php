<div class="product">

  <h1>GIỎ HÀNG CỦA BẠN</h1>
  <div class="pro2">
    <table>
      <tr>
        <td>Hình Ảnh</td>
        <td>Tên Sản Phẩm</td>
        <td>Dung Lượng</td>
        <td>Số Lượng</td>
        <td>Thành Tiền</td>
        <td>Action</td>
      </tr>
      <?php
      $tong = 0;
      $i = 0;
      foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;

        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input class="del-cart" type="button" value="Xóa"></a>';
        echo '<tr>
          <td><img src="' . $hinh . '"  alt=""height="80px"></td>
          <td>' . $cart[1] . '</td>
          <td>' . $cart[3] . '</td>
          <td>' . $cart[4] . '</td>
          <td>' . $ttien . '</td>
          <td>' . $xoasp . '</td>
        </tr>';
        $i += 1;
      }
      echo '<tr>
        <td colspan="4">Tổng đơn hàng</td>

        <td>' . $tong . '</td>
        <td></td>
      </tr>';
      // viewcart(1);
      ?>
      <tr>
        <td> <a href="index.php?act=bill">
            <input class="order" type="submit" id="dh" value="Đặt Hàng">
          </a></td>
      </tr>
    </table>
  </div>
</div>