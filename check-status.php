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
$query=mysqli_query($con,"insert into tblbookings(bookingNo,fullName,emailId,phoneNumber,bookingDate,bookingTime,noAdults,noChildrens) values('$bno','$fname','$emailid','$phonenumber','$bookingdate','$bookingtime','$noadults','$nochildrens')");
if($query){
echo '<script>alert("Your order sent successfully. Booking number is "+"'.$bno.'")</script>';
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
} else {
echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <title>Cafeesa | ADDIE</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- calender -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- time script -->
    <!-- <link href="css/wickedpicker.css" rel="stylesheet" type="text/css" /> -->
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- Internal CSS -->
    <style>
        /* Reset CSS */
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block;
        }

        ol, ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after, q:before, q:after {
            content: '';
            content: none;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* Global Styles */
        body {
            padding: 0;
            margin: 0;
            background: url(images/about-img.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            min-height: 100%;
            font-family: 'Roboto', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            letter-spacing: 1px;

        }

        p {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            letter-spacing: 1px;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        input[type="email"], input[type="text"], input[type=password], input[type="button"], input[type="submit"], textarea {
            font-family: 'Roboto', sans-serif;
        }

        /* Appointment Form Styles */
        .appointment-w3 {
            width: 40%;
            margin: 60px auto 50px;
            background-color: #123119;
            padding: 30px 30px;
            border: 6px solid white;
        }

        h1.header-w3ls {
            text-align: center;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 50px;
            color: #fff;
            letter-spacing: 11px;
            text-shadow: 2px 3px rgba(0, 0, 0, 0.42);
        }

        .personal h2, .information h3, .passport h3 {
            color: #0b4b1f;
            text-align: center;
            margin: .5em 0em;
            letter-spacing: 3px;
        }

        select.form-control, .form-left-w3l input[type="text"], .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"], .form-control-w3l textarea, .form-right-w3ls input[type="date"], .form-left-w3l input[type="date"] {
            outline: none;
            width: 100%;
            box-sizing: border-box;
            background: transparent;
            color: #fff;
            letter-spacing: 2px;
            border: none;
            border-bottom: 1px solid #fff;
            font-size: 15px;
            padding: .8em 0;
            margin: 0px 0px 19px;
            transition: all 0.5s ease-in-out;
        }

        select.form-control {
            background: #0b4b1f;
        }

        textarea {
            height: 134px;
            padding: 1em;
            overflow: hidden;
            resize: none;
        }

        input[type="submit"] {
            border-radius: 0px;
            text-transform: uppercase;
            background: #0b4b1f;
            color: #fff;
            padding: 11px 15px;
            border: none;
            border-bottom: 3px solid #0b4b1f;
            font-size: 17px;
            outline: none;
            width: 100%;
            letter-spacing: 1px;
            margin: 20px 0px;
            cursor: pointer;
            transition: 0.5s all;
        }

        input[type="submit"]:hover {
            color: #fff;
            background: #0b4b1f;
        }

        .copy {
            padding-bottom: 30px;
        }

        .copy p {
            margin: 0em;
            text-align: center;
            color: #fff;
            letter-spacing: 3px;
        }

        .copy p a {
            color: #fff;
            text-decoration: none;
        }

        .copy p a:hover {
            color: #123119;
        }

        /* Responsive Styles */
        @media (max-width: 1024px) {
            select.form-control, .form-left-w3l input[type="text"], .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"], .form-control-w3l textarea, .form-right-w3ls input[type="date"], .form-left-w3l input[type="date"] {
                font-size: 14px;
            }

            .appointment-w3 {
                padding: 24px 35px;
                width: 37%;
            }
        }

        @media (max-width: 768px) {
            input[type="submit"] {
                font-size: 16px;
            }
        }

        @media (max-width: 600px) {
            select.form-control, .form-left-w3l input[type="text"], .form-right-w3ls input[type="text"], .form-left-w3l input[type="email"], .form-control-w3l textarea, .form-right-w3ls input[type="date"], .form-left-w3l input[type="date"] {
                font-size: 13px;
            }

            .copy p {
                line-height: 28px;
                padding: 0px 20px;
            }
        }
    </style>
</head>

<body>
    <h1 class="header-w3ls">CAFEESA | Check Bookings</h1>
    <div class="appointment-w3">
        <form action="search-result.php" method="post">
            <div class="personal">
                <div class="main">
                    <div class="form-left-w3l">
                        <input type="text" class="top-up" name="searchdata" placeholder="Search by booking no or contact no" required="">
                    </div>
                </div>
            </div>
            <div class="btnn">
                <input type="submit" value="Search" name="submit">
            </div>
            <div class="copy">
                <p>Check Booking <a href="check-status.php" target="_blank">Check Bookings</a></p>
            </div>
            <div class="copy">
                <p>Admin Panel<a href="admin/" target="_blank"> Login here</a></p>
            </div>
        </form>
    </div>

    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>

    
</body>

</html>
