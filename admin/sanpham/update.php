<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../uploadimg/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='100' width='200'>";
    }else{
        $hinh="no photo";
    }
?>
<div class="row">
            <div class="row frmtitle">
                <H1>CẬP NHẬP LOẠI HÀNG HÓA</H1>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="row mb">
            <select name="iddm" >
                <option value="0" selected>All</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        if($iddm==$id) $s="selected";else $s="";
                        echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                    }
                    ?> 
               </select>
                </div>
                <div class="row-mb10">
                        ten san pham <br>
                        <input id="input" type="text" name="tensp" value="<?=$name?>">
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
                    <div class="row-mb10">
                    dung luong <br>
                        <input id="input" type="text" name="dungluong" value="<?=$dungluong?>">
                    </div>
                    <div class="row-mb10">
                    dung luong 2<br>
                        <input id="input" type="text" name="dungluong2" value="<?=$dungluong2?>">
                    </div>
                    <div class="row-mb7">
                        mo ta <br>
                       <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row-mb8">
                        <input type="hidden" name="id" value="<?=$id?>">
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