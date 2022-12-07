<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="bot">
    <div class="bot-title">
        <h1>Cập Nhật Danh Mục</h1>
    </div>
    <div class="bot-content">
        <form action="index.php?act=updatedm" method="post">
            <div class="bot-input">
                <p>Mã Loại</p>
                <input id="input" type="text" name="maloai" disabled>
            </div>
            <div class="bot-input">
                <p>Tên Loại</p>
                <input type="text" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
            </div>
            <div class="bot-btn">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=lisdm"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>