<?php
session_start();
include "./model/pdo.php";
include "./model/sanphammd.php";
include "./view/header.php";
include "./varglobal.php";
include "./model/danhmucmd.php";
include "./model/taikhoan.php";
include "./model/cart.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];
$spnew=loadall_sanpham_home();
$loaddm=loadall_danhmuc();
$dstop=loadall_sanpham_topyt();
//thay doi trang home
    if((isset($_GET['act']))&&($_GET['act']!="")){
     $act=$_GET['act'];
     switch ($act) {
        case 'gioithieusp':
            # code...
        include "./view/gioithieusp.php";
        break;
//==================================================
        case 'dangxuat':
            session_unset();
        include "./view/home.php";
        break;
//==================================================
                case 'capnhattk':
                    if(isset($_POST['capnhattk']) && ($_POST['capnhattk'])){
                        $nameuser=$_POST['username'];
                        $pass=$_POST['password'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $phone=$_POST['phone'];
                        $idus=$_POST['idus'];
                        update_user($idus,$nameuser,$pass,$email,$address,$phone);
                        $_SESSION['user']=loadone_checkuser($nameuser,$pass);
                        header('location:index.php?act=capnhattk');
                    }
                include "./view/taikhoan/capnhattk.php";
break;
//======================================
        case 'quenmk':
            # code...
            if((isset($_POST['qmk']))&&($_POST['qmk'])){
            $email=$_POST['email'];
            // $phone=$_POST['phone'];
            $checkemail=loadone_checkemail($email);
                if(is_array($checkemail)){
                $thongbao="mat khau cua ban la ".$checkemail['pass'];
                }else{
                $thongbao="email khong ton tai";
                }
            }
        include "./view/taikhoan/quenmk.php";
        break;
//======================================================================================================
        case 'dangki':
            # code...
            if((isset($_POST['dangki']))&&($_POST['dangki'])){
            $nameuser=$_POST['username'];
            $pass=$_POST['password'];
            $email=$_POST['email'];
            $addtkdk=insert_taikhoan($nameuser,$pass,$email);
            $thongbao="da dangki thanh cong, vui long dang  nhap de  thuc hien comments and dathang";
            }
        include "./view/taikhoan/dangki.php";
        break;
//=====================================================================================================
        case 'dangnhap':
            # code...
            if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                $nameuser=$_POST['username'];
                $pass=$_POST['password'];
                // $email=$_POST['email'];
                $checkuser=loadone_checkuser($nameuser,$pass);
                if(is_array($checkuser)){
                $_SESSION['user']=$checkuser;
                //$thongbao="da dang nhap thanh cong";
                header('location:index.php');
                }else{ $thongbao="tai khoan khong ton tai";
                }
            }
        include "./view/taikhoan/dangki.php";
        break;
//-----------------------------------------------------------------            
            case 'sanphamct':
                # code...
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $id=$_GET['idsp'];
                    $dsct=loadone_sanpham($id);
                    extract($dsct);
                    $spcxloai=loadone_sanpham_cxloai($id,$iddm);
                    include "./view/chitietsp.php";
                }else{
                    include "./view/home.php";
                    //neu ko co thi error or comback home page
                }
            break;
//========================================================================================================
            case 'sanpham':
                # code tim kiem san pham
                if(isset($_POST['kyword'])&&($_POST['kyword']!="")){
                    $kyword=$_POST['kyword'];
                }else{
                    $kyword="";
                }
                # code trang san pham
                // $dsct=loadone_sanpham($id);
                // extract($dsct);
                // $spcxloai=loadone_sanpham_cxloai($id,$iddm);
                if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                    $iddm=$_GET['iddm'];
                }else{
                    $iddm=0;
                    //include "./view/home.php";
                    //neu ko co thi error or comback home page
                }
                $dssp=loadall_sanpham($kyword,$iddm);
                $tdmsp=loadone_sanpham_tdm($iddm);
                include "./view/trangsp.php";
            break;
//============================================================================
        case 'addtocart':
            if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $image=$_POST['image'];
                $price=$_POST['price'];
                $soluong=1;    
                $thanhtien=$soluong*$price;          
                $spadd=[$id,$name,$image,$price,$soluong,$thanhtien];
                array_push($_SESSION['mycart'],$spadd);
            }
        include "./view/cart/viewcart.php";
        break;
        case 'delcart':
            
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }else{
                $_SESSION['mycart']=[];
            }
            include './view/cart/viewcart.php';
            //header('location:index.php?act=viewcart');
        break;
        break;
        // case 'viewcart':
        //     include './view/cart/viewcart.php';
        // break;
//cart cart cart cart cart cart cart cart cart cart cart cart cart cart cart cart cart cart
case 'bill':
include './view/cart/bill.php';
break;
    case 'billconfirm':
        //tao bill
        if(isset($_POST['dongydh']) && ($_POST['dongydh'])){
            if($_SESSION['user']) $iduser=$_SESSION['user']['idus'];
            else $id=0;
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $phone=$_POST['phone'];
            $ngaydathang=date('h:i:sa d/m/Y');
            $tongdonhang=tongdonhang();
            $pttt=$_POST['pttt'];
            $idbill=insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang);
            //insert into cart : $session['mycart'] & idbill
            foreach ($_SESSION['mycart'] as $cart) {
                // $spadd=[$id0,$name1,$image2,$price3,$soluong4,$thanhtien5];
                // array_push($_SESSION['mycart'],$spadd);
                insert_cart($_SESSION['user']['idus'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
            }
        }
        $bill=loadone_bill($idbill);
        $billct=loadall_cart($idbill);
    include './view/cart/billconfirm.php';
    break;
case 'mybill':
    $listbill=loadall_bill($_SESSION['user']['idus']);
include './view/cart/mybill.php';
break;
//????????????????????????????????????????????????????????????????????????????????????????????
        default:
            # code...
        break;
     }
    }else{
        include "./view/home.php";
    }

include "./view/footer.php";
?>