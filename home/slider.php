<!--  Main Slider -->
<section class="swiper slider-Swiper-it relative">
    <div class="swiper-wrapper">
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<pre>";
            print_r($row); // Output each row to debug
            echo "</pre>";
            ?>
            <!-- The HTML for each slide -->
            <div class="swiper-slide">
                <div class="slider-it-main relative over overflow-hiden">
                    <div class="slider-image-it">
                        <img src="<?=$siteUrl?>assets/images/slide/<?= htmlspecialchars($row['slider_img']) ?>" alt="">
                    </div>
                    <span class="it-solution fw-600"><?= htmlspecialchars($row['inner_big_text']) ?></span>
                    <div class="tf-container">
                        <div class="slider-content-it relative z-index-3">
                            <div class="sub-title-slider wow fadeInUpSmall">
                                <i class="icon-angle-downs"></i>
                                <span class="fw-600 text-white font-man"><?= htmlspecialchars($row['sub_title']) ?></span>
                            </div>
                            <h1 class="title-slider text-white wow fadeInUpSmall" data-wow-delay=".2s">
                                <?php
                                function addBreaks($text, $maxLength = 18) {
                                    return preg_replace('/(.{1,' . $maxLength . '})(\s|$)/', '$1<br>', $text);
                                }
                                echo addBreaks($row['title']);
                                ?>
                            </h1>
                            <p class="des text-white fw-500 mb-40 wow fadeInUpSmall" data-wow-delay=".3s">
                                <?= htmlspecialchars($row['bottom_title']) ?>
                            </p>
                            <div class="btn-main wow fadeInUpSmall" data-wow-delay=".4s">
                                <a href="<?= htmlspecialchars($row['button_link']) ?>" class="button-src">
                                    <?= htmlspecialchars($row['button_text']) ?>
                                    <i class="icon-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
    <div class="button-swiper">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>