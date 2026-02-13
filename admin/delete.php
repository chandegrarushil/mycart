<?php

	include('connection.php');

	//Delete product

	if (isset($_GET['proid']))
	{
		extract($_GET);

		$sql ="delete from product where proid=$proid";
		mysqli_query($con, $sql);
		if (mysqli_errno($con)) 
		{
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the product";
			header("Location: udpro.php");
		}
		else
		{
			$_SESSION['msg'] = "Product deleted successfully";
			header("Location: udpro.php");
		}
	}

	//Delete product End	

	//Delete User Start

	if (isset($_GET['uid']))
	{
		extract($_GET);

		$sql ="delete from register where uid=$uid";
		mysqli_query($con, $sql);
		if (mysqli_errno($con)) 
		{
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the user";
			header("Location: user.php");
		}
		else
		{
			$_SESSION['msg'] = "User deleted successfully";
			header("Location: user.php");
		}
	}

	//Delete User End	

//Delete order Start

	if (isset($_GET['orderid']))
	{
		extract($_GET);

		$sql ="delete from booking where orderid=$orderid";
		mysqli_query($con, $sql);
		if (mysqli_errno($con)) 
		{
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the orders";
			header("Location: orders.php");
		}
		else
		{
			$_SESSION['msg'] = "Order  deleted successfully";
			header("Location: orders.php");
		}
	}
//delete order end

	//Delete Feedback Start

	if (isset($_GET['fid']))
	{
		extract($_GET);

		$sql ="delete from feedback where fid=$fid";
		mysqli_query($con, $sql);
		
		if (mysqli_errno($con)) 
		{
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the current feedback";
			header("Location: feedback.php");
		}
		else
		{
			$_SESSION['msg'] = "Feedback deleted successfully";
			header("Location: feedback.php");
		}
	}

	//Delete Feedback End	  	

?>