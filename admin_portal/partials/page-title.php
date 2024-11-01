<!-- start page title -->
<div class="page-title-box">
    <div class="container-fluid">
     <div class="row align-items-center">
         <div class="col-sm-6">
             <div class="page-title">
                 <h4><?= ($title) ? $title : '' ?></h4>
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);"><?= ($pagetitle) ? $pagetitle : '' ?></a></li>
                         <li class="breadcrumb-item"><a href="javascript: void(0);"><?= ($subtitle) ? $subtitle : '' ?></a></li>
                         <li class="breadcrumb-item active"><?= ($title) ? $title : '' ?></li>
                     </ol>
             </div>
         </div>
         <div class="col-sm-6">
            <div class="float-end d-none d-sm-block">
                <a href="" class="btn btn-success">Add Widget</a>
            </div>
         </div>
     </div>
    </div>
 </div>
 <!-- end page title -->    