<?php
if (isset($_POST['submit'])) {
    $mailto = "mohammadaminhaidari25@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Your Message Submitted Successfully | Amin Personal blog";
    $message = "Client Name". $name. "Wrote the Following Message". "\n\n". $_POST['message'];
    $message2 = "Dear ". $name. "\n\n" ."Thank You For Contacting me! I will get back to you shortly";
    $headers = "From: ". $from;
    $headers2 = "From: ". $mailto;
    $result = mail($mailto, $subject, $message, $headers);
    $result2 = mail($from, $subject2, $message2, $headers2);
    if ($result) {
        echo '<script type="text/javascript>alert("Message was sent succesfully, I will contact you shortly!") </script>';
    } else {
        echo '<script type="text/javascript>alert("Submission failed! Try again Later") </script>';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mohammad Amin </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Haidari</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/Amin2.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm <span>Mohammmad Amin Haidari</span></h1>
			            <h2 class="mb-4">A Freelance Web Designer & Photographer</h2>
			            <p><a href="#contact-section" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#resume-section" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third js-fullheight order-md-last img" style="background-image:url(images/Amin1.png);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text">
		          		<span class="subheading">Hello!</span>
			            <h1 class="mb-4 mt-3">I'm a <span>web designer</span> based in SomeWhere</h1>
			            <p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/Amin3.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<h1 class="big">About</h1>
		            <h2 class="mb-4">About Me</h2>
		            <p>I am Hard Worker with good communication skills to deal with upcomming challenges.</p>
		            <ul class="about-info mt-4 px-md-0 px-2">
		            	<li class="d-flex"><span>Name:</span> <span>Mohammad Amin Haidari</span></li>
		            	<li class="d-flex"><span>Date of birth:</span> <span>January 22, 2002</span></li>
		            	<li class="d-flex"><span>Address:</span> <span>Kabul Afghanistan</span></li>
		            	<li class="d-flex"><span>Zip code:</span> <span>1007</span></li>
		            	<li class="d-flex"><span>Email:</span> <span>mohammadaminhaidari25@gmail.com</span></li>
		            	<li class="d-flex"><span>Phone: </span> <span>+93-784-833-193</span></li>
		            </ul>
		          </div>
		        </div>
	         
    </section>

    <section class="ftco-section ftco-no-pb" id="resume-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Resume</h1>
            <h2 class="mb-4">Resume</h2>
            <p>I am a hard worker with good communication skills who works effectively in a team and has the ability to meet deadlines. I am a people person and am looking for a new challenge where I can use my existing skills and further develop my career and to be the change.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2019-2021</span>
    					<h2>Gardaworld Company</h2>
    					<span class="position">Interpreter</span>
    					<p class="mt-4">Work as an Interpreter with Gardaworld Company for the X-Ray trucks to make sure no explosive gets into the Kabul Green Zone.</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2014-2019</span>
    					<h2>Star Production</h2>
    					<span class="position">Photographer & Video Recorder</span>
    					<p class="mt-4">worked as a photographer and video recorder with Star Production in Kabul, Afghanistan</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2018 Jan -2018 June</span>
    					<h2>Shame Kherad</h2>
    					<span class="position">Teacher</span>
    					<p class="mt-4">worked as a Teacher assistance as a volunteer in Sham-e-Kherad Academic course to teach the students in their English Language skills and assist the teacher with preparing study materials</p>
    				</div>
    			</div>

    			<div class="col-md-6">
    				<div class="resume-wrap ftco-animate">
    					<span class="date">January 2021</span>
    					<h2> HOPE CAMP</h2>
    					<span class="position"></span>
    					<p class="mt-4">Joined youth National winter camp Hope as a facilitator <br>
							 Leadership & Management  <br> Project planning  <br> Business & Entrepreneurship   <br>Youth Identity <br> Workshops (Aga Khan Trust for Culture, Roshan Company, Serina Hotel)</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">2019</span>
    					<h2></h2>
    					<span class="position">SOZO International</span>
    					<p class="mt-4">Diploma in Business Administration (DBA) From<br>Sozo International Training & Capacity Building Center</p>
    				</div>
    				<div class="resume-wrap ftco-animate">
    					<span class="date">April 2019</span>
    					<h2></h2>
    					<span class="position">Aga Khan Education Services</span>
    					<p class="mt-4">completed Microsoft Office Application – Database Management (MODA) <br> Kabul,Afghanistan </p>
    				</div>
    			</div>
    		</div>
    		
    </section>

   

		
		<section class="ftco-section" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big big-2">Skills</h1>
            <h2 class="mb-4">My Skills</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Photoshop</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="90"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>90%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Premier </h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="60"
							  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
							    <span>60%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>HTML</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>CSS</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Camera Z5-80D</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Chess</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="95"
							  	aria-valuemin="0" aria-valuemax="100" style="width:95%">
							    <span>95%</span>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
 




    <section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-7 ftco-animate text-center">
						<h2>I'm <span>Available</span> for freelancing</h2>
						<p></p>
						<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Contact me</a></p>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h1 class="big big-2">Contact</h1>
            <h2 class="mb-4">Contact Me</h2>
            <p></p>
          </div>
        </div>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Kabul,Afghanistan</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+93 784 833 193</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mohammadaminhaidari25@gmail.com">mohammadaminhaidari25@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="">
          			<span class=""></span>
          		</div>
          		<h3 class="mb-4"></h3>
	            <p><a href="#"></a></p>
	          </div>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="php file.php"  method="POST"/ class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" name="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/1.png);"></div>
          </div>
        </div>
      </div>
    </section>
		

    
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>