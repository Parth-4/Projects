<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar2.css">
</head>
<style>
    *{
            margin: 0;
            padding: 0;
        }
        .cart-box{
            display: inline-block;
            /* border: 2px solid black; */
            width: 30%;
            margin: 1.2rem;
            height: 60vh;
            /* height: 30vh; */
            /* margin-left: 1.2rem !important; */
            box-shadow: 2px 2px 4px 2px grey;


        }
        .cart-box:hover{
            box-shadow: 3px 3px 5px 3px grey;

        }
        .Products{
            /* border: 2px solid red; */
            margin: 1.2rem !important;
            width: 93vw;
            margin: 1.2rem !important;
            margin: auto !important;
            margin-top: 20vh !important;
           
        }
        img{
            height: 30vh;
            width: 100%;
            
        }
        p{
            padding: 0.3rem;
        }
        button{
            margin: 00.3rem;
        }
        </style>

<body>
<nav style="position:fixed !important; z-index: 1.5;">
    <ul>
      <li> <a href="index4.html">Home</a> </li>
      <li><a href="./about.html"> About us</a></li>
      <li><a href="./about.html">Admin-section</a></li>
      <li><a href="./about.html">Login|Sign Up</a></li>
      <li><a href="./contact.html"></a></li>
      <li><a href="./admin.php">/</a></li>
    </ul>

</nav>

    

<?php

$user_id=$_REQUEST['user_id'];
echo "$user_id";

$con=mysqli_connect("localhost","root","","project");
$result=mysqli_query($con,"select product_id from addtocart where user_id='$user_id' AND status='0'");
echo "working 3";


$i=0;
?>
<section class="Products ">
<?php
        while($row=mysqli_fetch_array($result))
                {
                    // if($row['status']==='0')
                    // {
            // echo $row['product_id'];
            echo "";
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
                echo "<img class='img' src='$r' class='img-responsive'>"; 
                echo "<h2 class='text-center'>";
                echo $jow['head']; echo "</h2>"; 
                echo "<p> " ;echo $jow['description']; echo "</p>"; 
                
                echo $jow['cost']; 
                ?>
                <div>
                    <?php echo"
                    <a href='buy.php?product_id=$id&user_id=$user_id'>
                    
                        <button name='Buy' class='btn btn-primary' > Buy now </button>
                    </a>";
                    ?>
                    <?php echo"
                    <a href='remove.php?product_id=$id&user_id=$user_id'>
                    <button name='Remove' class='btn btn-primary'> Remove</button>
                    </a>
                    "?>
                </div>
                </div>
               
                <?php

            }
          
        // }
        // else{
            // $i++;
        // }
        $i++;
    }
    ?>

                </section>   
    <?php
    // if(isset('Buy'))
    // {

    // }
?>

</body>
</html>

   