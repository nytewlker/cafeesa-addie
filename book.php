<?php include_once('admin/includes/config.php');

  if(isset($_POST['submit'])){

                              $fname=$_POST['name'];
                              $emailid=$_POST['email'];
                              $phonenumber=$_POST['phonenumber'];
                              $bookingdate=$_POST['bookingdate'];
                              $bookingtime=$_POST['bookingtime'];
                              $noadults=$_POST['noadults'];
                              $nochildrens=$_POST['nochildrens'];
                              $bno=mt_rand(100000000,9999999999);
  
                              //Code for Insertion
                              $query=mysqli_query($con,"insert into tblbookings (bookingNo,fullName,emailId,phoneNumber,bookingDate,bookingTime,noAdults,noChildrens) values('$bno','$fname','$emailid','$phonenumber','$bookingdate','$bookingtime','$noadults','$nochildrens')");
                              if($query){
                                        echo '<script>alert("Your order sent successfully. Booking number is "+"'.$bno.'")</script>';
                                        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                                        }
                                   else {
                                        echo "<script>alert('Something went wrong. Please try again.');</script>";
                                        }

                              }

?>
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

    <!-- contact section -->

      <section class="contact_section layout_padding">

        <div class="contact_bg_box">
          <img src="images/contact-bg.jpg" alt="">
        </div>

        <div class="container">

          <div class="heading_container heading_center">
            <h2>Book A Table</h2>
          </div> 

          <div class="contact-section">

            <div class="row">

              <div class="col-md-7 mx-auto">

                <form action="#" method="post">

                  <div class="contact_form-container">
            
                    <div class="main">

                      <div class="form-left-w3l">
                        <input type="text" class="top-up" name="name" placeholder="Name" required="">
                      </div>

                      <div class="form-left-w3l">
                        <input type="email" name="email" placeholder="Email" required="">
                      </div>
                      
                      <div class="form-right-w3ls ">
                        <input class="buttom" type="text" name="phonenumber" placeholder="Phone Number" required="">
                        <div class="clearfix"></div>
                      </div>

                      <div class="form-left-w3l">
                        <input id="datepicker" name="bookingdate" type="date" placeholder="Booking Date " required="">
                      </div>
                
                      <div claass="form-left-wl">
                          <input type="time" id="timepicker" name="bookingtime" class="timepicker form-control hasWickedpicker" placeholder="Time" required="" onkeypress="return false;">
                          <div class="clear"></div>
                        </div>

                      <div class="form-left-w3l">
                  
                          <div class="main">

                            <div class="contact_form-container">
                              <select class="form-control" name="noadults" required>
                                <option value="">Number of Adults</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                              </select>
                          </div>

                            <div class="contact_form-container">

                              <select class="form-control" name="nochildrens" required>

                                <option value="">Number of Children</option>
                                <option value="1">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>

                              </select>

                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="contactbtn-box">
                     <button type="submit" value="Reserve a Table" name="submit"  style="margin-top:10px;"  >Reserve Table</button>
                    </div>
                    
                  </div>

                </form>

              </div>

            </div>

          </div>

        </div>

      </section>

    <!-- End of contact section -->


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