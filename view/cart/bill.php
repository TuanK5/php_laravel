<div class="content">
    <form action="index.php?act=billconfirm" method="post">
    <div class="main-content">
        <div class="datvamua">
            <div class="form-container">
                <?php
                    if(isset($_SESSION['user'])){
                        $name=$_SESSION['user']['nameuser'];
                        $address=$_SESSION['user']['address'];
                        $email=$_SESSION['user']['email'];
                        $phone=$_SESSION['user']['phone'];
                    }else{
                        $name="";
                        $address="";
                        $email="";
                        $phone="";
                    }
                ?>
                <h2>Form Đặt Hàng</h2>
                <form action="index.php?act=billconfirm" method="post">
                    <label for="nguoi_dat">Người đặt:</label>
                    <input type="text" id="nguoi_dat" name="name" value="<?=$name?>">

                    <label for="dia_chi">Địa chỉ:</label>
                    <input type="text" id="dia_chi" name="address" value="<?=$address?>">

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?=$email?>">

                    <label for="dien_thoai">Điện thoại:</label>
                    <input type="text" id="dien_thoai" name="phone" value="<?=$phone?>">

                    <input type="submit" value="Gửi đơn hàng">
                </form>
            </div>
            <!-- dfdfsfdsfdsf============================================================== -->
            <div class="form-container">
                <h2>Phương thức thanh toán</h2>
                <div class="checkbox-container">
                    <div class="checkbox-circle">
                        <input type="checkbox" id="tra_tien" value="1" name="pttt" checked>
                        <label for="tra_tien"></label>
                    </div>
                    <label for="tra_tien">Trả tiền khi nhận hàng</label>
                </div>

                <div class="checkbox-container">
                    <div class="checkbox-circle">
                        <input type="checkbox" id="chuyen_khoan" value="2" name="pttt" >
                        <label for="chuyen_khoan"></label>
                    </div>
                    <label for="chuyen_khoan">Chuyển khoản ngân hàng</label>
                </div>

                <div class="checkbox-container">
                    <div class="checkbox-circle">
                        <input type="checkbox" id="thanh_toan_online" value="3" name="pttt" >
                        <label for="thanh_toan_online"></label>
                    </div>
                    <label for="thanh_toan_online">Thanh toán online</label>
                </div>
            </div>
        </div>
        <div class="title-content">Gio Hang</div>
        <div class="row-fomconten">
            <table>
                <?php viewcart(0)?>
                <!-- <?php
                $tong = 0;
                $i = 0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $hinhpath . $cart[2];
                    $tong += $cart[5];
                    $xoagh = '<a href="index.php?act=delcart&idcart=' . $i . '"><button type="button">Xóa</button></a>';
                    echo '
                            <tr>
                            <td class="checkbox-cell"><input type="checkbox"></td>
                            <td><img src="' . $hinh . '"  height="20%" width="20%"></td>
                            <td>' . $cart[1] . '</td>
                            <td>' . $cart[3] . '</td>
                            <td>' . $cart[4] . '</td>
                            <td>' . $cart[5] . '</td>
                            <td class="button-cell">
                            <button type="button">Sửa</button>
                            ' . $xoagh . '
                            </td>
                            </tr>';
                    $i += 1;
                }
                echo '
                        <tr>
                            <td colspan="4">Tong don hang</td>
                            <td>' . $tong . '</td>
                            </td>
                        </tr>';
                ?> -->
                <!-- <tr>
                            <td class="checkbox-cell"><input type="checkbox"></td>
                            <td>1</td>
                            <td><img src=" . $hinhpath . "  height='20%' width='20%'></td>
                            <td>name</td>
                            <td>1gia</td>
                            <td>soluong</td>
                            <td>thanhtien</td>
                            <td class="button-cell">
                            <button type="button">Sửa</button>
                            <button type="button">Xóa</button>
                            </td>
                        </tr> -->
            </table>
            <input type="submit" value="BUY OK ok" name="dongydh">
        </div>
    </div>
    </form>
    <div class="boxphai">
        <?php include "view/baneright.php"; ?>
    </div>
</div>
</div>