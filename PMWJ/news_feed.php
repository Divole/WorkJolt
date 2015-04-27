
<div  id="news_wrapper"class="form_wrapper panel_color panel_shadow">

  <div>
    <div class="text auto_row">You can write posts here:</div>
    <!-- <form class = "auto_row" action='processPost.php' method='post'> -->
    <div class = "auto_row post_field">
      <textarea id='bodytext' placeholder='Shoutout!'></textarea>
      <div align='right'>
        <!-- <input id='submitbutton' type='submit' value='Post!' onclick="submitPost()" /> -->
        <button onclick="submitPost()" class="btn">Post!</button>
      </div>
    </div>
  </div>
  <div class="auto_row">
    <div class="text">Posts:</div>
    <div id="posts">
      <script type="text/javascript">
        getPosts();
      </script>
    </div>
  </div>
</div>



<!--?php 
    

    foreach($posts as $i => $value){

      $POST_ADDED_BY=$news->getUserName(htmlentities( stripslashes($value[1])));
      $POST_BODY=htmlentities( stripslashes($value[2]));
      $POST_DATE=date('l d M Y h:i:s',$value[3]); 
      ?>
      <p style='margin-left: 10px; margin-top: 5px; width:100%;font-size:13px;'>
      <?php echo $POST_ADDED_BY." posted this at ".$POST_DATE; ?>
      </p>
      <br/>
      <p style='margin-left: 10px;'><?php echo $POST_BODY;?></p-->

 
