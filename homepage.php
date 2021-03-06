<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width = device-width, initial-scale = 1">

  <!-- CSS only -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Home | FoodEdge</title>
  <style>
    .slide1 {
      background-image: url('homeslide1.png');
      height: 750px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .slide2 {
      background-image: url('homeslide2.png');
      height: 750px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .slide3 {
      background-image: url('homeslide3.png');
      height: 750px;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
    }

    .footera {
      background-color: #5E503F;
      color: grey;
      padding-top: 2rem;
    }

    hr.light {
      border-top: 1px;
    }

    footer a {
      color: 5E503F;
    }

    #footermain {
      background-color: #5e503f;
    }

    #copyright {
      background-color: grey;
    }

    #aboutushome {
      background-color: #a9927d;

    }

    .display-5 {
      color: #f2f4f3;
    }

    .lead {
      color: #fef4f3;
    }

    .gap {
      padding: 120px 0px;
    }


    #menu {
      padding-top: 40px;
      padding-bottom: 40px;
    }

    #fixedImage {
      background-image: url("fixed.jpeg");
      background-size: cover;
      background-attachment: fixed;
      height: 30%;
      width: 100%;
      background-size: cover;
    }
  </style>
</head>

<body>
  <div id="theCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#theCarousel" data-slide-to="0" class="active"> </li>
      <li data-target="#theCarousel" data-slide-to="1"> </li>
      <li data-target="#theCarousel" data-slide-to="2"> </li>
    </ol>

    <!-- Define the text to place over the image -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="slide1"></div>
        <div class="carousel-caption">
          <h1>Welcome To Foodedge Gourmate</h1>
          <p>Best Catering services in Kuching Sarawak</p>

        </div>
      </div>
      <div class="item">
        <div class="slide2"></div>
        <div class="carousel-caption">
          <h1>Welcome To Foodedge Gourmate</h1>
          <p>Best Catering services in Kuching Sarawak</p>
        </div>
      </div>
      <div class="item">
        <div class="slide3"></div>
        <div class="carousel-caption">
          <h1>Welcome To Foodedge Gourmate</h1>
          <p>Best Catering services in Kuching Sarawak</p>
        </div>
      </div>
    </div>


    <a class="left carousel-control" href="#theCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"> </span>
    </a>
    <a class="right carousel-control" href="#theCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
  <!--endofslide-->

  <div class="container-fluid padding" id="aboutushome">
    <div class="row welcome text-center text-white">
      <div class="col-12">
        <h1 class="display-5">About FoodEdge Gourmate</h1>
      </div>
      <hr>
      <div class="col-12">
        <p class="lead">
          FoodEdge Gourmate Sdn Bhd established in the year of 1999 which 20+ years of experience
          in exquisite catering and excellent hospitality. We provide quality food in a affordable price.
          From appetizing Asian cuisine to Indian Curine, we are one-stop award winning catering company for all your event needs.

        </p>
      </div>
    </div>
  </div>
  <!-- end of aboutus-->
  <section id="fixedImage">
    <div class="container gap">

    </div>
  </section>

  <div class="container" id="menu">
    <div class="row justify-content-center">
      <div class="col-md-4" id="menua">
        <div class="card shadow" style="width:20rem;">
          <img src="menua.gif" alt="Card image cap">
          <div class="card-body text-center">
            <h5 class="card-title"> Menu A </h5>
            <p class="card-text"> This is Chinese Cursine</p>
            <a href="#" class="btn btn-success"> Menu A</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="menua.gif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Menu B</h5>
            <p class="card-text"> This is Malay Cursine</p>
            <a href="#" class="btn btn-success"> Menu B </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 20rem;">
          <img class="card-img-top" src="menua.gif" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> Menu C</h5>
            <p class="card-text"> This is Indian Cursine</p>
            <a href="#" class="btn btn-success"> Menu B </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="fixedImage">
    <div class="container gap">

    </div>
  </section>

  <!--why choose us-->
  <div class="class-fluid padding">
    <div class="row welcome text-center">
      <div class="col-12">
        <h1 class="display-4">Why Choose Us </h1>

      </div>
    </div>
  </div>
  <!--why choose us section-->
  <div class="container-fluid padding">
    <div class="row padding">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="whychooseus.png" alt="image card">
          <div class="card-body">
              <h4 class="card-title">Food Testing Services</h4>
              <p class="card-text">
              Come and visit us, get to know us, try our food and let us not be strangers on your auspicious day of event.</p>
          </div>
          

        </div>
      </div>
    </div>
  </div>

  <footer class="bg-primary text-white" id="footermain">
    <div id="footerimage">
      <div class="container py-12">
        <div class="row text-center">
          <div class="col-lg-12 ">
            <h4>About Us</h4>
            <p> 082-8865234</p>
            <p>enquiry@foodedge.com</p>
            <p>Jalan Song</p>
            <p>Kuching, Sarawak, Malaysia</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid text-center bg-secondary" id="copyright">
      &copy; 2020. All right are Reserved by FoodEdge Gourmate
    </div>

  </footer>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <!--script src="js/jquery"-->
</body>

</html>