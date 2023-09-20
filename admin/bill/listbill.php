<div class="title-content">danh sach Don Hang</div>
<div class="search" style="text-align: center;">
    <form action="index.php?act=listbill" method="post">
    <input type="text" name="kyw" id="" placeholder="Nhap Ma DH" >
    <input type="submit" name="listok" value="GO">
    </form>
</div>
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
                     <th>Ma DH</th>
                     <th>Khach Hang</th>
                     <th>Ngay Dat</th>
                     <th>SL mat hang</th>
                     <th>Tong gia tri don hang</th>
                     <th>Tinh trang don hang</th>
                     <th>Thao Tac</th>
                     </tr>
                    <?php

                        foreach($listbill as $bill){
                            extract($bill);
                            $khachang =$bill["billname"];
                            $billstatus=get_billstatus($bill['billstatus']);
                            $coustsp= loadall_cart_count($bill['id']);
                            echo '<tr>
                            <td>' . $bill['id'] . '</td>
                            <td>' . $khachang . '</td>
                            <td>' . $bill['ngaydathang'] . '</td>
                            <td>' . $coustsp. '</td>
                            <td>' . $bill['total'] . '</td>
                            <td>' . $billstatus . '</td>
                            <td>  <input type="button" value="Sua">   <input type="button" value="Xoa"> </td>
                            </tr>';
                        }
                    ?>                           
                             </table>
  </div>
</div>