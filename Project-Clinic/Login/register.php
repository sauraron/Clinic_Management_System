<?php 
include("config.php");
session_start();

$message = "";

if(isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $check = "SELECT * FROM accounts WHERE username = '$username'";
    $result = mysqli_query($connection, $check);

    if(mysqli_num_rows($result) > 0 ) {
        $message = "Username already exist!";
    } else {
        $sql = "INSERT INTO accounts (username, password, role) VALUES ('$username', '$hashed_password', '$role')";

        if(mysqli_query($connection,$sql)) {
            $message = "Registered Successfully!";
        } else {
            $message = "Error:" . mysqli_error($connection);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Register</title>
</head>
<body>
    <h2>Register</h2>

<form method="POST">

    <input type="text" name="username" placeholder="Username" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <select name="role" required>
        <option value="">Select Role</option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select><br><br>

    <button type="submit" name="register">Register</button>

</form>

<a href="index.php">Back to Login</a>
</body>
</html>