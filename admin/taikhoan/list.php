<div class="list-ad">
  <h1>Danh Sách Tài Khoản</h1>
</div>
<div class="content">
  <table class="tb-list">
    <tr>
      <th></th>
      <th>Id</th>
      <th>Tên Đăng Nhập</th>
      <th>Mật Khẩu</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Điện Thoại</th>
      <th>Vai Trò</th>
      <th></th>
    </tr>
    <?php
    foreach ($listtaikhoan as $taikhoan) {
      extract($taikhoan);
      $suatk = "index.php?act=suatk&id=" . $id;
      $xoatk = "index.php?act=xoatk&id=" . $id;
      echo '<tr>
        <td><input type="checkbox" name="" id=""></td>
        <td>' . $id . '</td>
        <td>' . $user . '</td>
        <td>' . $pass . '</td>
        <td>' . $email . '</td>
        <td>' . $address . '</td>
        <td>' . $tel . '</td>
        <td>' . $role . '</td>
        <td class="Action-tb">
          <a href="' . $suatk . '"><input class="action-update" type="button" value="Sửa"></a>
          <a href="' . $xoatk . '"><input class="action-delete" type="button" value="Xóa"></a>
        </td>
      </tr> ';
    }
    ?>
  </table>
</div>
</div>
</div>