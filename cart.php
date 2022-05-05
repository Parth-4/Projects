<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    
    
    <?php
    $product_id=$_REQUEST["product_id"];
    $user_id=$_REQUEST['user_id'];
    echo "$product_id";
    echo "<br> $user_id";
    $con=mysqli_connect("localhost","root","","project");
    echo "working";
    $result=mysqli_query($con,"insert into addtocart(user_id,product_id,status)values('$user_id','$product_id','0')");
    echo "working 2";
    if($result)
    {
        echo "<h3> Inserted successfully";
        echo "<script> window.location='cart3.php?user_id=$user_id'</script>";
        
    }
    else{
        echo "some problem occured";
    }
    ?>
</body>
</html>