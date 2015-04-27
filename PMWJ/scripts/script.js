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
	var current_industry = $("#current_industry").val();
	var current_position = $("#current_position").val();
	var selectedVal = "";
	var selected = $("#radioDiv input[type='radio']:checked");
	if (selected.length > 0) {
	    selectedVal = selected.val();
	}
	// console.log(selectedVal);
	var new_industry = $("#new_industry").val();
	var new_position = $("#new_position").val();

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


