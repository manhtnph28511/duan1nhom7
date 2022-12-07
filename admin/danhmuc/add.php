<div class="bot">
    <div class="bot-title">
        <h1>Thêm mới loại hàng hóa</h1>
    </div>
    <div class="bot-content">
        <form action="index.php?act=adddm" method="post">
            <div class="bot-input">
                <p>Mã Loại</p>
                <input id="input" type="text" name="maloai" disabled>
            </div>
            <div class="bot-input">
                <p>Tên Loại</p>
                <input id="input" type="text" name="tenloai">
            </div>
            <div class="bot-btn">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listdm"><input type="button" value="Danh Sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo '<div class="notify-ad">' . $thongbao . '</div>';
            ?>
        </form>
    </div>
</div>
</div>