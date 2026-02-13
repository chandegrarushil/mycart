<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Users Page
        </title>
        <link rel="stylesheet" href="style.css">

<?php
    include('adminnavbar.php');
?>    
		<?php

			include('connection.php');

			$sql= "select * from register";
			$result= mysqli_query($con, $sql);

		?>

		<td width="100%" colspan="2" bgcolor="#E5E5E5">
			<h1 align="center"> <u> Users </u> </h1>
			<table border="2" align="center" width="100%" style="margin-bottom: 25px;">
			<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone No</th>					
					<th>Action</th>
				</tr>
                            <tr>
        <?php
			while ($row= mysqli_fetch_assoc($result))
			{
		?>
				<tr>
                <td align="center"><?php echo $row['userid'];?></td>
				<td align="center"><?php echo $row['username'];?></td>
                <td align="center"><?php echo $row['useremail'];?></td>
                <td align="center"><?php echo $row['usermobile'];?></td>
                <td align="center"><a href="delete.php?uid=<?php echo($row['userid']);?>" name="delete">Delete</a></td>
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