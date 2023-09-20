<div class="content">
    <div class="main-content">
        <h1 style="text-align: center; width:100%; color: red;">Cam on quy khac da dat hang</h1>
    <?php
        if(isset($bill)&&(is_array($bill))){
            extract($bill);
        }
    ?>
        <div class="mdhang">
        <h3 style="text-align: center; width:100%; color: red;">MA DH:
        <span style="text-align: center; width:100%; color: #000;"><?=$bill['id'];?></span>
        <h3 style="text-align: center; width:100%; color: red;">Ngay dat hang:   
        <span style="text-align: center; width:100%; color: #000;"><?=$bill['ngaydathang'];?></span> 
        <h3 style="text-align: center; width:100%; color: red;">Phuong thuc thanh toan: 
        <span style="text-align: center; width:100%; color: #000;"><?=$bill['billpttt'];?></span>    
        <h3 style="text-align: center; width:100%; color: red;">Tong don hang: 
        <span style="text-align: center; width:100%; color: #000;"><?=$bill['total'];?></span>   
        </h3>
        </div>
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
                <h2>Thong tin Đặt Hàng</h2>
                <form action="submit.php" method="post">
                    <label for="nguoi_dat">Người đặt:</label>
                    <input type="text" id="nguoi_dat" name="name" value="<?=$bill['billname'];?>">

                    <label for="dia_chi">Địa chỉ:</label>
                    <input type="text" id="dia_chi" name="address" value="<?=$bill['billaddress'];?>">

                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" value="<?=$bill['billemail'];?>">

                    <label for="dien_thoai">Điện thoại:</label>
                    <input type="text" id="dien_thoai" name="phone" value="<?=$bill['billphone'];?>">
                </form>
            </div>
            <!-- dfdfsfdsfdsf============================================================== -->
            <div class="form-container">
                <h2>Phương thức thanh toán</h2>
                <div class="checkbox-container">
                    <div class="checkbox-circle">
                        <input type="checkbox" id="tra_tien" name="tra_tien" checked>
                        <label for="tra_tien"></label>
                    </div>
                    <label for="tra_tien">Trả tiền khi nhận hàng</label>
                </div>
            </div>
        </div>
        <div class="title-content">Thong tin gio hang</div>
        <div class="row-fomconten">
            <table>
                <?php show_chitiet_bill($billct)?>

            </table>
        </div>
    </div>
    <div class="boxphai">
        <?php include "view/baneright.php"; ?>
    </div>
</div>
</div>