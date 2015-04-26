<?php
require_once("config/db.php");
	
	session_start();
	$id=$_SESSION['id'];
	
		 // create a database connection, using the constants from config/db.php (which we loaded in index.php)
         $db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        	if(!newPost($_POST['bodytext'], $id, $db_connection)){
					   echo '<script type="text/javascript">alert("There was some problem. Please try again!"); </script>';
		}
		
	
	header('location:news_feed.php') ;
	
	function newPost($body, $ID, $db_connection) { 

if ($SQL = $db_connection->prepare("INSERT INTO posts(id,user_id, text, date_posted) VALUES('',?,?,?)"))
{
        $SQL->bind_param('isi',$ID,$body,time());
        $SQL->execute();
        $SQL->close();
		return true;
    }
		return false;
}	
	?>