<?php
function viewcart($del){
    global $img_path;
     $tong=0;
     $i=0;
     if($del==1){
        $xoasp_th='<th>thao tac</th>';
        $xoasp_td='<a href="index.php?act=idcart='.$i.'"><input type="button"  value="xoa"></a>';
    }else{
         $xoasp_th='';
    }
     echo '<tr>
     <th>Hình</th>
     <th>Sản phẩm</th>
     <th>Dung lượng</th>
     <th>Đơn giá</th>
     <th>Số lượng</th>
     <th>Thành tiền</th>
     <th></th>
 </tr>';
    foreach ($_SESSION['mycart'] as $cart){
        $hinh=$img_path.$cart[2];
         $ttien=$cart[4]*$cart[5];
         $tong+=$ttien;
         if($del==1){
             $xoasp_td='<a href="index.php?act=idcart='.$i.'"><input type="button" value="xoa"></a>';
         }else{
             $xoasp_td='';
         }
        
         echo ' 
         <tr>
         <th><img src="'.$hinh.'" id="view"></th>
        <th>'.$cart[1].'</th>
        <th>'.$cart[3].'</th>
        <th>'.$cart[4].'</th>
        <th>'.$cart[5].'</th>
        <th>'.$ttien.'</th>
        <th>'.$xoasp_td.'</th>
        </tr>';
        $i+=1;
     }
     echo '<tr>
     <th colspan="4">Tổng đơn hàng</th>
    
     <th>'.$tong.'</th>
     <th></th>
     </tr>';
}
function bill_chi_tiet($listbill){
    global $img_path;
    $tong=0;
    $i=0;
    
    echo '<tr>
    <th>Hình</th>
    <th>Sản phẩm</th>
    <th>Đơn giá</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    </tr>';
    foreach ($listbill as $cart){
        $hinh=$img_path.$cart['img'];
        $tong+=$cart['thanhtien'];
        echo ' 
        <tr>
        <th><img src="'.$hinh.'" id="view"></th>
        <th>'.$cart['name'].'</th>
        <th>'.$cart['price'].'</th>
        <th>'.$cart['soluong'].'</th>
        <th>'.$cart['thanhtien'].'</th>
        </tr>';
        $i+=1;
    }
    echo '<tr>
    <th colspan="4">tổng sản phẩm</th>
    
    <th>'.$tong.'</th>
    </tr>';
}
function tongdonhang(){
    $tong=0;
    foreach ($_SESSION['mycart'] as $cart){
        $ttien=$cart[4]*$cart['5'];
        $tong+=$ttien;
    }
    return $tong;
}
function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang){
    $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill){
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill){
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($kyw="",$iduser=0){
    $sql="select * from bill where 1";
    if($iduser>0) $sql.=" AND idduser=".$iduser;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.= " order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function delete_bill($id){
    $sql="delete from bill where bill.id=".$id;   
    pdo_execute($sql);
}
function get_ttdh($n){
    switch ($n){
        case '0':
            $tt="đơn hàng mới";
            break;
        case '1':
            $tt="đang xử lí";
            break;
        case '2':
            $tt="đang giao hàng";
            break;
        case '3':
            $tt="hoàn tất";
            break;

        default:
        $stt="đơn hàng mới";
        break;
    }
    return $tt;
}

?>
