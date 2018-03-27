<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>DJ APP</title>
	
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Jquery Mobile -->
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

	<style>
		.img-thumb{
			width:80px;
			height: 80px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}
		
		.profile-image{
			width:100px;
			height: 100px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
			display: block;
			margin: auto;
			border: 2px outset #e9e9e9;
			border-radius: 10px;
		}
		
		.well{
			width: 100%;
			background-color: lightgrey;
			padding: 20px 0px;
			border-bottom: 1px solid grey;
			height: 40px;
			margin-bottom: 10px;
		}
		
		.user-name-banner{
			text-align: center;
		}
		
		.ui-footer{
			padding-top: 5px;
		}
		
		.ui-footer .ui-btn { 
			display: block !important;
			width: 85% !important;
			margin: auto;
			margin-bottom: 5px;
		}
		
		.qr-sample{
			width: 200px;
			display: block;
			margin: auto;
			margin-top: 25px;
		}
		
		.event-header, event-banner {
			width: 100%;
		}
		
		.event-banner {
			height: 150px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: center center;
		}
		
		.event-title {
			text-align: center;
		}
		
		.event-table{
			width: 100%;
			border-collapse: collapse;
		}
		
		.event-table tr td {
			padding: 10px 0px;
		}
		
		.event-table tr td:nth-child(1) {
			text-align: left;
			padding-right: 20px;
			border-right: 1px solid lightgray;
		}
		
		.event-table tr td:nth-child(2) {
			text-align: right;
			padding-left: 20px;
		}
		
	</style>
</head>

<body>

<?php
	define("PAGE_NAME", "Local Events");
	/* Page Manifest */
	/* All pages will be stitched together here */	
	include_once("structure/local-events.php");
	include_once("structure/global-events.php");
	include_once("structure/chats-view.php");
	include_once("structure/scan-view.php");
	
	include_once("structure/event-details.php");
	
	
	include_once("structure/profile-view.php");	
?>

</body>
</html>
