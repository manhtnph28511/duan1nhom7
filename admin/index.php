<?php
  include "../model/pdo.php";
  include "header.php";
  include "../model/danhmuc.php";
  include "../model/sanpham.php";
  
  if((isset($_GET['act']))&&($_GET['act']!="")){
    $act=$_GET['act'];
    switch ($act) {
        case 'adddm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                $sql="insert into danhmuc(name) values('$tenloai')";
                pdo_execute($sql);
                $thongbao="thanh cong";
            }
            
            include "danhmuc/add.php";
            break;
        case 'listdm':
          $sql="select * from danhmuc order by name";
          $listdanhmuc=pdo_query($sql);
          include "danhmuc/listdm.php";
          break;
        //sản phẩm
        case 'addsp':
          if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
            $iddm=$_POST['iddm'];
            $tensp=$_POST['tensp'];
            $giasp=$_POST['giasp'];
            $mota=$_POST['mota'];
            $hinh=$_FILES['hinh']['name'];
            $target_dir = "../uploadimg/";
            $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
            if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                
              } else {
                
              }
            insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
            $thongbao="thêm thành công";
          }
          $listdanhmuc=loadall_danhmuc();
          include "sanpham/addsp.php";
          break;
        case 'listsp':
        $listsanpham=loadall_sanpham();
        include "sanpham/listsp.php";
        break;
        default:
        include "home.php";
            break;
    }
  }else{
  
  include "home.php";
  }
  include "footer.php";
?>