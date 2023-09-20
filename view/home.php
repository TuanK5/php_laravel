<!-- Div -->
<div class="content">
    <div class="main-content">
        <div class="content-box">
            <div class="slideshow">
                <!-- Slide show content goes here -->
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="../css/image/z4479650565045.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="../css/image/banner.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="../css/image/banner2.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">4 / 4</div>
                        <img src="../css/image/baner3.jpg" style="width:100%">
                        <div class="text">Caption girl</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>

            <div class="product-box">
                <?php
                // vòng for i để thêm mr vào 2 box đầu để cho nó ăn css magin right(mr) 
                $i = 0;
                foreach ($spnew as $spn) {
                    extract($spn);
                    $linksptop="index.php?act=sanphamct&idsp=".$id;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    $hinh = $hinhpath . $image;
                    echo '<div class="product ' . $mr . '">
                   
                    <a href="'.$linksptop.'"> <img src="' . $hinh . '" alt="Phone"> </a>
                    <a href="'.$linksptop.'"> <h3>' . $name . '</h3> </a>
                    <p>Giá: ' . $price . '</p>
                    <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="'.$id.'">
                    <input type="hidden" name="name" value="'.$name.'">
                    <input type="hidden" name="image" value="'.$image.'">
                    <input type="hidden" name="price" value="'.$price.'">
                    <input type="submit" value="add to cart" name="addtocart">                  
                 </form>  
                 <input type="submit" value="BUy" name="dathang">
                    

                    </div>';
                    $i += 1;
                }
                ?> 
                <!-- <div class="product">
                    <img src="../css/image/download(2).jpg" alt="Phone 1">
                    <h3>Điện thoại 1</h3>
                    <p>Giá: $500</p>
                </div>
                <div class="product">
                    <img src="phone2.jpg" alt="Phone 2">
                    <h3>Điện thoại 2</h3>
                    <p>Giá: $600</p>
                </div>
                <div class="product">
                    <img src="phone3.jpg" alt="Phone 3">
                    <h3>Điện thoại 3</h3>
                    <p>Giá: $700</p>
                </div>
                <div class="product">
                    <img src="phone4.jpg" alt="Phone 4">
                    <h3>Điện thoại 4</h3>
                    <p>Giá: $800</p>
                </div>
                <div class="product">
                    <img src="phone5.jpg" alt="Phone 5">
                    <h3>Điện thoại 5</h3>
                    <p>Giá: $900</p>
                </div>
                <div class="product">
                    <img src="phone6.jpg" alt="Phone 6">
                    <h3>Điện thoại 6</h3>
                    <p>Giá: $1000</p>
                </div>
                <div class="product">
                    <img src="phone5.jpg" alt="Phone 5">
                    <h3>Điện thoại 5</h3>
                    <p>Giá: $900</p>
                </div>
                <div class="product">
                    <img src="phone6.jpg" alt="Phone 6">
                    <h3>Điện thoại 6</h3>
                    <p>Giá: $1000</p>
                </div>
                <div class="product">
                    <img src="phone5.jpg" alt="Phone 5">
                    <h3>Điện thoại 5</h3>
                    <p>Giá: $900</p>
                </div>
                <div class="product">
                    <img src="phone6.jpg" alt="Phone 6">
                    <h3>Điện thoại 6</h3>
                    <p>Giá: $1000</p>
                </div>
                <div class="product">
                    <img src="phone5.jpg" alt="Phone 5">
                    <h3>Điện thoại 5</h3>
                    <p>Giá: $900</p>
                </div>
                <div class="product">
                    <img src="phone6.jpg" alt="Phone 6">
                    <h3>Điện thoại 6</h3>
                    <p>Giá: $1000</p>
                </div> -->
            </div>
        </div>
    </div>
        <?php
         include "baneright.php";
        ?>
</div>
</div>