<div class="list-ad">
    <h1>Danh Sách</h1>
</div>
<div class="content">
    <table class="tb-list">
        <tr>
            <th>#</th>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            $suadm = "index.php?act=suadm&id=" . $id;
            $xoadm = "index.php?act=xoadm&id=" . $id;
            echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td class="Action-tb">
                        <a href="' . $suadm . '"><input class="action-update" type="button" value="Sửa"></a> 
                        <a href="' . $xoadm . '"><input class="action-delete" type="button" value="Xóa"></a>
                    </td>
                </tr>';
        }
        ?>
    </table>
</div>
<div class="list-btn">
    <input class="list-btn_first" type="button" value="Chọn Tất Cả">
    <input type="button" value="Bỏ Chọn Tất cả">
    <input type="button" value="Xóa Tất cả">
    <a href="index.php?act=adddm"><input class="list-btn_second" type="button" value="Nhập Thêm"></a>
</div>
</div>
</div>