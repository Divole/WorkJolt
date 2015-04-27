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
            echo "<script> registration_successful() </script>";
        }
    }
}
?>

<script>console.log('register view');</script>
<head>
    <meta charset="utf-8" />
    <title>WorkJolt</title>
    <link rel="stylesheet" type="text/css" href="./../styles/stylesheet.css">
</head>
<body class="pattern">
<div class="patter_shade body_size"></div>

<div id="register_form_wrapper" class="form_wrapper panel_color panel_shadow">
    <div id="title">WorkJolt</div>
        <form class="form_wrapper_content" method="POST">
            <!-- the user name input field uses a HTML5 pattern check -->
            <input class = 'text_input form_row' type="text" placeholder="Username" pattern="[A-z0-9]{2,64}" name="username" required >
            <input class = 'text_input form_row' type="text" placeholder="First Name" name="fname">
            <input class = 'text_input form_row' type="text" placeholder="Last Name" name="lname"> 
            <!-- the email input field uses a HTML5 email type check -->
            <input class = 'text_input form_row' type="email" placeholder="Email"  name="email" required>
            <input class = 'text_input form_row' type="password" placeholder="Password" name="password" pattern=".{6,}" required autocomplete="off">
            <input class = 'text_input form_row' type="password" placeholder="Confirm Password" name="password_repeat" pattern=".{6,}" required autocomplete="off">

            <div class="text form_row"> 
                <input type="checkbox" name="terms" required> 
                I agree to WorkJolt <a class = "link" href="">Tems and Conditions</a>
            </div>

            <div class=" form_row absolute_position">
                <input class="btn btn_wrapper" type="submit"  name="register" value="Register"/>
            </div>
        </form>
    </div>
</body>
