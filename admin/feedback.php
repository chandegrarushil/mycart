<html>
    <head>
        <title>
            Feedback Page
        </title>
        <link rel="stylesheet" href="style.css">

<?php
    include('adminnavbar.php');
?>    
<?php

	include("connection.php");

	$sql ="select * from feedback";
	$result =mysqli_query($con, $sql);

?>
		<td width="100%" colspan="2" bgcolor="#E5E5E5">
			<h1 align="center"><u>Feedbacks</u></h1>
			<table border="2" align="center" width="100%" style="margin-bottom:25px;">
                        <tr>
							<th>Feedback Id</th>
							<th>Name</th>						
							<th>Email</th>
							<th>Messages</th>
							<th>Action</th>
						</tr>
			<?php
				while ($row= mysqli_fetch_assoc($result)) 
				{
			?>
            
                            <tr>
							<td align="center"><?php echo $row['fid'];?></td>
                            <td align="center"><?php echo $row['name'];?></td>                           
                            <td align="center"><?php echo $row['email'];?></td>
                            <td align="center"><?php echo $row['message'];?></td>
                            <td align="center"><a href="delete.php?fid=<?php echo($row['fid']);?>" name="delete">Delete</a></td>
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