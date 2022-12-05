<?php
   session_start();
  include "model/taikhoan.php";
  include "model/cart.php";
  include "view/header.php";
  include "model/sanpham.php";
  include "model/pdo.php";
  include "global.php";
  include "model/danhmuc.php";
  
  if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
  $dsdm=loadall_danhmuc();
  $spnew=loadall_sanpham_home();
  $dstop10=loadall_sanpham_top10();
  if((isset($_GET['act']))&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch ($act) {
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw=$_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm=($_GET['iddm']);   
            }else{
                $iddm=0;
            } 
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "view/sanpham.php";
            break;

        case 'sanphamct':
             if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                 $id=$_GET['idsp'];
                $onesp=loadone_sanpham($id);
                include "view/sanphamct.php";
             }else{
                 include "view/home.php";
             }
            break;
            
        case 'dangki':
            if(isset($_POST['dangki'])&&($_POST['dangki'])){
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao="dang ki thanh cong";
            }
                include "view/taikhoan/dangki.php";
                break;
        case 'dangnhap':
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $checkuser=checkuser($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    header('Location:index.php');
                    // $thongbao="dang nhap thanh cong";
                }else{
                    $thongbao="tai khoan ko ton tai dang ki lai";
            }
        }
                include "view/taikhoan/dangnhap.php";
                break;
            case 'edittaikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $address=$_POST['address'];
                    $email=$_POST['email'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('Location:index.php?act=edittaikhoan');
                }
                    include "view/taikhoan/edittaikhoan.php";
                    break;
            case 'thoat':
                session_unset();
                header('location:index.php');
                break;
            case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $img=$_POST['img'];
                    $dungluong=$_POST['dungluong'];
                    $price=$_POST['price'];
                    $soluong=1;
                    $ttien=$soluong*$price;
                    $spadd=[$id,$name,$img,$dungluong,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);
                    
                }
                include "view/cart/viewcart.php";
                break;
        // case 'billcomfirm':
        //     if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
        //         if(isset($_SESSION['user'])) $iduser=$_SESSION['user']['id'];
        //         else $id=0;
        //         $name=$_POST['name'];
        //         $email=$_POST['email'];
        //         $address=$_POST['address'];
        //         $tel=$_POST['tel'];
        //         $pttt=$_POST['pttt'];
        //         $ngaydathang=date('h:i:sa d/m/Y');
        //         $tongdonhang=tongdonhang();

        //         $idbill=insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang);
           
        //     foreach ($_SESSION['mycart'] as $cart){
        //         insert_cart($_SESSION['user']['id'],$cart['0'],$cart['2'],$cart['1'],$cart['3'],$cart['4'],$cart['5'],$idbill);
        //     }
        //     $_SESSION['cart']=[];

        //     }
        //     $bill=loadone_bill($idbill);
        //     $billct=loadall_cart($idbill);
        //     include "view/cart/billcomfirm.php";
        //     break;
        case 'delcart':
            if(isset($_GET['idcart'])){
              array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
            
         
        case 'mybill':
            $listbill=loadall_bill($_SESSION['user']['id']);
            include "view/cart/mybill.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'danhmuc':
            include "view/danhmuc.php";
            break;
        default:
        include "view/home.php";
        break;
     }
  }else{
  include "view/home.php";
  }
  include "view/footer.php";
?>