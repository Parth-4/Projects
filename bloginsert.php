<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
  href="https://fonts.googleapis.com/css?family=Playfair+Display:regular,500,600,700,800,900,italic,500italic,600italic,700italic,800italic,900italic"
  rel="stylesheet" />
  <link rel="stylesheet" href="navbar2.css">
  <link rel="stylesheet" href="blogadmin.css">
  <style>
  

  .form{
      margin-top: 10vh;
      /* border: 10px solid purple; */
      display: flex;
      justify-content: center;
      align-items: center;
  }
  form{
      /* border: 12px solid red; */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background-color: white;
      width: 40vw;
      border: 2px solid black;
      padding: 1.3rem;
      
  }

  </style>
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
    <section class="form" style="display: flex; justify-content:center">

        <form action="" method="post" enctype="multipart/form-data">
            Enter the heading 
        <div>
            <input type="text" name="head1">;
        </div>
        <div>
            Enter the sub heading

        </div>
        
        <div>
            <input type="text" name="head2">
        </div>
        <div>
            Enter the Intro

        </div>
        
        <div>
            <input type="text" name="Intro">
        </div>

        <div>
            Enter the description
        </div>
        <div>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            Enter the  second description
        </div> 
        <div>  
            <textarea name="description2" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            Enter the main image
        </div>
        <div>
            <input type="file" name="image_main">
        </div>
        <div>
            Enter the second image
        </div>
        <div>
            <input type="file" name="image2">
        </div>
        <div>
            Enter the third image
        </div>
        <div>
            <input type="file" name='image3'>
        </div>
        <div>
            <input type="submit" value="submit" name="submit">
        </div>
      </form>
    </section>
    
    <?php
        $head1=$_POST["head1"];
        $head2=$_POST["head2"];
        $description=$_POST["description"];
        $intro=$_POST['Intro'];
        $description2=$_POST['description2'];
        
        $filename=$_FILES['image_main']['name'];
        $tempname=$_FILES['image_main']['tmp_name'];

        $filename2=$_FILES['image2']['name'];
        $tempname2=$_FILES['image2']['tmp_name'];

        $filename3=$_FILES['image3']['name'];
        $tempname3=$_FILES['image3']['tmp_name'];

        echo "<br> $head1 <br> $head2 <br> $filename";

        $target_path = "/opt/lampp/htdocs/file/upload/" . $filename;
        $target_path2 = "/opt/lampp/htdocs/file/upload/" . $filename2;
        $target_path3 = "/opt/lampp/htdocs/file/upload/" . $filename3;

        $con=mysqli_connect("localhost","root","","project");
        $result=mysqli_query($con,"insert into blog(head1,head2,image_main,image2,image3,description,intro,description2)values('$head1','$head2','$filename','$filename2','$filename3','$description','$intro','$description2')");


        (copy($tempname, $target_path));
        (copy($tempname2, $target_path2));
        (copy($tempname3, $target_path3));

        echo "<h1> work done successfully </h1>";
    ?>
</body>
</html>