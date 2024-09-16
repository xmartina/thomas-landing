<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title><?=$page_name ?> - <?=$site_name ?> - <?=$site_title ?> </title>

    <meta name="author" content="<?=$site_name ?> - <?=$site_title ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="<?=$siteUrl?>app/css/app.css">
    <link rel="stylesheet" href="<?=$siteUrl?>app/css/textanimation.css">


    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?=$siteUrl?>assets/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?=$siteUrl?>assets/images/favicon.png">

    <link rel="stylesheet" href="<?=$siteUrl?>app/css/adjustment.css">

</head>

<body class="body header-fixed counter-scroll">

<div class="preload preload-container">
    <div class="loader">
        <span>TMIT</span>
        <span>TMIT</span>
    </div>
</div>

<!--<< Mouse Cursor Start >>-->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>

<!-- /preload -->

<div id="wrapper">
    <div id="pagee" class="clearfix">

        <!-- Main Header -->
        <header class="main-header header-style1">
            <!-- Header Lower -->
            <div class="header-top">
                <div class="row flex-three">
                    <div class="col-md-7">
                        <ul class="address-top-header flex-three">
                            <li class="flex-three">
                                <i class="icon-location-dot1"></i>
                                <span><?=$site_address ?></span>
                            </li>
                            <li class="flex-three">
                                <i class="icon-envelope4"></i>
                                <span><?=$site_email?></span>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-5 flex-six">
                        <ul class="menu-left flex-three">
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <a href="#">Faqs</a>
                            </li>

                        </ul>
                        <ul class="social-top flex-three">
                            <li>
                                <a href="#"><i class="icon-fb"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-tw"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-ytb"></i></a>
                            </li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="header-lower">
                <div class="tf-container full">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="inner-container flex justify-space align-center">
                                <!-- Logo Box -->
                                <div class="header-left flex">
                                    <div class="logo-box">
                                        <div class="logo">
                                            <a href="<?=$siteUrl?>">
                                                <img src="<?=$siteUrl?>assets/images/logo.png" alt="Logo">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-account flex align-center">
                                    <div class="nav-outer flex align-center">
                                        <!-- Main Menu -->
                                        <nav class="main-menu show navbar-expand-md">
                                            <div class="navbar-collapse collapse clearfix"
                                                 id="navbarSupportedContent">
                                                <ul class="navigation clearfix">
                                                    <li class="current">
                                                        <a href="javascript:void(0);">Home</a>
                                                    </li>
                                                    <li class="dropdown2">
                                                        <a href="javascript:void(0);">Administration</a>
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Governing Council</a></li>
                                                            <li><a href="javascript:void(0);">Rector</a></li>
                                                            <li><a href="javascript:void(0);">Deputy Rector (Academics)</a></li>
                                                            <li><a href="javascript:void(0);">Deputy Rector (Admin)</a></li>
                                                            <li><a href="javascript:void(0);">Bursar</a></li>
                                                            <li><a href="javascript:void(0);">Registrar</a></li>
                                                            <li><a href="javascript:void(0);">Librarian</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown2">
                                                        <a href="javascript:void(0);">About Us</a>
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Rector’s Welcome Message</a></li>
                                                            <li><a href="javascript:void(0);">History</a></li>
                                                            <li><a href="javascript:void(0);">Vision and Mission</a></li>
                                                            <li><a href="javascript:void(0);">Gallery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown2">
                                                        <a href="javascript:void(0);">Academics</a>
                                                        <ul>
                                                            <li><a href="javascript:void(0);">Admissions</a>
                                                                <ul>
                                                                    <li><a href="javascript:void(0);">Admission Requirements</a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a href="javascript:void(0);">Schools</a>
                                                                <ul>
                                                                    <li><a href="javascript:void(0);">School of Agriculture and Agricultural Technology</a></li>
                                                                    <li><a href="javascript:void(0);">School of Business and Management Technology</a></li>
                                                                    <li><a href="javascript:void(0);">School of Engineering Technology</a></li>
                                                                    <li><a href="javascript:void(0);">School of Environmental Design Technology</a></li>
                                                                    <li><a href="javascript:void(0);">School of General Studies</a></li>
                                                                    <li><a href="javascript:void(0);">School of Health and Related Technology</a></li>
                                                                    <li><a href="javascript:void(0);">School of Industrial and Applied Sciences</a></li>
                                                                    <li><a href="javascript:void(0);">School of Information and Communications Technology</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown2">
                                                        <a href="javascript:void(0);">Students</a>
                                                        <ul>
                                                            <li><a href="javascript:void(0);">ND/HND Application Form</a></li>
                                                            <li><a href="javascript:void(0);">Check Admissions Status</a></li>
                                                            <li><a href="javascript:void(0);">Admissions Screening Portal</a></li>
                                                            <li><a href="javascript:void(0);">ID Card Portal</a></li>
                                                            <li><a href="javascript:void(0);">E-Library Portal</a></li>
                                                            <li><a href="javascript:void(0);">Portal Login</a></li>
                                                            <li><a href="javascript:void(0);">HND Acceptance Fee Payment</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown2">
                                                        <a href="javascript:void(0);">Staff</a>
                                                        <ul>
                                                            <li><a href="javascript:void(0);">APER FORM</a></li>
                                                            <li><a href="javascript:void(0);">ERP Login</a></li>
                                                            <li><a href="javascript:void(0);">EMAIL</a></li>
                                                            <li><a href="javascript:void(0);">FPNO DOCUMENT MANAGEMENT SYSTEM</a></li>
                                                            <li><a href="javascript:void(0);">STAFF PORTAL</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="javascript:void(0);">Contact Us</a></li>
                                                </ul>

                                            </div>
                                        </nav>
                                        <!-- Main Menu End-->
                                    </div>
                                    <div class="phone-address">
                                        <ul class="flex align-center">
                                            <li class="">
                                                <i class="icon-phone2"></i>
                                                <span>+236 (456) 896 22</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-search">
                                        <a> <i class="icon-search-icon"></i> </a>
                                    </div>
                                    <div class="flat-bt-top sc-btn-top">
                                        <a class="icon-listing" data-bs-toggle="offcanvas"
                                           data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i
                                                class="icon-uni"></i>Menu</a>
                                    </div>
                                    <div class="mobile-nav-toggler mobile-button">
                                        <i class="icon-uni"></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Lower -->

            <!-- Mobile Menu  -->
            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
            <div class="mobile-menu">
                <div class="menu-backdrop"></div>
                <nav class="menu-box">
                    <div class="nav-logo"><a href="<?=$siteUrl?>">
                            <img src="<?=$siteUrl?>assets/images/logo.png" alt=""></a></div>
                    <div class="bottom-canvas">
                        <div class="menu-outer">
                        </div>
                    </div>
                </nav>
            </div>
            <!-- End Mobile Menu -->

        </header>
        <!-- End Main Header -->