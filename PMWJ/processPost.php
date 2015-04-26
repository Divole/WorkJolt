<?php
require_once("config/db.php");
	
	session_start();
	$id=$_SESSION['id'];
	
		 // create a database connection, using the constants from config/db.php (which we loaded in index.php)
         $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        // change character set to utf8 and check it
        if (!$this->db_connection->set_charset("utf8")) {
            $this->errors[] = $this->db_connection->error;
        }

        // if no connection errors (= working database connection)
        if (!$this->db_connection->connect_errno) {
        // database query, getting all the info of the selected user 
		
			if(!newPost($_POST['bodytext'], $id)){
					   echo '<script type="text/javascript">alert("There was some problem. Please try again!"); </script>';
			}
		}
	
	header('location:news_feed.php') ;
	
	function newPost($body, $ID, $mysqli) { 

if ($SQL = $this->db_connection->prepare("INSERT INTO posts(id,body,date_added, added_by) VALUES('',?,?,?)"))
{
        $SQL->bind_param('sii',$body,time(),$ID);
        $SQL->execute();
        $SQL->close();
		return true;
    }
		return false;
}	
	?>