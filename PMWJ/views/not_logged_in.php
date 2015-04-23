<?php
// show potential errors / feedback (from login object)
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>WorkJolt</title>
</head>
<body>
    <h1>Login</h1>

<form>
		<label for="username">Username: </label>
        <input type="text" name="username" placeholder="Username" pattern="^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$"><br>
		<label for="password">Password: </label>
        <input type="password" name="password" placeholder="Password"><br>
		<input type="submit" name="Log in"><br>
		<a href="register.php">Want to be a member?</a>

</form>


</div>

</body>
</html>