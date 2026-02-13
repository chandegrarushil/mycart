<?php
    include('navbar.php');
?>
<html>
    <head>
        <title>
            details page
        </title>
        <link rel="stylesheet" href="details.css">
    </head>
    <body>

<section class="product">
        <div class="container">
            <div class="r1">
                <?php
                    include('connection.php');

                     if (isset($_GET['proid']))
                     {
                         extract($_GET);
                        $sql="select * from product where proid=$proid";
                        $result=mysqli_query($con,$sql);
                    }

                    if (mysqli_num_rows($result)>0) 
                    {
                        while($row=mysqli_fetch_assoc($result))
                    {
                ?>
                  
                    <table border="2" align="center" width="50%" style="margin-bottom: 20px;">
                            <tr>
                                <th align="center" colspan="2"><h1><?php echo "Product Details";?></h1></th>
                            </tr>

                            <tr>
                                <th>Name</th>
                                <td><?php echo $row['proname'];?></td>
                            </tr>

                            <tr>
                                <th>Price</th>
                                <td>₹<?php echo $row['price'];?></td>
                            </tr>

                            <tr>
                                <th>Product Description</th>
                                <td><?php echo $row['prodesc'];?></td>
                            </tr>

                            <tr>
                                <th align="center"colspan="2"><a href="book.php?proid=<?php echo($row['proid']);?>" class="hero-btn" id="p2">Buy Now</a></th>
                        </tr>    
                    <div class="i1">
                    <img src="<?php echo $row['proimage'];?>" alt=""> <br>  
                    
                        </table>    
                        <?php
                            }
                            }
                        ?>