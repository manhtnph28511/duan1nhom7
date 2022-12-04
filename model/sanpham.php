<?php
function insert_sanpham($tensp,$giasp,$hinh,$dungluong,$dungluong2,$mota,$iddm){
    $sql="insert into products (name,price,img,dungluong,dungluong2,mota,iddm) values('$tensp','$giasp','$hinh','$dungluong','$dungluong2','$mota','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from products where 1";
    if($kyw!=""){
        $sql.=" and name like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham= pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home(){
    $sql="select *from products where 1 order by id desc limit 0,95";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_top10(){
    $sql="select * from products where 1 order by luotxem desc limit 0,5";
    $listsanpham= pdo_query($sql);
    return $listsanpham;
}
function delete_sanpham($id){
    $sql="delete from products where id=".$id;   
    pdo_execute($sql);
}
function loadone_sanpham($id){
    $sql="select * from products where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_sanpham($id,$tensp,$giasp,$hinh,$dungluong,$dungluong2,$mota,$iddm){
    if($hinh!="")
        $sql="update products set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',img='".$hinh."',dungluong='".$dungluong."', dungluong2='".$dungluong2."',mota='".$mota."' where id=".$id;
    else
    $sql="update products set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',dungluong='".$dungluong."', dungluong2='".$dungluong2."',mota='".$mota."' where id=".$id;
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if($iddm>0){
        $sql="select * from danhmuc where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}

?>