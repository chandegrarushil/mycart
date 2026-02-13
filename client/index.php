<?php
    include('navbar.php');
?>
<html>
    <head>
        <title>
            Index Page
        </title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <header> 

            <div class="panel">
                <div class="panel-ops border ">
                   <p class="pnl-al"></p><a href="allproducts.php">All Products</a>       
                </div>

                <div class="panel-ops border">
                    <p class="pros"></p><a href="ac.php">Ac</a>
                </div>

                <div class="panel-ops border">
                    <p class="pros"></p><a href="refrigerator.php">Refrigerator</a>
                </div>

                <div class="panel-ops border">
                    <p class="pros"></p><a href="cooler.php">Coolers</a>
                </div>

                <div class="panel-ops border">
                    <p class="pros"></p><a href="washing.php">Washing Machine</a>
                </div>  
                
                <div class="panel-ops border">
                    <p class="pros"></p><a href="others.php">Others</a>
                </div>
 
            </div>
        </header> 

        <div class="hero-section">
            <div class="hero-msg">
                <p>You are on mycart.com. <a href="login.php"> Click here to go to mycart.com</a>
            </div>
        </div>

        <div class="shop-section">
            <div class="box1 box">
                <div class="box-content">
                  <h2>Ac</h2>
                     <div class="box-img" style="background-image:url('acimgs.png');" ></div>
                     <a href="ac.php">See more</a>
                </div>
            </div>
            <div class="box2 box">
                <div class="box-content">
                  <h2>Refrigerator</h2>
                     <div class="box-img" style="background-image:url('refrigatorimg.png');" ></div>
                     <a href="refrigerator.php">See more</a>
                </div>
            </div>
            <div class="box3 box">
                <div class="box-content">
                  <h2>Coolers</h2>
                     <div class="box-img" style="background-image:url('cooler.png');" ></div>
                     <a href="cooler.php">See more</a>
                </div>
            </div>
            <div class="box4 box">
                <div class="box-content">
                  <h2>Washing Machine</h2>
                     <div class="box-img" style="background-image:url('washmachine.png');" ></div>
                     <a href="washing.php">See more</a>
                </div>
            </div>
            <div class="box5 box">
                <div class="box-content">
                  <h2>Chimney</h2>
                     <div class="box-img" style="background-image:url('chimney.jpg');" ></div>
                     <a href="chimney.php">See more</a>
                </div>
            </div>
            <div class="box6 box">
                <div class="box-content">
                  <h2>Mixer's</h2>
                     <div class="box-img" style="background-image:url('mixeer.png');" ></div>
                     <a href="mixer.php">See more</a>
                </div>
            </div>
            <div class="box7 box">
                <div class="box-content">
                  <h2>Vaccum Cleaner</h2>
                     <div class="box-img" style="background-image:url('vacumm.png');" ></div>
                     <a href="vacumm.php">See more</a>
                </div>
            </div>
            <div class="box8 box">
                <div class="box-content">
                  <h2>Iron</h2>
                     <div class="box-img" style="background-image:url('handiron.jpg');" ></div>
                     <a href="iron.php">See more</a>
                </div>
            </div>
        </div>
            <?php
            include('footer.php');
            ?>        
    </body>
</html>