<div class="container">
        <div class="row"> 
            <h1>DANH SÁCH PRODUCTS</h1>
        </div> 
        <div class="content">
            <form action="index.php?act=listsp" method="post">
               <input type="text" name="kyw">
               <select name="iddm" >
                <option value="0" selected>All</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc){
                        extract($danhmuc);
                        echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
               </select>
               <input type="submit" name="listok" value="OK">
            </form>
            <table>
                <tr>
                   <th></th>
                   <th>mã loại</th>
                   <th>tên sản phẩm</th>
                   <th>dung lượng</th>
                   <th>màu </th>
                   <th>hình</th>
                   <th>giá</th>
                   <th>mô tả</th>
                   <th>lượt xem</th>
                   <th></th>
                </tr>
                <?php
                foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../uploadimg/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='60'>";
                    }else{
                        $hinh="no photo";
                    }
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$dungluong.','.$dungluong2.'</td>
                    <td>'.$color.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$mota.'</td>
                    <td>'.$luotxem.'</td>
                    <td><a href="'.$suasp.'"><input type="button" value="sửa"></a> <a href="'.$xoasp.'"><input type="button" value="xóa"></a></td>
                 </tr>';
                }
                ?>     
            </table>
        </div>
        <div class="chon">
            <input type="button" value="chon tat ca">
            <input type="button" value="bo chon tat ca">
            <input type="button" value="xoa tat ca">
            <a href="index.php?act=addsp"><input type="button" value="nhập thêm"></a>
        </div>
     </div>