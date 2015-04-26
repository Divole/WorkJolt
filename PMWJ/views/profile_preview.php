
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

		<!-- logout button on the header -->
		<div class="absolute_position position_right" >
			<div class="btn btn_wrapper"><a class="text" href="../index.php?logout">Logout</a></div>
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
				<label id = "name">name</label>
				<label id = "surname">surname</label>	
			</div>

			<div class="form_row">
				<label id = "bithday">date of birth</label>
			</div>

			<div class="form_row ">
				<label id = "location">City, Country</label>	
			</div>

			<div class="form_row block_mark">
				<span class="text">Work Experience</span>	
			</div>

			<div class="form_row">
				<label>Industry title: </label>
				<label id = "Industry"></label>	
			</div>

			<div class="form_row">
				<label>Position (Job title): </label>
				<label id = "position"></label>	
			</div>

			<div class="form_row">
				<label> Work duration: </label>
				<label id = "years_of_experience"></label>	
				<label> Years</label>
			</div>

			<div class="form_row block_mark">
				<span class="text">Desired Position</span>	
			</div>

			<div class="form_row">
				<label>Desired Industry: </label>
				<label id = "new_industry"></label>	
			</div>

			<div class="form_row">
				<label>Desired Position (Job title): </label>
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