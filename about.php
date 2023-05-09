<!DOCTYPE html>
<html>
<head>
	<title>About | My Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    /* Global Styles */

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}

body {
	font-family: Arial, sans-serif;
	font-size: 16px;
	line-height: 1.5;
}

header {
	background-color: #333;
	color: #fff;
	padding: 10px;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: space-between;
}

nav ul li a {
	color: #fff;
	text-decoration: none;
	padding: 10px;
}

nav ul li a.active,
nav ul li a:hover {
	background-color: #fff;
	color: #333;
}

main {
	max-width: 1200px;
	margin: 50px auto;
	padding: 20px;
}

h1 {
	font-size: 36px;
	margin-bottom: 20px;
}

/* Profile Section */

.profile {
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	align-items: center;
}

.profile-pic {
	flex: 1;
	margin-right: 20px;
	text-align: center;
}

.profile-pic img {
	width: 200px;
	height: 200px;
	object-fit: cover;
	border-radius: 50%;
	margin-bottom: 10px;
}

.profile-pic button {
	background-color: #2ecc71;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
}

.profile-info {
	flex: 2;
}

.profile-info form {
	display: flex;
	flex-direction: column;
}

.profile-info label {
	font-weight: bold;
	margin-bottom: 5px;
}

.profile-info input,
.profile-info textarea {
	padding: 10px;
	margin-bottom: 10px;
	border-radius: 5px;
	border: none;
}

.profile-info button[type="submit"] {
	background-color: #2ecc71;
	color: #fff;
	border: none;
	padding: 10px 20px;
	border-radius: 5px;
	cursor: pointer;
    
}
</style>
<body>
	<main>
		<h1>About Me</h1>
		<div class="profile">
			<div class="profile-pic">
				<img src="images/default-profile-pic.jpg" alt="Profile Picture">
				<button>Upload Photo</button>
			</div>
			<div class="profile-info">
				<form method="POST" action="./inc/aboutit.php">
					<label for="location">Location:</label>
					<input type="text" id="location" name="location" value="" placeholder="Enter your location">

					<label for="bio">Bio:</label>
					<textarea id="bio" name="bio" placeholder="Write something about yourself..."></textarea>

					<button type="submit" name='submit'>Save Changes</button>
                    <?php 
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    };
                ?>
				</form>
			</div>
		</div>
	</main>
    
</body>
</html>
