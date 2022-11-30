
<div class="dm-content">
                <?php
                foreach ($dssp as $sp) {
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
                }
                ?>
            </div>
            <div class="below">
        <div class="product-content2">
            <div class="top-product">
                <div class="product-rate">
                    <p class="product-name name2 name3"><span class="product_name_color">Top</span> Danh mục sản phẩm</p>
                    <div class="rate-content">
                    <?php
                    foreach ($dsdm as $dm) {
                       extract($dm);
                       $linkdm="index.php?act=sanpham&iddm=".$id;
                       echo ' <div class="content_item-child">
                       <img src="./img/pen.png" alt="">
                       <div class="item__child-info">
                           <div class="name name-rate"><a href="'.$linkdm.'">'.$name.'</a></div>
                       </div>
                   </div>';
                    }
                    ?>
                       
                        <!-- <div class="content_item-child">
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
                        </div> -->
                    </div>
                </div>
                <div class="product-rate">
                    <p class="product-name name2 name3"><span class="product_name_color">Top</span> Sản phẩm bán chạy</p>
                    <div class="rate-content">
                    <?php
                    foreach ($dstop10 as $sp) {
                       extract($sp);
                       $linksp="index.php?act=sanphamct&idsp=".$id;
                       $img=$img_path.$img;
                       echo ' <div class="content_item-child">
                       <img src="'.$img.'" alt="">
                       <div class="item__child-info">
                           <div class="name name-rate"> <a href="'.$linksp.'">'.$name.'</a></div>
                       </div>
                   </div>';
                    }
                    ?>
                        <!-- <div class="content_item-child">
                            <img src="./img/pen.png" alt="">
                            <div class="item__child-info">
                                <div class="name name-rate"><a href="'.$linksp.'">'.$name.'</a></div>
                                <div class="price-pro">
                                    <div class="price">18.000.000đ</div>
                                    <div class="price-before">10.000.000</div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="content_item-child">
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
                        </div> -->
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