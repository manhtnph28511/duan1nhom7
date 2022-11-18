<div class="container">
        <div class="row">
            <div class="row-title">
                <h1>them moi san pham</h1>
            </div>
            <div class="row-content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row-mb10">
                       Danh muc<br>
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
                        ten san pham <br>
                        <input id="input" type="text" name="tensp" >
                    </div>
                    <div class="row-mb10">
                        gia san pham <br>
                        <input id="input" type="text" name="giasp" >
                    </div>
                    <div class="row-mb9">
                        hinh <br>
                        <input id="input1" type="file" name="hinh" >
                    </div>
                    <div class="row-mb7">
                        mo ta <br>
                       <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row-mb8">
                        <input type="submit" name="themmoi" value="them moi">
                        <input type="reset" value="nhap lai">
                        <a href="index.php?act=listsp"><input type="button" value="danh sach"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))
                    echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div> 