<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:regular,italic,700,700italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=PT+Serif:regular,italic,700,700italic" rel="stylesheet" />
   
    
    <script src="jq.js"></script>
    <script>
        $(document).ready(function() {
            $("#insert").hide();
            $(".insert-heading").hide();
            $('#edit').hide();
            $(".edit-heading").hide();
            $("#delete").hide();
            $('.delete-heading').hide();

            $("#bt-edit").click(function() {
                $("#insert").hide();
                $(".insert-heading").hide();
                $("#edit").show();
                $(".edit-heading").show();
                $("#delete").hide();
                $('.delete-heading').hide();
                // $("#insert").addClass('flexing');


            })
            $("#bt-insert").click(function() {
                $("#insert").show();
                $(".insert-heading").show();
                $('#edit').hide();
                $(".edit-heading").hide();
                $("#delete").hide();
                $('.delete-heading').hide();
            })
            $("#bt-delete").click(function() {
                $("#delete").show();
                $('.delete-heading').show();
                $('#edit').hide();
                $(".edit-heading").hide();
                $("#insert").hide();
                $(".insert-heading").hide();
            })
        })
    </script>
</head>
<style>
    form {
        /* border: 2px solid black; */
        padding: 1.2rem;
        box-shadow: 2px 2px 4px 4px grey;

    }

    #insert {
        display: flex;
        justify-content: center;
        /* display: none; */
    }

    .flexing{
        display: flex;
        justify-content: center;
    }
    .edit {
        display: flex;
        justify-content: center;
    }
    #delete{
        display: flex;
        justify-content: center;
    }

    h2,h1 {
        font-family: 'PT serif', serif;
        margin: 0.8rem;

    }

    body {
        font-family: 'Cormorant Garamond', serif;

    }

    #button {
        /* border: 2px solid orange; */
        display: flex;
        justify-content: center;
    }

    button {
        margin: 0.5rem;
    }
    .result{
        width: 100vw;
    }
    input{
        margin: 0.8rem;
        padding: 0.3rem;
    }
    input[type=text], input[type=number], textarea
    {
        border: 2px solid grey;
        border-radius: 7px;
        margin: 0.5rem;

    }
    input[type=submit] ,input[type=file]
    {
        border: 2px solid yellow;
        color: white  !important;
        background-color: black !important;
        border-radius: 10px !important;
        border: 2px solid black !important;
    }
    button{
        color: white  !important;
        background-color: black !important;
        border-radius: 10px !important;
        border: 2px solid black !important;
    }
    label{
        margin-top: 00.8rem;
    }
    nav{
        background: black;
        width: 100%;
        height: 35%;
        position: fixed;
    }
    a{
        color: white !important;

    }
    body{
        background: url("./upload/bga4.jpg");
    }
</style>

<body>
<nav class="navbar navbar-expand-lg navbar-light  mynavbar">
            <div class="container-fluid">
                <!-- <nav class="navbar navbar-light bg-light">
                 <img src="./images/logo2.jpg" id="logo" alt=""> -->
              <!-- </nav> --> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./index2.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./log.html">Login | Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./blog.html">Admin-section</a>
              </li>
              
              
              
            </ul>
            
          </div>
        </div>
      </nav>
    <div id="button">
        <button name="btn" id="bt-insert" class="btn btn-default btn-primary"> Insert </button>
        <button name="btn2" id="bt-delete" class="btn btn-default btn-primary"> Delete </button>
        <button name="btn3" id="bt-edit" class="btn btn-default btn-primary"> Edit </button>
    </div>
    
    <H1 class="text-center insert-heading"> Insertion form</H1>
    <section id="insert">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="container-fluid">
                <label for="id">Enter the ID</label>
                <input type="number" id="id" name="id">
            </div>
            <div class="container-fluid">

                <label for="heading_for_product"> Enter the product heading</label>
                <input type="text" id="heading_for_product" class="form-control" name="heading">
            </div>
            <div class="container-fluid">

                <label for="description_for_product"> Enter the description of product</label>
            </div>
            <div>
                <textarea name="description" id="description_for_product" cols="30" rows="10"></textarea>
            </div>
            <div class="container-fluid">
                <label for="image">Select the product image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="container-fluid">
                <label for="cost">enter the cost of product</label>
                <input type="number" id='cost' name="cost">
            </div>
            <div class="container-fluid">
                <input type="submit" value="submit" name="submit">
            </div>

        </form>
    </section>
    <h1 class='text-center edit-heading'>edit form</h1>
    <section id="edit">
        <section class="edit">
            <form action="insert.php" method="POST">
                <?php
                $con = mysqli_connect("localhost", "root", "", "project");
                $result = mysqli_query($con, "select head from Product");

                ?>
                <select name="edit" id="">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $ab = ($row[0]);

                        echo "<option value='$ab'>$row[0]</option>";
                    }
                    ?>
                </select>
                <input type="submit" value="search" name="search">
            </form>
        </section>

        <?php
        if (isset($_REQUEST["search"])) {
            $headingxxx = $_REQUEST["edit"];
            echo "$headingxxx <br>";
            $result = mysqli_query($con, "select * from Product where head='$headingxxx'");
            $row = mysqli_fetch_array($result);
            $headingxxx = $row[0];

        ?>
            <?php echo "<h2  class='text-center'> $headingxxx</h2>"; ?>
            <section class="edit">
                <form action="edit.php" method="POST" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <label for="">Selected item</label>
                        <input type="text" value="<?php echo base64_encode($headingxxx); ?>" name="send">
                        <label for="heading_for_product"> Enter the product heading</label>
                        <input type="text" id="heading_for_product" name="heading2" placeholder=<?php echo "$row[0]" ?>>
                        <!-- <?php echo $row[0] ?> -->
                    </div>
                    <div class="container-fluid">
                        <label for="description_for_product"> Enter the description of product</label>
                        <textarea name="description2" id="description_for_product" cols="30" rows="10" placeholder=<?php echo "$row[3]" ?>></textarea>
                    </div>
                    <div class="container-fluid">
                        <label for="image">Select the product image - (<?php echo "$row[1]" ?>)</label>
                        <input type="file" name="image2" id="image" placeholder="">

                    </div>
                    <div class="container-fluid">
                        <label for="cost">enter the cost of product</label>
                        <input type="number" id='cost' name="cost2" placeholder=<?php echo "$row[2]" ?>>
                    </div>
                    <div class="container-fluid">
                        <input type="submit" value="submit" name="submit">
                    </div>

                </form>
            <?php
        }
            ?>

            </section>
    </section>
    <h2 class="delete-heading text-center">
        Deletion
    </h2>
    <section id="delete">
        <form action="insert.php" method="POST">
            <?php
            $con = mysqli_connect("localhost", "root", "", "project");
            $result = mysqli_query($con, "select head from Product");

            ?>
            <select name="delete" id="">
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    $ab = ($row[0]);

                    echo "<option value='$ab'>$row[0]</option>";
                }
                ?>
            </select>
            <input type="submit" value="delete" name="delete2">
        </form>
        <?php
        if (isset($_REQUEST["delete2"])) {
            $headingxxx = $_REQUEST["delete"];
            echo "$headingxxx <br>";
            $con = mysqli_connect("localhost", "root", "", "project");
            $result = mysqli_query($con, "delete from Product where head='$headingxxx'");
            $r= 'successfully deleted';
        }
        else{
            $r ="not deleted";
        }
        ?>
        
    </section>

    <?php if($r)
    { ?>
    <div class="result">
            <?php echo "echo <h4> $r </h4>" ?>
        </div>
    <?php
    }
    ?>

</body>

</html>

<?php
$heading = $_POST["heading"];
$cost = $_POST["cost"];
$description = $_POST["description"];
$id = $_POST["id"];

$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];

echo "$heading <br>";
echo "$cost <br>";
echo "$description <br>";
echo "$filename <br>";


$target_path = "/opt/lampp/htdocs/file/upload/" . $filename;
$con = mysqli_connect("localhost", "root", "", "project");

echo "conneected suceessfully";
$s = mysqli_query($con, "insert into Product(head,cost,image,description,id)values('$heading','$cost','$filename','$description','$id')");
echo "inserted successfully";
(copy($tempname, $target_path));

echo "<h2> inserted successfully <h2>";

?>