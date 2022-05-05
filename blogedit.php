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

<form action="">

    <?php
    $con=mysqli_connect("localhost","root","","project");
    $result=mysqli_query($con,"select head1 from blog");

    ?>
    <select name="search" id="">
        
        <?php
        while($row=mysqli_fetch_array($result))
        {
            $ab=$row['head1'];
            echo "<option value=$ab>$ab</option>";
        }
        ?>
    </select>
    <input type="submit" name="submit" value="submit">
</form>

<?php
    if(isset($_REQUEST['submit']))
    {
        $headxxx=$_REQUEST['search'];
        echo "$headxxx";
        $result=mysqli_query($con,"select * from blog where head1='$headxxx'");
        $row=mysqli_fetch_array($result);
        $id=$row['id'];
        ?>


<form action="" method="post" enctype="multipart/form-data">
    Enter the heading 
    <div>
    <input type="text" name="head1" id='head1' placeholder="<?php echo $row['head1']?>">;
</div>
<div>
    Enter the sub heading

</div>

<div>
    <input type="text" name="head2" id='head2' placeholder="<?php echo $row['head2']?>">
</div>
<div>
    Enter the Intro

</div>

<div>
    <input type="text" name="Intro" id='intro' placeholder="<?php echo $row['intro']?>">
</div>

<div>
    Enter the description
</div>
<div>
    <textarea name="description"  cols="30" id='description' rows="10" placeholder="<?php echo $row['description']?>"></textarea>
</div>
<div>
    Enter the  second description
</div> 
<div>  
    <textarea name="description2" id="description2" cols="30" rows="10" placeholder="<?php echo $row['description2']?>"></textarea>
</div>
<div>
    Enter the main image
</div>
<div>
    <input type="file" name="image_main" id='image_main' placeholder="<?php echo $row['image1']?>">
</div>
<div>
    Enter the second image
</div>
<div>
    <input type="file" name="image2" id='image2' placeholder="<?php echo $row['image2']?>">
</div>
<div>
    Enter the third image
</div>
<div>
    <input type="file" name='image3' id='image3' placeholder="<?php echo $row['image3']?>">
</div>
<div>
    <input type="submit" value="submit" name="submit">
</div>
</form>
</section>
<script>
    document.getElementById('head1').defaultValue='<?php echo $row["head1"] ?>';
    document.getElementById('head2').defaultValue='<?php echo $row["head2"] ?>';
    document.getElementById('description').defaultValue='<?php echo $row["description"] ?>';
    document.getElementById('description2').defaultValue='<?php echo $row["description2"] ?>';
    document.getElementById('intro').defaultValue='<?php echo $row["intro"] ?>';
    document.getElementById('image_main').defaultValue='<?php echo $row["image_main"] ?>';
    document.getElementById('image2').defaultValue='<?php echo $row["image2"] ?>';
    document.getElementById('image3').defaultValue='<?php echo $row["image3"] ?>';







</script>
<?php
}

$head1=$_POST['head1'];
echo " <div class='result'><h2> $head1</h2>";
$head2=$_POST['head2'];
echo "<h2> $head2</h2>";

$intro=$_POST['Intro'];
echo "<h2> $intro</h2>";

$description=$_POST['description'];
echo "<h2> $description </h2>";
$description2=$_POST['description2'];

echo "<h2> $description2 </h2>";
echo "<h2> $headxxx </h2>";

$filename=$_FILES['image_main']['name'];
$tempname=$_FILES['image_main']['tmp_name'];

$filename2=$_FILES['image2']['name'];
$tempname2=$_FILES['image2']['tmp_name'];

$filename3=$_FILES['image3']['name'];
$tempname3=$_FILES['image3']['tmp_name'];

$target_path = "/opt/lampp/htdocs/file/upload/" . $filename;
$target_path2 = "/opt/lampp/htdocs/file/upload/" . $filename2;
$target_path3 = "/opt/lampp/htdocs/file/upload/" . $filename3;

$result=mysqli_query($con, "UPDATE blog SET head1='12121', head2='$head2', intro='$intro', description='$description', description2='$description2', image_main='$filename', image2='$filename2', image3='$image' WHERE id='$id'");

(copy($tempname, $target_path));
(copy($tempname2, $target_path2));
(copy($tempname3, $target_path3));

echo "Edit performed successfully </div>";




?>
</body>
</html>