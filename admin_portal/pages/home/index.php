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
                            <button class="btn btn-warning-ghost collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_slider_2"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Slider 2
                            </button>
                            <button class="btn btn-success collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_slider_3"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Slider 3
                            </button>
<!--                            Home About-->
                            <button class="btn btn-success collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#home_about_1"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit home about 1
                            </button>
                            <button class="btn btn-success collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#home_about_2"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit home about 2
                            </button>
                            <button class="btn btn-success collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#home_about_3"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit home about 3
                            </button>
                            <button class="btn btn-success collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_rector_welcome_note"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Rector Welcome Note
                            </button>
                        </p>
                        <div class="collapse" id="edit_slider_1">
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
                                                Slider 1
                                            </div>
                                        </div>
                                        <form action="" method="post">
                                            <div class="card-body">
                                            <div class="row gy-4">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">sub_title:</p>
                                                    <input name="sub_title" type="text" class="form-control" value="<?=$sub_title?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">Title:</p>
                                                    <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">bottom_title:</p>
                                                    <input name="bottom_title" type="text" class="form-control" value="<?=$bottom_title?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">button_text:</p>
                                                    <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">button_link:</p>
                                                    <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">inner_big_text:</p>
                                                    <input name="inner_big_text" type="text" class="form-control" value="<?=$inner_big_text?>" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">slider image:</p>
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div class="mb-3">
                                                                <input class="form-control form-control-sm" id="formFileSm" name="slider_img" type="file">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <img class="rounded" src="/assets/images/slide/<?=$slider_img?>" alt="" style="max-width:89px;">
                                                        </div>
                                                    </div>
                                                </div>

<!--                                                Submit BTN-->
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-submit" class="form-label">Submit</label>
                                                    <input type="submit" name="update_slider_1" class="form-control" id="input-submit" value="Submit">
                                                </div>
<!--                                                end-->
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->
                                    <?php } }?>
                        </div>
                        <div class="collapse" id="edit_slider_2">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM front_slider WHERE id = 2";
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
                                                <form action="" method="post">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">sub_title:</p>
                                                                <input name="sub_title" type="text" class="form-control" value="<?=$sub_title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Title:</p>
                                                                <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">bottom_title:</p>
                                                                <input name="bottom_title" type="text" class="form-control" value="<?=$bottom_title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_text:</p>
                                                                <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_link:</p>
                                                                <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">inner_big_text:</p>
                                                                <input name="inner_big_text" type="text" class="form-control" value="<?=$inner_big_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">slider image:</p>
                                                                <div class="row">
                                                                    <div class="col-lg-7">
                                                                        <div class="mb-3">
                                                                            <input class="form-control form-control-sm" id="formFileSm" name="slider_img" type="file">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <img class="rounded" src="/assets/images/slide/<?=$slider_img?>" alt="" style="max-width:89px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--                                                Submit BTN-->
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <label for="input-submit" class="form-label">Submit</label>
                                                                <input type="submit" name="update_slider_2" class="form-control" id="input-submit" value="Submit">
                                                            </div>
                                                            <!--                                                end-->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: row-1 -->
                                <?php } }?>
                        </div>
                        <div class="collapse" id="edit_slider_3">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM front_slider WHERE id = 3";
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
                                                        Slider 3
                                                    </div>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">sub_title:</p>
                                                                <input name="sub_title" type="text" class="form-control" value="<?=$sub_title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Title:</p>
                                                                <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">bottom_title:</p>
                                                                <input name="bottom_title" type="text" class="form-control" value="<?=$bottom_title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_text:</p>
                                                                <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_link:</p>
                                                                <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">inner_big_text:</p>
                                                                <input name="inner_big_text" type="text" class="form-control" value="<?=$inner_big_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">slider image:</p>
                                                                <div class="row">
                                                                    <div class="col-lg-7">
                                                                        <div class="mb-3">
                                                                            <input class="form-control form-control-sm" id="formFileSm" name="slider_img" type="file">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-5">
                                                                        <img class="rounded" src="/assets/images/slide/<?=$slider_img?>" alt="" style="max-width:89px;">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!--                                                Submit BTN-->
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <label for="input-submit" class="form-label">Submit</label>
                                                                <input type="submit" name="update_slider_3" class="form-control" id="input-submit" value="Submit">
                                                            </div>
                                                            <!--                                                end-->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: row-1 -->
                                <?php } }?>
                        </div>
<!--                        home about section-->
                        <div class="collapse" id="home_about_1">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM home_about_section WHERE id = 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Use while loop to fetch and display results
                                while ($row = $result->fetch_assoc()) {
                                    $title = $row['title'];
                                    $content = $row['content'];
                                    $button_text = $row['button_text'];
                                    $button_link = $row['button_link'];
                                    ?>
                                    <!-- Start:: slider-1 -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Home About 1
                                                    </div>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">title:</p>
                                                                <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">content:</p>
                                                                <input name="content" type="text" class="form-control" value="<?=$content?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">bottom_text:</p>
                                                                <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_link:</p>
                                                                <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                            </div>

                                                            <!--                                                Submit BTN-->
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <label for="input-submit" class="form-label">Submit</label>
                                                                <input type="submit" name="update_home_about_1" class="form-control" id="input-submit" value="Submit">
                                                            </div>
                                                            <!--                                                end-->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: row-1 -->
                                <?php } }?>
                        </div>
                        <div class="collapse" id="home_about_2">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM home_about_section WHERE id = 2";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Use while loop to fetch and display results
                                while ($row = $result->fetch_assoc()) {
                                    $title = $row['title'];
                                    $content = $row['content'];
                                    $button_text = $row['button_text'];
                                    $button_link = $row['button_link'];
                                    ?>
                                    <!-- Start:: slider-2 -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Home About 2
                                                    </div>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">title:</p>
                                                                <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">content:</p>
                                                                <input name="content" type="text" class="form-control" value="<?=$content?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">bottom_text:</p>
                                                                <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_link:</p>
                                                                <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                            </div>

                                                            <!-- Submit BTN -->
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <label for="input-submit" class="form-label">Submit</label>
                                                                <input type="submit" name="update_home_about_2" class="form-control" id="input-submit" value="Submit">
                                                            </div>
                                                            <!-- End -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: row-2 -->
                                <?php } } ?>
                        </div>
                        <div class="collapse" id="home_about_3">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM home_about_section WHERE id = 3";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Use while loop to fetch and display results
                                while ($row = $result->fetch_assoc()) {
                                    $title = $row['title'];
                                    $content = $row['content'];
                                    $button_text = $row['button_text'];
                                    $button_link = $row['button_link'];
                                    ?>
                                    <!-- Start:: slider-3 -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Home About 3
                                                    </div>
                                                </div>
                                                <form action="" method="post">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">title:</p>
                                                                <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">content:</p>
                                                                <input name="content" type="text" class="form-control" value="<?=$content?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">bottom_text:</p>
                                                                <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">button_link:</p>
                                                                <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                            </div>

                                                            <!-- Submit BTN -->
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <label for="input-submit" class="form-label">Submit</label>
                                                                <input type="submit" name="update_home_about_3" class="form-control" id="input-submit" value="Submit">
                                                            </div>
                                                            <!-- End -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: row-3 -->
                                <?php } } ?>
                        </div>
<!--                        Home | Rector welcome note-->
                        <div class="collapse" id="edit_rector_welcome_note">
                            <!--slider forms-->
                            <?php
                            $sql = "SELECT * FROM rector_welcome_note WHERE id = 1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Use while loop to fetch and display results
                                while ($row = $result->fetch_assoc()) {
                                    $sub_title = $row['sub_title'];
                                    $title = $row['title'];
                                    $content = $row['content'];
                                    $button_text = $row['button_text'];
                                    $button_link = $row['button_link'];
                                    $rec_img = $row['rec_img'];
                                    $rec_position = $row['rec_position'];
                                    $rec_name = $row['rec_name'];
                                    $extra_img = $row['extra_img'];
                                    ?>
                                    <!-- Start:: Rector Welcome Note Form -->
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card custom-card">
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        Rector Welcome Note
                                                    </div>
                                                </div>
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <div class="card-body">
                                                        <div class="row gy-4">
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Sub Title:</p>
                                                                <input name="sub_title" type="text" class="form-control" value="<?=$sub_title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Title:</p>
                                                                <input name="title" type="text" class="form-control" value="<?=$title?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Content:</p>
                                                                <textarea name="content" class="form-control" id="input"><?=$content?></textarea>
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Button Text:</p>
                                                                <input name="button_text" type="text" class="form-control" value="<?=$button_text?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Button Link:</p>
                                                                <input name="button_link" type="text" class="form-control" value="<?=$button_link?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Rector Image:</p>
                                                                <input class="form-control" name="rec_img" type="file">
                                                                <img class="rounded mt-2" src="/assets/school_image/staff/<?=$rec_img?>" alt="" style="max-width:89px;">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Rector Position:</p>
                                                                <input name="rec_position" type="text" class="form-control" value="<?=$rec_position?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Rector Name:</p>
                                                                <input name="rec_name" type="text" class="form-control" value="<?=$rec_name?>" id="input">
                                                            </div>
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <p class="mb-2 text-muted">Extra Image:</p>
                                                                <input class="form-control" name="extra_img" type="file">
                                                                <img class="rounded mt-2" src="/assets/school_image/staff/<?=$extra_img?>" alt="" style="max-width:89px;">
                                                            </div>
                                                            <!-- Submit Button -->
                                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                                <label for="input-submit" class="form-label">Submit</label>
                                                                <input type="submit" name="update_rector_welcome_note" class="form-control" id="input-submit" value="Submit">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: Rector Welcome Note Form -->
                                <?php } } ?>
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