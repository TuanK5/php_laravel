<div class="title-content">Them Moi San Pham</div>
    <div class="form-box">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
          <div class="input-group">
            <label for="ma-sp">Ma Dm:</label>
            <select name="iddm" id="ma-sp">
              <?php
                foreach ($listdm as $sp) {
                  extract($sp);
                  echo '<option value="'.$id.'">'.$name.'</option>';
                }
              ?>
            </select>
          </div>
          <div class="input-group">
            <label for="ten-loai">Ten sam pham:</label>
            <input type="text" id="ten-loai" name="tensp">
          </div>
          <div class="input-group">
            <label for="gia">Gia:</label>
            <input type="text" id="gia" name="giasp">
          </div>
          <div class="input-group">
            <label for="hinh">Hinh:</label>
            <input type="file" id="hinh" name="hinhsp">
          </div>
          <div class="input-group">
            <label for="mota">Mo  ta:</label>
            <textarea name="motasp" id="mota" cols="30" rows="10"></textarea>
          </div>
          <div class="button-group">
            <!-- <button type="submit" name="themmoids">Thêm mới</button> -->
            <button type="submit" value="them moi" name="themmoisp">them moi</button>
            <button type="button"><a href="index.php?act=addsp">Nhap lai</a></button>
            <button type="button" value="danhsachsp" ><a href="index.php?act=addlistsp">List Danh sách</a></button>
          </div>
          <?php if (isset($thongbao)&&($thongbao!="")) echo $thongbao?>
        </form>
    </div>