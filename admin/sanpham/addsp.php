<div class="container">
        <div class="row">
            <div class="row-title">
                <h1>thêm mới sản phẩm</h1>
            </div>
            <div class="row-content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row-mb10">
                       Danh mục<br>
                        <select name="iddm">
                            <?php
                            foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                            
                        </select>
                    </div>
                    <div class="row-mb10">
                        tên sản phẩm <br>
                        <input id="input" type="text" name="tensp" >
                    </div>
                    <div class="row-mb10">
                        dung lượng <br>
                        <input id="input" type="text" name="dungluong" >
                    </div>
                    <div class="row-mb10">
                        dung lượng 2 <br>
                        <input id="input" type="text" name="dungluong2" >
                    </div>
                    <div class="row-mb10">
                        màu <br>
                        <input id="input" type="text" name="color" >
                    </div>
                    <div class="row-mb10">
                        giá sản phẩm <br>
                        <input id="input" type="text" name="giasp" >
                    </div>
                    <div class="row-mb9">
                        hình <br>
                        <input id="input1" type="file" name="hinh" >
                    </div>
                    ram <br>
                        <input id="input" type="text" name="ram" >
                    </div>
                    <div class="row-mb10">
                        rom<br>
                        <input id="input" type="text" name="rom" >
                    </div>
                    <div class="row-mb9">
                     color <br>
                        <input id="input1" type="text" name="color" >
                    </div>
                    <div class="row-mb7">
                        mô tả <br>
                       <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row-mb8">
                        <input type="submit" name="themmoi" value="thêm mới">
                        <input type="reset" value="nhap lai">
                        <a href="index.php?act=listsp"><input type="button" value="danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div> 