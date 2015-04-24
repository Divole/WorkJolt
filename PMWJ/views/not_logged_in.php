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
<body class="pattern">
    <div class="patter_shade body_size"></div>
    <div id="login_form_wrapper" class="form_wrapper panel_color panel_shadow">
        <div id="title">WorkJolt</div>
        <form>
            <input class = 'text_input form_row' type="text" name="username" placeholder="Username" pattern="^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$">
            <input class = 'text_input form_row' type="password" name="password" placeholder="Password">
            <div class = "form_row absolute_position" >
                <div id="registration_link">
                    <a  class="link" href="register.php">Want to be a member?</a>
                </div>
                <div class="form_row btn_wrapper">
                    <input class="btn" type="submit" name="Log in" value="Sign in">
                </div>
            </div>    
        </form>
    </div>
</div>
</body>
