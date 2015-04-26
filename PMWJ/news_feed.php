
<?php $user = $_SESSION['username'];?>|
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>WorkJolt</title>
    <link rel="stylesheet" type="text/css" href="/WorkJolt/styles/stylesheet.css">
</head>
<body class="pattern">

  <!-- body background shadow, no content here-->
  <div class="patter_shade position_absolute body_size "></div>

  <!-- header: contains top menu and logout button-->
  <div id = "header"class=" absolute_position panel_color panel_shadow">
    <!-- top menu tabs -->
    <div id="top_menu" class=" absolute_position">
      <div id = "my_news" class = "top_menu_item">
        <a class = "item_selected"href=""> My News </a>
      </div>
      <div id = "my_project" class = "top_menu_item">
        <a class = "item_deselected"href=""> My Project</a>
      </div>
      <div id = "my_profile" class = "top_menu_item">
        <a class = "item_deselected"href=""> My Profile</a>
      </div>
      <div id = "my_people" class = "top_menu_item">
        <a class = "item_deselected"href=""> My People</a>
      </div>
    </div>

    <!-- logout button on the header -->
    <div class="absolute_position position_right" >
      <div class="btn btn_wrapper"><a class="text" href="../index.php?logout">Logout</a></div>
    </div>
  </div>

  <!-- side pannels -->
  <div class="position_absolute body_size">
    <!-- left side pannel -->
    <div class="left_panel absolute_position pattern panel_shadow">
      <div class="patter_shade inner_pannel">
        Left pannel content
      </div>
    </div>
    <!-- right side pannel -->
    <div class="right_panel absolute_position pattern panel_shadow">
      <div class="patter_shade inner_pannel">
        Targeted advertisments will be here
      </div>
    </div>
  </div>

  <!-- news feed wrapper-center pannel: contains posts -->
  <div  id="news_wrapper"class="form_wrapper panel_color panel_shadow">



  <div id="content" >
    <div class="text auto_row">You can write posts here:</div>
    <form class = "auto_row" action='processPost.php' method='post'>
      <textarea name='bodytext' id='bodytext' placeholder='Shoutout!'></textarea>
      <div align='right'>
        <input id='submitbutton' class='posts post-submit btn' type='submit' value='Post!'/>
      </div>
    </form>
  </div>


  <div id="content" class="auto_row">
    <div class="text">Posts:</div>
  <?php 
    require_once("classes/News.php");
    $news=new News();
    $posts=$news->getPosts($_SESSION['id']);

    echo "<script>console.log('". var_dump($posts).");</script>";
    foreach($posts as $i => $value){
      echo "<script>console.log('bent');</script>";
      $POST_ADDED_BY=$news->getUserName(htmlentities( stripslashes($value[1])));
      $POST_BODY=htmlentities( stripslashes($value[2]));
      $POST_DATE=date('l d M Y h:i:s',$value[3]); 
      ?>
      <p style='margin-left: 10px; margin-top: 5px; width:100%;font-size:13px;'>
      <?php echo $POST_ADDED_BY." posted this at ".$POST_DATE; ?>
      </p>
      <br/>
      <p style='margin-left: 10px;'><?php echo $POST_BODY;?></p>
    <?php } ?>
  </div>
</body>
</html>
