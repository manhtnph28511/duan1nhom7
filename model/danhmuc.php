<?php
function loadall_danhmuc(){
    $sql="select *from danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id){
    $sql="select *from danhmuc where id=".$id;
    $dm=pdo_query_one($sql);
    return $dm;
}
function insert_danhmuc($tenloai){
    $sql="insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
?>