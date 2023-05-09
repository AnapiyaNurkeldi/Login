<?php 
    session_start();
    include "./inc/connect.php";
    $sql = "SELECT * FROM products";
    $result = $connect->query($sql);
    for ($product=array(); $row = $result->fetch_assoc(); $product[]=$row);
    $connect->close();
    // $check_lobi = mysqli_query($connect, "SELECT * FROM products");

    // if (mysqli_num_rows($check_lobi)>0) {
    //     $pro = mysqli_fetch_assoc($check_lobi);
    //     $_SESSION['product'] = $pro;

    // } else {
    //     $_SESSION['error'] = "Some error occured";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="./css/pro.css">
</head>
<body>
    
    <div class="container">
        <h1>User Profile</h1>
        <div class="profile-info">
            <div class="avatar">
                <img src="https://via.placeholder.com/150" alt="User Avatar">
            </div>
            <div class="user-details">
                <h2><?=$_SESSION['user']['username']?></h2>
                <p>Email: <?=$_SESSION['user']['email']?></p>
                <p>Location: <?php 
                    foreach ($product as $key => $value) {
                        echo $value['location'];
                    }
                    
                ?></p>
                <p>Bio: <?php 
                    foreach ($product as $key => $value) {
                        echo $value['bio'];
                    }
                ?></p>
                <button class="btn"><a href="./edit_profile.php">Edit Profile</a></button>
                <button class="btn"><a href="./logout.php">Log out</a></button>
                <button class="btn"><a href="./delete.php">Delete Profile</a></button>
                <?php 
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    };
                ?>
                // Ш вщте лтщц учфседн црфе уккщкы руку
            </div>
        </div>
    </div>
</body>
</html>
