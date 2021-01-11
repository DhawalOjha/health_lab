<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Health Care</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo2.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	<div class="main-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-top">
						<a class="new-btn-d br-2" href="alert.php"><span>Book Appointment</span></a>
						<div class="mail-b"><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> Healthcare@yahoo.com</a></div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="wel-nots">
						<p>Welcome to Our Health Care!</p>
					</div>
					<div class="right-top">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="aboutus.html">ABOUT US</a></li>
                        <li><a class="nav-link" href="#services">SERVICES</a></li>
                        	<li><a class="nav-link" href="#appointment">APPOINTMENT</a></li>
                        <li><a class="nav-link" href="gallery.html">GALLERY</a></li>
						<li><a class="nav-link" href="#team">DOCTORS</a></li>
						<li><a class="nav-link" href="#contact">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->
	
	<?php
      include "connection.php";
     if (isset($_POST['button']))
   {
     $qry="insert into appointment (Name,Date,Time,Gender,Type,Department) values('".$_POST['name']."','".$_POST['date']."','".$_POST['time']."','".$_POST['gender']."','".$_POST['appointmentfor']."','".$_POST['appointment for']."')";
     mysqli_query($con,$qry);
 }

     echo '<script>
     alert("Your Appointment Booked Successfully");
     window.location="index.php";
     </script>'
  ?>
	<!-- Start Appointment -->
	<div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Appointment</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="well-block">
                        <div class="well-title">
                            <h2>Book an Appointment</h2>
                        </div>
                        <form>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="name">Name</label>
                                        <input  name="name" type="text" class="form-control">
                                    </div>
                                </div>
                                <!-- Text input-->
                                
                                
                                <!-- Text input-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="date">Preferred Date</label>
                                        <input id="date" name="date" type="text" placeholder="Preferred Date" class="form-control input-md">
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="time">Preferred Time</label>
                                        <select id="time" name="time" class="form-control">
                                            <option value="8:00 to 9:00">8:00 to 9:00</option>
                                            <option value="9:00 to 10:00">9:00 to 10:00</option>
                                            <option value="10:00 to 1:00">10:00 to 1:00</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="appointmentfor">Department</label>
                                        <select id="appointmentfor" name="appointmentfor" class="form-control">
                                            <option value="Choose Department">Choose Department</option>
											<option value="Gynacology">Gynacology</option>
											<option value="Dermatologist">Dermatologist</option>
											<option value="Orthology">Orthology</option>
											<option value="Anesthesiology">Anesthesiology</option>
											<option value="Ayurvedic">Ayurvedic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="Gender">Gender</label><br>
                                        <input type="radio" name="gender">Male
                                        <input type="radio" name="gender">Female
                                    </div>
                                   </div>
                                   <div class="col-md-6">
                                   	<div class="form-group">
                                   		<label class="control-label" for="radio">This Appointment is For?</label><br>
                                   		<input type="radio" name="appointment for">Myself
                                   		<input type="radio" name="appointment for">Someone Else
                                   	</div>
                                   </div>
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" name="button" class="btn btn-info" value="Make An Appointment" >
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- form end -->
	<!-- Start Team -->
	<div id="team" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Doctor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
</div>
</div>
	

	
	

	
			
	
			<footer class="footer">
        <div class="footer__top">
            <div class="help-panel__pos-side">
                <div class="container">
                    <span class="help-panel__pos"></span>
                </div>
            </div>
            <div class="container footer__layer-top">
                <div class="row">

                    <div class="col-12 col-md-7 col-lg-9">
                        <div class="row">
                                <div class="col-6 col-md-6 col-lg-9">
                                    <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="footer__nav">
                                                    <li class="footer__nav-item">
                                                        <a href="/" target="_self" title="ABOUT US" class="footer__nav-title">
                                                            ABOUT US
                                                        </a>
                                                    </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/about-us/overview/" target="_self" title="Overview" class="footer__nav-link">
                                                                    Overview
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/about-us/who-we-are/" target="_self" title="Who We Are" class="footer__nav-link">
                                                                    Who We Are
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/about-us/facilities/" target="_self" title="FACILITIES" class="footer__nav-link">
                                                                    FACILITIES
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/about-us/privacy-policy/" target="_self" title="Privacy Policy" class="footer__nav-link">
                                                                    Privacy Policy
                                                                </a>
                                                            </li>



                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="footer__nav">
                                                    <li class="footer__nav-item">
                                                        <a href="/services/" target="_self" title="SERVICES" class="footer__nav-title">
                                                            SERVICES
                                                        </a>
                                                    </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/services/clinics/" target="_self" title="CLINICS" class="footer__nav-link">
                                                                    CLINICS
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/" target="_self" title="CENTERS OF EXCELLENCE" class="footer__nav-link">
                                                                    CENTERS OF EXCELLENCE
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/services/premier-executive-health-check/" target="_self" title="PREMIER EXECUTIVE HEALTH CHECK" class="footer__nav-link">
                                                                    PREMIER EXECUTIVE HEALTH CHECK
                                                                </a>
                                                            </li>



                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="footer__nav">
                                                    <li class="footer__nav-item">
                                                        <a href="/patient-care/" target="_self" title="Patient Care" class="footer__nav-title">
                                                            Patient Care
                                                        </a>
                                                    </li>
                                                            
                                                            <li class="footer__nav-item">
                                                                <a href="/patient-care/book-an-appointment/" target="_self" title="Book An Appointment" class="footer__nav-link">
                                                                    Book An Appointment
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/patient-care/request-medical-record/" target="_self" title="Request Medical Record" class="footer__nav-link">
                                                                    Request Medical Record
                                                                </a>
                                                            </li>
                                                            <li class="footer__nav-item">
                                                                <a href="/patient-care/insurance-providers/" target="_self" title="Insurance Providers" class="footer__nav-link">
                                                                    Insurance Providers
                                                                </a>
                                                            </li>



                                                </ul>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3">
                                        <ul class="footer__nav">
                                            <li class="footer__nav-item">
                                                <a href="/contact-us/" target="_self" title="Contact Us" class="footer__nav-title">
                                                    Contact Us
                                                </a>
                                            </li>
                                                    <li class="footer__nav-item">
                                                        <a href="javascript:void(0);" target="_self" title="footer-nav" class="footer__nav-title">
                                                            
                                                        </a>
                                                    </li>
                                                    <li class="footer__nav-item">
                                                        <a href="javascript:void(0);" target="_self" title="footer-nav" class="footer__nav-title">
                                                            
                                                        </a>
                                                    </li>


                                        </ul>

                                </div>



                        </div>
                    </div>


        <div class="footer__bottom">
            <div class="container footer__layer-top ">
                <div class="row">
                    <div class="col-md-auto col-12">
                        <div class="footer__logo">
                            <a href="/" class="footer__logo-link">
                                <img src="images/logo.png" >
                            </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                    <div class="col"></div>
                    <div class="col-md-auto">
                        <p class="copyright">© Health Care 2020, All Right Reserved. BR87654-13/04/2021</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
    <iframe height="200" width="100" style="display: none; visibility: hidden;" src="//9917796.fls.doubleclick.net/activityi;src=9917796;type=allpage;cat=allpa0;ord=9434998826228;gtm=2wgbu0;gclaw=EAIaIQobChMIk4iP5KXm7QIV1H8rCh0kjQBiEAAYAiAAEgL7RfD_BwE;gac=UA-160974665-1%3AEAIaIQobChMIk4iP5KXm7QIV1H8rCh0kjQBiEAAYAiAAEgL7RfD_BwE;auiddc=2016922420.1608801817;u4=https%3A%2F%2Fcmcdubai.ae%2F;~oref=https%3A%2F%2Fcmcdubai.ae%2F?"></iframe>
</body>
</html>