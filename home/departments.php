<!-- Services -->
<section class="section-service mt--120px pt-122 pb-130 bg-2">
    <div class="tf-container">
        <div class="heading-title center mb-60">
            <span class="sub-title texts-blue font-man wow fadeInUpSmall" data-wow-delay=".2s">Our Departments</span>
            <h2 class="title wow fadeInUpSmall" data-wow-delay=".3s">Departments</h2>
        </div>
        <div class="service-grid mb-40 wow fadeInUpSmall" data-wow-delay=".3s">
            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="icon-box1">
                <div class="icon-box1-visible flex-two">
                    <div class="content">
                        <span class="number mb-15">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</span>
                        <h3 class="title mb-47"><a href="pages/department/page?' . $row['book_id'] . '">' . $row['dep_name'] . '</a></h3>
                        <div class="icon">
                            <i class="icon-Icon11"></i>
                        </div>
                    </div>
                    <div class="button-icon-box">
                        <a href="pages/department/page?' . $row['book_id'] . '" class="service-link"><i class="icon-angle-downs"></i></a>
                    </div>
                </div>
                <div class="icon-box1-hide">
                    <div class="flex-one">
                        <div class="icon">
                            <i class="icon-Icon11"></i>
                        </div>
                        <span class="number">' . str_pad($i, 2, '0', STR_PAD_LEFT) . '</span>
                    </div>
                    <h3 class="title"><a href="pages/department/page?' . $row['book_id'] . '">' . $row['dep_name'] . '</a></h3>
                    <p class="des">' . $row['dep_short_dec'] . '</p>
                    <div class="button-icon-box">
                        <a href="pages/department/page?' . $row['book_id'] . '" class="service-link">Read More<i class="icon-right-icon"></i></a>
                    </div>
                </div>
            </div>';
            $i++; // Increment counter
            }
            ?>
        </div>
        <div class="center wow fadeInUpSmall" data-wow-delay=".3s">
            <div class="service-cta">
<!--                <img src="--><?php //=$siteUrl?><!--assets/images/page/chat1.png" alt="image">-->
                <p class="font-man">We have More</p>
                <a href="#">View All Departments <i class="icon-right-icon"></i></a>
            </div>
        </div>
    </div>
</section>