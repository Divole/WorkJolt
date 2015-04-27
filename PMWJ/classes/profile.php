<?php

class Profile{
 /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();
	
	public function __construct(){
		
		$this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		
		if (isset($_SESSION['username'])){
			$profile_name = $_SESSION['username'];
			$id = $_SESSION['id'];
		}else{
			$this->errors[] = "No user by that name";
			header("Location: logout.php");
		}
		  }
function getUserDetails($profile_name){

//find the username in the DB


            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {
            	$sql = "SELECT * FROM users WHERE username='".$profile_name."'";
            	$query = $this->$db_connection->query($sql);
            	if($query->num_rows !=1){
            			$this->errors[] = "No user by that name";
						exit();
            	}else{
            		
            		$row = $query->fetch_object();
            		$first_name = $row->fname;
            		$last_name = $row->lname;
            		$email = $row->email;
            	}

            }else {
                $this->errors[] = "Sorry, no database connection.";
            	}
}

function getDetails($profile_name){

//find the username in the DB

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }
            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {
            	$sql = "SELECT * FROM users WHERE username='".$profile_name."'";
            	$query = $this->$db_connection->query($sql);
            	if($query->num_rows !=1){
            			$this->errors[] = "No user by that name";
						exit();
            	}else{
            		
            		$row = $query->fetch_object();
            		$first_name = $row->fname;
            		$last_name = $row->lname;
            		$email = $row->email;
            	}

            }else {
                $this->errors[] = "Sorry, no database connection.";
            	}
}
function getBasicInfo($id){
	
	if ($SQL = $this->db_connection->prepare("SELECT email, fname, lname FROM users WHERE id=? LIMIT 1"))
{
        $SQL->bind_param('i',$id);
        $SQL->execute();
		$SQL-> store_result();
        $SQL-> bind_result($email, $fname, $lname);
		$SQL->fetch();
		$data=array();
		$data[]=$email;
		$data[]=$fname;
		$data[]=$lname;
        $SQL->close();
	
	return $data;
	}
}
function getDetailedInfo($id){
	if ($SQL = $this->db_connection->prepare("SELECT location, current_position, current_industry, experience, account_type, new_position, new_industry FROM user_details WHERE user_id=? LIMIT 1"))
{
        $SQL->bind_param('i',$id);
        $SQL->execute();
		$SQL-> store_result();
        $SQL-> bind_result($location, $current_position, $current_industry, $experience, $account_type, $new_position, $new_industry);
		$SQL->fetch();
		$data=array();
		$data[]=$location;
		$data[]=$current_position;
		$data[]=$current_industry;
		$data[]=$experience;
		$data[]=$account_type;
		$data[]=$new_position;
		$data[]=$new_industry;
        $SQL->close();
	
	return $data;
	}
}
}
?>