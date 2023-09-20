<div class="content">
        <div class="main-content">
            <div class="boxtitle"><strong style="color: red; margin:10%">Trang Tong Tin Tai  Khoan</strong></div>

                    <div class="login-form">
                        <h2 style="margin-top: 3px; height: 10px; text-align: center;">View&Update in4</h2>
                        <?php
                        if (isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                            extract($_SESSION['user']);
                        }
                        ?>
                        <form action="index.php?act=capnhattk" method="post">
                            <label for="username">TenDnhap:</label>
                            <input type="text" id="username" name="username" value="<?=$nameuser?>">
                            <br>
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" value="<?=$pass?>">
                            <br>
                            <label for="email">Nh email:</label>
                            <input type="text" name="email" value="<?=$email?>">
                            <br>
                            <label for="password">Address:</label>
                            <input type="text" id="address" name="address" value="<?=$address?>">
                            <br>
                            <label for="email">SDT taik:</label>
                            <input type="text" name="phone" value="<?=$phone?>">
                <!-- //input hiden --> <input type="hidden" name="idus" value="<?=$idus?>">
                            <input type="submit" value="UPDATE" name="capnhattk">
                            <input type="reset" value="Nhap Lai">
                            <hr>
                            <input type="submit" value="XoaTK" name="xoatk">
                        </form>
                        <?php
                            if (isset($thongbao)&&($thongbao!="")){
                                echo $thongbao;
                            } 
                        ?>
                    </div>
        </div>
        <?php
         include "view/baneright.php"
        ?>
    </div>
