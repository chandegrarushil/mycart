<html>
<head>
   <title>Booking Page</title>
    <link rel="stylesheet" href="book.css">
</head>
<body>

<?php
    include('navbar.php');
?>
    <div class="outbox">
    <?php
                    include('connection.php');
                    session_start();
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
                        $pid = $row['proid'];
                        $_SESSION['proid'] = $row['proid'];
                ?>
        <div class="container">
        <form action="" method="POST">
            <div class="box">
                <img src="<?php echo $row['proimage'];?>" alt=""></img>
            </div>
            
            <div class="info">
                <div class="name"><?php echo($row['proname']);?></div>
                <div class="price">RS:- <?php echo($row['price']);?></div>

                <div class="price"><input type="hidden" name="price" value="<?php echo($row['price']);?>"></div>

                <div class="qty">Quantity : <input type="text" name="qty" style="width:40px;height:25px;margin:5px" required></div>

            </div>
        </div>
        <?php
                    }
                }
                    ?>
  
        <div class="container1" >

                        <label for="">Customer Name</label>
                        <input type="text" id="name" name="cname" required>
                        <label for="">Phone no.</label>
                        <input type="text" id="number" name="phoneno" required minlength="10" maxlength="10">
                        <label for="">Email</label>
                        <input type="email" id="email" name="email" required>   
                        <label for="">Address</label>
                        <textarea type="text" id="add" name="add" required></textarea> 
                        <label for="">Date</label>
                        <input type="Date" id="date" name="dt"  required minlength="10" maxlength="10">
                        <label for="">Card no.</label>
                        <input type="text" id="no" name="card" required minlength="12" maxlength="12">
                        <label for="">Cvv no.</label>
                        <input type="text" id="cvv" name="cvv" required minlength="3" maxlength="3">
                    <input class="hero-btn" id="p2" type="submit" name="Confirm" value="Confirm" style="text-decoration: none;color: white;width: 140px;height: 40px;border:solid;font-size: 20px;font-weight: bold;border-radius: 70px;text-align: center;background: #357ca5;display: inline-block;margin-top: 20px;margin-left: 160px;>

}">
        </form>
        </div>
            </div>
<?php
    include("connection.php");
        if(isset($_POST['Confirm']))
        {
                $qua=$_POST['qty'];
                $cn = $_POST['cname'];
                $pno = $_POST['phoneno'];
                $email = $_POST['email'];
                $add = $_POST['add'];
                $dt = $_POST['dt'];
                $card = $_POST['card'];
                $cvv = $_POST['cvv'];
                $qty = $_POST['qty'];
                $price=$_POST['price'];
                $total=$price*$qty;


                $select="select * from product where proid=$proid";
                $result=mysqli_query($con,$select);
                while($row=mysqli_fetch_assoc($result))
                {
                    $proqty=$row['proqty'];

                        if($proqty>=$qty)
                        {
                            $sql="update product set proqty=proqty-$qty where proid=$proid  ";
                            $result=mysqli_query($con,$sql);

                            $insert = "INSERT INTO `booking` (`orderid`, `proid`,`qty`, `cname`, `phoneno`, `email`, `address`, `date`, `cardno`, `cvvno`,`total`) VALUES (NULL, '$proid','$qua','$cn', '$pno', '$email', '$add', CURRENT_DATE(), '$card','$cvv','$total')";
                            $result1=mysqli_query($con,$insert);

                            $fetch="select * from booking order by orderid desc limit 1;";
                            $fetch_result=mysqli_query($con, $fetch);
                            $fetch_row=mysqli_fetch_assoc($fetch_result);

                            $_SESSION['orderid'] = $fetch_row['orderid'];
                            echo "<script>alert('Booking Successfully');window.location.href='inv.php'</script>";
                        }
                        else
                        {
                            echo "<script>alert('Out of Stock');window.location.href='allproducts.php'</script>";
                        }
                }
        }
?>
        </div>
    </div>
</body>
</html>