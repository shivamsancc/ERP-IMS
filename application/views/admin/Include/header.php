<?php
$root = "http://".$_SERVER['HTTP_HOST'];
$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
			<link rel="shortcut icon" href="https://www.citet.org/wp-content/uploads/2018/06/cropped-citet-logo-32x32.png">
			<meta http-equiv=Content-type content="text/html; charset=utf-8">
			<link href="https://fonts.googleapis.com/css?family=KoHo" rel="stylesheet">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
<!-- Bootstrap CSS -->
	<link href="<?= base_url('assets/') ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome CSS-->
	<link href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
	<!-- Animate CSS -->
	<link href="<?= base_url('assets/') ?>animate/animate.css" rel="stylesheet">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>images/loader1.gif">
<!-- All JS Included --> 

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="<?= base_url('assets/') ?>jquery/jquery-3.1.1.min.js"></script> 
	<script src="<?= base_url('assets/') ?>bootstrap/js/bootstrap.min.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/jquery.meanmenu.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/plugins.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/jquery.plugin.min.js"></script> 
	<script src="<?= base_url('assets/') ?>jquery/jquery.countdown.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/angular.min.js"></script> 
	<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="http://www.imgglobalinfotech.com/blog/web_root/ckeditor/ckeditor.js"></script>
<!-- All JS Included --> 
	<!--<script src="<?= base_url('assets/') ?>vjs/custom.js"></script>-->


</head>
<body>
<div class="loader"></div>
