<?php
include_once __DIR__.'/../admin_portal/functions/dashboard_function.php';
include_once __DIR__.'/../admin_portal/partials/header.php';
?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start::page-header -->

        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor !</p>
                <span class="fs-semibold text-muted">Track your sales activity, leads and deals here.</span>
            </div>
            <div class="btn-list mt-md-0 mt-2">
                <button type="button" class="btn btn-primary btn-wave">
                    <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters
                </button>
                <button type="button" class="btn btn-outline-secondary btn-wave">
                    <i class="ri-upload-cloud-line me-2 align-middle d-inline-block"></i>Export
                </button>
            </div>
        </div>

        <!-- End::page-header -->

        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-9 col-xl-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">
                                    Deals Statistics
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div>
                                        <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."></th>
                                            <th scope="col">Sales Rep</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Mail</th>
                                            <th scope="col">Location</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."></th>
                                            <td>
                                                <div class="d-flex align-items-center fw-semibold">
                                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                    <img src="<?= $admin_url ?>assets/images/faces/4.jpg" alt="img">
                                                                </span>Mayor Kelly
                                                </div>
                                            </td>
                                            <td>Manufacture</td>
                                            <td>mayorkelly@gmail.com</td>
                                            <td>
                                                <span class="badge bg-info-transparent">Germany</span>
                                            </td>
                                            <td>Sep 15 - Oct 12, 2023</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..." checked></th>
                                            <td>
                                                <div class="d-flex align-items-center fw-semibold">
                                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                    <img src="<?= $admin_url ?>assets/images/faces/15.jpg" alt="img">
                                                                </span>Andrew Garfield
                                                </div>
                                            </td>
                                            <td>Development</td>
                                            <td>andrewgarfield@gmail.com</td>
                                            <td>
                                                <span class="badge bg-primary-transparent">Canada</span>
                                            </td>
                                            <td>Apr 10 - Dec 12, 2023</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel4" value="" aria-label="..."></th>
                                            <td>
                                                <div class="d-flex align-items-center fw-semibold">
                                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                    <img src="<?= $admin_url ?>assets/images/faces/11.jpg" alt="img">
                                                                </span>Simon Cowel
                                                </div>
                                            </td>
                                            <td>Service</td>
                                            <td>simoncowel234@gmail.com</td>
                                            <td>
                                                <span class="badge bg-danger-transparent">Europe</span>
                                            </td>
                                            <td>Sep 15 - Oct 12, 2023</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel5" value="" aria-label="..." checked></th>
                                            <td>
                                                <div class="d-flex align-items-center fw-semibold">
                                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                    <img src="<?= $admin_url ?>assets/images/faces/8.jpg" alt="img">
                                                                </span>Mirinda Hers
                                                </div>
                                            </td>
                                            <td>Marketing</td>
                                            <td>mirindahers@gmail.com</td>
                                            <td>
                                                <span class="badge bg-warning-transparent">USA</span>
                                            </td>
                                            <td>Apr 14 - Dec 14, 2023</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="ps-4"><input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..." checked></th>
                                            <td>
                                                <div class="d-flex align-items-center fw-semibold">
                                                                <span class="avatar avatar-sm me-2 avatar-rounded">
                                                                    <img src="<?= $admin_url ?>assets/images/faces/9.jpg" alt="img">
                                                                </span>Jacob Smith
                                                </div>
                                            </td>
                                            <td>Social Plataform</td>
                                            <td>jacobsmith@gmail.com</td>
                                            <td>
                                                <span class="badge bg-success-transparent">Singapore</span>
                                            </td>
                                            <td>Feb 25 - Nov 25, 2023</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i class="ri-download-2-line"></i></a>
                                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>
                                        Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="javascript:void(0);">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                <li class="page-item">
                                                    <a class="page-link text-primary" href="javascript:void(0);">
                                                        next
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>
</div>
<!-- End::app-content -->
<?php
include_once __DIR__.'/../admin_portal/partials/footer.php';
?>