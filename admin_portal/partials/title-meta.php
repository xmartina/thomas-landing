
<?php
ob_start();
include(__DIR__.'/../../admin_portal/functions/main_function.php');
ob_end_clean()
?>

<meta charset="utf-8" />
<title><?= ($title) ? $title : '' ?> | <?= $site_title ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="<?= $site_dec ?>" name="description" />
<meta content="<?= $site_name ?>" name="author" />
<!-- App favicon -->
<link rel="shortcut icon" href="<?= $site_url ?>assets/images/favicon.png">