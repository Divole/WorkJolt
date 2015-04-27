<?php 
require_once ("../classes/update_profile.php");
session_start();
if($_POST){
	$profile = new update_Profile();
	$profile->updateProfile();
	
}
echo $_SESSION['id'];

?>
