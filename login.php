<?php
session_start();
include "db.php";

$error = "";

// LOGIN
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        header("Location: myprofile.php");
        exit();
    } else {
        $error = "No account found, please register.";
    }
}

// REGISTER
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        $error = "Account already exists. Please login.";
    } else {
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql)) {
            $error = "Registration successful. You can now login.";
        } else {
            $error = "Error occurred.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>

<div class="main-container">

    <!-- LEFT SIDE -->
    <div class="left-content">
        <h1>You Are Not Alone</h1>
        <p>
            Start your journey to recovery today.  
            No matter how hard it feels, change is possible.
        </p>
        <p>
            Every step you take brings you closer to a better life.
        </p>
    </div>

    <!-- RIGHT SIDE (your login stays the same) -->
    <div class="login-container">
        <div class="login-box">
            <div class="avatar">👤</div>

            <form method="POST">
                <div class="input-group">
                    <input type="email" name="email" placeholder="Email ID" required>
                </div>

                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                <div class="options">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password?</a>
                </div>

                <button type="submit" name="login">LOGIN</button>
                <button type="submit" name="register">REGISTER</button>
            </form>

            <?php if ($error != "") { ?>
                <p style="color:red;"><?php echo $error; ?></p>
            <?php } ?>
        </div>
    </div>

</div>


</body>
</html>