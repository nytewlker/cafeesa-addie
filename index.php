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
                              $query=mysqli_query($con,"insert into tblbookings (bookingNo,fullName,emailId,phoneNumber,bookingDate,bookingTime,noAdults,noChildrens) 
                              values('$bno','$fname','$emailid','$phonenumber','$bookingdate','$bookingtime','$noadults','$nochildrens')");
                              if($query){
                                        echo '<script>alert("Your order sent successfully. Booking number is "+"'.$bno.'")</script>';
                                        echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                                        }
                                   else {
                                        echo "<script>alert('Something went wrong. Please try again.');</script>";
                                        }

                              }

?>

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

  <!-- slider section -->
  <section class="slider_section position-relative">
    <div class="slider_bg_box">
      <img src="images/slider-bg.jpg" alt="">
    </div>
    <div class="slider_bg"></div>
    <div class="container">
      <div class="col-md-6 ml-auto">
        <div class="detail-box">
          <h1>
            Welcome To <br>
            Our Cafe
          </h1>
          <p>
			   Savor every sip, indulge in every bite at Cafeesa - where big flavor meets cozy charm. Join us for a delightful escape from the ordinary.
			   
          </p>
          <div>
            <a href="book.php" class="slider-link">
              Book A Table
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->

  <!-- special section -->

  <section class="spcl_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail_container">
            <div class="detail-box">
              <img src="images/s1.png" alt="">
              <h5>
                Original Coffee
              </h5>
              <p>
                At Cafeesa, originality is our secret ingredient. From our unique blends of coffee to our handcrafted pastries, every sip and bite is a testament to our commitment to creativity and quality. Step into our cozy haven and experience the authentic taste of innovation, where every visit is a journey of discovery
              </p>
            </div>
            <div class="detail-box">
              <img src="images/s2.png" alt="">
              <h5>
                Self Roasted
              </h5>
              <p>
                 We take pride in every step of the coffee journey, starting with our self-roasted coffee beans. From sourcing the finest green beans to carefully roasting them in-house, we ensure that every cup of coffee embodies freshness, flavor, and passion. Taste the difference of our artisanal approach as you enjoy the rich, aromatic notes in every sip, crafted just for you.
              </p>
            </div>
            <div class="detail-box">
              <img src="images/s3.png" alt="">
              <h5>
                15 Coffee Items
              </h5>
              <p>
                <p>Velvet Mocha Madness: Indulge in the smooth embrace of rich chocolate and velvety espresso, perfectly blended with frothy milk to create a decadent treat for your senses.

Caramel Macchiato Delight: A harmonious symphony of creamy caramel dancing atop a robust espresso base, adorned with steamed milk, delivering a sweet yet bold flavor profile that's simply irresistible.

Hazelnut Heaven Latte: Immerse yourself in the nutty aroma of roasted hazelnuts swirling through a creamy latte, creating a comforting blend that whispers warmth with every sip.

Vanilla Bean Dream: Escape into a world of pure bliss with this creamy concoction featuring fragrant vanilla beans infused into smooth espresso, creating a delightful fusion of sweetness and sophistication.


              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5 ml-auto">
          <div class="img-box">
            <img src="images/spcl-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end special section -->

  <!-- about section -->

  <section class="about_section  layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
				Welcome to Cafeesa Cafe, where every cup tells a story and every bite ignites your senses.<br/><br/>
				Nestled in the heart of [udaipur], Cafeesa is more than just a coffee shop — it's a destination where passion meets perfection. Since [Year of Establishment], we've been dedicated to crafting extraordinary coffee experiences, one sip at a time.<br/><br/><br/>
		    </p>
            <a href="about.php">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

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
                          <button type="submit" value="Reserve a Table" name="submit" style="margin-top:10px;" >Reserve Table</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>

      <!-- End of contact section -->

      <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2>
          What says our clients
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Minim Veniam
                </h4>
               <p>
					Cafeesa is a hidden gem! The coffee is exceptional, the atmosphere cozy, and the staff incredibly welcoming. A must-visit for any coffee lover!
               </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Minim Veniam
                </h4>
                <p>
                  Cafeesa is a hidden gem! The coffee is exceptional, the atmosphere cozy, and the staff incredibly welcoming. A must-visit for any coffee lover!
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="box">
              <div class="img-box">
                <img src="images/client.jpg" alt="">
              </div>
              <div class="detail-box">
                <h4>
                  Minim 6
                 <p>
                  Cafeesa is a hidden gem! The coffee is exceptional, the atmosphere cozy, and the staff incredibly welcoming. A must-visit for any coffee lover!
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

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
