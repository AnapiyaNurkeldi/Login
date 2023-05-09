<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="./inc/signin.php" method="POST">
            <div class="form-control">
                <input type="email" id="email" name="email" required>
                <label for="email">Email</label>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php 
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    };
                ?>
            </div>
            <div class="form-control">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php 
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    };
                ?>
            </div>
            <button type="submit" class="btn" name="submit">Log in</button>
        </form>
        <p class="footer">Don't have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
