<div class="title-content">Them Moi Loai Hang</div>
    <div class="form-box">
        <form action="index.php?act=addm" method="post">
          <div class="input-group">
            <label for="ma-loai">Mã loại Input:</label>
            <input type="text" id="ma-loai"  name="maloai"  disabled>
          </div>
          <div class="input-group">
            <label for="ten-loai">Tên loại Input:</label>
            <input type="text" id="ten-loai" name="tenloai">
          </div>
          <div class="button-group">
            <!-- <button type="submit" name="themmoids">Thêm mới</button> -->
            <button type="submit" value="them moi" name="themmoidm">them moi</button>
            <button type="button"><a href="index.php?act=addm">Nhap lai</a></button>
            <button type="button" value="danhsach dm" ><a href="index.php?act=addlistm">List Danh sách</a></button>
          </div>
          <?php if (isset($thongbao)&&($thongbao!="")) echo $thongbao?>
        </form>
    </div>