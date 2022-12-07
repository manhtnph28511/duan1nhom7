<div class="row-title">
    <h1>Thêm mới sản phẩm</h1>
</div>
<div class="row-content">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="bot-category">
            <p>Danh mục</p>
            <select name="iddm">
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="bot-input">
            <p>Tên sản phẩm</p>
            <input id="input" type="text" name="tensp">
        </div>
        <div class="bot-input">
            <p>Dung Lượng</p>
            <input id="input" type="text" name="dungluong">
        </div>
        <div class="bot-input">
            <p>Dung Lượng 2</p>
            <input id="input" type="text" name="dungluong2">
        </div>
        <div class="bot-input">
            <p>Giá sản phẩm</p>
            <input id="input" type="text" name="giasp">
        </div>
        <div class="bot-add">
            <p>Hình ảnh</p>
            <input id="input1" type="file" name="hinh">
        </div>
        <div class="bot-add">
            <p>Mô tả sản phẩm</p>
            <textarea name="mota" id=""></textarea>
        </div>
        <div class="bot-btn">
            <input type="submit" name="themmoi" value="Thêm Mới">
            <input type="reset" value="Nhập Lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
            echo '<div class="notify-ad">' . $thongbao . '</div>';
        }
        ?>
    </form>
</div>
</div>
</div>