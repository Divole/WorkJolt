
<!-- form wrapper-center pannel: contains form to complete user profile -->
<div  id="profile_form_wrapper"class="form_wrapper panel_color panel_shadow">
	<!-- link to profile preview -->
	<div id="profile_preview" class="form_row"><a class="item_deselected" href="?my_profile">Preview</a></div>

	<div class="form_wrapper_content">
		<label class="text">Current/Previous Job</label>
		<input class = 'text_input form_row' type="text" placeholder="Location" id="location">
        <input class = 'text_input form_row' type="text" placeholder="Industry Title" id = "current_industry">
        <input class = 'text_input form_row' type="text" placeholder="Job Title" id = "current_position">
        <input class = 'text_input form_row' type="text" placeholder="Experience (In Years)" id="experience">
        
        
        <div class="text form_row" id="radioDiv">I am looking to
        	<input type="radio" name="" = "acc_type" value="start" checked> start /
			<input type="radio" name= "acc_type" value="join"> join    a company
        </div>

        <label class="text"> Desired Job</label>
        <input class = 'text_input form_row' type="text" placeholder="Industry Title" id="new_industry">
        <input class = 'text_input form_row' type="text" placeholder="Job Title" id="new_position">
		<div class = 'form_row absolute_position'>
			<input type="submit"class="btn btn_wrapper" onclick="editProfile()">
		</div>
	</div>
</div>
<script type="text/javascript">
		getUserDetails('edit');
</script>
