<html>

    <head>
        <title>
            Addproduct page
        </title>
        <link rel="stylesheet" href="addproduct.css">

<?php
    include('adminnavbar.php');
?>    

<div class="box">
    <div class="table">
		<form method="POST" enctype="multipart/form-data">

			<table border="5" align="center" bgcolor="#357ca5">
			<tr>
				<th colspan="2"><h1> Add Product</h1></th>	
			</tr>
			<tr>		
				<td><label>Product Name</label></td>
				<td><input type="text" name="pname" required></td>
			</tr>
			<tr>		
				<td><label>Product Description</label></td>
				<td><textarea name="pdesc" required> </textarea></td>
			</tr>
			<tr>
				<td><label>Product Category</label></td>
				<td><select name="ctgry">	
					<option>AC</option>
					<option>REFRIGERATOR</option>
					<option>COOLERS</option>
					<option>WASHING MACHINE</option>
					<option>CHIMNEY</option>
					<option>MIXER</option>
					<option>VACUMM CLEANER</option>
					<option>IRON</option>					
					<option>OTHERS</option>
					</select>
				</td>
			<tr>		
				<td><label>Product Quantity</label></td>
				<td><input type="text" name="pqty" required></td>
			</tr>
			<tr>
				<td><label>Product Price</label></td>
				<td> <input type="text" name="price" required></td>
			</tr>
			<tr>
				<td><label>Product Image</label></td>
				<td><input type="file" id="fi" name="pimg" required></td> 
			</tr>
			<tr>
				<td colspan=2 align="center"> 
				<input type="submit" class="hero-btn" name="add" value="Insert" id="ins_btn">
				<input type="reset" class="hero-btn" value="Clear" id="ins_btn"></td>
			</tr>
			</table>
    </div>
</div>
			<?php
				error_reporting(0);
             	include('connection.php');

             	if (isset($_POST['add'])) 
             	{
             		$proname= $_POST['pname'];
             		$prodesc = $_POST['pdesc'];
					$category=$_POST['ctgry'];
					$proqty = $_POST['pqty'];
					$price = $_POST['price'];
					$proimage = $_FILES['pimg']['name'];

					$sql="insert into product (proname, prodesc,category, proqty, price, proimage) values ('$proname','$prodesc','$category','$proqty','$price','$proimage')";
					$result = mysqli_query($con,$sql);
					echo "<script>alert('Added successfully.');window.location.href='udpro.php'</script>";
             	}
            ?>
        </form>
<?php
   include("footer.php")
?>
</body>
</html>