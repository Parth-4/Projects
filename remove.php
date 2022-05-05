<?php
 echo "ok";
 $con=mysqli_connect("localhost","root","","project");
 $user_id=$_REQUEST['user_id'];
 $product_id=$_REQUEST['product_id'];
 echo " <br> $user_id <br> $product_id";
 $result=mysqli_query($con,"delete from addtocart where product_id='$product_id' AND user_id='$user_id'");

 echo "<script> window.location='cart3.php?user_id=$user_id' </script>";

?>