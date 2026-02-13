<html>
    <head>
        <title>
            Adminlogin page
        </title>
        <link rel="stylesheet" href="adminlg.css">

<?php
    include('adminnavbar.php');
?>      
<div class="img">
</div>  
<section class="login">
<div class="login-form">
	<h1>Login</h1>
	<form action="#" method="post">
		<p>Email Id</p>
		<input type="email" name="email" placeholder="Email Id" required >
		<p>Password</p>
		<input type="password" name="password" placeholder="Password" required minlength="5" maxlength="15">
		<button type="submit">Login</button>
</form>
</div>
</section>
<?php
        error_reporting(0);
        include("connection.php");
        if (isset($_POST['email'])) 
        {
            $e =mysqli_real_escape_string($con, $_POST['email']);
            $p =mysqli_real_escape_string($con, $_POST['password']);
            $sql ="select * from admin where email='$e' and pass='$p'";
            $result =mysqli_query($con, $sql);
            $d =mysqli_fetch_assoc($result);
            if ($d)
            {
                $_SESSION['e']=$d['email'];
                $_SESSION['p']=$d['password'];
                echo "<script>alert('Welcome to www.mycartelectronics.com');window.location.href='addproduct.php'</script>";
            }
            else
            {
                echo "<script>alert('Email and Password does not match.');window.location.href='login.php'</script>";
            }
        } 
?>
</body>
</html>