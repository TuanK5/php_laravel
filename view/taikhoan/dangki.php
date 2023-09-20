<div class="content">
        <div class="main-content">
            <div class="boxtitle"><strong style="color: red; margin:10%">Trang Dang Ki</strong></div>

                    <div class="login-form">
                        <h2 style="margin-top: 3px; height: 10px; text-align: center;">Đăng Ki</h2>
                        <form action="index.php?act=dangki" method="post">
                            <label for="username">TenDnhap:</label>
                            <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
                            <br>
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                
                            <label for="email">Nhap email:</label>
                            <input type="email" name="email">
                
                            <input type="submit" value="Dang Ki" name="dangki">
                            <input type="reset" value="Nhap Lai">
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
