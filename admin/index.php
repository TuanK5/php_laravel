<?php
include "../model/pdo.php";
include "../model/danhmucmd.php";
include "../model/sanphammd.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/cart.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        //Danhmuc---------------dmdmdmdmmdmdmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdmdmdm
// CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
        case 'addm':
            //kiểm tra xem người dùng có click cào nút add hay không
            if (isset($_POST['themmoidm']) && ($_POST['themmoidm'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "them thanh cong";
            }
            include "danhmuc/add.php";
            break;
// RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
        case 'addlistm':
            //load dữ liệu từ database lên lấy tất cả
            $listdm=loadall_danhmuc();
            include "danhmuc/listdm.php";   # code...
            break;
// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
        case 'xoadm':
            //xoa danh muc theo id
            if (isset($_GET['id']) && ($_GET['id'] > 0)); {
                delete_danhmuc($_GET['id']);
            }
            $listdm=loadall_danhmuc();
            include "danhmuc/listdm.php";                 # code...
            break;
// UUUUUUUUUUUUUUUUUUUUUUUUUPUPUPUPPUPUPUPUPPUUPPUUUUUUUUUUUUUUUUUUUUUPPPPPPPPPPPPPPPPPPPPPPPPPPPPUUPPPPP
        case 'suadm':
            if (isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/updm.php";              # code...
            break;
        case 'updm':
            if (isset($_POST['capnhatdm'])&&($_POST['capnhatdm'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($tenloai,$id);
                $thongbao = "cap nhat thanh cong thanh cong";
            }
            $listdm=loadall_danhmuc();
                include "danhmuc/listdm.php";   
                # code...
                break;


                //sanpham---------------spppppppppppppppppsppppppppppppppspspspspspspsppppppppppppppspspspspsps
// CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
case 'addsp':
    //kiểm tra xem người dùng có click cào nút add hay không
    if (isset($_POST['themmoisp']) && ($_POST['themmoisp'])) {
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $motasp = $_POST['motasp'];
        $hinh=$_FILES['hinhsp']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
        if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
            //echo "The file ". htmlspecialchars( basename( $_FILES["hinhsp"]["name"])). " has been uploaded.";
          } else {
            //echo "Sorry, there was an error uploading your file.";
        }

        insert_sanpham($tensp,$giasp,$hinh,$motasp,$iddm);
        $thongbao = "them thanh cong"; 
    }
    $listdm=loadall_danhmuc();
    include "sanpham/add.php";
    break;
// RRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRR
case 'addlistsp': //list san pham add
    if (isset($_POST['listok'])&&($_POST['listok'])){
        $kyword=$_POST['kyword'];
        $iddm=$_POST['iddm'];
    }else{
        // khi chưa click go thì chưa có giá trị để nó tính toán nên lỗi vì vậy phải set nó rõng và bằng 0
        $kyword='';
        $iddm=0;
    }
    //load dữ liệu từ database lên lấy tất cả
    $listdm=loadall_danhmuc(); //dùng để list danh mục thể loại của sản phẩm cho mình chọn
    $listsp=loadall_sanpham($kyword,$iddm);
    include "sanpham/listdm.php";   # code...
    break;
// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
case 'xoasp':
    //xoa danh muc theo id
    if (isset($_GET['id']) && ($_GET['id'] > 0)); {
        delete_sanpham($_GET['id']);
    }
    $listsp=loadall_sanpham("",0);
    include "sanpham/listdm.php";                 # code...
    break;
// UUUUUUUUUUUUUUUUUUUUUUUUUPUPUPUPPUPUPUPUPPUUPPUUUUUUUUUUUUUUUUUUUUUPPPPPPPPPPPPPPPPPPPPPPPPPPPPUUPPPPP
case 'suasp':
    if (isset($_GET['id'])&&($_GET['id']>0)){
        $sp=loadone_sanpham($_GET['id']);
    }
    $listdm=loadall_danhmuc();
    include "sanpham/updm.php";              # code...
    break;
case 'upsp':
    if (isset($_POST['capnhatsp'])&&($_POST['capnhatsp'])) {
        $id = $_POST['id'];//id cua hidden day
        $iddm = $_POST['iddm'];
        $tensp = $_POST['tensp'];
        $giasp = $_POST['giasp'];
        $motasp = $_POST['motasp'];
        $hinh=$_FILES['hinhsp']['name'];
        $target_dir = "../upload/";
        $target_file = $target_dir . basename($_FILES["hinhsp"]["name"]);
        if (move_uploaded_file($_FILES["hinhsp"]["tmp_name"], $target_file)) {
            //echo "The file ". htmlspecialchars( basename( $_FILES["hinhsp"]["name"])). " has been uploaded.";
          } else {
            //echo "Sorry, there was an error uploading your file.";
        }
        update_sanpham($id,$iddm,$tensp,$giasp,$motasp,$hinh);
        $thongbao = "cap nhat thanh cong thanh cong";
    }
    $listdm=loadall_danhmuc();
    $listsp=loadall_sanpham("",0);
        include "sanpham/listdm.php";   
        # code...
        break;
//tai khoan -------------------khac hang===============================addmin tai khoan tai khoan=============
case 'listtk':
    $listtk=loadall_tkhoan();
    include "taikhoan/listtk.php";
    break;
//========================binh luan================================
case 'dsbl':
    $listbl=loadall_binhluan(0);
    include "binhluan/listbl.php";
    break;
//======================danh sasch don hang admin listbill admin
    case 'listbill':
        if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
            $kyw=$_POST['kyw'];
        }else{
            $kyw="";
        }
        $listbill=loadall_bill($kyw,0); 
        include "bill/listbill.php";
        break;
//=====================thong ke===================================thongke=========
case 'thongke':
    $listtke=loadall_tke();
    include "thongke/thongke.php";
    break;
// bieu do =======================================bieu do --------------------------
case 'bieudo':
    $listtke=loadall_tke();
    include "thongke/bieudo.php";
    break;
//===========?????????????????????
include "footer.php";
        default:
            # code...
            break;
    }
} else {
    include "home.php";
}

