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
        <th>Mã TK</th>
        <th>Tên TK</th>
        <th>Pass TK</th>
        <th>address</th>
        <th>email</th>
        <th>phone</th>
        <th>role</th>
      </tr>
      <!-- mở php để đọc dữ liệu từ dtbae lên từ controler -->
      <?php
      foreach ($listtk as $tk) {
        # code...
        extract($tk);
        //get id de xoa
        $suasp = "index.php?act=suatk&id=" . $idus;
        $xoasp = "index.php?act=xoatk&id=" . $idus;
        echo '<tr>
                        <td class="checkbox-cell"><input type="checkbox"></td>
                        <td>' . $idus . '</td>
                        <td>' . $nameuser . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $address . '</td>
                        <td>' . $email . '</td>
                        <td>' . $phone . '</td>
                        <td>' . $role . '</td>
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