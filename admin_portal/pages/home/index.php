<?php
$page_name = 'Home Page';
include_once __DIR__.'/../../../admin_portal/functions/dashboard_function.php';
include_once __DIR__.'/../../../admin_portal/partials/header.php';
?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
<?php include_once __DIR__.'/../../../admin_portal/partials/breadcrumb.php'; ?>
        <!-- Start:: row-9 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            <?= $page_name ?> Forms
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0 d-flex justify-content-between">
                            <button class="btn btn-secondary collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_slider_1"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Slider 1
                            </button>
                            <button class="btn btn-secondary collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_slider_2"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Slider 2
                            </button>
                        </p>
                        <div class="collapse" id="edit_slider_2">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM front_slider WHERE id = 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Use while loop to fetch and display results
                                while ($row = $result->fetch_assoc()) {
                                    $sub_title = $row['sub_title'];
                                    $title = $row['title'];
                                    $bottom_title = $row['bottom_title'];
                                    $button_text = $row['button_text'];
                                    $button_link = $row['button_link'];
                                    $inner_big_text = $row['inner_big_text'];
                                    $slider_img = $row['slider_img'];
                            ?>
                            <!-- Start:: slider-1 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Slider 2
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row gy-4">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted"><?=$sub_title?>:</p>
                                                    <input name="sub_title" type="text" class="form-control" value="<?=$sub_title?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted"><?=$title?>:</p>
                                                    <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                </div>

<!--                                                Submit BTN-->
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-submit" class="form-label">Type Submit</label>
                                                    <input type="submit" class="form-control" id="input-submit" value="Submit">
                                                </div>
<!--                                                end-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->
                                    <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-9 -->

    </div>
</div>
    <!-- End::app-content -->
<?php
include_once __DIR__.'/../../../admin_portal/partials/footer.php';
?>