<?php
 function viewcart($del){
    global $hinhpath;
    $tong = 0;
    $i=0;
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $hinhpath.$cart[2];
        $tong += $cart[5];
        if($del==1){
            $xoagh_th='<th>Thaotac</th>';
            $xoagh_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><button type="button">Xóa</button></a></td>';
            $suagh_td='<td><a href=""><button type="button">Sửa</button></td>';
            
        }else{
            $xoagh_th='';
            $suagh_td='';
            $xoagh_td='';
        }
        echo '
        <tr>
        <th></th>
        <th>HInh</th>
        <th>San pham</th>
        <th>Don gia</th>
        <th>So luong</th>
        <th>Thanh tien</th>
        '.$xoagh_th.'
        </tr>
                <tr>
                <td class="checkbox-cell"><input type="checkbox"></td>
                <td><img src="' . $hinh . '"  height="20%" width="20%"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $cart[5] . '</td>
       
                '.$suagh_td.'
                '.$xoagh_td.'

                </tr>';
                $i+=1;
    }
    echo '
            <tr>
                <td colspan="4">Tong don hang</td>
                <td>' . $tong . '</td>
                </td>
            </tr>';
 }

 function tongdonhang(){
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $tongtien = $cart[3] *$cart[4];
        $tong += $tongtien;

        }
        return $tong;
 }
 
function insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngaydathang,$tongdonhang){
    $sql = "insert into bill(iduser,billname,billemail,billaddress,billphone,billpttt,ngaydathang,total) values
    ('$iduser','$name','$email','$address','$phone','$pttt','$ngaydathang','$tongdonhang')";
    return  pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$image,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "insert into cart(iduser,idpro,image,name,price,soluong,thanhtien,idbill) values
    ('$iduser','$idpro','$image','$name','$price','$soluong','$thanhtien','$idbill')";
    return  pdo_execute($sql);
}
function loadone_bill($id){
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill){
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}

function show_chitiet_bill($listbill){
    global $hinhpath;
    $tong = 0;
    $i=0;
    foreach ($listbill as $cart) {
        $hinh = $hinhpath.$cart['image'];
        $tong+=$cart['thanhtien'];

        echo '
        <tr>
        <th></th>
        <th>HInh</th>
        <th>San pham</th>
        <th>Don gia</th>
        <th>So luong</th>
        <th>Thanh tien</th>
        </tr>
                <tr>
                <td class="checkbox-cell"><input type="checkbox"></td>
                <td><img src="' . $hinh . '"  height="20%" width="20%"></td>
                <td>' . $cart['name'] . '</td>
                <td>' . $cart['price'] . '</td>
                <td>' . $cart['soluong'] . '</td>
                <td>' . $cart['thanhtien'] . '</td>
                </tr>';
                $i+=1;
    }
    echo '
            <tr>
                <td colspan="4">Tong don hang</td>
                <td>' . $tong . '</td>
                </td>
            </tr>';
 }
// ket hợp giữa bill ở trang chủ và bill ở admin  và kết hợp tìm kiếm ở admin  ds đơn hàng
 function loadall_bill($kyw="",$iduser=0){
    $sql="select * from bill where 1";
    if($iduser>0) $sql.=" AND iduser=".$iduser;
    if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
    $sql.=" order by id desc";
    $listbill=pdo_query($sql);
    return $listbill;
}
function get_billstatus($n){
    switch ($n) {
        case '0':
            $billstatus="don hang moi";
        break;
        case '1':
            $billstatus="dang xu ly";
        break;
        case '2':
            $billstatus="dang giao hang";
        break;
        case '3':
            $billstatus="da giao hang";
        break;
        default:
        $billstatus="don hang moi";
            break;    
    }
    return $billstatus;
}
function loadall_cart_count($idbill){
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return count($bill);
}

function loadall_tke(){
    $sql="select danhmuc.id as madm,danhmuc.name as tendm, count(sanpham.id) as countsp,min(sanpham.price) as minprice,
    max(sanpham.price) as maxprice,avg(sanpham.price) as avgprice";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" group by danhmuc.id order by danhmuc.id desc";
    $listke=pdo_query($sql);
    return $listke;
}
?>