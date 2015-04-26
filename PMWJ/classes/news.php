<?php
	 require_once("config/db.php");
/**
 * Class news
 * handles the user's login and logout process
 */
class News
{
    /**
     * @var object The database connection
     */

    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();


    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {

	}
		
		function isFriend($user_id,$post){
	$ctrl=false;
	$friends=array();
	$friends=$this->getFriends($user_id);
		$friends[]=(int)$user_id;
			
				foreach($friends as $i =>$value){
					if($post[1]==$value){
						$ctrl=true;
					}
	}
	return $ctrl;
	}
		
		function getPosts($user_id){
		
		$allPosts=array();
		$friendsPosts=array();
		
		 // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

      

                // database query, getting all the info of the selected user 
		
			if ($SQL = $this->db_connection->prepare("SELECT * FROM posts ORDER BY date_posted DESC LIMIT 10")){
				$SQL-> execute();
				$SQL-> store_result();
				$SQL-> bind_result($id, $added_by, $body, $date_added);
				while($SQL->fetch()){
					   $post=array($id,$added_by,$body,$date_added);
					   $allPosts[]=$post;
					   }
							$SQL ->close();

							
			}	

			foreach($allPosts as $i => $value){

				if($this->isFriend($user_id,$value)){
				$friendsPosts[]=$value;
				
				}
			}
					?><script>console.log(<?php echo var_dump($friendsPosts);?>);</script><?php
		return $friendsPosts;
			}
		}	
	
	function getFriends($userID)
{
	$friends=array();
    if ($SQL = $this->db_connection->prepare("SELECT `friend_id` FROM `friends` WHERE `user_id` = ? "))
    {
        $SQL->bind_param('i',$userID);
        $SQL->execute();
        $SQL->store_result();
        $SQL->bind_result($to);
		while($SQL->fetch()){
			$friends[]=$to;
		}
        $SQL->close();

	}
    return $friends;
}

function getUserName($userID)
{
    if ($SQL = $this->db_connection->prepare("SELECT `fname`, `lname` FROM `users` WHERE `id` = ?"))
    {
        $SQL->bind_param('i',$userID);
        $SQL->execute();
        $SQL->store_result();
        $SQL->bind_result($fname, $lname);
        $SQL->fetch();
        $SQL->close();
    }
    return $fname . " " . $lname;
}

}
?>