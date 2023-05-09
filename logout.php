<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}
		
		.container {
			max-width: 960px;
			margin: 0 auto;
			padding: 40px 20px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		
		h1 {
			font-size: 32px;
			font-weight: bold;
			margin-bottom: 20px;
			color: #333;
		}
		
		p {
			font-size: 18px;
			margin-bottom: 30px;
			color: #555;
		}
		
		button {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			font-weight: bold;
			transition: all 0.3s ease;
		}
		
		button:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Are you sure you want to logout?</h1>
		<p>If you logout, you will need to log back in to access your account.</p>
		<form action="#" method="POST">
            <button type="submit" name="logout">Logout</button>
        </form>
	</div>
    <?php 
        include "./inc/connect.php";
        $logout = $_POST['logout'];
        if(isset($_POST['logout'])) {
            session_start();
            session_destroy();
            header("Location: ./index.php");
            exit();
        }
    ?>
</body>
</html>
