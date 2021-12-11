<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>

</body>
<!--login form creation-->

</html>
<form method="post" action="selectdorm.php" name="signin-form">
    <div class="form-element">
        <label>Email</label>
        <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>