
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
    <div id="content" style="width:800px; margin:auto;">

      <h2>You can write posts here:</h2>
      <form action='processPost.php' method='post'>
        <textarea name='bodytext' id='bodytext' placeholder='Shoutout!'
        style=' resize: none; width: 800px; height:100px; margin-bottom:5px;'></textarea>
        <div align='right'>
          <input id='submitbutton' class='posts post-submit' type='submit' value='Post!'
          style=' position: relative; width: 120px;'/>
        </div>
      </form>
    </div>
    <div id="content" style="width:800px; margin:auto;">
      <h2>Posts:</h2>
	  
	  </div>
<?php 

	$posts=$news->getPosts($_SESSION['id']);
		?><script>console.log(<?php echo var_dump($posts);?>);</script><?php
	foreach($posts as $i => $value){
		?><script>console.log('bent');</script><?php
		$POST_ADDED_BY=$news->getUserName(htmlentities( stripslashes($value[1])));
		$POST_BODY=htmlentities( stripslashes($value[2]));
		$POST_DATE=date('l d M Y h:i:s',$value[3]);
		
?>

                             <p style='margin-left: 10px; margin-top: 5px; width:100%;font-size:13px;'>
                               <?php echo $POST_ADDED_BY." posted this at ".$POST_DATE; ?>
                             </p>
                             <br/>
                             <p style='margin-left: 10px;'><?php echo $POST_BODY;?></p>

  </body>
</html>

<?php
	}

?>
