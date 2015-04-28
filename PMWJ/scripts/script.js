$( document ).ready(function() {
    console.log( "ready!" );
	var myString = window.location.href;
	var arr = myString.split('?');
	$("#content").empty();
	if (arr[1] === "my_news") {
		$("#content").load('views/news_feed.php');
	} 
	else if (arr[1] === "my_profile") {
		$("#content").load('views/profile_preview.php');
	}
	else if (arr[1] === "edit_profile") {
		$("#content").load('views/edit_profile.php');
	}
	else if (arr[1] === "my_project") {
		// $("#content").load('../profile_preview.php');
	}
	else if (arr[1] === "my_people") {
		// $("#content").load('../profile_preview.php');
	}
});
function submitPost(){
	var post = $('#bodytext').val();
	// console.log("posst"+post);
	$.ajax({
	  	url: "processes/processPost.php",
	  	type: "POST",
	  	data: {
	  		post: post
	  	},
	  	success: function(response){
	  		console.log(response);
	  		if(response === 'ok'){
	  			var myString = window.location.href;
				var arr = myString.split('?');
				window.location.href = arr['0']+'?my_news';
	  		}
	  		
	  	}
	});
}

function getPosts(){
	var post = $('#bodytext').val();
	// console.log("posst"+post);
	$.ajax({
	  	url: "processes/get_posts.php",
	  	type: "POST",
	  	dataType: 'json',
	  	data: {
	  		get_posts: "get_posts"
	  	},
	  	success: function(response){
	  		console.log(response);
	  		displayPosts(response);
	  	}
	});
}

function editProfile(){

	var location = $("#location").val();
	var arr = location.split(': ');
	location = arr[1];

	var current_industry = $("#current_industry").val();
	var arr = current_industry.split(': ');
	current_industry = arr[1];

	var current_position = $("#current_position").val();
	var arr = current_position.split(': ');
	current_position = arr[1];

	var selectedVal = "";
	var selected = $("#radioDiv input[type='radio']:checked");
	if (selected.length > 0) {
	    selectedVal = selected.val();
	}
	// console.log(selectedVal);
	var new_industry = $("#new_industry").val();
	var arr = new_industry.split(': ');
	new_industry = arr[1];

	var new_position = $("#new_position").val();
	var arr = new_position.split(': ');
	new_position = arr[1];

	$.ajax({
	  	url: "processes/processEditProfile.php",
	  	type: "POST",
	  	// dataType: 'json',
	  	data: {
	  		location: location,
	  		current_industry: current_industry,
	  		current_position: current_position,
	  		acc_type: selectedVal,
	  		new_industry: new_industry,
	  		new_position: new_position
	  	},
	  	success: function(response){
	  		console.log(response);
	  		// displayPosts(response);
	  	}
	});
}



function displayPosts(posts){
	var container = $('#posts');
	$.each(posts, function( index, value ) {
		console.log(value);
		// var name = $('<div>'+value[1]+'</div>');
		var post = $('<div>'+value[2]+'</div>').addClass('auto_row post_content');
		var post_head = $('<div>'+ value[1]+' | '+ new Date(value[3]*1000) +'</div>').addClass('auto_row post_header');

		var post_container = $('<div></div>').addClass('post_container');
		container.append(post_container);
		post_container.append(post_head);
		post_container.append(post);
	});
}

function getUserDetails(page){
	$.ajax({
	  	url: "processes/processPreviewProfile.php",
	  	type: "POST",
	  	dataType: 'json',
	  	data: {
	  		get_user_profile: "get_profile"
	  	},
	  	success: function(response){
	  		console.log(response);
	  		displayUserDetails(response, page);
	  	}
	});
}

function displayUserDetails(data, page){

	console.log( "email: " + data.basicInfo[0]);
	if (page === "preview") {
		$('#name').text(data.basicInfo[1]);
		$('#surname').text(data.basicInfo[2]);
		$('#email').text(data.basicInfo[0]);
		$('#location').text(data.details[0]);
		$('#industry').text(data.details[2]);
		$('#position').text(data.details[1]);
		$('#experience').text(data.details[3]);
		$('#new_industry').text(data.details[6]);
		$('#new_position').text(data.details[5]);
		$('#profile_status').text("Looking to "+data.details[4]+" a company.");
	}else if(page === "edit"){
		$('#location').val("location: "+data.details[0]);
		$('#current_industry').val("Industry Title: "+data.details[2]);
		$('#current_position').val("Position Title: "+data.details[1]);
		$('#experience').val("Experience: "+data.details[3]+" Years");
		$('#new_industry').val("Industry Title: "+data.details[6]);
		$('#new_position').val("Position Title: "+data.details[5]);
		// $('#profile_status').text("Looking to "+data.details[4]+" a company.");
	}
	
}

