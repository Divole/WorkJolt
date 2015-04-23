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
    <title></title>
    <link rel="stylesheet" type="text/css" href="./../styles/main_style.css">
</head>
<body>
<div id = "top_body">
    
</div>

<div id="new_user_form">
<div id="title">WorkJolt</div>
    <form method="post" action="">
        <input class = 'text_input' type="text" placeholder="User ID" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required >
        <input class = 'text_input' type="text" placeholder="First Name">
        <input class = 'text_input' type="text" placeholder="Last Name">
        <input class = 'text_input' type="email" placeholder="Email"  name="user_email" required>
        <input class = 'text_input' type="passwword" placeholder="Password" name="user_password_new" pattern=".{6,}" required autocomplete="off">
        <input class = 'text_input' type="passwordh" placeholder="Confirm Password" name="user_password_new" pattern=".{6,}" required autocomplete="off">

        <div class="text"> 
            <input type="checkbox"> 
            I agree to WorkJolt <a href="">Tems and Conditions</a>
        </div>
        <div class="btn">
            <input type="submit"  name="register" value="Register" />
        </div>
        
    </form>
</div>
    

</body>
