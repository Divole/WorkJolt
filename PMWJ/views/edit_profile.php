
<!-- form wrapper-center pannel: contains form to complete user profile -->
<div  id="profile_form_wrapper"class="form_wrapper panel_color panel_shadow">


	<!-- link to profile preview -->
	<div id="profile_preview" class="form_row"><a class="item_deselected" href="?my_profile">Preview</a></div>

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
