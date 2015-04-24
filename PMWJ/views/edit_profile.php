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
	<div class="header absolute_position panel_color panel_shadow"></div>
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
		<form>
			<label class="text">Current/Previous Job</label>
			<input class = 'text_input form_row' type="text" placeholder="Location" name="location">
            <div>
            	Birthdate
            	<select id="day">

            	</select>
            </div>
            <input class = 'text_input form_row' type="text" placeholder="Industry Title" name = "current_industry">
            <input class = 'text_input form_row' type="text" placeholder="Job Title" name = "current_position">
            <input class = 'text_input form_row' type="text" placeholder="Experience (In Years)" name="experience">
            
            
            <div class="text form_row">I am looking to
            	<input type="radio" name="acc_type" value="start"> start /
				<input type="radio" name="acc_type" value="join"> join    a company
            </div>
            <label class="text"> Desired Job</label>
            <input class = 'text_input form_row' type="text" placeholder="Industry Title" name="new_industry">
            <input class = 'text_input form_row' type="text" placeholder="Job Title" name="new_position">
		</form>
	</div>
	<script type="text/javascript" src="scripts/script.js"></script>
</body>
</html>
