<?php

include("connection.php");
include("navbar.php");

 // Start the session
session_start();

if (isset($_SESSION['e'])) {
    $email = $_SESSION["e"]; 
} 

$query = "SELECT * FROM register WHERE useremail = '$email'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result)

 ?>

<html>
<head>
    <title>Profile Display</title>
    <link rel="stylesheet" href="accounts.css">
</head>
<body>
    <div class="profile-container">
        <center><img src="profile.png"></center>
        <h1 class="profile-name"> <?php echo $row['username'];  ?></h1>
        <div class="profile-info">
            
            <p>Username: <?php echo $row['username'];  ?></p><br>            
            <p>Email: <?php echo $row['useremail'];  ?></p><br>
            <p>Phone: <?php echo $row['usermobile'];  ?></p><br>

            <a href="logout.php"><button type="submit">Logout</button></a>
        </div>

    </div>
</body>
</html>
<?php
    include("footer.php");
?>
