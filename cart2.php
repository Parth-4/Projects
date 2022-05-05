<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .cart-box{
            display: inline-block;
            border: 2px solid black;
            width: 25%;
            margin: 1.2rem;
            

        }
        .Products{
            border: 2px solid red;
        }
           
    </style>
    

<?php

$user_id=$_REQUEST['user_id'];
echo "<br>$user_id";

$con=mysqli_connect("localhost","root","","project");
$result=mysqli_query($con,"select product_id from addtocart where user_id='$user_id' ");
echo "working 3";


$i=0;
?>
<section class="Products">
<?php
        while($row=mysqli_fetch_array($result))
        {
            // echo $row['product_id'];
            echo "<br>";
            $id=$row['product_id'];
            $result2=mysqli_query($con, "select * from Product where id='$id'");
            $j=0;
            while($jow=mysqli_fetch_array($result2))
            {
                ?>
                <div class="cart-box"> 
                    <?php
                
                $p=$jow['image'];
                $r="./upload/$p";
                echo "<img class='img' src='$r'>"; 
                echo $jow['head']; 
                echo $jow['description']; 
                echo $jow['cost']; 
                ?>
                </div>
               
                <?php

            }
          

        $i++;
    }
    ?>

                </section>   
    <?php
?>

</body>
</html>

   