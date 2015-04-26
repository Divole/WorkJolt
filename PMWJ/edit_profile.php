<?php
session_start();
require_once("classes/update_profile.php");
require_once("config/db.php");
$up=new update_profile();
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

		<div id="top_menu" class=" absolute_position">

			<div id = "my_news" class = "top_menu_item">
				<a class = "item_deselected"href=""> My News</a>
			</div>
			<div id = "my_project" class = "top_menu_item">
				<a class = "item_deselected"href=""> My Project</a>
			</div>
			<div id = "my_profile" class = "top_menu_item">
				<a class = "item_selected"href=""> My Profile</a>
			</div>
			<div id = "my_people" class = "top_menu_item">
				<a class = "item_deselected"href=""> My People</a>
			</div>
		</div>

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
			</div></div>
		<!-- right side pannel -->
		<div class="right_panel absolute_position pattern panel_shadow">
			<div class="patter_shade inner_pannel">
				Targeted advertisments will be here
			</div></div>
	</div>

	<!-- form wrapper-center pannel: contains form to complete user profile -->
	<div  id="profile_form_wrapper"class="form_wrapper panel_color panel_shadow">


		<!-- link to profile preview -->
		<div id="profile_preview" class="form_row"><a class="item_deselected" href="views/profile_preview.php">Preview</a></div>

		<form class="form_wrapper_content" method="POST">


			<label class="text">Current/Previous Job</label>
			<input class = 'text_input form_row' type="text" placeholder="Location" name="location">
            <input class = 'text_input form_row' type="text" placeholder="Industry Title" name = "current_industry">
            <input class = 'text_input form_row' type="text" placeholder="Job Title" name = "current_position">
            <input class = 'text_input form_row' type="text" placeholder="Experience (In Years)" name="experience">
            
            
            <div class="text form_row">I am looking to
            	<input type="radio" name="acc_type" value="start" checked> start /
				<input type="radio" name="acc_type" value="join"> join    a company
            </div>

            <label class="text"> Desired Job</label>
            <input class = 'text_input form_row' type="text" placeholder="Industry Title" name="new_industry">
            <input class = 'text_input form_row' type="text" placeholder="Job Title" name="new_position">
			<div class = 'form_row absolute_position'>
				<input type="submit" name="edit_profile" value="Save" class="btn btn_wrapper">

			</div>
			
		</form>
	</div>
</body>
</html>
