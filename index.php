<?php include('parts/config.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $siteName; ?></title>
<meta name="description" content="<?php echo $siteDesc; ?>">
<link rel="shortcut icon" href="assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="assets/main.css">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?ver=1.11.1'></script>
<link href='https://fonts.googleapis.com/css?family=Hind:400,600|Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="assets/app.ie.min.js"></script>
<![endif]-->

</head>

<?php
	if (isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'index';
  }
 ?>

<body class="fs-grid fs-grid-fluid page-<?php echo $page; ?>">

<div id="wrapper">
<?php include('parts/header.php') ?>
<div id="content"><?php include('parts/content.php') ?></div>
<?php include('parts/footer.php') ?>
<?php include('parts/photoswipe.php') ?>
</div>

<script type='text/javascript' src='assets/vendor.min.js'></script>
<script type='text/javascript' src='assets/main.min.js'></script>

</body>
</html>