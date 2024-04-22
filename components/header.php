<?php 
$base_url = '/cpg/';
$logo = $base_url . 'assets/img/logo/logo.svg';
?>

<!doctype html>
<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../assets/">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
      <title>
      <?php if (!empty($page_title)) echo remove_junk($page_title);
      elseif(!empty($user))
      echo ucfirst($user['name']);
      else echo "Page: Login";?>
      </title>
      <meta name="description" content="" />
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="<?php echo $base_url; ?>assets/img/favicon/favicon.ico" />
      <!-- Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
         rel="stylesheet" />
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendor/fonts/boxicons.css" />
      <!-- Core CSS -->
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/demo.css" />
      <!-- Vendors CSS -->
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
      <!-- Page CSS -->
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendor/css/pages/page-auth.css" />
      <link rel="stylesheet" href="<?php echo $base_url; ?>assets/vendor/css/pages/page-misc.css" />
      <!-- Helpers -->
      <script src="<?php echo $base_url; ?>assets/vendor/js/helpers.js"></script>
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src="<?php echo $base_url; ?>assets/js/config.js"></script>
   </head>
   <body>