


<!-- JB's Banner With Content Two Area End Here -->

<!-- Begin JB's Banner Four Columns Area -->
<div class="jb-banner_area banner-four_columns">
<video autoplay loop muted>
                    <source type="video/mp4" src="src/image/banner/video.mp4">
                </video>
</div>
<!-- JB's Banner Four Columns Area End Here -->

<!-- Begin JB's Shipping Area -->
<div class="jb-shipping_area">
  <div class="container">
    <div class="row">
      <!-- Begin Shipping Information Area -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="shipping-info">
          <div class="shipping-icon">
            <i class="fa fa-truck"></i>
          </div>
          <div class="shipping-text">
            <h5>Miễn phí vận chuyển</h5>
            <span>Miễn phí đơn hàng trên 300.000đ</span>
          </div>
        </div>
      </div>
      <!-- Shipping Information Area End Here -->
      <!-- Begin Shipping Information Area -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="shipping-info">
          <div class="shipping-icon">
            <i class="fa fa-credit-card"></i>
          </div>
          <div class="shipping-text">
            <h5>Thanh toán khi giao hàng</h5>
            <span>Tùy chọn giao hàng thanh toán tiền mặt</span>
          </div>
        </div>
      </div>
      <!-- Shipping Information Area End Here -->
      <!-- Begin Shipping Information Area -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="shipping-info">
          <div class="shipping-icon">
            <i class="fa fa-calendar"></i>
          </div>
          <div class="shipping-text">
            <h5>Đảm bảo miễn phí</h5>
            <span>Hoàn đơn trong vòng 30 ngày</span>
          </div>
        </div>
      </div>
      <!-- Shipping Information Area End Here -->
      <!-- Begin Shipping Information Area -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="shipping-info">
          <div class="shipping-icon">
            <i class="fas fa-star-of-life"></i>
          </div>
          <div class="shipping-text">
            <h5>Hỗ trợ trực tuyến 24/7</h5>
            <span>Chúng tôi có hỗ trợ 24/7</span>
          </div>
        </div>
      </div>
      <!-- Shipping Information Area End Here -->
    </div>
  </div>
</div>
<!-- JB's Shipping Area End Here -->

<!-- Begin JB's Product Tab Area -->
<div class="jb-product-tab_area">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="product-tab">
          <ul class="nav product-menu">
            <li>
              <a class="active" data-bs-toggle="tab" href="#new-arrival"><span>Sản phẩm mới</span></a>
            </li>
            <!-- <li>
              <a data-bs-toggle="tab" href="#bestseller"><span>Sản phẩm bán chạy</span></a>
            </li>
            <li>
              <a data-bs-toggle="tab" href="#featured-products"><span>Sản phẩm nổi bật</span></a>
            </li> -->
          </ul>
        </div>
        <div class="tab-content jb-tab_content">
          <!-- sản phẩm mới -->
          <div id="new-arrival" class="tab-pane active show" role="tabpanel">
            <div class="row">
              <?php
              foreach ($prohome as $pro) { ?>
                <div class="col-md-4">
                  <div class="row_product card">
                    <a style="" class="img_pro" href="index.php?act=prodetail&idpro=<?php echo $pro['id_pro'] ?>"><img src="admin/uploads/<?php echo $pro['img_pro'] ?>" alt="Ảnh sản phẩm" class="card-img-top" />
                    </a>
                    <span class="sticker">Mới</span>
                    <?php if ($pro['discount'] <= 0) { ?>
                      <span></span>
                    <?php } else { ?>
                      <span class="sticker-2">-
                        <?= $pro['discount'] ?>%
                      </span>
                    <?php } ?>

                    <div class="card-body">
                      <h6 class="card-title">
                        <a class="product-name" href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>">
                          <?= $pro['name_pro'] ?>
                        </a>


                      </h6>

                      <div class="price-box">
                        <?php if ($pro['discount'] <= 0) { ?>
                          <span class="new-price">
                            <?= number_format($pro['price']) ?>₫
                          </span>
                        <?php } else { ?>
                          <span class="old-price text-decoration-line-through">
                            <?= number_format($pro['price']) ?>₫
                          </span>

                          <h4 class="new-price text-danger">
                            <?= number_format(($pro['price']) - (($pro['price']) * ($pro['discount']) / 100)) ?>₫
                          </h4>
                        <?php } ?>
                      </div>

                      <div class="text-center">
                        <form action="index.php?act=addtocart" method="post">
                          <input type="hidden" name="id_pro" value="<?php echo $pro['id_pro'] ?>" />
                          <input type="hidden" name="name_pro" value="<?php echo $pro['name_pro'] ?>" />
                          <input type="hidden" name="img_pro" value="<?php echo $pro['img_pro'] ?>" />
                          <input type="hidden" name="price" value="<?php echo $pro['price'] ?>" />
                          <input type="submit" class="addtocart btn btn-outline-primary" name="addtocart" value="Thêm vào giỏ">

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <!-- sản phẩm bán chạy -->
          <div id="bestseller" class="tab-pane" role="tabpanel">
            <div class="jb-product-tab_slider">
              <?php
              foreach ($list_bestsp as $pro) { ?>
                <div class="jb-slide-item">
                  <div class="jb-single_product card">
                    <div class="product-img">
                      <a href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>"><img src="admin/uploads/<?= $pro['img_pro'] ?>" alt="Ảnh sản phẩm" class="card-img-top" />
                      </a>
                      <span class="sticker">Hot</span>
                      <?php if ($pro['discount'] <= 0) { ?>
                        <span></span>
                      <?php } else { ?>
                        <span class="sticker-2">-
                          <?= $pro['discount'] ?>%
                        </span>
                      <?php } ?>
                    </div>
                    <div class="jb-product_content card-body">
                      <div class="product-desc_info">
                        <h6 class="card-title">
                          <a class="product-name" href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>">
                            <?= $pro['name_pro'] ?>
                          </a>
                        </h6>
                        <div class="price-box">
                          <?php if ($pro['discount'] <= 0) { ?>
                            <span class="new-price">
                              <?= number_format($pro['price']) ?>₫
                            </span>
                          <?php } else { ?>
                            <span class="new-price">
                              <?= number_format(($pro['price']) - (($pro['price']) * ($pro['discount']) / 100)) ?>₫
                            </span>
                            <span class="old-price">
                              <?= number_format($pro['price']) ?>₫
                            </span>
                          <?php } ?>
                        </div>
                      </div>
                      <div class="actions-add">
                        <form action="index.php?act=addtocart" method="post">
                          <input type="hidden" name="id_pro" value="<?php echo $pro['id_pro'] ?>" />
                          <input type="hidden" name="name_pro" value="<?php echo $pro['name_pro'] ?>" />
                          <input type="hidden" name="img_pro" value="<?php echo $pro['img_pro'] ?>" />
                          <input type="hidden" name="price" value="<?php echo $pro['price'] ?>" />
                          <input type="submit" class="addtocart btn btn-outline-primary" name="addtocart" value="Thêm vào giỏ">

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>

            
            </div>
          </div>

          

          <div id="featured-products" class="tab-pane" role="tabpanel">
            <div class="jb-product-tab_slider">
              <!-- Phần show sản phẩm nổi bật -->
              <?php
              foreach ($list_topsp as $pro) { ?>

                <div class="jb-slide-item">
                  <div class="jb-single_product card">
                    <div class="product-img">
                      < <a href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>"><img src="admin/uploads/<?= $pro['img_pro'] ?>" alt="Ảnh sản phẩm" class="card-img-top" />
                        </a>

                        <span class="sticker">Nổi bật</span>

                        <?php if ($pro['discount'] <= 0) { ?>

                          <span></span>

                        <?php } else { ?>

                          <span class="sticker-2">-
                            <?= $pro['discount'] ?>%
                          </span>

                        <?php } ?>
                    </div>

                    <div class="jb-product_content card-body">
                      <div class="product-desc_info">
                        <h6 class="card-title">
                          <a class="product-name" href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>">
                            <?= $pro['name_pro'] ?>
                          </a>
                        </h6>
                        <div class="price-box">
                          <?php if ($pro['discount'] <= 0) { ?>
                            <span class="new-price">
                              <?= number_format($pro['price']) ?>₫
                            </span>
                          <?php } else { ?>
                            <span class="new-price">
                              <?= number_format(($pro['price']) - (($pro['price']) * ($pro['discount']) / 100)) ?>₫
                            </span>
                            <span class="old-price">
                              <?= number_format($pro['price']) ?>₫
                            </span>

                          <?php } ?>
                        </div>
                      </div>

                      <div class="actions-add">
                        <form action="index.php?act=addtocart" method="post">
                          <input type="hidden" name="id_pro" value="<?php echo $pro['id_pro'] ?>" />

                          <input type="hidden" name="name_pro" value="<?php echo $pro['name_pro'] ?>" />

                          <input type="hidden" name="img_pro" value="<?php echo $pro['img_pro'] ?>" />
                          <input type="hidden" name="price" value="<?php echo $pro['price'] ?>" />
                          <input type="submit" class="addtocart btn btn-outline-primary" name="addtocart" value="Thêm vào giỏ">

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <!-- end phần show sản phẩm nổi bật -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="jb-banner_area banner-two_columns">
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-6">
        <div class="banner-item">
          <a href="shop-left-sidebar.html">
            <img src="src/image/banner/10.jpg" alt="JB's Banner" />
          </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="banner-item">
          <a href="shop-left-sidebar.html">
            <img src="src/image/banner/13.jpg" alt="JB's Banner" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="jb-product-tab_area jb-product-tab_area-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="product-tab product-tab-2">
          <div class="product-tab_heading">
            <h4>2024 Trending</h4>
          </div>
          <ul class="nav product-menu">
            <li>
              <a class="active" data-bs-toggle="tab" href="#fashion"><span>Fashion</span></a>
            </li>
          </ul>
        </div>
        <div class="tab-content jb-tab_content">
          <div class="jb-product-tab_slider">
            <!-- Phần show sản phẩm nổi bật -->
            <?php
            foreach ($list_topsp as $pro) { ?>

              <div class="jb-slide-item">
                <div class="jb-single_product card">
                  <div class="product-img">
                    < <a href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>"><img src="admin/uploads/<?= $pro['img_pro'] ?>" alt="Ảnh sản phẩm" class="card-img-top" />
                      </a>

                      <span class="sticker">Nổi bật</span>

                      <?php if ($pro['discount'] <= 0) { ?>

                        <span></span>

                      <?php } else { ?>

                        <span class="sticker-2">-
                          <?= $pro['discount'] ?>%
                        </span>

                      <?php } ?>
                  </div>

                  <div class="jb-product_content card-body">
                    <div class="product-desc_info">
                      <h6 class="card-title">
                        <a class="product-name" href="index.php?act=prodetail&idpro=<?= $pro['id_pro'] ?>">
                          <?= $pro['name_pro'] ?>
                        </a>
                      </h6>
                      <div class="price-box">
                        <?php if ($pro['discount'] <= 0) { ?>
                          <span class="new-price">
                            <?= number_format($pro['price']) ?>₫
                          </span>
                        <?php } else { ?>
                          <span class="new-price">
                            <?= number_format(($pro['price']) - (($pro['price']) * ($pro['discount']) / 100)) ?>₫
                          </span>
                          <span class="old-price">
                            <?= number_format($pro['price']) ?>₫
                          </span>

                        <?php } ?>
                      </div>
                    </div>

                    <div class="actions-add">
                      <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id_pro" value="<?php echo $pro['id_pro'] ?>" />

                        <input type="hidden" name="name_pro" value="<?php echo $pro['name_pro'] ?>" />

                        <input type="hidden" name="img_pro" value="<?php echo $pro['img_pro'] ?>" />
                        <input type="hidden" name="price" value="<?php echo $pro['price'] ?>" />
                        <input type="submit" class="addtocart btn btn-outline-primary" name="addtocart" value="Thêm vào giỏ">

                      </form>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="banner-with_newsletter">
  <div class="newsletter-content">
    <h2 class="newsletter-heading">Chào mừng!</h2>
    <h3 class="newsletter-sub_heading">Sản phẩm mới nhất.</h3>
    <p class="short-desc">
      Đăng kí danh sách gửi thư của Dior để nhận thông tin cập nhật về hàng mới, ưu đãi và thông tin giảm giá khác.
    </p>
    <div class="newsletter-form_wrap">
      <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletters-form validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <div id="mc-form" class="mc-form subscribe-form pt--15">
            <input id="mc-email" type="email" autocomplete="off" placeholder="Enter your email address" />
            <button class="newsletter-btn" id="mc-submit">
              <i class="fas fa-paper-plane" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>





    </div>
  </div>
</div>
<style>
      video {
 /* position: absolute; */
 top: 0;
 left: 0;
 width: 100%;
 height: 85vh;
 object-fit: cover;
}
</style>