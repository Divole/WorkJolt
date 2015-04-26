
<!DOCTYPE html>
<html lang="en">

  <body>
    <header>
     
    </header>
    <nav>
<?php 	
session_start();
if(!isset($_SESSION['username'])){
	$_SESSION=array();
	session_destroy();
header("Location: index.php");}
require_once("classes/News.php");
$news=new News();
?>
          <a href="news_feed.php">My News</a>|

          <a href="profile_preview.php">My Profile</a>|

          <a href="?">My Projects</a>|

          <a href="?">My People</a>|

          <a href="logout.php">Log out</a>|

    </nav>
	
	<?php echo $_SESSION['username'];?>
	
	</body>
	</html>