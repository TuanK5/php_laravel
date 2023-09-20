<?php 
if(is_array($sp)){extract($sp);}
$hinhpath = "../upload/".$image;
if (is_file($hinhpath)) {
  $hinh = "<img src=" . $hinhpath . "  height='20%' width='20%'>";
} else {
  $hinh = "no photo";
};
?>

<div class="title-content">Them Moi San Pham</div>
    <div class="form-box">
        <form action="index.php?act=upsp" method="post" enctype="multipart/form-data">

        <select name="iddm" >
        <option value="0" selected>All</option>
        <?php
        foreach ($listdm as $dm) {
          extract($dm);
          if($iddm==$dm['id']) $s="selected"; else $s="";
          echo '<option value="'.$dm['id'].'"  '.$s.'>' . $dm['name'] . '</option>';
          // echo '<option value="' . $id . '" selected>' . $name . '</option>';
          // else
          // echo '<option value="' . $id . '">' . $name . '</option>';
        }
        ?>
      </select>

          <div class="input-group">
            <label for="ma-loai">Mã san pham:</label>
            <input type="text"  name="masp"  disabled>
            <input type="hidden" name="id" value="<?=$sp['id']?>">
          </div>
          <div class="input-group">
            <label>Ten sam pham:</label>
            <input type="text" name="tensp" value="<?=$sp['name']?>">
          </div>
          <div class="input-group">
            <label for="gia">Gia:</label>
            <input type="text" id="gia" name="giasp" value="<?php if(isset($price)&&($price!="")) echo $price;?>">
          </div>
          <div class="input-group">
            <label for="hinh">Hinh:</label>
            <input type="file" id="hinh" name="hinhsp">
            <?=$hinh?>
          </div>
          <div class="input-group">
            <label for="mota">Mo  ta:</label>
            <textarea name="motasp" id="mota" cols="30" rows="10"> <?php if(isset($mota)&&($mota!="")) echo$mota;?> </textarea>
          </div>
          <div class="button-group">
            <!-- <button type="submit" name="themmoids">Thêm mới</button> -->
            <button type="submit" value="capnhat" name="capnhatsp">cap nhat</button>
            <button type="button"><a href="index.php?act=addsp">Nhap lai sp</a></button>
            <button type="button" value="danhsach dm" ><a href="index.php?act=addlistsp">List Danh sách Sp</a></button>
          </div>
          <?php if (isset($thongbao)&&($thongbao!="")) echo $thongbao?>
        </form>
    </div>