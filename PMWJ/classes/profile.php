<?php
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

if (isset($_GET['username'])){
	$profile_name = $_GET['username'];
	$id = $_GET['id'];
}else{
	$this->errors[] = "No user by that name";
	exit();
}

function getUserDetails($profile_name){

//find the username in the DB
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

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
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

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

?>