<div class="content">
        <div class="main-content">
            <div class="boxtitle"><strong style="color: red; margin:10%">Trang Quen Mat Khau</strong></div>

                    <div class="login-form" style="color:aliceblue; text-align:center;">
                        <h2 style="margin-top: 3px; height: 10px; text-align: center;">Nhap EMAIL or SDT TK for YOU</h2>
                        <form action="index.php?act=quenmk" method="post">
                
                            <div>
                            <label for="email">Nhap email:</label>
                            <input type="email" name="email" style="width:88%; height:40px;">
                            </div>
                            <div>
                            <label for="email">Nhap sdt:</label>
                            <input type="text" name="sdt" style="width:90%; height:40px; margin-top:2rem">
                            </div>
                
                            <input type="submit" value="Quen mat khau" name="qmk">
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
