<div class="list-ad">
    <h1>Danh Sách Sản phẩm</h1>
</div>
<div class="content">
    <form action="index.php?act=listsp" method="post" class="list-search">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>All</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input class="list-search__btn" type="submit" name="listok" value="Tìm Kiếm">
    </form>
    <table class="tb-listpro">
        <tr>
            <th>#</th>
            <th>Mã Loại</th>
            <th>Tên Sản Phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá Sản Phẩm</th>
            <th>Mô Tả</th>
            <th>Lướt Xem</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($listsanpham as $sanpham) {
            extract($sanpham);
            $suasp = "index.php?act=suasp&id=" . $id;
            $xoasp = "index.php?act=xoasp&id=" . $id;
            $hinhpath = "../uploadimg/" . $img;
            if (is_file($hinhpath)) {
                $hinh = "<img src='" . $hinhpath . "' height='60'>";
            } else {
                $hinh = "no photo";
            }
            echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>' . $id . '</td>
                <td>' . $name . '</td>
                <td>' . $hinh . '</td>
                <td>' . $price . '</td>
                <td>' . $mota . '</td>
                <td>' . $luotxem . '</td>
                <td class="action-listpro">
                    <a href="' . $suasp . '"><input class="listpro-up" type="button" value="Sửa"></a> 
                    <a href="' . $xoasp . '"><input class="listpro-del type="button" value="Xóa"></a>
                </td>
            </tr>';
        }
        ?>
    </table>
</div>
<div class="list-btn">
    <input class="list-btn_first" type="button" value="Chọn Tất Cả">
    <input type="button" value="Bỏ Chọn Tất Cả">
    <input type="button" value="Xóa Tất Cả">
    <a href="index.php?act=addsp"><input class="list-btn_second" type="button" value="Nhập Thêm"></a>
</div>
</div>
</div>
</div>