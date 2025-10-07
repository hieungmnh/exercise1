<?php
include("db_connect.php");

if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $password = md5($_POST['password']);
    $confirm = md5($_POST['confirm']);


    if (empty($username) || empty($_POST['password']) || empty($_POST['confirm'])) {
        echo "please fill in all fields.";
    } elseif ($password != $confirm) {
        echo "passwords do not match!";
    } else {
        // check username
        $check = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($link, $check);

        if (mysqli_num_rows($result) > 0) {
            echo "Username already exists!";
        } else {
            // add new to DB
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($link, $query)) {
                echo "Registration successful! <a href='login.php'>Login now</a>";
            } else {
                echo "Error: " . mysqli_error($link);
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post">
        <label>Username:</label>
        <input type="text" name="username" required> <br>

        <label>Password:</label>
        <input type="password" name="password" required> <br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm" required> <br>

        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
