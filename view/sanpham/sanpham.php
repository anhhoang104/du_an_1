
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="index.php?act=product" style="color: #0d6efd;">Sản phẩm</a></li>
            </ul>
        </div>
    </div>
</div>



<div class="jb-content_wrapper">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="jb-sidebar-catagories_area">
                    <div class="sidebar-checkbox first-child">
                        <div class="sidebar-checkbox_title">
                            <h5>Danh mục</h5>
                        </div>
                        <ul class="sidebar-checkbox_list">
                            <?php
                            foreach ($listcate as $cate) {
                                extract($cate);
                                $color = (isset($_GET['idcate']) && ($_GET['idcate']) == $id_cate) ? '#0d6efd' : '';
                                $linkpro = "index.php?act=product&idcate=" . $id_cate;
                                echo ' <li>
                                        <a href="' . $linkpro . '" style="color:' . $color . ';"><i class="fa-sharp fa-solid fa-angles-right"></i> ' . $name_cate . '</a>
                                      </li>';
                            }
                            ?>
                        </ul>
                    </div>

                   
                    <div class="jb-sidebar_banner">
                        <div class="banner-item">
                            <a href="#">
                                <img src="./src/image/shop/3.jpg" alt="Ultraphone Product">
                            </a>
                        </div>
                    </div>
              




                    <!-- <div class="row sidebar-list_product">
                        <div class="col-lg-12">
                            <div class="section_title-2">
                                <h4>Được đề xuất</h4>
                            </div>
                            <div class="jb-list-product_slider">
                               
                                <?php
                                foreach ($list_topsp as $topsp) { ?>
                                    <div class="jb-slide-item">
                                        <div class="jb-single_product">
                                            <div class="product-img">
                                                <a href="index.php?act=prodetail&idpro=<?= $topsp['id_pro'] ?>">
                                                    <img src="admin/uploads/<?= $topsp['img_pro'] ?>" alt="Ảnh sản phẩm">
                                                </a>
                                            </div>
                                            <div class="jb-product_content">
                                                <div class="product-desc_info">
                                                    <div class="product-name">
                                                        <h6>
                                                            <a href="index.php?act=prodetail&idpro=<?= $topsp['id_pro'] ?>"><?= $topsp['name_pro'] ?></a>
                                                        </h6>

                                                    </div>
                                                    <div class="price-box">
                                                        <?php if ($topsp['discount'] <= 0) { ?>
                                                            <span class="new-price"><?= number_format($topsp['price']) ?>₫</span>
                                                        <?php } else { ?>
                                                            <span class="new-price"><?= number_format(($topsp['price']) - (($topsp['price']) * ($topsp['discount']) / 100)) ?>₫</span>
                                                            <span class="old-price"><?= number_format($topsp['price']) ?>₫</span>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>';
                                <?php } ?>

                                
                            </div>
                        </div>
                    </div>
 -->





                    <!-- JB's List Product Slider Area End Here -->
                </div>
            </div>
            <!-- Sidebar Categories Area End Here -->
            <!-- Begin Shopbar With Banner Area -->
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="shopbar-with_banner">

                    <!-- Begin Shop Topbar Area -->
                    <div class="shop-topbar">
                        <div class="shopbar-inner">
                            <div class="product-view-mode">
                                <ul class="nav shop-item-filter-list" role="tablist">
                                    <li class="active" role="presentation"><a aria-selected="true" class="active show" data-bs-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li role="presentation"><a data-bs-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                            </div>

                            <div class="toolbar-amount">
                                <span>Hiện có
                                    <?php echo count($listpro); ?> sản phẩm.
                                </span>
                            </div>

                        </div>
                        <div class="product-select-box">
                            <div class="product-short">
                                <form action="index.php?act=product" method="post">
                                    <input type="text" class="ip-search btn" name="kyw" placeholder="Nhập tên sản phẩm...">
                                    <input type="submit" name="btn-search" class="btn-search btn btn-outline-primary" value="Tìm kiếm">
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Topbar Area End Here -->
                    <!-- Vùng hiển thị sản phẩm -->
                    <div class="shop-products-wrapper">
                        <div class="tab-content">
                            <div id="grid-view" class="tab-pane fade active show shop-products_grid" role="tabpanel">
                                <div class="row">
                                    <?php if (empty($listpro)) { ?>
                                        <div class="col-12">
                                            <div class="no-found text-center">
                                                <div class="img-no-found">
                                                    <img src="./src/image/error/no-product.png" alt="Ảnh báo lỗi" class="img-fluid">
                                                </div>
                                                <h1 class="noresult">Oops...không tồn tại sản phẩm trùng khớp với từ khóa bạn nhập, vui lòng tìm kiếm sản phẩm khác <i class="fa-solid fa-face-sad-tear"></i></h1>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <?php foreach ($listpro as $pro) { ?>
                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                            <div class="jb-slide-item">
                                                <div class="jb-single_product">
                                                    <div class="product-img">
                                                        <a href="index.php?act=prodetail&idpro=<?php echo $pro['id_pro'] ?>">
                                                            <img src="admin/uploads/<?php echo $pro['img_pro'] ?>" alt="Ảnh sản phẩm" class="img-fluid">
                                                        </a>
                                                        <span class="sticker">Mới</span>
                                                        <?php if ($pro['discount'] > 0) { ?>
                                                            <span class="sticker-2">-<?= $pro['discount'] ?>%</span>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="jb-product_content">
                                                        <div class="product-desc_info">
                                                            <h6><a class="product-name" href="index.php?act=prodetail&idpro=<?php echo $pro['id_pro'] ?>">
                                                                    <?php echo $pro['name_pro'] ?>
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
                                                                <ul class="list-inline">
                                                                    <input type="hidden" name="id_pro" value="<?php echo $pro['id_pro'] ?>">
                                                                    <input type="hidden" name="name_pro" value="<?php echo $pro['name_pro'] ?>">
                                                                    <input type="hidden" name="img_pro" value="<?php echo $pro['img_pro'] ?>">
                                                                    <input type="hidden" name="price" value="<?php echo $pro['price'] ?>">
                                                                    <li class="list-inline-item">
                                                                        <input type="submit" class="addtocart btn btn-primary" name="addtocart" value="Thêm vào giỏ">
                                                                    </li>
                                                                </ul>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- Rest of the code remains unchanged -->
                        </div>
                    </div>
                    <!-- End vùng hiển thị sản phẩm-->
                </div>
            </div>
            <!-- Shopbar With Banner Area End Here -->
        </div>
    </div>
</div>
<!-- JB's Content Wrapper Area End Here -->