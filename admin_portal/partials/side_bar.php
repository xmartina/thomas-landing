<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="index.html" class="header-logo">
            <img src="../assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
            <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="<?= $admin_url ?>" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards<span class="badge bg-warning-transparent ms-2">12</span></span>
                        <i class="fe fe-chevron-right side-menu__angle"></i>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Pages</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="widgets.html" class="side-menu__item">
                        <i class="bx bx-gift side-menu__icon"></i>
                        <span class="side-menu__label">Widgets<span class="badge bg-danger-transparent ms-2">Hot</span></span>
                    </a>
                </li>
                <!-- End::slide -->

            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->