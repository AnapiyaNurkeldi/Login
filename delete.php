<?php 
      session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete Profile</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Global styles */
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
    text-align: center;
}

h1 {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 40px;
}

p {
    font-size: 18px;
    margin-bottom: 40px;
}

form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background-color 0.3s ease;
}

.delete-btn {
    background-color: #e74c3c;
    color: #fff;
    margin-right: 20px;
}

.delete-btn:hover {
    background-color: #c0392b;
}

.cancel-btn {
    background-color: #2ecc71;
    color: #fff;
}

.cancel-btn:hover {
    background-color: #27ae60;
}

</style>
<body>
  <div class="container">
    <h1>Delete Profile</h1>
    <p>Are you sure you want to delete your profile?</p>
    <form action="#" method="POST">
      <button class="btn delete-btn" type="submit" name="delete_profile">Delete</button>
      <a href="./profile.php" class="btn cancel-btn">Cancel</a>
    </form>
  </div>
   <?php 
//    $delete_profile = $_POST['delete_profile'];
    if(isset($_POST['delete_profile'])){
        include "./inc/connect.php";
        $id = $_SESSION['user']['id'];
        $end = "DELETE FROM `users` WHERE `id`='$id'";
        $result = $connect->query($end);
        $connect->close();
        header("Location: ./index.php");
    }
  ?>
</body>
</html>
