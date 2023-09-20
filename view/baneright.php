<div class="slibar-content">
            <div class="slidebar">
                <div class="slidebar-box1">
                    <div class="boxtitle">Tài khoản</div>
                    <?php
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                    ?>
                            <!-- Tài khoản content goes here -->
                    <div class="login-formm">
                        <form action="">
                            <h2 style="margin-top: 3px; height: 10px; text-align: center;"> Welcome <?=$nameuser?></h2>
                            <div class="links">
                            <a href="index.php?act=capnhattk">Xem va Cap Nhat in4 Tai khaon for You</a> <br>
<?php
    if($role==1){
?>                                
            <a href="../admin/index.php">Đăng Nhap admin</a> <br>
<?php }?>
                                <a href="index.php?act=mybill">Don hang cua toi</a> <br>
                                <a href="index.php?act=quenmk">Quên mật khẩu</a> <br>
                                <a href="index.php?act=dangxuat">Đăng Xuất</a>
                            </div>
                        </form>
                    </div>

                    <?php
                    }else{
                    ?>

                    <!-- Tài khoản content goes here -->
                    <div class="login-form">
                        <h2 style="margin-top: 3px; height: 10px; text-align: center;">Đăng nhập</h2>
                        <form action="index.php?act=dangnhap"  method="post">
                            <label for="username">Tên đăng nhập:</label>
                            <input type="text" id="username" name="username" placeholder="Nhập tên đăng nhập">
                
                            <label for="password">Mật khẩu:</label>
                            <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
                
                            <label for="remember">Ghi nhớ mật khẩu:</label>
                            <input type="checkbox" id="remember" name="remember">
                
                            <input type="submit" value="Đăng nhập" name="dangnhap">
                
                            <div class="links">
                                <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                <a href="index.php?act=dangki">Đăng kí tài khoản</a>
                            </div>
                        </form>
                    </div>
                    <?php } ?>

                </div>
    
                <div class="slidebar-box2">
                <h3>Danh mục</h3>
                <!-- Danh mục content goes here -->
                <div class="category-box">
                    <h2>Danh Mục</h2>
                    <div class="search-box">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyword" placeholder="Tìm kiếm...">
                            <input type="submit" name="timkim" value="Tìm Kiem">
                        </form>
                    </div>
                    <ul>
                        <?php
                        foreach ($loaddm as $loaddm) {
                            extract($loaddm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo '<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                        }
                        ?>
                        <!-- <li><a href="">Đồng hồ đeo tay</a></li>
                        <li><a href="">Máy tính sách tay</a></li>
                        <li><a href="">Máy ảnh</a></li>
                        <li><a href="">Đồng hồ đeo tay</a></li>
                        <li><a href="">Máy tính sách tay</a></li>
                        <li><a href="">Máy ảnh</a></li> -->
                    </ul>
                </div>
            </div>

            <div class="slidebar-box3">
                <h3>Top 10 yêu thích</h3>
                <!-- Top 10 yêu thích content goes here -->
                <div class="top-10-box">
                    <h2>Top 10 yêu thích</h2>                 
                    <ul>
                    <?php
                        foreach($dstop as $dstop) {
                            extract($dstop);
                            $linksptop="index.php?act=sanphamct&idsp=".$id;
                            $hinh = $hinhpath.$image;
                            echo ' <li>
                            <div class="category-icon phone-icon"><img src="'.$hinh.'" alt="Phone 5"></div>
                            <a href="'.$linksptop.'">'.$name.'</a>
                            </li>';
                        }
                    ?>
                        <!-- <li>
                            <div class="category-icon watch-icon"><img src="../css/image/download(2).jpg" alt="Phone 5"></div>
                            <a href="">Đồng hồ đeo tay</a>
                        </li>
                        <li>
                            <div class="category-icon phone-icon"><img src="phone5.jpg" alt="Phone 5"></div>
                            <a href="">Đồng hồ đeo tay</a>
                        </li>
                        <li>
                            <div class="category-icon watch-icon"><img src="phone5.jpg" alt="Phone 5"></div>
                            <a href="">Đồng hồ đeo tay</a>
                        </li>
                        <li>
                            <div class="category-icon phone-icon"><img src="phone5.jpg" alt="Phone 5"></div>
                            Máy
                        </li>
                        <li>
                            <div class="category-icon watch-icon"><img src="phone5.jpg" alt="Phone 5"></div>
                            <a href="">Đồng hồ đeo tay</a>
                        </li> -->
                        <!--Thêm các mục khác tương tự-->
                    </ul>
                </div>
            </div>
            </div>
        </div>

