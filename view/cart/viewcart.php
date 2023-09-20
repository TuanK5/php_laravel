<div class="content">
    <div class="main-content">
        <div class="title-content">Gio Hang</div>
        <div class="row-fomconten">
            <table>
                <?php viewcart(1)?>
                <!-- <?php
                $tong = 0;
                $i=0;
                foreach ($_SESSION['mycart'] as $cart) {
                    $hinh = $hinhpath . $cart[2];
                    $tong += $cart[5];
                    $xoagh='<a href="index.php?act=delcart&idcart='.$i.'"><button type="button">Xóa</button></a>';
                    echo '
                            <tr>
                            <td class="checkbox-cell"><input type="checkbox"></td>
                            <td><img src="' . $hinh . '"  height="20%" width="20%"></td>
                            <td>' . $cart[1] . '</td>
                            <td>' . $cart[3] . '</td>
                            <td>' . $cart[4] . '</td>
                            <td>' . $cart[5] . '</td>
                            <td class="button-cell">
                            <button type="button">Sửa</button>
                            '.$xoagh.'
                            </td>
                            </tr>';
                            $i+=1;
                }
                echo '
                        <tr>
                            <td colspan="4">Tong don hang</td>
                            <td>' . $tong . '</td>
                            </td>
                        </tr>';
                ?> -->
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
            </table>
        </div>
    </div>
    <div class="rowbill">
        <a href="index.php?act=bill"><input type="submit" value="BUY OK"></a> <a href="index.php?act=delcart"><input type="button" value="DELETE cart"></a> 
    </div>
    <div class="boxphai">
        <?php include "view/baneright.php"; ?>
    </div>
</div>
</div>