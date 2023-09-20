<div class="content">
    <form action="index.php?act=billconfirm" method="post">
        <div class="main-content">
            <div class="title-content">Don Hang Cua Ban</div>
            <div class="row-fomconten">
            
                    <?php // viewcart(0)
                    ?>
                        <table>
                     <tr>
                     <th>Ma DH</th>
                     <th>Ngay Dat</th>
                     <th>SL mat hang</th>
                     <th>Tong gia tri don hang</th>
                     <th>Tinh trang don hang</th>
                     </tr>
                    <?php
                    if(is_array($listbill)){
                        foreach($listbill as $bill){
                            extract($bill);
                            $billstatus=get_billstatus($bill['billstatus']);
                            $coustsp= loadall_cart_count($bill['id']);
                            echo '<tr>
                            <td>' . $bill['id'] . '</td>
                            <td>' . $bill['ngaydathang'] . '</td>
                            <td>' . $coustsp. '</td>
                            <td>' . $bill['total'] . '</td>
                            <td>' . $billstatus . '</td>
                            </tr>';
                        }
                    }
                    ?>                           
                             </table>
                            
                   
                    <!-- <tr>
                            <td class="checkbox-cell"><input type="checkbox"></td>
                            <td>1</td>
                            <td><img src=" . $hinhpath . "  height='20%' width='20%'></td>
                            <td>name</td>
                            <td>1gia</td>
                            <td>soluong</td>
                            <td>thanhtien</td>
                            <td class="button-cell">
                            <button type="button">Sửa</button>
                            <button type="button">Xóa</button>
                            </td>
                        </tr> -->
            </div>
        </div>
    </form>
    <div class="boxphai">
        <?php include "view/baneright.php"; ?>
    </div>
</div>
</div>