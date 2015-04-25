function registration_successful(message){
	var registration_status = document.getElementById('registration_status');
	registration_status.innerHTML = message;
	console.log("login: "+ message);
}