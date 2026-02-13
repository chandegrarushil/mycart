<html>
    <head>
        <title>
            Login page
        </title>
        <link rel="stylesheet" href="feedback.css">
    </head>
    <body>
                
    <?php
        include('navbar.php');
    ?>

<div class="img">
</div>  

<section class="feed">
<div class="feed-form">
	<h1>Feedback</h1>
	<form action="#" method="post">
		
		<p>Name</p>
		<input type="text" name="name" placeholder="Name" required>
		
		<p>Email id</p>
		<input type="email" name="email" placeholder="Email" required>
				
        <p>Message</p>
        <textarea id="message" rows="8" name="message" required></textarea>
		<button type="submit">Submit</button>

	</form>
</div>

<?php
        include("connection.php");

        if(isset($_POST['name']))
        {
                
            $nm    = $_POST['name'];
            $email = $_POST['email'];
            $msg   = $_POST['message'];

            $sql="insert into feedback (name,email,message)values('$nm','$email','$msg')";
            
            $result=mysqli_query($con,$sql);

            echo "<script>alert('feedback Submited');window.location.href='index.php'</script>";
        }
?>
    </div>            
    </section>

<?php
    include("footer.php")
?>