<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="navbar2.css">
    <link rel="stylesheet" href="blogadmin.css">
</head>
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

<section class="buttons">
    <a href="./bloginsert.php">
        <button>Insert</button>
    </a>
    <a href="./blogedit.php">
        <button>Edit</button>
    </a>
    <a href="./blogdelete.php">
        <button>
            Delete
        </button>
    </a>
</section>
<section class="form">

    <?php
        $con=mysqli_connect("localhost","root","","project");
        $result=mysqli_query($con,"select head1 from blog");
        
        ?>
    <form action="">
        
        <select name="search" id="">
            <?php 
            while($row=mysqli_fetch_array($result))
            {
                $ab=$row['head1'];
                echo"<option value='$ab'>$ab</option>";
            }
            ?>
        </select>
        <input type="submit" value="submit" name="submit">
    </form>
    </section>
    <?php
        if(isset($_REQUEST['submit']))
        {
            $head=$_REQUEST['search'];
            echo "$head";
            $result=mysqli_query($con,"delete from blog where head1='$head' ");
            if($result)
            {

                echo ' <div class="result"><h3> successfully deleted</h3>';
            }
            else{
                echo "<h3> deletion not successfull </h3> </div>";
            }
        } 
        ?>
</body>
</html>