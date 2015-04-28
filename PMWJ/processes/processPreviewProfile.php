<?php
require_once("../classes/profile.php");
require_once("../config/db.php");
session_start();

if($_POST['get_user_profile']){

	$id=$_SESSION['id'];
	
	$profile = new profile();
	$basicInfo = $profile->getBasicInfo($id);
	$detailedInfo = $profile->getDetailedInfo($id);
	echo json_encode(['basicInfo' => $basicInfo, 'details' => $detailedInfo]);
}

?>