<?php 
    /**
     * @var object $db_connection The database connection
     */
	 
	class update_Profile
{ 
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    { 
	?><script>console.log('$_POST edit_profile =');</script><?php
        if (isset($_POST["edit_profile"])) {
            $this->updateProfile();
        }
    }

    private function updateProfile(){
    	// create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {
            	//checking if any of the fields are empty and if they are we are setting them to NA(not available)...Only the acount type must be set
            	if(empty($_POST['location'])){
            		$location = "NA";
            	}else{
            		$location  = $this->db_connection->real_escape_string(strip_tags($_POST['location'],ENT_QUOTES));
            	}
            	if (empty($_POST['current_industry'])) {
            		$current_industry = "NA";
            	}else{
            	$current_industry = $this->db_connection->real_escape_string(strip_tags($_POST['current_industry'],ENT_QUOTES));
            }
            if (empty($_POST['current_position'])) {
            	$current_position = "NA";
            }else{
            	$current_position = $this->db_connection->real_escape_string(strip_tags($_POST['current_position'],ENT_QUOTES));
            }if (empty($_POST['experience'])) {
            	$experience = 0;
            }else{
            	$experience = $this->db_connection->real_escape_string(strip_tags($_POST['experience'],ENT_QUOTES));
            }if (empty($_POST['acc_type'])) {
            	$this->errors[]="You must select an account type!";
            }else{
            	$account_type = $this->db_connection->real_escape_string(strip_tags($_POST['acc_type'],ENT_QUOTES));
            }if (empty($_POST['new_industry'])) {
	        	$new_industry = "NA";
            }else{
            	$new_industry = $this->db_connection->real_escape_string(strip_tags($_POST['new_industry'],ENT_QUOTES));
            }if (empty($_POST['new_position'])) {
            	$new_position = "NA";
            }else{
            	$new_position = $this->db_connection->real_escape_string(strip_tags($_POST['new_position'],ENT_QUOTES));
            }



            //creating the sql statement and puting the data into the database and getting the user_id from the database
            $sql_id = "SELECT id FROM users WHERE username = '".$_SESSION['username']."'";
            $fetched_user_id = $this->db_connection->query($sql_id);

            $sql = "INSERT INTO user_details(location,current_industry,current_position,experience,account_type,new_industry,new_position,user_id) 
            VALUES('".$location."','".$current_industry."','".$current_position."','".$experience."','".$account_type."','".$new_industry."','".$new_position."','".$_SESSION['id']."')";

            $query_update_user_details = $this->db_connection->query($sql);

            if($query_update_user_details){
            	$this->messages[] = "Successfully updated your details!";
            }else{
            	$this->errors[] = "Request failed. Please go back and try again.";
            }

        }

    }
}
?>