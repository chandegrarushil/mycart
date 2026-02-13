<html>

    <head>
        <title>
            Product Page
        </title>
        <link rel="stylesheet" href="style.css">

<?php
    include('adminnavbar.php');
?>    
<?php

include("connection.php");

$sql ="select * from product";
$result =mysqli_query($con, $sql);

?>

<td width="100%" colspan="2" bgcolor="#E5E5E5">
<center>
    <h1> <u> Products </u> </h1>
</center>
<table border="2" align="center" width="100%" style="margin-bottom: 25px;">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Category</th>
        <th>Product Quantity</th>					
        <th>Product Price</th>
        <th>Image</th>
        <th colspan="2">Action</th>
    </tr>
<?php
while ($row= mysqli_fetch_assoc($result)) 
{
?>
        <tr>
        <td align="center"><?php echo $row['proid'];?></td>
        <td align="center"><?php echo $row['proname'];?></td>
        <td align="center"><?php echo $row['prodesc'];?></td>
        <td align="center"><?php echo $row['category'];?></td>
        <td align="center"><?php echo $row['proqty'];?></td>
        <td align="center"><?php echo $row['price'];?></td>				
        <td align="center"><?php echo $row['proimage'];?></td>
        <td align="center"><a href="delete.php?proid=<?php echo($row['proid']);?>" name="delete">Delete</a> </td>
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