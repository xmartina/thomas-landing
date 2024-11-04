<section class="pt-130 skill-team-member" style="margin-top: 140px;">
    <div class="container">
        <?php
        $sql = "SELECT * FROM rector_welcome_note WHERE id = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
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
        <div class="row align-center">
            <div class=" col-md-12 col-lg-5">
                <div class="skill-team-content">
                    <div class="heading-title mb-40">
                        <span class="sub-title texts-blue font-man"><?= $site_name ?></span>
                        <h2 class="title"><?= $title ?></h2>
                        <p class="des"><?= $content ?></p>
                    </div>
                    <div class="btn-wrap-about flex-three">
                        <a href="<?=$site_url?>pages/about/<?= $button_link ?>" class="button-src"><?= $button_text ?> <i class="icon-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="skill-team-image-center">
                    <img src="<?=$site_url?>assets/school_image/staff/<?= $rec_img ?>" alt="image">
                    <div class="text-center d-flex justify-content-center align-items-center flex-column text-dark mt-3" style="font-weight: bold; line-height: .8">
                        <div style="font-size: 12px;">
                            <?= $rec_position ?>
                        </div>
                        <hr class="py-2 w-75">
                        <?= $rec_name ?>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="skill-team-image-right">
                    <img src="<?=$siteUrl?>assets/images/<?= $extra_img ?>" alt="image">
                </div>
            </div>
        </div>
        <?php } }?>
    </div>

</section>