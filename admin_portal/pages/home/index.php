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
                            Example
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">
                            <button class="btn btn-secondary collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_slider_1"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Slider 1
                            </button>
                        </p>
                        <p class="mb-0">
                            <button class="btn btn-secondary collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#edit_slider_2"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Edit Slider 2
                            </button>
                        </p>
                        <div class="collapse" id="edit_slider_2">
                            <!--slider forms-->
                            <!-- Start:: slider-1 -->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card custom-card">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Input Types
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row gy-4">
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <p class="mb-2 text-muted">Basic Input:</p>
                                                    <input type="text" class="form-control" id="input">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-label" class="form-label">Form Input With Label</label>
                                                    <input type="text" class="form-control" id="input-label">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-placeholder" class="form-label">Form Input With Placeholder</label>
                                                    <input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-text" class="form-label">Type Text</label>
                                                    <input type="text" class="form-control" id="input-text" placeholder="Text">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-number" class="form-label">Type Number</label>
                                                    <input type="number" class="form-control" id="input-number" placeholder="Number">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-password" class="form-label">Type Password</label>
                                                    <input type="password" class="form-control" id="input-password" placeholder="Password">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-email" class="form-label">Type Email</label>
                                                    <input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-tel" class="form-label">Type Tel</label>
                                                    <input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-date" class="form-label">Type Date</label>
                                                    <input type="date" class="form-control" id="input-date">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-week" class="form-label">Type Week</label>
                                                    <input type="week" class="form-control" id="input-week">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-month" class="form-label">Type Month</label>
                                                    <input type="month" class="form-control" id="input-month">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-time" class="form-label">Type Time</label>
                                                    <input type="time" class="form-control" id="input-time">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-datetime-local" class="form-label">Type datetime-local</label>
                                                    <input type="datetime-local" class="form-control" id="input-datetime-local">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-search" class="form-label">Type Search</label>
                                                    <input type="search" class="form-control" id="input-search" placeholder="Search">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-submit" class="form-label">Type Submit</label>
                                                    <input type="submit" class="form-control" id="input-submit" value="Submit">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-reset" class="form-label">Type Reset</label>
                                                    <input type="reset" class="form-control" id="input-reset">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-button" class="form-label">Type Button</label>
                                                    <input type="button" class="form-control btn btn-primary" id="input-button"  value="Button">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <div class="row">
                                                        <div class="col-xl-3">
                                                            <label class="form-label">Type Color</label>
                                                            <input class="form-control form-input-color" type="color" value="#136bd0">
                                                        </div>
                                                        <div class="col-xl-5">
                                                            <div class="form-check">
                                                                <p class="mb-3 px-0 text-muted">Type Checkbox</p>
                                                                <input class="form-check-input ms-2" type="checkbox" value="" checked="">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-check">
                                                                <p class="mb-3 px-0 text-muted">Type Radio</p>
                                                                <input class="form-check-input ms-2" type="radio" checked="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-file" class="form-label">Type File</label>
                                                    <input class="form-control" type="file" id="input-file">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-label">Type Url</label>
                                                    <input class="form-control" type="url"  name="website" placeholder="http://example.com">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-disabled" class="form-label">Type Disabled</label>
                                                    <input type="text" id="input-disabled" class="form-control" placeholder="Disabled input" disabled="">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-readonlytext" class="form-label">Input Readonly Text</label>
                                                    <input type="text" readonly="" class="form-control-plaintext" id="input-readonlytext" value="email@example.com">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="disabled-readonlytext" class="form-label">Disabled Readonly Input</label>
                                                    <input class="form-control" type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled="" readonly="">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label class="form-label">Type Readonly Input</label>
                                                    <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly="">
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="text-area" class="form-label">Textarea</label>
                                                    <textarea class="form-control" id="text-area" rows="1"></textarea>
                                                </div>
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                                    <label for="input-DataList" class="form-label">Datalist example</label>
                                                    <input class="form-control" list="datalistOptions" id="input-DataList" placeholder="Type to search...">
                                                    <datalist id="datalistOptions">
                                                        <option value="San Francisco">
                                                        </option>
                                                        <option value="New York">
                                                        </option>
                                                        <option value="Seattle">
                                                        </option>
                                                        <option value="Los Angeles">
                                                        </option>
                                                        <option value="Chicago">
                                                        </option>
                                                    </datalist>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer d-none border-top-0">
                                            <!-- Prism Code -->
                                            <pre class="language-html"><code class="language-html">&lt;div class="row gy-4"&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;p class="mb-2 text-muted"&gt;Basic Input:&lt;/p&gt;
        &lt;input type="text" class="form-control" id="input"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-label" class="form-label"&gt;Form Input With Label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-label"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-placeholder" class="form-label"&gt;Form Input With Placeholder&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-text" class="form-label"&gt;Type Text&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-text" placeholder="Text"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-number" class="form-label"&gt;Type Number&lt;/label&gt;
        &lt;input type="number" class="form-control" id="input-number" placeholder="Number"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-password" class="form-label"&gt;Type Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="input-password" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-email" class="form-label"&gt;Type Email&lt;/label&gt;
        &lt;input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-tel" class="form-label"&gt;Type Tel&lt;/label&gt;
        &lt;input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-date" class="form-label"&gt;Type Date&lt;/label&gt;
        &lt;input type="date" class="form-control" id="input-date"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-week" class="form-label"&gt;Type Week&lt;/label&gt;
        &lt;input type="week" class="form-control" id="input-week"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-month" class="form-label"&gt;Type Month&lt;/label&gt;
        &lt;input type="month" class="form-control" id="input-month"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-time" class="form-label"&gt;Type Time&lt;/label&gt;
        &lt;input type="time" class="form-control" id="input-time"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-datetime-local" class="form-label"&gt;Type datetime-local&lt;/label&gt;
        &lt;input type="datetime-local" class="form-control" id="input-datetime-local"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-search" class="form-label"&gt;Type Search&lt;/label&gt;
        &lt;input type="search" class="form-control" id="input-search" placeholder="Search"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-submit" class="form-label"&gt;Type Submit&lt;/label&gt;
        &lt;input type="submit" class="form-control" id="input-submit" value="Submit"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-reset" class="form-label"&gt;Type Reset&lt;/label&gt;
        &lt;input type="reset" class="form-control" id="input-reset"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-button" class="form-label"&gt;Type Button&lt;/label&gt;
        &lt;input type="button" class="form-control btn btn-primary" id="input-button"  value="Button"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;div class="row"&gt;
            &lt;div class="col-xl-4"&gt;
                &lt;label class="form-label"&gt;Type Color&lt;/label&gt;
                &lt;input class="form-control form-input-color" type="color" value="#136bd0"&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-4"&gt;
                &lt;div class="form-check"&gt;
                    &lt;p class="mb-3 px-0 text-muted"&gt;Type Checkbox&lt;/p&gt;
                    &lt;input class="form-check-input ms-2" type="checkbox" value="" checked=""&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-3"&gt;
                &lt;div class="form-check"&gt;
                    &lt;p class="mb-3 px-0 text-muted"&gt;Type Radio&lt;/p&gt;
                    &lt;input class="form-check-input ms-2" type="radio" checked=""&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-file" class="form-label"&gt;Type File&lt;/label&gt;
        &lt;input class="form-control" type="file" id="input-file"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label class="form-label"&gt;Type Url&lt;/label&gt;
        &lt;input class="form-control" type="url"  name="website" placeholder="http://example.com"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-disabled" class="form-label"&gt;Type Disabled&lt;/label&gt;
        &lt;input type="text" id="input-disabled" class="form-control" placeholder="Disabled input" disabled=""&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-readonlytext" class="form-label"&gt;Input Readonly Text&lt;/label&gt;
        &lt;input type="text" readonly="" class="form-control-plaintext" id="input-readonlytext" value="email@example.com"&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="disabled-readonlytext" class="form-label"&gt;Disabled Readonly Input&lt;/label&gt;
        &lt;input class="form-control" type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled="" readonly=""&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label class="form-label"&gt;Type Readonly Input&lt;/label&gt;
        &lt;input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly=""&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="text-area" class="form-label"&gt;Textarea&lt;/label&gt;
        &lt;textarea class="form-control" id="text-area" rows="1"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-DataList" class="form-label"&gt;Datalist example&lt;/label&gt;
        &lt;input class="form-control" list="datalistOptions" id="input-DataList" placeholder="Type to search..."&gt;
        &lt;datalist id="datalistOptions"&gt;
            &lt;option value="San Francisco"&gt;
            &lt;/option&gt;
            &lt;option value="New York"&gt;
            &lt;/option&gt;
            &lt;option value="Seattle"&gt;
            &lt;/option&gt;
            &lt;option value="Los Angeles"&gt;
            &lt;/option&gt;
            &lt;option value="Chicago"&gt;
            &lt;/option&gt;
        &lt;/datalist&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                            <!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End:: row-1 -->
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