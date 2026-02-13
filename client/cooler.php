<?php
    include('navbar.php');
    include('connection.php');
    include('panel.php');
    
    $sql="select * from product where category='COOLERS'";
    $all_products=$con->query($sql);
?>
<html>
    <head>
        <title>
            All Product Page
        </title>
        <link rel="stylesheet" href="allproducts.css">
    </head>
    <body>

        <main>
            <?php
                while($row=mysqli_fetch_assoc($all_products)){
            ?>
            <div class="card">
                <div class="image">
                    <img src="<?php echo $row['proimage'];?>" alt="">
                </div>

                <div class="caption">
                    <p class="product_name"><h1><?php echo $row['proname'];?></h1></p>
                    <p class="price"><b>Price:-  <?php echo $row['price'];?></b></p>
                </div>
                <a href="details.php?proid=<?php echo ($row['proid']);?>"><button class="add">View Product</button></a>
            </div>
            <?php
                }
            ?>
        </main>
        <?php
            include('footer.php');
        ?>
    </body>
</html>