<?php include_once "header.php" ?>
<?php include_once "nav.php" ?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thống kê sản phẩm</h5>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã Danh Mục</th>
                                        <th>Tên danh mục</th>
                                        <th>Số Lượng</th>
                                        <th>Giá thấp nhất</th>
                                        <th>Giá cao nhất nhất</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($chart as $statis) : extract($statis); ?>
                                        <tr>
                                            <td><?= $idcate ?></td>
                                            <td><?= $namecate ?></td>
                                            <td><?= $pro_quantity ?></td>
                                            <td><?= number_format($min_price) ?></td>
                                            <td><?= number_format($max_price) ?></td>

                                        </tr>
                                    <?php endforeach ?>

                                </tbody>
                                <!--  -->
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>


<?php include_once "footer.php" ?>