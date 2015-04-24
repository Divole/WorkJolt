<?php
// show potential errors / feedback (from login object)
	?><script>console.log('not logged in view');</script><?php
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->

<head>
    <meta charset="utf-8" />
    <title>WorkJolt</title>
    <link rel="stylesheet" type="text/css" href="./../styles/stylesheet.css">
</head>
<body>
    <div id = "top_body"></div>
    <div id="login_form_wrapper" class="form_wrapper">
        <div id="title">WorkJolt</div>
        <form method="post">
            <input class = 'text_input form_row' type="text" placeholder="Username" pattern="[A-z0-9]{2,64}" name="username" required >
            <input class = 'text_input form_row'  type="password" placeholder="Password" name="password" pattern=".{6,}" required>
            <div class = "form_row absolute_row" >
                <div id="registration_link">
                    <a  class="link" href="register.php">Want to be a member?</a>
                </div>
                <div class="form_row btn_wrapper">
                    <input class="btn" type="submit" name="login" value="Sign in">
                </div>
            </div>    
        </form>
    </div>
</div>
</body>
