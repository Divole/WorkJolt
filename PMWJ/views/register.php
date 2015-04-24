<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>
<!-- register form -->
<!-- <form method="post" action="register.php" name="registerform"> -->

    <!-- the user name input field uses a HTML5 pattern check -->
    <!-- <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label> -->
    <!-- <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required /> -->

    <!-- the email input field uses a HTML5 email type check -->
    <!-- <label for="login_input_email">User's email</label> -->
    <!-- <input id="login_input_email" class="login_input" type="email" name="user_email" required /> -->

    <!-- <label for="login_input_password_new">Password (min. 6 characters)</label> -->
    <!-- <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" /> -->

    <!-- <label for="login_input_password_repeat">Repeat password</label> -->
    <!-- <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" /> -->
    <!-- <input type="submit"  name="register" value="Register" /> -->

<!-- </form> -->

<!-- backlink -->
<!-- <a href="index.php">Back to Login Page</a> -->

<head>
    <meta charset="utf-8" />
    <title>WorkJolt</title>
    <link rel="stylesheet" type="text/css" href="./../styles/stylesheet.css">
</head>
<body>
<div id = "top_body"></div>

<div id="register_form_wrapper" class="form_wrapper">
    <div id="title">WorkJolt</div>
        <form>
            <input class = 'text_input form_row' type="text" placeholder="User ID" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required >
            <input class = 'text_input form_row' type="text" placeholder="First Name">
            <input class = 'text_input form_row' type="text" placeholder="Last Name">
            <input class = 'text_input form_row' type="email" placeholder="Email"  name="user_email" required>
            <input class = 'text_input form_row' type="passwword" placeholder="Password" name="user_password_new" pattern=".{6,}" required autocomplete="off">
            <input class = 'text_input form_row' type="passwordh" placeholder="Confirm Password" name="user_password_new" pattern=".{6,}" required autocomplete="off">

            <div class="text form_row"> 
                <input type="checkbox" required> 
                I agree to WorkJolt <a class = "link" href="">Tems and Conditions</a>
            </div>

            <div class=" form_row absolute_row">
                <input class="btn btn_wrapper" type="submit"  name="register" value="Register"/>
            </div>
        </form>
    </div>
</body>
