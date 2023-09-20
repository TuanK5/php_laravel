<div class="title-content">danh sach San Pham</div>

<div class="row-fomconten">
  <div class="rowformds">
    <div class="action-buttons">
      <button type="button">Chọn tất cả</button>
      <button type="button">Bỏ chọn tất cả</button>
      <button type="button">Xóa các mục đã chọn</button>
      <button type="button"><a href="index.php?act=addsp">Thêm mới</a></button>
    </div>
<!-- bộ lọc theo danh mục thể loại -->
    <form action="index.php?act=addlistsp" method="post">
      <input type="text" name="kyword">
      <select name="iddm" id="ma-sp">
        <option value="0" selected>All</option>
        <?php
        foreach ($listdm as $sp) {
          extract($sp);
          echo '<option value="' . $id . '">' . $name . '</option>';
        }
        ?>
      </select>
      <input type="submit" value="Go"  name="listok">
    </form>

    <table>
      <tr>
        <th></th>
        <th>Mã Sp</th>
        <th>Tên San pham</th>
        <th>Hinh</th>
        <th>Gia</th>
        <th>Luot xem</th>
      </tr>
      <!-- mở php để đọc dữ liệu từ dtbae lên từ controler -->
      <?php
      foreach ($listsp as $sp) {
        # code...
        extract($sp);
        //get id de xoa
        $suasp = "index.php?act=suasp&id=" . $id;
        $xoasp = "index.php?act=xoasp&id=" . $id;

        $hinhpath = "../upload/" . $image;
        if (is_file($hinhpath)) {
          $hinh = "<img src=" . $hinhpath . "  height='20%' width='20%'>";
        } else {
          $hinh = "no photo";
        };
        echo '<tr>
                        <td class="checkbox-cell"><input type="checkbox"></td>
                        <td>' . $id . '</td>
                        <td>' . $name . '</td>
                        <td>' . $hinh . '</td>
                        <td>' . $price . '</td>
                        <td>' . $luotxem . '</td>
                        <td class="button-cell">
                        <button type="button" value="sua" name="suasp"> <a href="' . $suasp . '">sua</a></button>
                        <button type="button" value="xoa" name="xoasp"> <a href="' . $xoasp . '">xoa</a> </button>
                    </td>
                    </tr>';
      }
      ?>
    </table>
  </div>
</div>