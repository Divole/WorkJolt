<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<!-- <a href="index.php?logout">Logout</a> -->
<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>WorkJolt</title>
    <link rel="stylesheet" type="text/css" href="/WorkJolt/styles/stylesheet.css">
</head>
<body class="pattern">

	<!-- body background shadow, no content here-->
	<div class="patter_shade position_absolute body_size "></div>

	<!-- header: contains top menu and logout button-->
	<div id = "header"class=" absolute_position panel_color panel_shadow">
		<!-- top menu tabs -->
		<div id="top_menu" class=" absolute_position">
			<div id = "my_news" class = "top_menu_item">
				<a class = "item_deselected" href="?my_news"> My News</a>
			</div>
			<div id = "my_project" class = "top_menu_item">
				<a class = "item_deselected" href="?my_project"> My Project</a>
			</div>
			<div id = "my_profile" class = "top_menu_item">
				<a class = "item_selected" href="?my_profile"> My Profile</a>
			</div>
			<div id = "my_people" class = "top_menu_item">
				<a class = "item_deselected" href="?my_people"> My People</a>
			</div>
		</div>

		<!-- logout button on the header -->
		<div class="absolute_position position_right" >
			<div class="btn btn_wrapper"> 
				<a class="text" href="processes/logout.php">Logout</a>
			</div>
		</div>
	</div>

	<!-- side pannels -->
	<div class="position_absolute body_size">
		<!-- left side pannel -->
		<div class="left_panel absolute_position pattern panel_shadow">
			<div class="patter_shade inner_pannel">
				Left pannel content
			</div>
		</div>
		<!-- right side pannel -->
		<div class="right_panel absolute_position pattern panel_shadow">
			<div class="patter_shade inner_pannel">
				Targeted advertisments will be here
			</div>
		</div>
	</div>
	<div id="content"></div>

	<!-- scripts at the end of the body tag, because they have to be loaded last -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="scripts/script.js"></script>
</body>
