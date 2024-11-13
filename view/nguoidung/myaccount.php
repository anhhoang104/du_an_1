<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li class="active">Thông tin tài khoản</li>
            </ul>
        </div>
    </div>
</div>
<!-- vùng endtrang chi tiết tài khoản-->

<!--nội dung -->
<main class="page-content">
    <form action="index.php?act=myaccount" method="post" enctype="multipart/form-data" class="jb-form">
        <? if (isset($_SESSION['user']) && is_array($_SESSION['user']))
            extract($_SESSION['user']);
        ?>
        <!-- Begin JB's Account Page Area -->
        <div class="account-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                           
                           
                            <li class="nav-item">
                                <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#account-details" role="tab" aria-controls="account-details" aria-selected="false">Thông tin tài khoản</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="account-password-tab" data-bs-toggle="tab" href="#account-password" role="tab" aria-controls="account-password" aria-selected="false">Mật khẩu</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.php?act=logout" class="nav-link" id="account-logout-tab" role="tab" aria-selected="false" onclick="return confirm('Bạn chắc chắc muốn đăng xuất tài khoản?')">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                           
                            
                           
                            <div class="tab-pane fade" id="account-details" role="tabpanel" aria-labelledby="account-details-tab">
                                <div class="myaccount-details">
                                    <div class="avt-user mb-3 text-center">
                                        <img src="uploads/<?= $_SESSION['user']['img_user'] ?>" alt="Avatar người dùng" style="border-radius: 100%; width: 100px; height: 100px; border: 1px solid #0084c5">
                                    </div>
                                    <div class="jb-form-inner">
                                        <div class="single-input">
                                            <label for="account-details-firstname">Ảnh đại diện</label>
                                            <input type="file" name="img_user" id="account-details-firstname">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-firstname">Tên đăng nhập</label>
                                            <input type="text" name="user_name" id="account-details-firstname" value="<?= $_SESSION['user']['user_name'] ?>" placeholder="Nhập họ tên của bạn" disabled>
                                        </div>
                                        <input type="hidden" name="password" id="account-details-firstname" value="<?= $_SESSION['user']['password'] ?>" disabled>

                                        <div class="single-input">
                                            <label for="account-details-firstname">Họ và tên</label>
                                            <input type="text" name="full_name" id="account-details-firstname" value="<?= $_SESSION['user']['full_name'] ?>" placeholder="Nhập họ tên của bạn">
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="formGroupExampleInput">Giới tính</label>
                                            <select class="form-control" name="sex" required>
                                                <?php $sexarr = array('0' => 'Nam', '1' => 'Nữ'); ?>
                                                <?php foreach ($sexarr as $key => $value) { ?>
                                                    <option value="<?php echo $key; ?>" <?php echo $key ==  $_SESSION['user']['sex'] ? ' selected' : ''; ?>><?php echo $value; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-email">Email</label>
                                            <input type="email" name="email_user" id="account-details-email" value="<?= $_SESSION['user']['email_user'] ?>" placeholder="Nhập địa chỉ email của bạn">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-email">Địa chỉ</label>
                                            <input type="text" name="address" id="account-details-email" value="<?= $_SESSION['user']['address'] ?>" placeholder="Nhập địa chỉ nhận hàng của bạn">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-details-email">Số điện thoại</label>
                                            <input type="number" name="phone_user" id="account-details-email" value="<?= $_SESSION['user']['phone_user'] ?>" placeholder="Nhập số điện thoại nhận hàng của bạn">
                                        </div>

                                        <div class="col-12 wrap-btn-sub">
                                            <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id_user'] ?>">
                                            <input type="submit" class="btn-submit mt-3" name="btn_change" value="Lưu thay đổi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-password" role="tabpanel" aria-labelledby="account-password-tab">
                                <div class="myaccount-details">
                                    <div class="jb-form-inner">
                                        <div class="single-input">
                                            <label for="account-details-firstname">Tên đăng nhập</label>
                                            <input type="text" name="user_name" id="account-details-firstname" value="<?= $_SESSION['user']['user_name'] ?>" placeholder="Nhập họ tên của bạn" disabled>
                                        </div>
                                        <div class="single-input">
                                            <label for="account-password-newpass">Mật khẩu mới </label>
                                            <input type="password" id="account-password-newpass" placeholder="Nhập mật khẩu mới" name="newpass">
                                        </div>
                                        <div class="single-input">
                                            <label for="account-password-confpass">Xác nhận mật khẩu mới</label>
                                            <input type="password" id="account-password-confpass" placeholder="Nhập lại mật khẩu mới" name="repass">
                                        </div>

                                        <div class="col-12 wrap-btn-sub">
                                            <input type="hidden" name="id_user" value="<?= $_SESSION['user']['id_user'] ?>">
                                            <input type="submit" class="btn-submit mt-3" name="btn_pass" value="Lưu thay đổi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</main>
<!-- JB's Page Content Area End Here -->
<style>
    /* Định dạng giao diện cho form */
    .jb-form-inner {
        max-width: 500px;
        margin: 0 auto;
    }

    .jb-form-inner .form-group {
        margin-bottom: 20px;
    }

    .jb-form-inner label {
        font-weight: bold;
    }

    .jb-form-inner .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .jb-form-inner .btn-submit {
        background-color: #0084c5;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
    }

    /* Định dạng ảnh đại diện */
    .avt-user img {
        width: 100px;
        height: 100px;
        border-radius: 100%;
        border: 1px solid #0084c5;
    }

    /* Định dạng các thông tin đơn hàng và đặt hàng */
    .card .card-header {
        background-color: #0084c5;
        color: #fff;
        font-weight: bold;
    }

    .card .card-body table {
        width: 100%;
    }

    .card .card-body td {
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .card .card-body td:last-child {
        text-align: right;
    }

    .card .card-body td:first-child {
        font-weight: bold;
    }

    .card .card-body tr:last-child td {
        border-bottom: none;
    }
</style>