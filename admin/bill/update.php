<?php
    if(is_array($donhang)){
        extract($donhang);
    }
?>
<div class="row">
            <div class="row frmtitle">
                <H1>CẬP NHẬP LOẠI HÀNG HÓA</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatedh" method="post" enctype="multipart/form-data">
                <div class="row-mb10">
                        ten san pham <br>
                        <input id="input" type="text" name="tensp" value="<?=$$bill["bill_tel"]?>">
                    </div>
                    <div class="row-mb10">
                        gia san pham <br>
                        <input id="input" type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row-mb9">
                        hinh <br>
                        <input id="input1" type="file" name="hinh">
                        <?=$hinh?>
                    </div>
                    <div class="row-mb7">
                        mo ta <br>
                       <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row-mb8">
                        <input type="hidden" name="id" value="<?=$idsp?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="nhap lai">
                        <a href="index.php?act=listsp"><input type="button" value="danh sach"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>