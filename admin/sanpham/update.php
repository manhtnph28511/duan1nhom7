<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../uploadimg/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='60px' ";
} else {
    $hinh = "no photo";
}
?>
<div class="bot">
    <div class="bot-title">
        <h1>Cập Nhập Hàng Hóa</h1>
    </div>
    <div class="bot-content">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="bot-category">
                <select name="iddm">
                    <option value="0" selected>All</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddm == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '" ' . $s . '>' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="bot-input">
                <p>Tên sản phẩm</p>
                <input id="input" type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="bot-input">
                <p>Giá sản phẩm</p>
                <input id="input" type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="bot-input">
                <p>Hình ảnh</p>
                <input id="input1" type="file" name="hinh"><br>
                <?= $hinh ?>
            </div>
            <div class="bot-input">
                <p>Dung ượng</p>
                <input id="input" type="text" name="dungluong" value="<?= $dungluong ?>">
            </div>
            <div class="bot-input">
                <p>Dung lượng 2</p>
                <input id="input" type="text" name="dungluong2" value="<?= $dungluong2 ?>">
            </div>
            <div class="bot-add">
                <p>Mô Tả</p>
                <textarea name="mota" id="" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="bot-btn">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>