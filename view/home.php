<div class="container">
    <div class="main">
        <div class="product-sol">
            <h2>PRODUCT SOLUTIONS</h2>
            <div class="product-sol-content">
                <a href="" class="produc-sol-item">
                    <img src="./img/img1.jpg" alt="">
                    <div class="product-info">
                        <h4>Mobile</h4>
                        <p>Complete facilities, advanced technology, powerful production capacity!</p>
                    </div>
                </a>
                <a href="" class="produc-sol-item">
                    <img src="./img/img3.jpg" alt="">
                    <div class="product-info">
                        <h4>Mobile</h4>
                        <p>Complete facilities, advanced technology, powerful production capacity!</p>
                    </div>
                </a>
                <a href="" class="produc-sol-item">
                    <img src="./img/img3.jpg" alt="">
                    <div class="product-info">
                        <h4>Mobile</h4>
                        <p>Complete facilities, advanced technology, powerful production capacity!</p>
                    </div>
                </a>
                <a href="" class="produc-sol-item">
                    <img src="./img/img4.jpg" alt="">
                    <div class="product-info">
                        <h4>Mobile</h4>
                        <p>Complete facilities, advanced technology, powerful production capacity!</p>
                    </div>
                </a>

            </div>
        </div>

        <div class="product">
            <div class="popular-product">
                <p id="product-sell" class="product-name"><span class="product_name_color">Sản phẩm</span> phổ biến</p>
                <div class="product-icon">
                    <a href="" class="col-icon">
                        <i class="fa-solid fa-laptop"></i>
                        <p class="icon-name">Phụ kiện macbook</p>
                    </a>
                    <a href="" class="col-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                        <p class="icon-name">Phụ kiện điện thoại</p>
                    </a>
                    <a href="" class="col-icon">
                        <i class="fa-solid fa-tablet-screen-button"></i>
                        <p class="icon-name">Phụ kiện Ipad</p>
                    </a>
                    <a href="" class="col-icon">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                        <p class="icon-name">Phụ kiến khác</p>
                    </a>
                    <a href="" class="col-icon">
                        <i class="fa-solid fa-gift"></i>
                        <p class="icon-name">Quà tặng</p>
                    </a>
                </div>
                <div class="pro2">
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=sanphamct&idsp=" . $id;
                        $hinh = $img_path . $img;
                        // if (($i == 2) || ($i == 5) || ($i == 8)) {
                        //     $mr = "mr";
                        // } else {
                        //     $mr = "";
                        // }
                        echo
                        '<div class="prod2">
                            <div href="" class="content-border">
                                <a href="#">
                                    <div class="dmimg">
                                        <img src="' . $hinh . '" alt="">
                                    </div>
                                    <div class="name"> <a href="' . $linksp . '">' . $name . ' </a></div>
                                    <div class="price-pro">
                                        <div class="price">' . $price . 'đ</div>
                                        <div class="price-before">10.000.000đ</div>
                                    </div>
                                </a>
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="' . $id . '">
                                    <input type="hidden" name="name" value="' . $name . '">
                                    <input type="hidden" name="img" value="' . $img . '">
                                    <input type="hidden" name="price" value="' . $price . '">
                                    <input class="addcart-product" type="submit" name="addtocart" id="add"value="Thêm vào giỏ hàng" >
                                </form>
                            </div>
                        </div>';
                        $i += 1;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="below">
        <div class="standing-product">
            <p class="product-name name2"><span class="product_name_color">Sản phẩm</span> nổi bật</p>
        </div>
        <div class="danhmuc">
            <div class="dm-content">
                <?php
                foreach ($spnew as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinh = $img_path . $img;
                    echo '
                        <div class="prod2 dm-content-item border-prod2">
                            <div href="" class="content-border">
                                <a href="#">
                                    <div class="dmimg">
                                        <img src="' . $hinh . '" alt="">
                                    </div>
                                    <div class="name"> <a href="' . $linksp . '">' . $name . ' </a></div>
                                    <div class="price-pro">
                                        <div class="price">' . $price . 'đ</div>
                                        <div class="price-before">10.000.000đ</div>
                                    </div>
                                </a>
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="' . $id . '">
                                    <input type="hidden" name="name" value="' . $name . '">
                                    <input type="hidden" name="img" value="' . $img . '">
                                    <input type="hidden" name="price" value="' . $price . '">
                                    <input class="addcart-product" type="submit" name="addtocart" id="add"value="Thêm vào giỏ hàng" >
                                </form>
                            </div>
                        </div>';
                    $i += 1;
                }
                ?>
            </div>
        </div>
        <div class="product-content2">
            <div class="top-product">
                <div class="product-rate">
                    <p class="product-name name2 name3"><span class="product_name_color">Top</span> Rated</p>
                    <div class="rate-content">
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-rate">
                    <p class="product-name name2 name3"><span class="product_name_color">Top</span> Rated</p>
                    <div class="rate-content">
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-rate">
                    <p class="product-name name2 name3"><span class="product_name_color">Top</span> Rated</p>
                    <div class="rate-content">
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                        <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate">Bút vẽ siêu mảnh Adonit Jot Pro 3.0</div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-reg">
        <div class="reg-name">ĐĂNG KÍ NHẬN THÔNG TIN</div>
        <div class="reg-input">
            <input type="text" placeholder="Nhập thông tin đăng ký">
            <button><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
    </div>
</div>