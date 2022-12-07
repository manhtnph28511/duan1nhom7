  <div class="product-desc">
    <div class="product-rate">
      <p class="product-name name2 name3"><span class="product_name_color">Top</span> Rated</p>
      <div class="rate-content">
        <div class="content_item-child">
          <img src="./img/opreno8.png" alt="">
          <div class="item__child-info">
            <div class="name name-rate">Oppo Reno8</div>
            <div class="price-pro">
              <div class="price">18.000.000đ</div>
              <div class="price-before">20.000.000</div>
            </div>
          </div>
        </div>
        <div class="content_item-child">
          <img src="./img/samsunga75.jpg" alt="">
          <div class="item__child-info">
            <div class="name name-rate">SamSung A75</div>
            <div class="price-pro">
              <div class="price">7.000.000đ</div>
              <div class="price-before">10.000.000</div>
            </div>
          </div>
        </div>
        <div class="content_item-child">
          <img src="./img/opreno7.png" alt="">
          <div class="item__child-info">
            <div class="name name-rate">Oppo Reno7</div>
            <div class="price-pro">
              <div class="price">11.009.000đ</div>
              <div class="price-before">13.000.000</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content -->
    <?php extract($onesp); ?>
    <div class="prodesc-list">
      <?php
      $i = 1;
      if (isset($_POST['dungluong2']) && ($_POST['dungluong2'])) {
        $price = $price * 1.28;
      } elseif (isset($_POST['dungluong3']) && ($_POST['dungluong3'])) {
        $price = $price * 1.56;
      } else {
      }
      $hinh = $img_path . $img;
      echo '
        <div class="podesc-list1">
          <div class="prosp">
            <img src="' . $hinh . '">
          </div>
        </div>
        <div class="podesc-list2">
        <div class="podesc-list2__name">' . $name . '</div>
        <div class="podesc-list2__price">' . $price . ' đ</div>
          <div class="prosp">' . $mota . '</div>
          <form class="prodesc-input" action="index.php?act=sanphamct&&idsp=' . $id . '" method="post">
              <input type="submit" name="dungluong" value="' . $dungluong . 'Gb">
              <input type="submit" name="dungluong2" value="4-128Gb">
              <input type="submit" name="dungluong3" value="6-256Gb">
          </form>
          <form action="index.php?act=addtocart" method="post">
            <input type="hidden" name="id" value="' . $id . '">
            <input type="hidden" name="name" value="' . $name . '">
            <input type="hidden" name="img" value="' . $img . '">
            <input type="hidden" name="dungluong" value="' . $dungluong . '">
            <input type="hidden" name="price" value="' . $price . '">
            <div class="prodesc-btn">
              <input class="desc-pro__cart" type="submit" name="addtocart" value="Thêm Vào Giỏ Hàng" >
              <input class="desc-pro__c1" type="submit" value="Chat Tư Vấn">
              <div class="desc-pro__c2">Mua trả góp 0% <br> (Duyệt HS 5 phút, Trả góp qua thẻ)</div>
            </div>
          </form>
        </div>
      ';
      $i += 1;
      ?>
    </div>
  </div>
  <div class="prodect-content">
    <div class="prodect-content__title">
      Xiaomi Redmi 10C - Nâng cấp toàn diện so với thế hệ tiền nhiệm
    </div>
    <div class="prodect-content__info">
      Điện thoại Xiaomi Redmi 10C (4GB/64GB | 4GB/128GB) giá rẻ tại Hà Nội, Đà Nẵng, Tp.HCM. Xiaomi Redmi 10C Chip Snapdragon 680, pin 5000 mAh, camera chính 50MP.
      Ngày 21/03/2022, Xiaomi công bố ra máy sản phẩm Xiaomi Redmi 10C Chính hãng trên toàn cầu. Máy được giới thiệu với hệ thống camera ấn tượng 50MP, pin trâu 5000 mAh, chip tầm trung của Qualcomm. Và chiếc máy này có những điểm mạnh điểm yếu nào khi so sánh với Redmi 9C đã ra mắt năm ngoái? Hãy cùng MobileCity so sánh Xiaomi Redmi 10C với Redmi 9C để có cái nhìn tống quan về cả 2 sản phẩm nhé!
    </div>
    <div class="img-prodesc">
      <img src="https://cdn.mobilecity.vn/mobilecity-vn/images/2022/03/so-sanh-xiaomi-redmi-9c-vs-redmi-10c.jpg.webp" alt="">
    </div>
    <div class="prodect-content__title">
      Chế độ hậu mãi hấp dẫn dành cho Xiaomi Redmi 10C Chính hãng
    </div>
    <div class="prodect-content__info">
      Quý khách hoàn toàn yên tâm khi mua điện thoại Xiaomi chính hãng tại MobileCity. Chúng tôi có lịch sử gần 10 năm phân phối các sản phẩm Samsung, Apple iPhone, Xiaomi... tại Việt Nam. Ngoài ra còn có nhiều KM lớn:
      - Giảm giá 10 - 50% khi mua phụ kiện, Miễn phí giao hàng nếu quý khách đặt mua online và có chuyển khoản đặt cọc trước.- Tặng thêm quà khi khách hàng đăng ký mua trên livestream mỗi ngày.- Cơ hội mua máy với giá hấp dẫn trên trang Shopee của cửa hàng.
    </div>
    <div class="img-prodesc">
      <img src="https://cdn.mobilecity.vn/mobilecity-vn/images/2022/03/xiaomi-redmi-10c-xanh-lam-0.jpg.webp" alt="">
    </div>
    <div class="prodect-content__title">
      Địa chỉ mua Xiaomi Redmi 10C Chính hãng giá rẻ tại Hà Nội, Tp.HCM, Đà Nẵng
    </div>
    <div class="prodect-address">
      <p>Hà Nội</p>
      <ul>
        <li>CN 1: 120 Thái Hà, Q. Đống Đa, Hà Nội </li>
        <li>CN 2: 398 Cầu Giấy, Q. Cầu Giấy, Hà Nội</li>
        <li>CN 3: 42 Phố Vọng, Hai Bà Trưng, Hà Nội </li>
      </ul>
      <p>Thành Phố Hồ Chí Minh</p>
      <ul>
        <li>CN 4: 123 Trần Quang Khải, Quận 1, TP.HCM</li>
        <li>CN 5: 602 Lê Hồng Phong, Quận 10, TP.HCM </li>
      </ul>
      <p>Đà Nẵng</p>
      <ul>
        <li>CN 6: 97 Hàm Nghi, Q.Thanh Khê, Đà Nẵng</li>
      </ul>
    </div>
  </div>
  <div class="comment"><iframe src="view/binhluan/binhluanform.php?idpro=<?= $id ?>" frameborder="0" width="100%" height="300px"></iframe></div>
  </div>