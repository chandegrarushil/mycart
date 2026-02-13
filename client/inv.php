<html>
<head>
   <title>Invoice Page</title>
   <link rel="stylesheet" href="invoice.css"> 
</head>
<body>

<?php
    include('navbar.php');
?>
<?php
                    session_start();
                    include('connection.php');

                    $sql ="select p.proid,p.proname,p.price,b.orderid,b.cname,b.phoneno,b.email,b.address,b.date,b.cardno from product as p join booking as b on p.proid=b.proid";
			        $result=mysqli_query($con, $sql);
                    $row1=mysqli_fetch_assoc($result);

                    $fetch="select * from booking where orderid=".$_SESSION['orderid'];
                    $result=mysqli_query($con,$fetch);
                    $row=mysqli_fetch_assoc($result);
                
                    $sub_total=$row['total'];
                    $tax_rate=12;
                    $total_tax=$sub_total*$tax_rate/100;
                    $total=$sub_total+$total_tax;
 ?>

    <section class="PRODUCTS">
        <div class="container">
            <center><table border="2" style="margin-top:70px; margin-bottom:70px; height: 50%; width:35%">
                    <th colspan="2">INVOICE</th>
                    <tr>
                        <td align="center"><b>Name</b></td>
                        <td align="center"><b><?php echo($row['cname']);?></b></td>
                    </tr>
                    <tr>
                        <td align="center"><b>Phone no.</b></td>
                        <td align="center"><b><?php echo($row['phoneno']);?></b></td>
                    </tr>
                    <tr>
                        <td align="center"><b>Email</b></td>
                        <td align="center"><b><?php echo($row['email']);?></b></td>
                    </tr> 
                    <tr>
                        <td align="center"><b>Address</b></td>
                        <td align="center"><b><?php echo($row['address']);?></b></td>
                    </tr>  
                    <tr>
                        <td align="center"><b>Date</b></td>
                        <td align="center"><b><?php echo($row['date']);?></b></td>
                    </tr>
                    <tr>
                        <td align="center"><b>Product Name</b></td>
                        <td align="center"><b><?php echo($row1['proname']);?></b></td>
                    </tr>
                    <tr>
                        <td align="center"><b>Quantity</b></td>
                        <td align="center"><b><?php echo($row['qty']);?></b></td>
                    </tr>
                    <tr>
                        <td align="center"><b>Price</b></td>
                        <td align="center"><b><?php echo($row['total']);?></b></td>
                    </tr>
                    <tr>
                        <td align="center"><b>Total Tax</b></td>
                        <td align="center"><b><?php echo($total_tax);?></b></td>
                    </tr>   
                    <tr>
                        <td align="center"><b>Total to be paid</b></td>
                        <td align="center"><b><?php echo($total);?></b></td>
                    </tr>            
                </table>
                    <a href="allproducts.php"><button>Back to shopping</button></a>
            </center> 
        </div>            
    </section>
    <?php
        include('footer.php');
    ?>
</body>
</html>