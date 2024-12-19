
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul_halaman; ?></title>
  <link rel="shortcut icon" type="image/png" href=<?= base_url("/assets/images/logos/favicon.png" );?>/>
  <link rel="stylesheet" href=<?= base_url('/assets/css/styles.min.css'); ?> />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
 
    <!-- SIDEBAR -->
    <?php require_once('sidebar.php');?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!-- HEADER -->
      <?php require_once('header.php');?>
      
      <div class="container-fluid">
        <?= $contents; ?>
      </div>
    </div>
    </div>
     
      <?php require_once('js.php'); ?>

</body>

</html>