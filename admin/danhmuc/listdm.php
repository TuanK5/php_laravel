<div class="title-content">Them Moi Loai Hang</div>
   
    <div class="row-fomconten">
        <div class="rowformds">
            <div class="action-buttons">
              <button type="button">Chọn tất cả</button>
              <button type="button">Bỏ chọn tất cả</button>
              <button type="button">Xóa các mục đã chọn</button>
              <button type="button"><a href="index.php?act=addm">Thêm mới</a></button>
            </div>
            <table>
              <tr>
                <th></th>
                <th>Mã Loại</th>
                <th>Tên Loại</th>
                <th></th>
              </tr>
<!-- mở php để đọc dữ liệu từ dtbae lên từ controler -->
            <?php 
                foreach ($listdm as $dm) {
                    # code...
                extract($dm);
                $suadm="index.php?act=suadm&id=".$id;
                $xoadm="index.php?act=xoadm&id=".$id;
                echo '<tr>
                        <td class="checkbox-cell"><input type="checkbox"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td class="button-cell">
                        <button type="button" value="sua" name="suadm"> <a href="'.$suadm.'">sua</a></button>
                        <button type="button" value="xoa" name="xoadm"> <a href="'.$xoadm.'">xoa</a> </button>
                    </td>
                    </tr>';
                }
            ?>
            </table>
          </div>
    </div>