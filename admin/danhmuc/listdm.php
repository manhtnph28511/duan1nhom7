<div class="container">
        <div class="row">
            <h1>DANH SACH</h1>
        </div>
        <div class="content">
            <table>
                <tr>
                   <th></th>
                   <th>ma loai</th>
                   <th>ten loai</th>
                   <th></th>
                </tr>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadm.'"><input type="button" value="sua"></a> <a href="'.$xoadm.'"><input type="button" value="xoa"></a></td>
                 </tr>';
                }
                ?>     
            </table>
        </div>
        <div class="chon">
            <input type="button" value="chon tat ca">
            <input type="button" value="bo chon tat ca">
            <input type="button" value="xoa tat ca">
            <a href="index.php?act=adddm"><input type="button" value="nhap them"></a>
        </div>
    </div>