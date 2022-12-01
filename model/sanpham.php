<?php
<<<<<<< HEAD
function insert_sanpham($tensp,$dungluong,$giasp,$hinh,$mota,$iddm){
    $sql="insert into products (name,dungluong,price,img,mota,iddm) values('$tensp','$dungluong','$giasp','$hinh','$mota','$iddm')";
=======
function insert_sanpham($tensp,$giasp,$hinh,$ram,$rom,$color,$mota,$iddm){
    $sql="insert into products (name,price,img,ram,mota,rom,color,iddm) values('$tensp','$giasp','$hinh','$ram','$rom','$color','$mota','$iddm')";
>>>>>>> 6987bbe40b7d635f21c76a05e99dccd2ea95bbb6
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
<<<<<<< HEAD
function loadone_sanpham($id){
    $sql="select *from products where id=".$id;
    $sp=pdo_query_one($sql);
    return $sp;
}
=======
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
function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh,$ram,$rom,$color){
    if($hinh!="")
        $sql="update products set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$hinh."',ram='".$ram."', rom='".$rom."',price='".$color."' where id=".$id;
    else
        $sql="update products set iddm='".$iddm."', name='".$tensp."',price='".$giasp."',mota='".$mota."',ram='".$ram."', rom='".$rom."',price='".$color."' where id=".$id;
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

>>>>>>> 6987bbe40b7d635f21c76a05e99dccd2ea95bbb6
?>