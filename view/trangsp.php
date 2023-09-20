<div class="content">
        <div class="main-content">
            <div class="tendm">
                <?php
                echo '<h2 style="margin-left: 50px;">Danh muc <strong style="color: red;">'.$tdmsp.'</strong></h2>';
                ?>
            </div>
           <div class="product-box" >
           <?php
                // vòng for i để thêm mr vào 2 box đầu để cho nó ăn css magin right(mr) 
                $i = 0;
                foreach ($dssp as $dssp) {
                    extract($dssp);
                    $linksptop="index.php?act=sanphamct&idsp=".$id;
                    if (($i == 2) || ($i == 5) || ($i == 8)|| ($i ==11)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    $hinh = $hinhpath . $image;
                    echo '<div class="product ' . $mr . '">
                    <a href="'.$linksptop.'"> <img src="' . $hinh . '" alt="Phone"> </a>
                    <a href="'.$linksptop.'"> <h3>' . $name . '</h3> </a>
                    <p>Giá: ' . $price . '</p>
                    </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
        <?php
         include "baneright.php"
        ?>
    </div>
