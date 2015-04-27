<?php
session_start();
$id=$_SESSION['id'];
require_once("classes/profile.php");
require_once("config/db.php");
$profile=new profile();
$basicInfo=$profile->getBasicInfo($id);
$detailedInfo=$profile->getDetailedInfo($id);



?>
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
				<a class = "item_deselected"href="news_feed.php"> My News</a>
			</div>
			<div id = "my_project" class = "top_menu_item">
				<a class = "item_deselected"href=""> My Project</a>
			</div>
			<div id = "my_profile" class = "top_menu_item">
				<a class = "item_selected"href="profile_preview.php"> My Profile</a>
			</div>
			<div id = "my_people" class = "top_menu_item">
				<a class = "item_deselected"href=""> My People</a>
			</div>
		</div>

		<!-- logout button on the header -->
		<div class="absolute_position position_right" >
			<div class="btn btn_wrapper"><a class="text" href="logout.php">Logout</a></div>
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

	<!-- form wrapper-center pannel: contains user profile preview -->
	<div  id="profile_form_wrapper"class="form_wrapper panel_color panel_shadow">
		<!-- link to edit profile -->
		<div id="profile_preview" class="form_row">
			<a class="item_deselected" href="edit_profile.php">Edit</a>
		</div>

		<!-- content of profile preview -->
		<div class="form_wrapper_content">
			<div class="form_row align_left">
				<label id = "name">Name</label>  <span><?php echo $basicInfo[1] ;?></span>
				<label id = "surname">Surname</label>  <span><?php echo $basicInfo[2];?></span>
			</div>

			<!--<div class="form_row">
				<label id = "bithday">Date of birth</label> <span><?php// echo ;?></span>
			</div>
			-->
			<div class="form_row ">
				<label id = "location">City</label> <span><?php echo $detailedInfo[0];?></span>
			</div>

			<div class="form_row block_mark">
				<span class="text">Work Experience</span>
			</div>

			<div class="form_row">
				<label>Industry title: </label> <span><?php echo $detailedInfo[2];?></span>
				<label id = "Industry"></label>	
			</div>

			<div class="form_row">
				<label>Position (Job title): </label> <span><?php echo $detailedInfo[1] ;?></span>
				<label id = "position"></label>	
			</div>

			<div class="form_row">
				<label> Work duration: </label>
				<label id = "years_of_experience"></label> <span><?php echo $detailedInfo[3];?></span>	
				<label> Years</label>
			</div>

			<div class="form_row block_mark">
				<span class="text">Desired Position</span>	
			</div>

			<div class="form_row">
				<label>Desired Industry: </label>  <span><?php echo $detailedInfo[6];?></span>
				<label id = "new_industry"></label>	
			</div>

			<div class="form_row">
				<label>Desired Position (Job title): </label> <span><?php echo $detailedInfo[5];?></span>
				<label id = "new position"></label>	
			</div>

			<div class="form_row">
				<label id = "profile_status"> Started "Company Name" company </label> 	
			</div>
			
		</div>
		
	</div>

	<!-- scripts at the end of the body tag, because they have to be loaded last -->
	<script type="text/javascript" src="scripts/script.js"></script>
</body>