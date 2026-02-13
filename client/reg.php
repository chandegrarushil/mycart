<html>
    <head>
        <title>
            Login page
        </title>
        <link rel="stylesheet" href="reg.css">
    </head>
    <body>
       
<?php
    include('reglgn.php');
?>
            <div class="hi">
            </div>
        </header> 

<section class="Register">
<div class="register-form">
	<h1>Register</h1>
	<form action="#" method="post">
		
		<p>User Name</p>
		<input type="text" name="name" placeholder="User Name" required>
		
		<p>Email id</p>
		<input type="email" name="email" placeholder="Email" required>
		
		<p>Mobile Number</p>
		<input type="text" name="phoneno" placeholder="Mobile Number" pattern="[0-9]{10}" required minlength="10" maxlength="10">
	
		<p>Password</p>
		<input type="password" name="password" placeholder="Password" required minlength="4" maxlength="6">
		
		<button type="submit">Register</button>
        <p>Already have an account.<a href="login.php">Login to continue.</a></p>	
	</form>
</div>
	   
                    <!-- php -->
<?php
        include("connection.php"); 

    if(isset($_POST['email']))
    {
            $e =$_POST['email'];
            $p =$_POST['password'];

            $sql ="select * from register where useremail='$e' and userpassword='$p'";
            $result =mysqli_query($con, $sql);
            $d =mysqli_fetch_assoc($result);

            if ($d)
            {
                echo "<script>alert('Email Id is alredy taken. Try another Email Id!');window.location.href='register.php'</script>";
            }
            else
            {
                $username = $_POST['name'];
                $useremail = $_POST['email'];
                $usermobile = $_POST['phoneno'];
                $userpassword = $_POST['password'];

                $sql="insert into register (username,useremail,usermobile,userpassword)values('$username','$useremail',$usermobile,'$userpassword')";
                $result=mysqli_query($con,$sql);

                echo "<script>alert('Registration Successfully');window.location.href='login.php'</script>";
            }
    } 
?>
</body>
</html>
