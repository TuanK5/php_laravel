<div class="title-content">danh sach Tai khoan</div>

<div class="row-fomconten">
  <div class="rowformds">
    <div class="action-buttons">
      <button type="button">Chọn tất cả</button>
      <button type="button">Bỏ chọn tất cả</button>
      <button type="button">Xóa các mục đã chọn</button>
      <button type="button"><a href="index.php?act=addsp">Thêm mới</a></button>
    </div>

    <table>
      <tr>
        <th></th>
        <th>ID</th>
        <th>Noidung</th>
        <th>iduser</th>
        <th>idpro</th>
        <th>datecmt</th>
      </tr>
      <!-- mở php để đọc dữ liệu từ dtbae lên từ controler -->
      <?php
      foreach ($listbl as $bl) {
        # code...
        extract($bl);
        //get id de xoa
        $suabl = "index.php?act=suabl&id=" . $id;
        $xoabl = "index.php?act=xoabl&id=" . $id;
        echo '<tr>
                        <td class="checkbox-cell"><input type="checkbox"></td>
                        <td>' . $id . '</td>
                        <td>' . $noidung . '</td>
                        <td>' . $iduser . '</td>
                        <td>' . $idpro. '</td>
                        <td>' . $ngaycmt . '</td>
                        <td class="button-cell">
                        <button type="button" value="sua" name="suabl"> <a href="' . $suabl . '">sua</a></button>
                        <button type="button" value="xoa" name="xoabl"> <a href="' . $xoabl . '">xoa</a> </button>
                    </td>
                    </tr>';
      }
      ?>
    </table>
  </div>
</div>