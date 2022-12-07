<div class="bot-right">
  <div class="list-ad">
    <h1>Thống kê sản phẩm theo loại</h1>
  </div>
  <div class="bot-content">
    <table class="tb-list">
      <tr>
        <th>Mã danh mục</th>
        <th>Tên danh mục</th>
        <th>số lượng</th>
        <th>Giá cao nhất</th>
        <th>Giá thấp nhất</th>
        <th>Giá trung bình</th>
      </tr>
      <?php
      foreach ($listthongke as $thongke) {
        extract($thongke);
        echo '<tr>
          <td>' . $madm . '</td>
          <td>' . $tendm . '</td>
          <td>' . $countsp . '</td>
          <td>' . $maxprice . '</td>
          <td>' . $minprice . '</td>
          <td>' . $avgprice . '</td>
        </tr>';
      }
      ?>
    </table>
    <div class="btn-icon">
      <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
    </div>

  </div>

</div>
</div>