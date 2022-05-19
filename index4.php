<!DOCTYPE html>
<html lang="en">

<head>
  <title> CakeLand</title>
  <link rel="icon" type="image/x-icon" href="./favicon.ico">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="navbar.css"> -->

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:regular,500,600,700,800,900,italic,500italic,600italic,700italic,800italic,900italic" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/13e6dd257f.js" crossorigin="anonymous"></script>

  <style>
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
      width: 100vh;
      margin: auto;
    }

    i {
      font-size: 3.5rem;
      padding: 0.6rem;
    }

    body {
      margin: 0;
      padding: 0;
      /* height: 1vh !important; */
      font-family: 'Playfair Display', serif !important;
      font-style: italic;
    }

    #display {
      height: 83vh;
      margin-top: 9vh !important;
      /* position: relative !important; */
      margin: 0px;
      width: 100vw;
      /* z-index: 0.5 !important; */
      padding: 0px !important;
      /* overflow: hidden;
     */
      /* border: 10px solid rebeccapurple; */
    }

    .item {
      /* border: 2px solid red; */
      /* margin-top: 35px !important; */
      padding: 0 !important;
      width: 100vw;
      height: 100vh !important;
    }

    .bg-img {
      display: inline-block;
      /* border: 2px solid yellow; */
      width: 100vw !important;
      height: 100% !important;
    }

    .carousel-inner {
      width: 100vw;
      height: 100vh !important;
      /* margin-top: 35px; */
    }

    #myCarousel {
      /* margin-top: 35px; */
      height: 100vh !important;
    }

    nav {
      /* display: inline-block; */
      /* width: 100vw; */
      width: 100%;
      /* border: 2px solid yellow; */
      /* height: 30%; */

      /* display: ; */
      display: flex;
      /* position: fixed; */
      position: fixed;
      top: 0;
      height: 18vh;
      /* left:0; */
      /* background-color: aquamarine; */
      background-color: white !important;
      color: black !important;
      font-size: 1.8rem;
      z-index: 9.9 !important;
      border-bottom: 2px solid black;

    }

    form {
      background-color: white;
      padding: 1.2rem;
    }

    input,
    textarea {
      background-color: #ececec;
      display: block;
      margin: 0 0 25px 0;
      font-stretch: normal;
      padding: 0.3rem 3%;
      border: none;
    }

    .right,
    .left {
      /* margin-top: 35px; */
      height: 60%;
      margin-top: 2.7rem;

      /* border: 2px  solid purple; */

    }

    img {
      /* position: static; */
      z-index: 0.2;
    }

    nav ul {
      display: flex;
      align-items: center;
      list-style: none;
      text-decoration: none;
      margin: 0.7rem;
    }

    nav ul li {
      margin: 0.6rem;
      padding: 00.6rem;
    }

    nav ul li a,
    a {
      text-decoration: none;
      color: black;
      padding: 0.5rem;
      ;
    }

    nav ul li a:hover {
      text-decoration: none;
      color: white;
      background-color: black;
    }

    .carousel-inner {
      position: relative;
      z-index: -1;
      /* border: 2px solid yellow; */
    }

    .carousel-control {
      /* border: 2px solid orange; */
      /* z-index: 1 */
      /* opacity: -8.1; */
      background-image: none !important;

    }

    /* img{ */
    /* position: relative; */
    /* z-index: -1; */
    /* } */
    .col-md-2 {
      width: 17vw !important;
    }

    .col-md-2:hover {
      transform: scale(1.1);
      transition: transform .25s ease;
    }

    footer {
      background-color: black;
      color: white;
    }

    #product-display {
      /* height: 40vh; */
      /* border: 2px solid orange; */
      padding: 1.4rem;

    }

    .dynamic-image {
      height: 30vh;
      width: 20vw;
      margin: 1.5rem;
    }

    .container {
      /* position: relative; */
      z-index: -1;
    }

    ul {
      flex-wrap: wrap;
    }

    .img-responsive{
      height: inherit;
    }
    #logo{
      /* border: 10px solid pink; */
      height: 5.6rem
    }
    @media screen and (max-width: 480px) {
      nav {
        height: 23vh;
      }

      .col-md-2 {
        /* border: 2PX SOLID RED; */
        width: 80vw !important;
      }

      .img-responsive {
        width: 80% !important;
      }
    }
    ul{
      margin-top: 0;
      padding-top: 0rem;
      display: flex;
      align-items: center !important;
      /* border: 2px solid red; */
      margin-bottom: 1.3rem
    }
  </style>
</head>

<body>
  <nav style="position:fixed !important; z-index: 1.5;">
    <ul>
      <li><a href="./index4.php"><img src="./images.jpg" alt="" class="img-responsive" id='logo'></a></li>
      <li> <a href="./index4.php">Home</a> </li>
      <li><a href="./about.html"> About us</a></li>
      <li><a href="./contact.php">Contact</a></li>
      <li><a href="./log.php">Login|Sign Up</a></li>
      <li><a href="./admin.php"></a>/</li>
      <li><a href="./blog.php">Blogs</a></li>
    </ul>

  </nav>

  <div class="container" id="display" style="z-index: -1;">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <!-- <li data-target="#myCarousel" data-slide-to="4"></li> -->

      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="./upload/slide.jpg" alt="Chania" class="bg-img">
          <div class="carousel-caption">
            <h3>PanCake</h3>
            <p>The atmosphere in Chania has a touch of love and sweetness.</p>
          </div>
        </div>

        <div class="item">
          <img src="./upload/newpart1.jpg" alt="Chania" class="bg-img">
          <div class="carousel-caption">
            <h3>Croissant</h3>
            <p>The famous french dish is our speciality</p>
          </div>
        </div>

        <div class="item">
          <img src="./upload/slide2.jpg" alt="Flower" class="bg-img">
          <div class="carousel-caption">
            <h3>Our special bread and red soup</h3>
            <p> Our handmade organic bread</p>
          </div>
        </div>

        <div class="item">
          <img src="./upload/slide4.jpg" alt="Flower" class="bg-img">
          <div class="carousel-caption">
            <h3>Our wapper Biscuits</h3>
            <p> They are our speciality with more than 20 layers, it is super crispy</p>
          </div>
        </div>

      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>


  <div class="container" style="margin-top: 20rem">
    <div class="row">
      <h1 class="text-center">
        The taste that <br>
        you will <br> remember
      </h1>
      <p class="text-center">
        Our cake bakery is small but <br> with big love for wonderful desserts.
        Our cakes have all <br> the ingredients for an amazing bakery.
      </p>
    </div>

    <div class="row" style="margin-top: 4.8rem;">
      <div class="col-md-6">
        <img src="./img/forIndex2.jpeg" alt="" class="img-responsive" style="position:relative ; z-index:-1;">
      </div>
      <div class="col-md-6">
        <img src="./img/forIndex.jpeg" alt="" class="img-responsive" style="position:relative ; z-index:-1;">
      </div>
    </div>
  </div>

  <div class="container" style="margin-top: 13.2rem; ">
    <div class="row">
      <a href="./product3.php">
        <H2>View Our products</H2>
      </a>
      <h3>
        We provide you with all the bakery items Such as cakes, pancakes, cupcakes, etc. All our items are made from natural ingredients.
      </h3>
    </div>
    <div class="row">
      <div class="col-md-2">
        <img src="//cdn.shopify.com/s/files/1/0565/9757/7916/collections/Easter_Pastel_Cake_1261_500x500_crop_center.jpg?v=1647015698" alt="" class="img-responsive" style="position:relative ; z-index:-1;">
        <h4>
          multiple flavoured Cake
        </h4>
      </div>
      <div class="col-md-2">
        <img src="//cdn.shopify.com/s/files/1/0565/9757/7916/collections/Passover_Group_0855_500x500_crop_center.jpg?v=1647008660"" alt="" class=" img-responsive" style="position:relative ; z-index:-1;">
        <h4>
          Delicious Biscuits
        </h4>
      </div>
      <div class="col-md-2">
        <img src="//cdn.shopify.com/s/files/1/0565/9757/7916/collections/Pudding_1_500x500_crop_center.jpg?v=1633380778" alt="" class="img-responsive" style="position:relative ; z-index:-1;">
        <h4>
          Delicious cupcakes
        </h4>

      </div>
      <div class="col-md-2">
        <img src="//cdn.shopify.com/s/files/1/0565/9757/7916/collections/Birthday__10_500x500_crop_center.jpg?v=1632803139" alt="" class="img-responsive" style="position:relative ; z-index:-1;">
        <h4>
          Birthday Special
        </h4>

      </div>
      <div class="col-md-2">
        <img src="//cdn.shopify.com/s/files/1/0565/9757/7916/collections/Mini_Van_Van_6PK_500x500_crop_center.jpg?v=1632994630" alt="" class="img-responsive" style="position:relative ; z-index:-1;">

        <h4>
          Delicious Chocolate Lava
        </h4>
      </div>
    </div>

  </div>
  <div class='container' id="product-display" style='margin-top: 13.2rem;
                              '>



    <h2>
      Our Products
    </h2>
    <?php
    $con = mysqli_connect("localhost", "root", "", "project");
    $result = mysqli_query($con, "select * from Product");

    if (mysqli_num_rows($result) > 0) {
      if (mysqli_fetch_array($result) < 0); {
        while ($row = mysqli_fetch_array($result)) {
    ?>
          <div class="col-md-2">
            <?php $i = $row['image'];
            $image = "./upload/$i";
            echo "<a href='simpleDetail.php?product_id=$row[0]'><img src='$image' class='img-responsive dynamic-image' style='position:relative ; z-index:-1'></a>  ";
            echo "<h3 style='position:relative ; z-index:-1;'> ";
            echo $row['head'];
            echo "</h3>";  ?>

          </div>



    <?php

        }
      }
    }

    ?>

  </div>


  <div class="container" style="margin-top: 13.2rem">
    <div class="row">
      <div class="col-md-6" style="display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: center;
                                /* border: 2px solid black; */
                                height: 89vh;">
        <h2 style="position:relative ; z-index:-1;">
          Party Pack for any occasion
        </h2>
        <h4 style="position:relative ; z-index:-1;">
          Every brownie is made with the finest ingredients by our Bakers on a Mission. We use Fair Trade cocoa and sugar and are kosher certified.
        </h4>

      </div>
      <div class="col-md-6">
        <img src="./img/brownie.jpg" alt="" class="img-responsive" style="position:relative ; z-index:-1;">
      </div>
    </div>
  </div>


  <div class="container" style="margin-top: 13.2rem;">
    <div class="row">
      <h2>
        Join our NewsLetter
      </h2>
      <p>
        Get the freshest CakeLand updates and offers right to your inbox! Plus, enjoy 10% off on your birthday when you share the date with us!
      </p>
      <form action="" method="post">
        <input type="email" name='email' placeholder="enter your email">
        <br>
        <input type="submit" value="subscribe" name="subscribe">
      </form>
    </div>
  </div>
  <?php
  if (isset($_POST['subscribe'])) {
    $con = mysqli_connect("localhost", "root", "", "project");
    // echo "hello"
    $email = $_POST['email'];
    $result = mysqli_query($con, "insert into Newsletter(email)values('$email')");
    echo "<h4 class='text-center'> Thank Your subscribing </h4>";
  }
  ?>




  <footer>
    <div class="container" style="position: static;">
      <h2 class="text-center">
        CakeLand bakery
      </h2>
      <div class="row">
        <div class="col-md-6">
          <h3>
            Have a Question?
          </h3>
          <br>
          <br>
          <h4>
            We're always here to lend a helping hand.
          </h4>
          <h4>
            Consumer Care Team hours are <br> Monday-Friday, 9am - 5pm EST
          </h4>
          <br>
          <h4>
            Email us at <br>
            CakeLand.inquiry@gmail.com
          </h4>

        </div>
        <div class="col-md-6" style="font-size: 1.2rem;">
          <h3>
            Payment Options
          </h3>
          <i class="fa-brands fa-cc-visa"></i>
          <i class="fa-brands fa-cc-amex"></i>
          <i class="fa-solid fa-credit-card"></i>
          <i class="fa-brands fa-google-pay"></i>
          <i class="fa-brands fa-cc-mastercard"></i>

        </div>
      </div>
      <h3 class="text-center">
        Copyright &copy; CakeLand.com
      </h3>
    </div>
  </footer>
</body>

</html>