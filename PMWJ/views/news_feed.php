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