<?php
if(isset($_POST['submit'])){
    $to = "bluespiresenergy@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $full_name . "\n\n" . "Phone Number - " . $phone . "\n" . "Email - " . $from . "\n" . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



<!doctype html>

<html lang="en">

<head>


<!-- Required meta tags -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>BlueSpires Energy</title>
<!-- CSS -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">

<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/media-queries.css">


<!-- Favicon and touch icons -->

<link rel="shortcut icon" href="assets/ico/favicon.png">

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">

<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">

<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">

<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


</head>
<body>







<!-- Top menu -->





<nav class="navbar navbar-light fixed-top navbar-expand-md navbar-no-bg" style="background-color: #ffffff;">
	<div class="container">
		<a class="navbar-brand" href="index.html">BlueSpires Energy </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link scroll-link font-weight-bold" href="#top-content">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-link font-weight-bold" href="#about-us">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-link font-weight-bold" href="#industry">Industry</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-link font-weight-bold" href="#services">Services</a>
				</li>
				<li class="nav-item">
					<a class="nav-link scroll-link font-weight-bold" href="#contact">Contact Us</a>
				</li>
			</ul>
    </div>
  </div>
</nav>

<!-- Top content -->
<div class="top-content">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/backgrounds/1@2x.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption mb-5">
              <div class="row">
          			<div class="col-md-8 offset-md-2 text">
          				<h1 class="wow fadeInLeftBig" style = "font-size : 35px;">Welcome to</h1>
          				<h1 class="wow fadeInLeftBig" style = "font-size : 50px;">BlueSpires Energy </h1>
          				<div class="description wow fadeInLeftBig">
          					<p>
          						Deliver to best solution
          					</p>
          				</div>
          				<div class="top-big-link wow fadeInUp">
          					<a class="btn btn-primary btn-link-2 scroll-link" href="#about-us">Learn more</a>
          				</div>
          			</div>
          		</div>
            </div>
        </div>
        <div class="carousel-item min-vh-100">
          <img src="assets/img/portfolio/engineering.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption mb-5">
            <div class="row">
              <div class="col-md-8 offset-md-2 text">
                <h1 class="wow fadeInLeftBig" style = "font-size : 35px;">Welcome to</h1>
                <h1 class="wow fadeInLeftBig" style = "font-size : 50px;">BlueSpires Energy </h1>
                <div class="description wow fadeInLeftBig">
                  <p>
                    Deliver to best solution
                  </p>
                </div>
                <div class="top-big-link wow fadeInUp">
                  <a class="btn btn-primary btn-link-2 scroll-link" href="#about-us">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/portfolio/construction4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption mb-5">
            <div class="row">
              <div class="col-md-8 offset-md-2 text">
                <h1 class="wow fadeInLeftBig" style = "font-size : 35px;">Welcome to</h1>
                <h1 class="wow fadeInLeftBig" style = "font-size : 50px;">BlueSpires Energy </h1>
                <div class="description wow fadeInLeftBig">
                  <p>
                    Deliver to best solution
                  </p>
                </div>
                <div class="top-big-link wow fadeInUp">
                  <a class="btn btn-primary btn-link-2 scroll-link" href="#about-us">Learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>



  <!-- About us -->




        <div class="about-us-container section-container section-container-gray-bg">
	        <div class="container">
            <div class="row">
              <div class="col-12 col-lg-7 about-us-box wow fadeInLeft">
                <div class="about-us-box-text">
                  <h3 style="color : #000000;">About Us</h3>
                  <p class="medium-paragraph">
                    BlueSpires Energy is providing service for engineering, construction, plant
                    shutdown works & maintenance in Oil & Gas, Chemical, Solar, Food & Beverage sector. </p>
                  <p> The company has qualified and well experienced staff to execute a project with quality
                    and on-time delivery and work for crucial time of project with proactive approach to
                    resolve eventual issues and project move on right plan of completion without losing
                    quality and time. </p>
                </div>
              </div>
              <div class="col-12 col-lg-5 about-us-box wow fadeInUp">
                <div class="about-us-box-img">
                  <img src="assets/img/about/1.jpg" alt="about" data-at2x="assets/img/about/1.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- INDUSTRIES -->


        <div class="industry-container section-container id = industry">
          <div class="container">
            <div class="row">
              <div class="col portfolio section-description wow fadeIn">
                <h2 style="color : #000000;">Industry</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 portfolio-box wow fadeInUp">
                <div class="portfolio-box-image">
                  <img src="assets/img/portfolio/solar.jpg" alt="" data-at2x="assets/img/portfolio/solar.jpg">
                </div>
                <h3 style="color : #000000;">Solar Energy<i class="fas fa-angle-right"></i></h3>
                <p>Solar power plant contain solar panels which collect clean renewable energy in the form
                  of sunlight and converts sun light into electricity then it can be used to provide power
                  for electrical loads of our daily use. </p>
                <p> The company provides services in engineering, plant construction, erection,
                   commissioning for solar projects. Company has done projects where installation of solar
                    panels, structure erection, module installation and DC work done with timely delivery
                    and quality.</p>
              </div>
              <div class="col-md-4 portfolio-box wow fadeInDown">
                <div class="portfolio-box-image">
                  <img src="assets/img/portfolio/oilgas.jpg" alt="" data-at2x="assets/img/portfolio/oilgas.jpg">
                </div>
                <h3 style="color : #000000;">Oil & Gas and Chemical <i class="fas fa-angle-right"></i></h3>
                <p>Oil and gas sector is a dominant sector in the world by the ever-expanding demand of
                   energy for global.</p>
                <p>TThe company provides services in engineering, construction, erection, commissioning
                   for Oil & gas and Chemical projects. Company has done projects where erection of piping,
                    installation of equipments and structure done with timely delivery and quality.</p>

		          </div>
              <div class="col-md-4 portfolio-box wow fadeInUp">
                <div class="portfolio-box-image">
                  <img src="assets/img/portfolio/foodbev.jpg" alt="" data-at2x="assets/img/portfolio/foodbev.jpg">
                </div>
                <h3 style="color : #000000;">Food and Beverage <i class="fas fa-angle-right"></i></h3>
                <p>Food and beverages is the biggest of the consumption categories, which is supported by the
                   vast agriculture sector.</p>
                <p> The company provides services in engineering, construction, erection, commissioning for
                   food & beverage projects. Company has done projects where erection of piping, installation
                   of equipments and structure done with timely delivery and quality.</p>
              </div>
            </div>
          </div>
        </div>


	<!-- Services -->


        <div class="services-container section-container-gray-bg">
          <div class="container">
            <div class="row">
              <div class="col portfolio section-description wow fadeIn">
                <h2 style="color : #000000;">Services</h2>
              </div>
              <div class="row">
                <div class="col-md-4 portfolio-box wow fadeInUp ">
                  <div class="portfolio-box-image" >
                    <img src="assets/img/portfolio/construction4.jpg" alt=""
                    data-at2x="assets/img/portfolio/construction4.jpg">
                  </div>
                  <h3 style="color : #000000;">Construction<i class="fas fa-angle-right"></i></h3>
                  <br>
                  <p> The company provides services in construction, installation, commissioning
                      for various kind of projects such as Oil & gas, Chemical, Food, Beverage and Solar sector.</p>
                  <p> The company executes solar project in KW and MW for roof top and ground mounted and
                      installation of solar panels, structure installation, module installation and DC work.</p>
                  <p> The company has also deliver in construction as piping erection, equipment installation and
                      structure installation for oil & gas project, chemical, food & beverage projects.</p>
                </div>
                <div class="col-md-4 portfolio-box wow fadeInDown">
                  <div class="portfolio-box-image">
                    <img src="assets/img/portfolio/engineering.jpeg" alt=""
                     data-at2x="assets/img/portfolio/engineering.jpeg">
                  </div>
                  <h3 style="color : #000000;">Engineering & Consultant<i class="fas fa-angle-right"></i></h3>
                  <br>
                  <p> The company provides flexible engineering design solutions and high quality design to meet
                      the economical budget and on time delivery. </p>
                  <p> Company have well experienced and qualified staff to providing engineering solution for plant
                     layout design, equipment layout design, piping layout design, flexibility, stress analysis of
                     system, supporting and delivered to output report for oil & gas, chemical, food & beverage
                     projects.</p>
                </div>


          			<div class="col-md-4 portfolio-box wow fadeInDown">
                  <div class="portfolio-box-image">
                    <img src="assets/img/portfolio/maintance.jpg" alt=""
                    data-at2x="assets/img/portfolio/maintance.jpg">
                  </div>
                  <h3 style="color : #000000;">Maintenance, Inspection &amp; Shutdown Works<i class="fas fa-angle-right">
                  </i></h3>
                  <p> The company provides services in maintenance, quality inspection and shutdown works for various
                    projects such as Oil & Gas, Chemical and Solar sector.</p>
                  <p> On-site requirements of our clients such as inspection, fabrication, revamps work of piping,
                    mechanical equipments and maintenance for solar panel system to complete delivery by our skilled
                     and experienced manpower for various projects.</p>
                </div>
              </div>
            </div>
          </div>
        </div>


<!-- Contact us -->


<div class="contact-container section-container">
	<div class="container">
		<div class="pt-4 pb-2 wow fadeInLeft">
			<h2>Contact Us</h2>
		</div>
		<div class="row">
			<div class="col-12 col-lg-7 pt-2 wow fadeInLeft">
				<div class="well well-sm">
					<form class="form-horizontal" action="" method="post">

          <fieldset>


            <!-- Name input-->

            <div class="form-group">

              <label class="col control-label" for="name" style = "text-align: left; font-weight : bold">Name</label>

              <div class="col-md-9">

                <input id="name" name="name" type="text" placeholder="Your name" class="form-control" required aria-required="true">

              </div>

            </div>



		  <!-- Email input-->

            <div class="form-group">

              <label class="col control-label" for="email" style = "text-align: left; font-weight : bold">Your E-mail</label>

              <div class="col-md-9">

                <input id="email" name="email" type="email" placeholder="Your email" class="form-control" required aria-required="true">

              </div>

            </div>



           <!-- phone input-->

            <div class="form-group">

              <label class="col control-label" for="email" style = "text-align: left; font-weight : bold">Your Mobile Number</label>

              <div class="col-md-9">

                <input id="email" name="email" type="text" placeholder="Your Mobile number" class="form-control" required aria-required="true">

              </div>

            </div>

		<!-- Message body -->

            <div class="form-group">

              <label class="col control-label" for="message" style = "text-align: left; font-weight : bold">Your message</label>

              <div class="col-md-9">

                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>

              </div>

            </div>


            .


		<!-- Form actions -->

           <div class="form-group">

              <div class="col text-left">

                <button type="submit" class="btn btn-primary btn-lg">Submit</button>

              </div>

            </div>

          </fieldset>

          </form>

        </div>

      </div>

	<div class="col-12 col-lg-5 about-us-box wow fadeInLeft">




	</div>
	</div>

</div>

</div>





        <!-- Footer -->




<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-8 footer-left">
        <p>Copyright &copy; Reserved BlueSpires Energy Pvt. Ltd. </p>
        <i class= "fas fa-address-book"></i> &nbsp;&nbsp;A/184, Shaheen Bagh, Abul Fazal Enclave-2, Jamia Nagar, New Delhi, 110025<br>
        <i class="fas fa-mobile-alt"></i> &nbsp;&nbsp;  +91-8929793419<br>
        <i class="fas fa-envelope-square"></i> &nbsp;&nbsp; info@bluespires.in
      </div>
      <div class="col-md-3 offset-md-1 footer-right">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="row">
      <div class="col footer-bottom">
        <a class="scroll-link" href="#top-content"><i class="fas fa-chevron-up"></i></a>
      </div>
    </div>
  </div>
</footer>










	<!-- Javascript -->

      <script src="assets/js/jquery-3.2.1.min.js"></script>

        <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="assets/js/jquery.backstretch.min.js"></script>

        <script src="assets/js/wow.min.js"></script>

        <script src="assets/js/retina-1.1.0.min.js"></script>

        <script src="assets/js/waypoints.min.js"></script>

        <script src="assets/js/scripts.js"></script>


    </body>


</html>
