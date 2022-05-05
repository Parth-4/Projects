<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:regular,italic,700,700italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300italic,regular,italic,500,500italic,600,600italic,700,700italic" rel="stylesheet" />
    <link
  href="https://fonts.googleapis.com/css?family=Playfair+Display:regular,500,600,700,800,900,italic,500italic,600italic,700italic,800italic,900italic"
  rel="stylesheet" />
</head>
<style>
    *{
        padding: 0;
        margin: 0;
    }
    h2, h1{
        font-family: 'PT serif', serif !important;
        font-size: 2rem;
    }
    body{
        font-family: 'Cormorant Garamond', serif;
    font-family: 'Playfair Display', serif !important;
    font-style: italic;


    }
    p , span{
        font-size: 1.4rem;
        overflow: hidden;
        white-space: nowrap;
     overflow: hidden;
     text-overflow: ellipsis;
    }
    
    .product{
        /* border: 2px solid grey; */
        display: inline-block;
        width: 29%;
        height: 70vh;
        margin: 1.5rem;
        box-shadow: 1px 1px 10px 1px grey;
        padding: 1.1rem;    
    }
    .product:hover{
        box-shadow: 2px 2px 14px 3px grey;
        

    }
    .img{
        width: 100%;
        height: 60%;
    }
    #main-product{
       /* border: 2px solid red;  */
       /* display: flex; */
       margin: auto;
    }

    .nav-link {
            color: white;
            font-size: 1.4rem !important;
            margin: 0.5rem;
            margin-top: 0 !important;
            

        }
        .nav-link:hover
        {
            background: white;
            color: black;
        }

        .mynavbar {
            position: fixed;
            width: 100%;
            font-family: 'Cormorant Garamond', serif;
            font-weight: bolder;
            margin-top: 0px !important;
            font-family: 'Playfair Display', serif !important;

        }
        nav{
            background-color: black;
            color: white !important;
            /* margin-bottom: 1.4em; */
           
        }
        h1{
            padding-top: 7rem;
        }
   
      
</style>
<body>
<nav class="navbar navbar-expand-lg  mynavbar">
            <div class="container-fluid">
            <nav class="navbar navbar-light bg-light">
                <img src="./images/logo2.jpg" id="logo" alt="">
            </nav>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./log.html">Login | Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                    
                        <?php   $id=$_REQUEST['user_id'];?>
                        <?php   echo "<a class='nav-link'   href='./cart3.php?user_id=$id'>  <i class='fa-solid fa-cart-shopping'> Cart</i> </a>" ?>
                       
                    </li>



                </ul>

            </div>
        </div>
</nav>
<div class="head">
    <?php 
        $con=mysqli_connect("localhost","root","","project");

    $user_id=$_REQUEST['user_id'];
    $r=mysqli_query($con,"select * from customerdata where User_d='$user_id'");
    $row=mysqli_fetch_array($r);

    ?>
        
    <h1 class="text-center" > Products </h1>
    <h2 class="text-center">  <?php  echo  $row['Name']  ?></h2>
</div>
    <?php
        $con=mysqli_connect("localhost","root","","project");
        $result=mysqli_query($con,"select * from Product");
        if(mysqli_num_rows($result)>0)
        {  
        
    ?>

            <section id="main-product">
    <?php
            $i=0;
            while($row=mysqli_fetch_array($result))
            {
                ?>
            <div class="product">
                <?php $user_id=$_REQUEST['user_id'];
                $r=mysqli_query($con,"select Name from customerdata where User_d='$user_id'");

                ?>

                <?php 
                
                $p=$row['image'];
                $r="./upload/$p" ?>
                <?php echo "<a href='details.php?a=$row[0]&user_id=$user_id&product_id=$row[4]'><img class='img' src='$r'>" ?></a>
                <h2 class="text-center">
                <?php echo $row['head']; ?>
                </h2>
                <span class="text-center"> <?php echo $row['cost']; ?>$</span>
                <!-- <p>this is going well</p> -->
                <p class="product-description">
                <?php echo $row['description']; ?>
                </p>
                <?php echo "<a href='cart.php?user_id=$user_id&a=$row[0]&product_id=$row[4]'>" ?>
                <button class="btn btn-default btn-primary" name="dance" value="mad"> Add To cart</button>
            </a>
            </div>
            
            <?php
                $i++;
            }
            ?>
                </section>
            
     <?php
        }   
        else{
            echo "<h1> no result found </h1>";
             }     ?>

             <script>
                 var a=document.getElementsByClassName('product-description');
                 b=a.innerHTML
                 var k=document.getElementsByTagName('p');
                 var s=k.innerHTML;
                 
                 console.log(s);
             </script>
</body>
</html>