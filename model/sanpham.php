<?php
function insert_sanpham($tensp,$giasp,$hinh,$ram,$rom,$color,$mota,$iddm){
    $sql="insert into products (name,price,img,ram,mota,rom,color,iddm) values('$tensp','$giasp','$hinh','$ram','$rom','$color','$mota','$iddm')";
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
    $sql="select *from products where 1 order by id desc limit 0,9";
    $listsanpham=pdo_query($sql);
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

?>