<?php
function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm){
    $sql="insert into products (name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham(){
    $sql="select *from products order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select *from products where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
?>