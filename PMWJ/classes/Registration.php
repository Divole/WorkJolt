<?php

/**
 * Class registration
 * handles the user registration
 */
class Registration
{
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

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    { 
	?><script>console.log('$_POST register =');</script><?php
        if (isset($_POST["register"])) {
			$reg=$_POST['register'];
			?><script>console.log('<?php echo $reg;?>');</script><?php
			?><script>console.log('vege');</script><?php
            $this->registerNewUser();
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    private function registerNewUser()
    {	?><script>console.log('registernewuserfunction');</script><?php
        if (empty($_POST['username'])) {
            $this->errors[] = "Empty Username";
        }elseif(empty($_POST['fname'])){
			$this->errors[] = "Empty First Name";
		}elseif(empty($_POST['lname'])){
			$this->errors[] = "Empty Last Name";
		}elseif (empty($_POST['password']) || empty($_POST['password_repeat'])) {
            $this->errors[] = "Empty Password";
        } elseif ($_POST['password'] !== $_POST['password_repeat']) {
            $this->errors[] = "Password and password repeat are not the same";
        } elseif (strlen($_POST['password']) < 6) {
            $this->errors[] = "Password should have a minimum length of 6 characters";
        } elseif (strlen($_POST['username']) > 64 || strlen($_POST['username']) < 2) {
            $this->errors[] = "Username cannot be shorter than 2 or longer than 64 characters";
        } elseif (!preg_match('/([A-z\d]){8,64}/', $_POST['username'])) {
            $this->errors[] = "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters";
        } elseif (empty($_POST['email'])) {
            $this->errors[] = "Email cannot be empty";
        } elseif (strlen($_POST['email']) > 64) {
            $this->errors[] = "Email cannot be longer than 64 characters";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Your email address is not in a valid email format";
		}elseif (!isset($_POST['terms'])){
			$this->errors[] = "You must accept the Terms and Conditions";
        } elseif (!empty($_POST['username'])
            && strlen($_POST['username']) <= 64
            && strlen($_POST['username']) >= 2
            && preg_match('/([A-z\d]){8,64}/', $_POST['username'])
            && !empty($_POST['email'])
            && strlen($_POST['email']) <= 64
            && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['password'])
            && !empty($_POST['password_repeat'])
            && ($_POST['password'] === $_POST['password_repeat'])
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $username = $this->db_connection->real_escape_string(strip_tags($_POST['username'], ENT_QUOTES));
                $email = $this->db_connection->real_escape_string(strip_tags($_POST['email'], ENT_QUOTES));
				$fname = $this->db_connection->real_escape_string(strip_tags($_POST['fname'], ENT_QUOTES));
				$lname = $this->db_connection->real_escape_string(strip_tags($_POST['lname'], ENT_QUOTES));

                $password = $_POST['password'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $password_hash = password_hash($password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM users WHERE username = '" . $username . "';";
                $query_check_username = $this->db_connection->query($sql);
				
                if ($query_check_username->num_rows==1) {
                    $this->errors[] = "Sorry, that username is already taken.";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO users (username, password, email, fname, lname)
                            VALUES('" . $username . "', '" . $password_hash . "', '" . $email . "', '" . $fname . "', '" . $lname . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);
					$sql2 = "SELECT id FROM users WHERE username = '" . $username . "';";
					$query_get_user_id = $this->db_connection->query($sql2);
					$row=$query_get_user_id->fetch_assoc();
					$id=$row["id"];
					
					$sql3 = "INSERT INTO `user_details` (`id`, `location`, `current_position`, `user_id`, `current_industry`, `experience`, `account_type`, `new_position`, `new_industry`) VALUES ('', 'NA', 'NA', '"
					. $id . "', 'NA', '0', 'NA', 'NA', 'NA');";
					$query_user_details_insert=$this->db_connection->query($sql3);
                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "Your account has been created successfully. You can now log in.";
						header("Location: ../index.php?reg=success");
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }
}
