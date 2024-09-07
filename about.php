<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> Cafeesa </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>

  <!-- header section strats -->
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <span>
            Cafeesa
          </span>
        </a>
        <div class="" id="">

          <div class="custom_menu-btn">
            <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="index.php">Home</a>
                <a href="about.php">About</a>
                <a href="book.php">Book Table</a>
                <a href="testimonial.php">Testimonial</a>
				        <a href="check-status.php" target="_blank">Check Booking</a>
                <a href="admin/" target="_blank"> Admin Panel</a>
              </div>
            </div>
          </div>

        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->

 <!-- about section -->
 <section class="about_section layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="images/about-img.jpg" alt="">

        </div>
      </div>
      <div class="col-md-6"><div class="detail-box">
        <div class="heading_container">
          <h2>About Us</h2>
        </div>
        <p>Nestled in the heart of [udaipur], Cafeesa is more than just a coffee shop — it's a destination where passion meets perfection. Since [Year of Establishment], we've been dedicated to crafting extraordinary coffee experiences, one sip at a time.<br/><br/><br/>

At Cafeesa, we believe in the power of originality. That's why we carefully select and roast our own coffee beans, ensuring each cup is a testament to our commitment to quality and innovation. From the moment you step through our doors, you'll be greeted by the aroma of freshly brewed coffee and the warmth of our welcoming ambiance..<br/>
But Cafeesa is more than just coffee — it's a haven for food enthusiasts too. Our menu boasts a delightful selection of handcrafted pastries, savory bites, and indulgent treats, all made with the finest ingredients and a dash of creativity.<br/><br/>

Beyond our offerings, Cafeesa is a place to connect, unwind, and savor the little moments. Whether you're catching up with friends, diving into a good book, or simply enjoying a moment of solitude, our cozy atmosphere provides the perfect backdrop for any occasion.<br/><br/>

Join us at Cafeesa Cafe and discover why we're more than just a coffee shop — we're a community, a passion, and an experience unlike any other. Come sip, savor, and stay awhile. We can't wait to welcome you into our world of flavor and inspiration.<br/>

        </p>
       
      </div></div>
    </div>
  </div>
</section>
<!-- End of about us page -->


 <!-- start of footer -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_content">
            <h4>Reach at...</h4>
            <div class="contact_link_box">
              <a href=""><i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>Location</span></a>
              <a href=""><i class="fa fa-phone" aria-hidden="true"></i>
              <span>Call +91 6204332516</span></a>
              <a href=""><i class="fa fa-envelop" aria-hidden="true"></i>
              <span>anand.dwiivedi@gmail.com</span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Cafessa
            </a>
            <p>Where every moment is savored, and every sip tells a story. Welcome to Cafeesa, your haven of flavor and community

            </p>
            <div class="footer_social">
              <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-info">
        <p>&copy; <span id="displayYear"></span>All Rights Reserved By
        <a href="#">ADDIE</a></p>
      </div>
    </div>
  </footer>
  <!-- end of footer section -->


  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->


</body>

</html>