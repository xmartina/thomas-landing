<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">James Raphael</h5>
                    <span class="font-size-13 text-white-50">Administrator</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="<?= $site_url ?>admin_portal" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-title">Update Pages</li>

                <li>
                    <a href="<?= $site_url ?>admin_portal" class="waves-effect">
                        <i class="dripicons-home"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="dripicons-to-do"></i>
                        <span class="badge rounded-pill bg-danger float-end">6</span>
                        <span>Administration</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= $site_url ?>admin_portal/pages/home">Home Page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->