	<!-- form wrapper-center pannel: contains user profile preview -->
	<div  id="profile_form_wrapper"class="form_wrapper panel_color panel_shadow">
		<!-- link to edit profile -->
		<div id="profile_preview" class="form_row">
			<a class="item_deselected" href="?edit_profile">Edit</a>
		</div>

		<!-- content of profile preview -->
		<div class="form_wrapper_content">
			<div class="form_row align_left">
				<label id = "name">Name</label>
				<label  id = "surname">Surname</label>
			</div>
			<div class="form_row align_left">
				<label id = "email">Email</label>
			</div>

			<!--<div class="form_row">
				<label id = "bithday">Date of birth</label> <span><?php// echo ;?></span>
			</div>
			-->
			<div class="form_row ">
				<label id = "location"></lavel>
			</div>

			<!-- ------------------------ -->
			<div class="form_row block_mark">
				<span class="text">Work Experience</span>
			</div>
			<!-- ---------------------------- -->


			<div class="form_row">
				<label>Industry title: </label>
				<label id = "industry"></label>	
			</div>

			<div class="form_row">
				<label>Position (Job title): </label>
				<label id = "position"></label>	
			</div>

			<div class="form_row">
				<label> Work duration: </label>
				<label id = "experience"></label> <span></span>	
				<label> Years</label>
			</div>

			<div class="form_row block_mark">
				<span class="text">Desired Position</span>	
			</div>

			<div class="form_row">
				<label>Desired Industry: </label>  <span></span>
				<label id = "new_industry"></label>	
			</div>

			<div class="form_row">
				<label>Desired Position (Job title): </label> <span></span>
				<label id = "new_position"></label>	
			</div>

			<div class="form_row">
				<label id = "profile_status"> Started "Company Name" company </label> 	
			</div>
			
		</div>
		
	</div>
	<script type="text/javascript">
		getUserDetails('preview');
	</script>