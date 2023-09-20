<div class="content">
        <div class="main-content">
            <div class="content-box">
                <div class="product-spct">
                    <h2>Sản phẩm</h2>
                    <?php
                        extract($dsct);
                    ?>
                    <div class="boxtilesp"><?=$name?> </div>
                    <?php
                        $hinh=$hinhpath.$image;
                        echo '<div class="anhsp">
                        <img src="'.$hinh.'" alt="">
                        </div>';
                        echo '<h4>'.$mota.'</h4>';
                    ?>
                  </div>
  <div class="comment-box" >
  <h2>Ý kiến khách hàng</h2>
<!-- //jqry?\ -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
<script>
  $(document).ready(function(){
      $("#binhluan").load("../view/binhluan/cmtform.php", {idpro: <?=$id?>});
  });
</script>
                    <div class="conten-comem" id="binhluan">
                        <iframe src="../view/binhluan/cmtform.php?idpro=<?=$id?>" frameborder="0" width="100%" height="300px"></iframe>
                    </div>
<!-- <?php
    if(isset($_SESSION['user'])){
?>
                     <input type="text" class="comment-input" placeholder="Nhập ý kiến của bạn">
                    <button class="submit-button">Submit</button>
                    
<?php }else{?>
                    <h2 style="color:red">Vui long dang nhap de cmt</h2>
  <?php }?> -->
    </div>
                
                  <div class="related-products-box">
                    <h2>Sản phẩm cùng loại</h2>
                    <?php
                         foreach ($spcxloai as $spcxloai) {
                            # code...
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            extract($spcxloai);                      
                            echo '<a href="'.$linksp.'">'.$name.'</a>         <br>';
                         }
                    ?>
                  </div>
            </div>
        </div>
        <?php
         include "baneright.php"
        ?>
    </div>
