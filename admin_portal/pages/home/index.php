<?php
include_once __DIR__.'/../../admin_portal/functions/dashboard_function.php';
include_once __DIR__.'/../../admin_portal/partials/header.php';
?>
<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">

        <!-- Start:: row-9 -->
        <div class="row">
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Example
                        </div>
                        <div class="prism-toggle">
                            <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">
                            <a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
                               href="#collapseExample" role="button" aria-expanded="false"
                               aria-controls="collapseExample">
                                Link with href
                            </a>
                            <button class="btn btn-secondary collapsed mb-2" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                Button with data-bs-target
                            </button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body mb-0">
                                Some placeholder content for the collapse component. This panel
                                is
                                hidden by default but revealed when the user activates the
                                relevant
                                trigger.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-none border-top-0">
                        <!-- Prism Code -->
                        <pre class="language-html"><code class="language-html">&lt;p class="mb-0"&gt;
    &lt;a class="btn btn-primary collapsed mb-2" data-bs-toggle="collapse"
        href="#collapseExample" role="button" aria-expanded="false"
        aria-controls="collapseExample"&gt;
        Link with href
    &lt;/a&gt;
    &lt;button class="btn btn-secondary collapsed mb-2" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapseExample"
        aria-expanded="false" aria-controls="collapseExample"&gt;
        Button with data-bs-target
    &lt;/button&gt;
&lt;/p&gt;
&lt;div class="collapse" id="collapseExample"&gt;
    &lt;div class="card card-body mb-0"&gt;
        Some placeholder content for the collapse component. This panel
        is
        hidden by default but revealed when the user activates the
        relevant
        trigger.
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        <!-- Prism Code -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">
                            Targets Collapse
                        </div>
                        <div class="prism-toggle">
                            <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">
                            <a class="btn btn-primary mb-2" data-bs-toggle="collapse"
                               href="#multiCollapseExample1" role="button" aria-expanded="false"
                               aria-controls="multiCollapseExample1">Toggle first element</a>
                            <button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                    aria-controls="multiCollapseExample2">Toggle second
                                element</button>
                            <button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
                                    data-bs-target=".multi-collapse" aria-expanded="false"
                                    aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
                                both elements</button>
                        </p>
                        <div class="row">
                            <div class="col m-1">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body mb-0">
                                        Some placeholder content for the first collapse
                                        component of
                                        this multi-collapse example. This panel is hidden by
                                        default
                                        but revealed when the user activates the relevant
                                        trigger.
                                    </div>
                                </div>
                            </div>
                            <div class="col m-1">
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card card-body mb-0">
                                        Some placeholder content for the second collapse
                                        component
                                        of this multi-collapse example. This panel is hidden by
                                        default but revealed when the user activates the
                                        relevant
                                        trigger.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-none border-top-0">
                        <!-- Prism Code -->
                        <pre class="language-html"><code class="language-html">&lt;p class="mb-0"&gt;
    &lt;a class="btn btn-primary mb-2" data-bs-toggle="collapse"
        href="#multiCollapseExample1" role="button" aria-expanded="false"
        aria-controls="multiCollapseExample1"&gt;Toggle first element&lt;/a&gt;
    &lt;button class="btn btn-success mb-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#multiCollapseExample2" aria-expanded="false"
        aria-controls="multiCollapseExample2"&gt;Toggle second
        element&lt;/button&gt;
    &lt;button class="btn btn-danger mb-2" type="button" data-bs-toggle="collapse"
        data-bs-target=".multi-collapse" aria-expanded="false"
        aria-controls="multiCollapseExample1 multiCollapseExample2"&gt;Toggle
        both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class="row"&gt;
    &lt;div class="col m-1"&gt;
        &lt;div class="collapse multi-collapse" id="multiCollapseExample1"&gt;
            &lt;div class="card card-body mb-0"&gt;
                Some placeholder content for the first collapse
                component of
                this multi-collapse example. This panel is hidden by
                default
                but revealed when the user activates the relevant
                trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col m-1"&gt;
        &lt;div class="collapse multi-collapse" id="multiCollapseExample2"&gt;
            &lt;div class="card card-body mb-0"&gt;
                Some placeholder content for the second collapse
                component
                of this multi-collapse example. This panel is hidden by
                default but revealed when the user activates the
                relevant
                trigger.
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
                        <!-- Prism Code -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End:: row-9 -->

    </div>
</div>
    <!-- End::app-content -->
<?php
include_once __DIR__.'/../../admin_portal/partials/footer.php';
?>