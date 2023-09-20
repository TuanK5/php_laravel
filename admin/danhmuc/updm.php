<?php 
if(is_array($dm)){extract($dm);}
?>
<div class="title-c$dm">Cap nhat Loai Hang</div>
    <div class="form-box">
        <form action="index.php?act=updm" method="post">
          <div class="input-group">
            <label for="ma-loai">Mã loại Input:</label>
            <input type="text" id="ma-loai"  name="maloai"  disabled>
          </div>
          <div class="input-group">
            <label for="ten-loai">Tên loại Input:</label>
            <input type="text" id="ten-loai" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name;?>">
            <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id;?>">
          </div>
          <div class="button-group">
            <!-- <button type="submit" name="themmoids">Thêm mới</button> -->
            <button type="submit" value="capnhat" name="capnhatdm">Cap nhat</button>
            <button type="button"><a href="index.php?act=addm">Thêm mới</a></button>
            <button type="button" value="danhsach dm" ><a href="index.php?act=addlistm">List Danh sách</a></button>
          </div>
          <?php if (isset($thongbao)&&($thongbao!="")) echo $thongbao;?>
        </form>
    </div>