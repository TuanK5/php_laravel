<!-- Footer -->
<footer>
    <!-- Footer content goes here -->
    <div class="box-ft">
        <p class="address">Hà Nội</p>
        <p>Tầng 2, Tòa nhà Detech II, 107 Nguyễn Phong Sắc, Cầu Giấy, Hà Nội</p>
        <p>Điện thoại: 0981 090 513</p>
        <p>Email: btec.hn@fpt.edu.vn</p>
        <p>Hotline: 0981 090 513</p>
    </div>

    <div class="box-ft">
        <p class="address">Đà Nẵng</p>
        <p>66B Võ Văn Tần, Quận Thanh Khê, TP.Đà Nẵng (Tòa nhà Savico Building)</p>
        <p>Điện thoại: 0236 730 9268</p>
        <p>Email: btec.dn@fpt.edu.vn</p>
        <p>Hotline: 0905 888 535</p>
    </div>

    <div class="box-ft">
        <p class="address">TP. Hồ Chí Minh</p>
        <p>275 Nguyễn Văn Đậu - Quận Bình Thạnh - TP.Hồ Chí Minh</p>
        <p>Điện thoại: 028 7300 9268</p>
        <p>Email: btec.hcm@fpt.edu.vn</p>
        <p>Hotline: 0942 25 68 25</p>
    </div>
</footer>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 6000); // Change image every 2 seconds
}
</script>
</body>

</html>