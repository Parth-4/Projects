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

    }
    p , span{
        font-size: 1.4rem;
    }
    
    .product{
        /* border: 2px solid grey; */
        display: inline-block;
        width: 29%;
        height: 50vh;
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
</style>
<body>
    <?php
        $con=mysqli_connect("localhost","root","","project");
        $result=mysqli_query($con,"select * from Product");
        if(mysqli_num_rows($result)>0)
        {  
        
    ?>
            <h1 class="text-center"> Products </h1>
            <section id="main-product">
    <?php
            $i=0;
            while($row=mysqli_fetch_array($result))
            {
                ?>
            <div class="product">
                <?php $p=$row['image'];
                $r="./upload/$p" ?>
                <?php echo "<img class='img' src='$r'>" ?>
                <h2 class="text-center">
                <?php echo $row['head']; ?>
                </h2>
                <span class="text-center"> <?php echo $row['cost']; ?>$</span>
                <p>
                <?php echo $row['description']; ?>
                </p>
                
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
</body>
</html>