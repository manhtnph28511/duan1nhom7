<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../uploadimg/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80'>";
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
                    <div class="row mb">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb">
                        Giá sản phẩm <br>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb">
                        Hình <br>
                        <input type="file" name="hinh" id="">
                        <?=$hinh?>
                    </div>
                    <div class="row mb">
                        Mô tả <br>
                        <textarea name="mota"  cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row mb">
                        <br>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>