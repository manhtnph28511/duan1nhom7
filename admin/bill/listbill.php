<div class="container">
        <div class="row"> 
            <h1>DANH SACH PRODUCTS</h1>
        </div> 
        <div class="content">
            <form action="index.php?act=listbill" method="post">
               <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
               <input type="submit" name="listok" value="OK">
            </form>
            <table>
                <tr>
                   <th></th>
                   <th>Mã đơn hàng</th>
                   <th>Khách hàng</th>
                   <th>Số lượng hàng</th>
                   <th>Giá trị đơn hàng</th>
                   <th>tình trạng đơn hàng</th>
                   <th>Ngày đặt hàng</th>
                   <th>Thao tác</th>
                   <th></th>
                </tr>
                <?php
                foreach($listbill as $bill){
                    extract($bill);
                    $suadh="index.php?act=suadh&id=".$id;
                    $xoadh="index.php?act=xoadh&id=".$id;
                  $kh=$bill["bill_name"].'
                  <br> '.$bill["bill_email"].'
                  <br> '.$bill["bill_address"].'
                  <br> '.$bill["bill_tel"];
                  $countsp=loadall_cart_count($bill["id"]);
                  $ttdh=get_ttdh($bill["bill_status"]);
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>DAM-'.$bill['id'].'</td>
                    <td>'.$kh.'</td>
                    <td>'.$countsp.'</td>
                    <td><strong>'.$bill["total"].'</strong>VND</td>
                    <td>'.$ttdh.'</td>
                    <td>'.$bill["bill_tel"].'</td>
                    <td><a href="'.$suadh.'"><input type="button" value="sua"></a> <a href="'.$xoadh.'"><input type="button" value="xoa"></a></td>

                 </tr>';
                }
                ?>     
            </table>
        </div>
        <div class="chon">
            <input type="button" value="chon tat ca">
            <input type="button" value="bo chon tat ca">
            <input type="button" value="xoa tat ca">
            <a href="index.php?act=addsp"><input type="button" value="nhap them"></a>
        </div>
     </div>