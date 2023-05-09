
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    font-size: 16px;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    padding: 40px 20px;
}

h1 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 40px;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
    max-width: 500px;
    margin: 0 auto;
}

label {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 10px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
}

button[type="submit"] {
    width: 100%;
    height: 50px;
    border: none;
    background-color: #2ecc71;
    color: #fff;
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #27ae60;
}
</style>
<body>
    <div class="container">
        <h1>About</h1>
        <form method="POST" action="./inc/edit.php" enctype="multipart/form-data">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location">

            <label for="bio">Bio:</label>
            <textarea name="bio" id="bio"></textarea>

            <label for="photo">Photo:</label>
            <input type="file" name="photo" id="photo">

            <button type="submit" name="update_profile">Update Profile</button>
        </form>
    </div>
</body>
</html>
