<?php 
include("config.php");

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM accounts WHERE username='$username'";

    $result = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user) {
        if(password_verify($password, $user["password"])) {
            $_SESSION["id"] = $user["id"];
            $_SESSION["username"] = $user["username"];
            $_SESSION["role"] = $user["role"];
            
            if($user["role"] == "admin") {
                header("Location: admin.php"); // ADmin
            }
            else {
                header("Location: user.php"); //User
            }
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    } else {
        $error = "User not found.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic System Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<div class="login-bg">
    <div class="login-card">
        <div class="text-center mb-3">
            <img src="../img/Logo.jpg" class="school-logo mb-2">
        </div>

        <form action="" method="POST">

            <div class="input-group mb-3">
                <span class="input-group-text"><i class="bi bi-person"></i></span>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>

            <div class="input-group mb-2">
    <span class="input-group-text">
        <i class="bi bi-key"></i>
    </span>

    <input type="password" id="password" name="password" 
           class="form-control" placeholder="Password" required>

    <span class="input-group-text toggle-password" onclick="togglePassword()">
        <i class="bi bi-eye" id="toggleIcon"></i>
    </span>
</div>
            <div class="text-center mb-3">
                <small class="text-muted">Forgotten your username or password?</small>
            </div>

            <div class="d-grid mb-3">
                <button type="submit" name="submit" class="btn btn-login">Log in</button>
            </div>

            <div class="instruction-box">
                <div class="fw-bold mb-2">INSTRUCTIONS</div>
                <ol>
                    <li>Use your assigned clinic system username and password.</li>
                    <li>Contact clinic administrator if you cannot access your account.</li>
                </ol>
            </div>
        </form>
    </div>
</div>

<script>
function togglePassword() {
    const password = document.getElementById("password");
    const icon = document.getElementById("toggleIcon");

    if (password.type === "password") {
        password.type = "text";
        icon.classList.add("bi-eye-slash");
    } else {
        password.type = "password";
        icon.classList.remove("bi-eye-slash");
        icon.classList.add("bi-eye");
    }
}
</script>

</body>
</html>