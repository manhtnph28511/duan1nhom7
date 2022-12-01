<div class="footer">
  <div class="footer-main">
    <div class="footer-info">
      <div class="ft-info__main">
        <div class="ft-info__main-item">
          <div class="ft-info-list">
            <img src="./img/logoft.png" alt="">
            <div class="list-content">
              <i class="fa-solid fa-house-chimney"></i>
              <p>Tầng 2, 32 Võ Văn Dũng, Đống Đa, Hà Nội</p>
            </div>
            <div class="list-content">
              <i class="fa-solid fa-mobile-screen-button"></i>
              <p>(024) 7308 6680</p>
            </div>
            <div class="list-content">
              <i class="fa-regular fa-envelope"></i>
              <p>contact@gmail.com.vn</p>
            </div>
          </div>
        </div>
      </div>
      <div class="ft-info__main">
        <h2>Thông tin</h2>
        <p>Về chúng tôi</p>
        <p>Tuyển dụng</p>
        <p>Tin tức</p>
        <p>Thư viện ảnh</p>
        <p>Thư viện video</p>
      </div>
      <div class="ft-info__main">
        <h2>Câu hỏi thường gặp</h2>
        <p>Hướng dẫn chuyển tài khoản</p>
        <p>Hướng dẫn mua hàng và thanh toán</p>
        <p>Thông tin chi phí vận chuyển</p>
        <p>Thời gian làm việc tại công ti</p>
      </div>
      <div class="ft-info__main">
        <h2>Fanpage</h2>
        <div class="footer-cacial">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-google-plus-g"></i>
          <i class="fa-brands fa-pinterest-p"></i>
        </div>
        <h2 class="footer-pay">Phương thức thanh toán</h2>
        <img src="https://electronic-09.web4s.vn/uploads/plugin/custom_img/2018-06-25/custom-payment-icons.png" alt="">
      </div>
    </div>
  </div>
  <div class="footer-end">
    <div class="ft-end_content">
      <div class="end-year">© 2017</div>
      <div class="end-info">
        <ul>
          <li>Chính sách bảo mật</li>
          <li>Chính sách vận chuyển</li>
          <li>Chính sách bảo hành</li>
          <li>Chính sách đổi hàng</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</body>

</html>
<script>
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {
      slideIndex = 1
    }
    if (n < 1) {
      slideIndex = x.length
    };
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    x[slideIndex - 1].style.display = "block";
  }
</script>