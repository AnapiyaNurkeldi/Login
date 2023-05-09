<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Create an account</h2>
            <p>It's quick and easy</p>
        </div>
        <form action="./inc/signup.php" class="form" method="POST">
            <div class="form-control">
                <input type="text" id="username" placeholder="Enter your username" name="username">
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
                <input type="email" id="email" placeholder="Enter your email" name="email">
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
                <input type="password" id="password" placeholder="Enter your password" name="password">
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
                <input type="password" id="password2" placeholder="Confirm your password" name="password_confirm">
                <i class="fas fa-check-circle"></i>
                <i class="fas fa-exclamation-circle"></i>
                <?php 
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    };
                ?>
            </div>
            <button class="btn">Register</button>
        </form>
        <div class="footer">
            <p>Already have an account? <a href="./index.php">Sign in</a></p>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/2f14bbd7b6.js" crossorigin="anonymous"></script>

</body>
</html>
