<div class="container">
        <div class="row">
            <div class="row-title">
                <h1>thêm mới loại hàng hóa</h1>
            </div>
            <div class="row-content">
                <form action="index.php?act=adddm" method="post">
                    <div class="row-mb10">
                        mã loại <br>
                        <input id="input" type="text" name="maloai" disabled>
                    </div>
                    <div class="row-mb10">
                       tên loại <br>
                        <input id="input" type="text" name="tenloai" >
                    </div>
                    <div class="row-mb10">
                        <input type="submit" name="themmoi" value="thêm mới">
                        <input type="reset" value="nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div> 