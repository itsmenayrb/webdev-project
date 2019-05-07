<?php
	
	session_start();
	require_once '../classes/Config.php';
	$config = new Config();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bryan Balaga | Places</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <!-- <link rel="stylesheet" href="../assets/css/template2.css" /> -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- Nucleo Icons -->
  	<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  	<!-- CSS Files -->
  	<link href="./assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  	<!-- <link href="./assets/css/datatables.min.css" rel="stylesheet" /> -->
    <link rel="stylesheet" type="text/css" href="../style.css"/>
</head>
<body class="">
	<div class="wrapper">
	    <?php include './includes/sidebar.php'; ?>
	    <div class="main-panel">
	      <?php include './includes/navigation.php'; ?>
	      <!-- End Navbar -->
	      <div class="content">
	        <?php include './includes/places.section.php'; ?>
	      </div>
	      <?php include './includes/footer.php'; ?>
	    </div>
	</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.counterup.js"></script>
    <script type="text/javascript" src="../assets/js/waypoints.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
	<script src="./assets/js/plugins/bootstrap-notify.js"></script>
	<!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="./assets/js/black-dashboard.min.js?v=1.0.0"></script>
	<!-- <script type="text/javascript" src="./assets/js/datatables.min.js"></script> -->
    <script type="text/javascript" src="./admin.js"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
	      $().ready(function() {
	        $sidebar = $('.sidebar');
	        $navbar = $('.navbar');
	        $main_panel = $('.main-panel');

	        $full_page = $('.full-page');

	        $sidebar_responsive = $('body > .navbar-collapse');
	        sidebar_mini_active = true;
	        white_color = false;

	        window_width = $(window).width();
	        
	    });
	  });
    </script>
</body>
</html>