<?php
#include('db_connect.php');
#db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Oggionni Wines</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/icon.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="bootstrap-3.3.7-dist/js/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(0%);
      filter: grayscale(0%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(0%);
      filter: grayscale(0%);
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      /*height: 100px;*/
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#myPage"><img src="images/alt_logo.png" style="width: 100px"></a> -->
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#producers">PRODUCERS</a></li>
        <!-- <li><a href="#dist">DISTRIBUTORS</a></li> -->
        <li><a href="#contact">CONTACT</a></li>
<!--         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://twitter.com/oggionniwines" target="_blank">
          <span class='symbol' style="font-size: 36px;">circletwitterbird</span></a>
        </li>
        
        <li><a href="https://www.instagram.com/oggionniwines/" target="_blank">
          <span class='symbol' style="font-size: 36px;">circleinstagram</span></a>
        </a></li>
        
        <li><a href="https://www.linkedin.com/company/oggionni-wines" target="_blank">
          <span class='symbol' style="font-size: 36px;">circlelinkedin</span></a>
        </a></li>
      </ul>

    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li> -->
<!--       <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/bg.jpg" alt="New York" width="1200">
        <div class="carousel-caption">
<!--           <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p> -->
        </div>
      </div>

<!--       <div class="item">
        <img src="chicago.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="la.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>
      </div> -->
    </div>

    <!-- Left and right controls -->

</div>


<div id="about" class="container text-center">
  <h3>ABOUT US</h3>
  <p>Emmett and Owen’s roots bring them back to Buffalo, New York where the Oggionni family has lived for generations. The Oggionni name was ultimately established outside of Milano until John Oggionni immigrated to Buffalo in 1929. John’s arrival to the United States led to two generations of proud Italian-Americans. These men and women are the same individuals who raised Emmett and Owen to found their wine import and distribution business. Now with a well-groomed portfolio the two men are eager to show the world new gems that have yet to be found. As time has progressed the two founders have taken on various roles at Oggionni Wines. Owen has been the force behind the company’s selections, working aggressively to cater to wines that are truly believed in. This involves everything from sample selections, tastings with industry professionals, and rating coordination. Emmett has been the company’s liaison, working with producers, lawyers, and distributors. Both Emmett and Owen work tirelessly to create a well-run company that presents a well-curated portfolio day-in and day-out. By working together, as a family and a team, Emmett and Owen cover the whole State of New York with ease. The duo works tirelessly to bring their products to market, taking great effort to present themselves and their wineries as first-class products.</p>

  <div style="height: 30px;"></div>

  <img src="images/aboutus.jpg" alt="owen and emmett" style="width: 95%; border: 2px solid black; padding: 4px;">

  <div style="height: 30px;"></div>

  <h3>EXPLORING NEW CORNERS</h3>
  <p>At Oggionni Wines our main goal is to dive in and explore the undiscovered corners of the wine world. We work every day in the hope that we will find a new region or producer who will be monumental in the moving forward of the industry. So much of the world is seemingly discovered but it is our motive to strive forward and find new experiences for the casual drinker as well as the more experienced connoisseur. Being progressive is in our blood because it enables us to be open-minded, but structured in our approach. We look forward to growing with our customers and any friends we make along the way. We invite you to link up with us on our journey. </p>
  <br>
  Emmett &amp; Owen Ogiony<br> 
  Founders<br> 
  Oggionni Wines, LLC<br>
  <br>
</div>

<div id="dist" class="bg-1">
  <div class="container">
    <h3 class="text-center">DISTRIBUTORS</h3>
    <p class="text-center">Coming soon!</p>
    
    <div class="row text-center">

    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="producers" class="container text-left">
  <h3>PRODUCERS</h3>
  <div class="row">
    <div class="col-md-6">
      <span style="font-weight: bold; display: block; font-size: 18px; color: black;">"Chiara Blanc" Moscato Spumante D.O.C.G. - 2015</span>
      <span style="display: block;"><b>Winery:</b> Cascina Fonda, Asti Italy</span>
      <span style="display: block;"><b>Aging:</b> Aged in bottle for several weeks.</span>
      <span style="display: block;"><b>Varietal Composition:</b> 100% Moscato Bianco Di Canelli</span>
      <span style="display: block;"><b>Type:</b> Sparkling Sweet White Wine</span>
      <br>
      <?php
        include('db_connect.php');

        db_connect();
      ?>
      <p>De-stemming and crushing, followed by maceration on the skins for several hours prior to squeezing in horizontal presses. Off-skins fermentation for 20 days at a controlled temperature of approximately 16° C. The formation of a light mousse in pressure tanks with the addition of selected yeasts to reach an excess pressure of 1.5 Atm is followed by stabilization and refrigeration at -4° C. Before bottling, the wine undergoes microfiltration, and it is then left to refine in the bottle for several weeks.</p>
    </div>
  </div>
</div>



<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"></p>

  <div class="row">
    <div class="col-md-4">
      <p><span class="glyphicon glyphicon-map-marker"></span>259 Main Street Suite 204, East Aurora, NY 14021</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +1-716-796-3827</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: info@oggionniwines.com</p>
      <hr>
      <p><span class="glyphicon glyphicon-map-marker"></span>108 8th Avenue, New York, NY 10011</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +1-716-799-5695</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: info@oggionniwines.com</p>      
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2919.5198425440135!2d-78.660863!3d42.967322!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d375861ce9c67d%3A0xf4db2dbd1f05eabe!2s8860+Main+St+%23201a%2C+Williamsville%2C+NY+14221!5e0!3m2!1sen!2sus!4v1474427205816" width="100%" height="450" frameborder="0" style="border:2px solid black; padding: 4px" allowfullscreen></iframe>
    </div>

    <div class="col-md-6">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.972484121071!2d-74.00378858459423!3d40.74063097932878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259be890f9285%3A0x6d0a64eef7acac66!2sOggionni+Wines!5e0!3m2!1sen!2sus!4v1474744651630" width="100%" height="450" frameborder="0" style="border: 2px solid black; padding: 4px" allowfullscreen></iframe>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>

