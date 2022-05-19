!
<!DOCTYPE html>
<html lang="en">

<head>
  <title>CakeLand</title>
  <link rel="icon" type="image/x-icon" href="./favicon.ico">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link
    href="https://fonts.googleapis.com/css?family=Playfair+Display:regular,500,600,700,800,900,italic,500italic,600italic,700italic,800italic,900italic"
    rel="stylesheet" />
  <script src="https://kit.fontawesome.com/13e6dd257f.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  <style>
    #logo{
      /* border: 10px solid pink; */
      height: 5rem;
      width: 15rem;
      margin: 0;
      padding: 0;
      /* border: 2px solid orange; */
    }
    li{
      /* border: 2px solid yellow; */
    }
    #logo:hover{
      background-color: white !important;
    }
    img {
      width: 100vw;
      height: 100vh;
    }

    #display {
      width: 100vw;
      margin: 0 !important;
      padding: 0 !important;
      position: absolute !important;
      top: 0px;
    }

    nav {
      background-color: white;
      margin: 0 !important;
      position: absolute !important;
      top: 0;
      width: 100%;
      border-bottom: 2px solid black !important;
      height: 15vh;
      display: flex;
      align-items: center;
      /* justify-content:left */
      /* display: rela; */
     /* display: ; */
      position: fixed !important;
      
    }

    nav a {
      padding: 1.2rem;
      font-size: 1.8rem;
      color: black;
      font-style: italic;
      font-weight: 400;
      text-decoration: none;
      margin: 0.9rem;
    }

    nav li {
      list-style: none;
      /* border: 2px solid red; */
      margin-top: 1.1rem !important;
    }

    body {
      font-family: 'Playfair Display', serif;
      font-style: italic;
    }

    nav a:hover {
      background-color: black;
      color: white;
      text-decoration: none;
    }

    .contact-form {
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
    i{
      font-size: 4.5rem;
      padding: 1.2rem;
    }
    ul{
      /* border: 2px solid red; */
      align-items: center;
    }
    a{
      text-decoration: none;
      color: black;
    }
  @media screen and (max-width: 480px) {
    ul{
      display: flex;
      flex-wrap: wrap;

    }
  }

  .link{
    margin-top: 5rem !important;
    /* background-color: pink; */
  }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg  mynavbar" style="z-index: 2;">
    <div class="container-fluid">

      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> -->
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style="padding: 0 !important;">
            <a class="nav-link" href="./index4.php" style="background-color: white !important;">

      <img src="./images.jpg" alt="" class="img-responsive" id='logo'>
            
            </a>
          </li>
          <li class="nav-item link">
            <a class="nav-link active link" aria-current="page" href="./index4.php">Home</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link link" href="./log.php">Login | Sign Up</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link link" href="./about.html">About us</a>
          </li>
          <li class="nav-item link">
            <a class="nav-link link" href="./contact.php">Contact</a>
          </li>
          



        </ul>

      </div>
    </div>
  </nav>

  <div class="container" id="display">

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>


      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
          <img src="./img/sliding.jpg" alt="Los Angeles" style="width:100%;">
        </div>

        <div class="item">
          <img src="./img/sliding1.jpg" alt="Chicago" style="width:100%;">
        </div>

        <div class="item">
          <img src="./img/sliding4.jpg" alt="New york" style="width:100%;">
        </div>
      </div>

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


  <div class="container contact-form" style=" position: relative; margin-top: 7.9rem;">

    <div class="row">
      <div class="col-md-6">
        <h2>
          Contact details
        </h2>
        <p>
        <h3>

          Our number
        </h3>
        <h4>

          <strong>
            9090676712

          </strong>
        </h4>






        <h3>
          email

        </h3>
        <h4>

          <strong>
            <a href="#" style="text-decoration: none; color: black;"> CakeLandInfo.com</a>
          </strong>
        </h4>

        <h3>
          Location

        </h3>
        <h4>

          <strong>
            13 Street, Manhattan <br> New York
          </strong>
        </h4>

        <br>

        </p>
     <a href="#">
       <i class="fa-brands fa-facebook"></i>
     </a>
     <a href="#">
        <i class="fa-brands fa-instagram"></i>
       </a>
       <a href="#">
         <i class="fa-brands fa-twitter"></i>

       </a><a href="#">

         <i class="fa-solid fa-envelope"></i>
        </a>


      </div>
      <div class="col-md-6">
        <h2>
          Send us message
        </h2>
        <form action="" method="post" id='form'>
          <div>

            <input type="text" placeholder="Enter your name" name="name">
          </div>

          <div>
            <input type="email" placeholder="Enter your email" name="email">

          </div>
          <div>
            <textarea name="message" id="" cols="30" rows="10" placeholder="Enter your message"></textarea>
          </div>
          <div>
            <input type="submit" value="send" name="submit">
          </div>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $con=mysqli_connect('localhost','root',"",'project');
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];
            $result=mysqli_query($con,"insert into message(name,email,message)values('$name','$email','$message')");

            if($result)
            {
              echo " <h1> Message has been submitted </h1>";
              ?>
              <script>document.getElementById('form').style.display='none'</script>
              <?php
            }

        }
        ?>

      </div>
    </div>
  </div>
</body>

</html>

