<?php
include('server.php')
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Register</title>
</head>
<!--creating a signing up form-->

<body>
    <main class="myforms">
        <form class="my-form" name="myForm" action="signup.php" method="post" onsubmit="return validateForm();">
            <h1>Sign Up</h1>
            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $firstname; ?>" pattern="[A-Za-z]{1,32}" required>
            </div>
            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" value="<?php echo $lastname2; ?>" pattern="[A-Za-z]{1,32}" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?php echo $email; ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password_1" id="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
            </div>
            <div class="input-group">
                <label for="password">Confirm password: </label>
                <input type="password" name="password_2">
            </div>

            </div style="colour: black">
            <button type="submit" name="reg_user">Register</button>
            <footer style="color:black">Already a member? <a href="login.php">Login here</a></footer>
        </form>
    </main>
</body>

</html>