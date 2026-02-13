<html>
    <head>
        <title>
            Login page
        </title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <?php
            include('reglgn.php');
        ?>
        <div class="img"></div> 
        
<section class="login">
<div class="login-form">
	<h1>Login</h1>
	<form action="#" method="post">
		
		<p>Email Id</p>
		<input type="email" name="email" placeholder="Email Id" required >
		
		<p>Password</p>
		<input type="password" name="password" placeholder="Password" required minlength="4" maxlength="10">
		
		<button type="submit">Login</button>
		<p>Don't have an account ? <a href="reg.php"> Create New Account </a></p>	
</form>
</div>
</section>
<?php
        error_reporting(0);
        include("connection.php");

        session_start();

        if (isset($_POST['email'])) 
        {
            $e =mysqli_real_escape_string($con, $_POST['email']);
            $p =mysqli_real_escape_string($con, $_POST['password']);

            $sql ="select * from register where useremail='$e' and userpassword='$p'";
            $result =mysqli_query($con, $sql);
            $d =mysqli_fetch_assoc($result);

            if ($d)
            {
                $_SESSION['e']=$d['useremail'];
                $_SESSION['p']=$d['password'];
                
                echo "<script>alert('Welcome to www.mycartelectronics.com');window.location.href='index.php'</script>";
            }
            else
            {
                echo "<script>alert('email and Password does not match.');window.location.href='login.php'</script>";
            }
        } 
?>
</body>