<?php
function loadall_thongke(){
    $sql="select danhmuc.id as madm,danhmuc.name as tendm,count(products.id) as countsp, min(products.price) as minprice, max(products.price) as maxprice , avg(products.price) as avgprice";
    $sql.=" from products left join danhmuc on danhmuc.id=products.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listtk= pdo_query($sql);
    return $listtk;
}
?>