<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php 
     require "public/header.global.html";
     ?>

    <title>Me ❤</title>
    <style type="text/css">
    	html {
    	  scroll-behavior: smooth;
    	}
    	body {
    		color: white;
    	}
    	ul {
    		line-height: 2;
    	}
    	li {
    		display: inline-block;
    		margin: 40px 20px;
    		color: white;
    		font-weight: 600;
    	}
    	li a {
    		color: white;
    	}
    	li a:hover {
    		opacity: 0.5;
    		color: white;
    		text-decoration: none;
    	}
    	.wrapper-logo {
    		display: inline-block;
    		margin: 25px 0px;
    		width: 70px;
    		height: 70px;
    		background-color: white;
    		text-align: center;
    		padding: 4px;
    		border-radius: 50%;
    		position: relative;
    	}
    	.logo {
    		display: inline-block;
    		width: 50px;
    		height: 50px;
    		background-color: white;
    		vertical-align: middle;
    		position: absolute;
    		left: 0;
    		right: 0;
    		margin: auto;
    		top: 0;
    		bottom: 0;
    	}
    	.black {
    		position: absolute;
    		left: 0;
    		right: 0;
    		top: 0;
    		bottom: 0;
    		background-color: rgba(0,0,0,0.7);
    		z-index: 0;
    	}
    	i {
    		text-align: center;
    	}
    	i:hover {
    		opacity: 0.5!important;
    	}
    	.square {
    		width: 460px;
    		height: 513px;
    		border-radius: 5px;
    		position: absolute;
    		left: -40px;
    		top: 130px;
    		z-index: 0;
    		background: #767676;
    		background: url("public/images/profile-bg.png");
    	}
    	input ,textarea{
    		background: transparent none repeat scroll 0 0 !important;
		    border: 1px solid #606060 !important;
		    color: #aaaaaa !important;
    	}
    	.title-logo {
    		font-size: 22px;
    		position: absolute;
    		left: 95px;
    		top: 21px;
    		bottom: 0;
    		margin: auto;
    		right: 0;
    		line-height: 3;
    		transition: all 0.4s;
    	}
    	/* fixed header */
    	.fixed {
		    position: fixed;
		    top:0;
		    left:0;
		    right:0;
		    background-color: black;
		    z-index: 2;
		    height: 90px!important;
		    transition: all 0.7s;
		  }
		  .header {
		  	transition: all 0.7s;
		  	height: 120px;
		  }
		  .fixed ul {
		  	line-height: 0.8!important;
		  	transition: all 1s;
		  }
		  .fixed .wrapper-logo {
		  	transform: scale(0);
		  	transition: all 0.5s;
		  }
		  .wrapper-logo {
		  	transform: scale(1);
		  	transition: all 0.5s;
		  }
		  .fixed .title-logo {
		  	top: 11px!important;
		  	left: 40px!important;
		  	transition: all 0.6s;
		  }
		  .services-icon, .contact-icon {
		  	font-size: 50px !important;cursor: pointer;
		  }
    </style>
  </head>
  <body>
    <div class="container-fluid" style="background-color: #2a2a2a;background-image: url('public/images/close-up-code-coding-160107.jpg');background-repeat: no-repeat;background-size: cover;"> 
   		<div class="black"></div>
   		<div class="container-fluid header">
   			<div class="container">
	   			<div class="row">
	   				<div class="col-lg-5">
	   					<div class="wrapper-logo" >
	   						<img class="logo" src="public/images/yandev.png">
	   					</div>
	   					<span class="title-logo">Yan<b>Dev</b></span>
	   				</div>
	   				<div class="col-lg-7" style="text-align: right">
	   					<ul>
	   						<li>
	   							<a href="#">
	   								Home
	   							</a>
	   						</li>
	   						<li>
	   							<a href="#about">
	   								About
	   							</a>
	   						</li>
	   						<li>
	   							<a href="#service">
	   								Service
	   							</a>
	   						</li>
	   						<li>
	   							<a href="#resume">
	   								Resume
	   							</a>
	   						</li>
	   						<li>
	   							<a href="#contact">
	   								Contact
	   							</a>
	   						</li>
	   					</ul>
	   				</div>
	   			</div>
   			</div>
   		</div>
      <div class="container" style="padding-bottom: 150px;">
	      <div class="row">
	      	<div class="col-lg-12">
	      		<h3 style="font-weight: 700;
							    letter-spacing: 2px;
							    margin-bottom: 14px;
							    text-align: center;
							    margin-top: 10%;
							    ">Hello,</h3>
	      		<h5 style="font-size: 72px;margin-bottom: 22px;text-align: center;">I'm a Senior Web <span class="element"></span></h5>
	      		<h6 style="text-align: center;color: #aaaaaa;">Designer <span style='font-size:10px;font-size: 10px;
								    display: inline-block;
								    margin: 0px 10px;'>&#9670;</span> developer <span style='font-size:10px;font-size: 10px;
								    display: inline-block;
								    margin: 0px 10px;'>&#9670;</span> photographer</h6>
	      	</div>
	      </div>
	      <div class="row">
	      	<div class="col-lg-12" style="text-align: center;margin-top: 10%">
		      		<i class="fab fa-instagram" style="font-size: 28px !important;margin-right: 25px;cursor: pointer;"></i>
		      		<i class="fab fa-facebook" style="font-size: 28px !important;margin-right: 25px;cursor: pointer;"></i> 
		      		<i class="fab fa-youtube" style="font-size: 28px !important;margin-right: 25px;cursor: pointer;"></i> 
		      		<i class="fab fa-linkedin" style="font-size: 28px !important;margin-right: 25px;cursor: pointer;"></i> 
	      	</div>
	      </div>
      </div>
    </div> 
    <div class="container-fluid" style="background-color: #2a2a2a" id="about">
    	<div class="container">
	      <div class="row" style="padding-bottom: 50px">
	      	<div class="col-lg-6" style="padding: 80px 0px">
	      		<div class="wrapper-card">
	      			<img src="https://via.placeholder.com/460x513?text=Yandev" style="z-index: 1;position: relative;top: 20px;border-radius: 5px;">
	      			<div class="square"></div>
	      		</div>
	      	</div>
	      	<div class="col-lg-6" style="padding: 150px 0px;">
	      		<h1 style="position: relative;margin-bottom: 45px;font-weight: bold;">About Me</h1>
	      		<p style="position: relative;font-size: 14px;font-weight: normal;line-height: 24px;color: #aaaaaa;margin-bottom: 50px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidiei dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exeracita aation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

						Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
	      		
	      		<button class="btn btn-light" style="position: relative;margin-right: 25px;padding:10px 25px">Hire me</button>
	      		<button type="button" class="btn btn-outline-light" style="padding:10px 25px">Download my CV</button>

	      	</div>
	      	<!-- my skills -->
	      	<!-- my skills -->
	      	<!-- my skills -->
	      	<div class="col-lg-12" style="text-align: center;margin-top: 40px;margin-bottom: 45px;">
	      		<h1 style="position: relative;margin-bottom: 45px;font-weight: bold;">My skills</h1>
	      		
	      		<div class="row">
	      			<div class="col-lg-6 " style="padding: 25px">
	      				<div class="row">
	      					<div class="col-lg-6" style="text-align: left">
	      						<label style="color:#aaaaaa">FRONT END</label>
	      					</div>
	      					<div class="col-lg-6" style="text-align: right">
	      						<label style="color:#aaaaaa">98%</label>
	      					</div>
	      				</div>
			      		<div class="progress" style="height:6px;background: #000000 none repeat scroll 0 0;">
			      			<div class="progress-bar wow fadeInLeft" 
			      			role="progressbar" 
			      			aria-valuenow="90" 
			      			aria-valuemin="0" 
			      			aria-valuemax="100" 
			      			style="width: 90%; visibility: visible;background-color: #aaaaaa;" data-wow-delay=".5s" data-wow-duration="1s">
                    </div>
			      		</div>
	      			</div>
	      			<div class="col-lg-6 " style="padding: 25px">
	      				<div class="row">
	      					<div class="col-lg-6" style="text-align: left">
	      						<label style="color:#aaaaaa">BACK END</label>
	      					</div>
	      					<div class="col-lg-6" style="text-align: right">
	      						<label style="color:#aaaaaa">97%</label>
	      					</div>
	      				</div>
			      		<div class="progress" style="height:6px;background: #000000 none repeat scroll 0 0;">
			      			<div class="progress-bar wow fadeInLeft" 
			      			role="progressbar" 
			      			aria-valuenow="90" 
			      			aria-valuemin="0" 
			      			aria-valuemax="100" 
			      			style="width: 90%; visibility: visible;background-color: #aaaaaa;" data-wow-delay=".5s" data-wow-duration="1s">
                    </div>
			      		</div>
	      			</div>
	      			<div class="col-lg-6 " style="padding: 25px">
	      				<div class="row">
	      					<div class="col-lg-6" style="text-align: left">
	      						<laebl style="color:#aaaaaa">MOBILE DEVELOPMENT</label>
	      					</div>
	      					<div class="col-lg-6" style="text-align: right">
	      						<label style="color:#aaaaaa">90%</label>
	      					</div>
	      				</div>
			      		<div class="progress" style="height:6px;background: #000000 none repeat scroll 0 0;">
			      			<div class="progress-bar wow fadeInLeft" 
			      			role="progressbar" 
			      			aria-valuenow="90" 
			      			aria-valuemin="0" 
			      			aria-valuemax="100" 
			      			style="width: 90%; visibility: visible;background-color: #aaaaaa;" data-wow-delay=".5s" data-wow-duration="1s">
                    </div>
			      		</div>
	      			</div>
	      			<div class="col-lg-6 " style="padding: 25px">
	      				<div class="row">
	      					<div class="col-lg-6" style="text-align: left">
	      						<label style="color:#aaaaaa">WEB DESIGN</label>
	      					</div>
	      					<div class="col-lg-6" style="text-align: right">
	      						<label style="color:#aaaaaa">90%</label>
	      					</div>
	      				</div>
			      		<div class="progress" style="height:6px;background: #000000 none repeat scroll 0 0;">
			      			<div class="progress-bar wow fadeInLeft" 
			      			role="progressbar" 
			      			aria-valuenow="90" 
			      			aria-valuemin="0" 
			      			aria-valuemax="100" 
			      			style="width: 90%; visibility: visible;background-color: #aaaaaa;" data-wow-delay=".5s" data-wow-duration="1s">
                    </div>
			      		</div>
	      			</div>
	      		</div>
	      	</div>
	      </div>
    	</div>
    </div>

    <!-- My services -->
    <!-- My services -->
    <!-- My services -->

    <div class="container-fluid" style="background-color: black" id="service">
    	<div class="container" style="padding-bottom: 150px;">
	      <div class="row" style="text-align: center;">
	      	<div class="col-lg-12" style="text-align: center;margin-top: 50px;margin-bottom: 45px;">
	      		<h1 style="position: relative;margin-bottom: 100px;margin-top:45px;font-weight: bold;">My Services</h1>
	      		<div class="row">
	      			<div class="col-lg-12 " style="padding: 25px;height: 300px;background-color: #2a2a2a">
	      				<div class="row">
	      					<div class="col-lg-3" style="padding: 15px;">
		      					<i class="fas fa-pencil-alt services-icon"></i>
	      						<h6 style="margin-top: 13px">Product Design</h6>
	      						<p style="color: #aaaaaa">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
	      					</div>
	      					<div class="col-lg-3" style="padding: 15px;">
		      					<i class="fab fa-instagram" style="font-size: 50px !important;cursor: pointer;"></i>
	      						<h6 style="margin-top: 13px">UI/UX Design</h6>
	      						<p style="color: #aaaaaa">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
	      					</div>
	      					<div class="col-lg-3" style="padding: 15px;">
		      					<i class="fas fa-mobile-alt services-icon"></i>
	      						<h6 style="margin-top: 13px">App Developpment</h6>
	      						<p style="color: #aaaaaa">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
	      					</div>
	      					<div class="col-lg-3" style="padding: 15px;">
		      					<i class="fas fa-fingerprint services-icon"></i>
	      						<h6 style="margin-top: 13px">Security</h6>
	      						<p style="color: #aaaaaa">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	      						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
	      					</div>
	      				</div>
	      			</div>
	      		</div>
	      	</div>
	      </div>
    	</div>
    </div>

    <!-- my projects -->
    <!-- my projects -->
    <!-- my projects -->
    <div class="container-fluid" style="background-color: #2a2a2a" id="resume">
    	<div class="container" style="padding-bottom: 150px;">
	      <div class="row" style="text-align: center;">
	      	<div class="col-lg-12" style="text-align: center;margin-top: 50px;">
	      		<h1 style="position: relative;margin-top:45px;font-weight: bold;">Latest Projects </h1>
	      	</div>
	      	<div class="col-lg-12" style="text-align: center;">
	      		<div class="row" >
	      			<ul style="width: 100%;font-weight: 100;">
	      				<li><a href="#">ALL</a></li>
	      				<li><a href="#">WORK</a></li>
	      				<li><a href="#">WEB</a></li>
	      				<li><a href="#">DESIGN</a></li>
	      				<li><a href="#">GRAPHIC</a></li>
	      				<li><a href="#">PRINT</a></li>
	      				<li><a href="#">ILLUSRATION</a></li>
	      			</ul>
	      		</div>	
	      	</div>

	      	<div class="col-lg-12" style="text-align: center;">
	      		<div class="row" >
	      			<div class="col-lg-4" style="padding:5px;margin-bottom: 15px;">
	      				<img src="https://via.placeholder.com/350x260?text=Yandev" style="width:350px;object-position: center;object-fit: cover;">
	      			</div>
	      			<div class="col-lg-4" style="padding:5px;margin-bottom: 15px;">
	      				<img src="https://via.placeholder.com/350x260?text=Yandev" style="width:350px;object-position: center;object-fit: cover;">
	      			</div>
	      			<div class="col-lg-4" style="padding:5px;margin-bottom: 15px;">
	      				<img src="https://via.placeholder.com/350x260?text=Yandev" style="width:350px;object-position: center;object-fit: cover;">
	      			</div>
	      			<div class="col-lg-4" style="padding:5px;margin-bottom: 15px;">
	      				<img src="https://via.placeholder.com/350x260?text=Yandev" style="width:350px;object-position: center;object-fit: cover;">
	      			</div>
	      			<div class="col-lg-4" style="padding:5px;margin-bottom: 15px;">
	      				<img src="https://via.placeholder.com/350x260?text=Yandev" style="width:350px;object-position: center;object-fit: cover;">
	      			</div>
	      			<div class="col-lg-4" style="padding:5px;margin-bottom: 15px;">
	      				<img src="https://via.placeholder.com/350x260?text=Yandev" style="width:350px;object-position: center;object-fit: cover;">
	      			</div>
	      		</div>	
	      	</div>
	      </div>
    	</div>
    </div>

        <!-- My services -->
        <!-- My services -->
        <!-- My services -->
        <div class="container-fluid" style="background-color: black">
        	<div class="container" id="contact">
    	      <div class="row" style="text-align: center;">
    	      	<div class="col-lg-12" style="text-align: center;margin-top: 50px;margin-bottom: 45px;">
    	      		<h1 style="position: relative;margin-top:45px;font-weight: bold;">Wanna Start Work with me?</h1>
    	      		<p style="color:#aaaaaa;">Tell me about your project story and project brief</p>

	      				<button class="btn btn-light" style="position: relative;padding:10px 25px;margin-bottom: 50px;margin-top: 35px;">Start Project</button>
    	      		
    	      		<div class="row">
    	      			<div class="col-lg-12 " style="padding: 25px;background-color: #2a2a2a;">
    	      				<div class="row" style="margin-top: 15px;">
    	      					<div class="offset-lg-1 col-lg-3" style="padding: 15px;">
    		      					<i class="fas fa-phone contact-icon"></i>
    	      						<p style="margin-top: 13px;color:#aaaaaa;">
    	      							+213 781 00 29 ** <br>
    	      							+213 556 68 82 **
    	      						</p>
    	      					</div>
    	      					<div class="col-lg-4" style="padding: 15px;">
    		      					<!-- <i class="fab fa-instagram" style="font-size: 50px !important;cursor: pointer;"></i> -->
    		      					<i class="fas fa-map-signs contact-icon"></i>
    	      						<p style="margin-top: 13px;color:#aaaaaa;">
    	      							28 Green Tower, Street Name, <br>
													New York City, USA
    	      						</p>
    	      					</div>
    	      					<div class="col-lg-3" style="padding: 15px;">
    		      					<i class="fas fa-at contact-icon"></i>
    	      						<p style="margin-top: 13px;color:#aaaaaa;">
    	      							eplicseby@gmail.com
    	      						</p>
    	      					</div>
    	      					<div class="offset-lg-1 col-lg-10" style="margin-top: 20px;">
    	      						<form>
    	      						  <div class="row">
    	      						    <div class="col">
    	      						    	<div class="form-group">
    	      						    	  <input type="text" class="form-control" placeholder="Your Name">
    	      						    	</div>
    	      						      <div class="form-group">
    	      						          <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Your email">
  	      						        </div>
  	      						        <div class="form-group">
  	      						          <input type="text" class="form-control" placeholder="Your budget">
  	      						        </div>
    	      						    </div>
    	      						    <div class="col">
    	      						      <textarea class="form-control" cols="30" rows="6" placeholder="Project Description" style="resize: vertical;"></textarea>
    	      						      <button class="btn btn-light" style="float:right;position: relative;padding:10px 25px;margin-bottom: 50px;margin-top: 25px;">Send Message</button>
    	      						    </div>
    	      						  </div>
    	      						</form>
    	      					</div>
    	      				</div>
    	      			</div>
    	      			<div class="col-lg-12" style="padding-top: 135px;">
    	      				<h5>
    	      					Developped by <a href="mailto:eplicseby@gmail.com">Yan<b>Dev</b></a> with ❤ <a href="mailto:eplicseby@gmail.com"></a>
    	      				</h5>
    	      			</div>
    	      		</div>
    	      	</div>
    	      </div>
        	</div>
        </div>

    <?php 
     require "public/footer.global.html";
     ?>
     <script type="text/javascript">
     	var typed = new Typed('.element', {
			  strings: [" Developer.", " Designer."],
			  typeSpeed: 70,
			  smartBackspace: true,
			  loop: true
			});
     </script>
     <script>
     	new WOW().init();
     </script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
     $(document).ready(function(){
       // Add smooth scrolling to all links
       $("a").on('click', function(event) {

         // Make sure this.hash has a value before overriding default behavior
         if (this.hash !== "") {
           // Prevent default anchor click behavior
           event.preventDefault();

           // Store hash
           var hash = this.hash;

           // Using jQuery's animate() method to add smooth page scroll
           // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
           $('html, body').animate({
             scrollTop: $(hash).offset().top
           }, 80, function(){
             // Add hash (#) to URL when done scrolling (default click behavior)
             window.location.hash = hash;
           });
         } // End if
       });

        // event scroll for sticky header. 
        $(window).scroll(function(){
				  var sticky = $('.header'),
				      scroll = $(window).scrollTop();

				  if (scroll >= 128) {
				  	sticky.addClass('fixed');
				  	sticky.addClass('fixed');
				  } else {
				  	sticky.removeClass('fixed');
				  }
				});
     });
     </script>
  </body>
</html>