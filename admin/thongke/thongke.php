<div class="title-content">Thong Ke San Pham Theo Loai</div>
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
                     <th>MA danhmuc</th>
                     <th>Loai Hang</th>
                     <th>So Luong</th>
                     <th>Gia Cao Nhat</th>
                     <th>Gia Thap Nhat</th>
                     <th>Gia Trung Binh</th>
                     </tr>
                    <?php

                        foreach($listtke as $tke){
                            extract($tke);

                            echo '<tr>
                            <td>' . $madm . '</td>
                            <td>' . $tendm . '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $maxprice . '</td>
                            <td>' . $minprice . '</td>
                            <td>' . $avgprice . '</td>
                            <td>  <input type="button" value="Sua">   <input type="button" value="Xoa"> </td>
                            </tr>';
                        }
                    ?>      
                    <a href="index.php?act=bieudo"><input type="button" value="Xem Bieu Do"></a>                          
                             </table>
  </div>
</div>