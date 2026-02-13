<html>
    <head>
        <title>
            Order Page
        </title>
        <link rel="stylesheet" href="style.css">

<?php
    include('adminnavbar.php');
?>    
<?php

			include("connection.php");

			$sql ="select p.proid,p.proname,p.price,b.orderid,b.qty,b.cname,b.phoneno,b.email,b.address,b.date,b.cardno,b.total from product as p join booking as b on p.proid=b.proid";
			$result =mysqli_query($con, $sql);

?>

	
		<td width="100%" colspan="2" bgcolor="#E5E5E5">
			<h1 align="center"><u>Orders</u></h1>
			<table border="2" align="center" width="100%" style="margin-bottom: 50px;">
			<tr>
				<th align="center">Order Id</th>				
				<th align="center">CName</th>
				<th align="center">Phone No.</th>
				<th align="center">Email</th>
				<th align="center">Address</th>
				<th align="center">Pname</th>
				<th align="center">Quantity</th>
				<th align="center">Price(Without tax)</th>
				<th align="center">Date</th> 				
				<th align="center">Card No</th>
				<th align="center">Action</th>
			</tr>
			
			<?php
				while ($row= mysqli_fetch_assoc($result)) 
				{
			?>
                        <tr>
                          	<td align="center"><?php echo $row['orderid'];?></td>							
							<td align="center"><?php echo $row['cname'];?></td>
							<td align="center"><?php echo $row['phoneno'];?></td>
							<td align="center"><?php echo $row['email'];?></td>
							<td align="center"><?php echo $row['address'];?></td>
							<td align="center"><?php echo $row['proname'];?></td>
							<td align="center"><?php echo $row['qty'];?></td>
							<td align="center"><?php echo $row['total'];?></td>
							<td align="center"><?php echo $row['date'];?></td> 							
							<td align="center"><?php echo $row['cardno'];?></td>
							<td><a href="delete.php?orderid=<?php echo($row['orderid']);?>" name="delete">Delete</a></td>
                          </tr>
            <?php
				}
			?>
			</table>
		</td>
	</tr>
	</table>
<?php
        include("footer.php")
?>
</body>
</html>