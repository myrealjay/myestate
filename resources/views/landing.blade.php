<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Bethel Estate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Housing, Realestate, OKB" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	    
	<script src="js/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/favicon.png" type="image/png">
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<!------ Light Box ------>
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script> 
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!------ Eng Light Box ------>	

</head>
<body>
	<div class="header" id="head">	
		<div class="container"> 
			<div class="header-top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt=""/></a>
					<!--<h2>Bethel</h2>-->
				</div>
				<div class="top-menu">
					<span class="menu"> </span>
					<ul>
						<nav class="cl-effect-5">
							<li><a class="active" href="/" class="scroll"><span data-hover="Home">home</span></a></li>
							<li><a href="#services" class="scroll"><span data-hover="facilities">facilities</span></a></li>
							<li><a href="#work" class="scroll"><span data-hover="plans"><span>plans</span></a></li>
							<li><a href="#about" class="scroll"><span data-hover="find us">find us</span></a></li>
							<li><a href="{{ route('login') }}" ><span data-hover="login">login</span></a></li>
							<li><a href="{{ route('register') }}" ><span data-hover="purchase">purchase</span></a></li>
						</nav>
					</ul>
				</div>
				<!--script-nav-->
				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
				</script>
				<div class="clearfix"></div>
			</div>  
			<div class="index-banner">
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner_center">
									<h1>Welcome to Bethel estate</h1> 
									<img src="{{ asset('images/crop.jpg') }}"  class="top-imgs">
								</div>
							</div>
						</article>
						<article style="position: relative; width: 100%; opacity: 1;"> 
							<div class="banner-wrap">
								<div class="banner_center">
									<h1>Take a tour of our estate</h1> 
									<img src="{{ asset('images/crop2.jpg') }}"  class="top-imgs">
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="banner_center">
									<h1>A rare opportunity</h1> 
									<img src="{{ asset('images/crop3.jpg') }}"  class="top-imgs">
								</div>
							</div>
						</article>
					</div>

				</div>
				<script src="js/jquery.wmuSlider.js"></script> 
				<script>
					$('.example1').wmuSlider();         
				</script> 	           	      
			</div>
		</div>     
	</div>
	<div class ="row conga">
		<div class="col-md-6 few-words">
			<div class="floter">
				<h1>Surrounded with serene environment for family living</h1>
				<div class="transe-text">
					Welcome to Bethel Estate, an exceptional new development on the fringes of the picturesque Ikorodu Town of Lagos. Here, you can choose from a carefully-designed collection of three or four bedroom homes, with a BQ. Combined with an outstanding location, these attractive new homes offer you and your family the opportunity to step straight into a country lifestyle.
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="logo-cen">
				<img width="100%" src="{{ asset('images/logo2.png') }}">
			</div>
			<div class="tab-o-c">
				<center>
					<h1>Welcome to Bethel Estate <br> a home for all <br> a second to none<h1>
					</center>
					<p>&nbsp;</p>
					<img width="100%" src="{{ asset('images/multi-image.jpg') }}">
				</div>
			</div>
		</div><!---->
		<div class="second-in">
			<div class="col-md-6 fewer-words">
				<div class="logo-cen">
					<img width="100%" src="{{ asset('images/logo2.png') }}">
				</div>
				<h1>Bethel Estate</h1>
				<!--<p>Content</p><br>-->
				<h1>Surrounded with serene environment for family living</h1>
			</div>
			<div class="col-md-6">
				<div class="spacer"></div>
				<div class="bottom-plan">
					<img width="100%" src="{{ asset('images/site-plan-bare1.png') }}">
				</div>
			</div>
		</div>
		<div class="content">
			<div class="services-section" id="services">
				<div class="container"> 
					<div class="services-header">
						<h3><span>[</span> Facilities <span>]</span></h3>
						<p>If you’ve dreamed of exchanging traffic and busy streets for a good township idyll, Bethel Estate is just what you've been waiting for.<br>
							Owode Onirin, Owode Elede <b>(and others as listed by google map)</b>, just minutes' away, marries charm and convenience, providing a diverse range of shops and mini mall selling everything from everyday essentials to the ‘little luxuries’ that bring pleasure to your day.  </p>
						</div>
						<div class="services-sectiongrids">
							<div class="col-md-4 services-grid">
								<img src="images/football.jpg" alt="" class="utility-image"/>
								<h4>Football Field</h4>
								<p>Quickly relieve the day to day stress with a serene burnout field that is easily accessible.</p>
							</div>
							<div class="col-md-4 services-grid">
								<img src="images/tennis.jpg" alt="" class="utility-image"/>
								<h4>Tennis Court</h4>
								<p>A life time sport for the children, teenager, aged, men, women in short, this tennis is a game for all.</p>
							</div>
							<div class="col-md-4 services-grid">
								<img src="images/sewage.jpg" alt="" class="utility-image"/>
								<h4>Central Sewage system</h4>
								<p>Our central sewage system serves as a preservation to the natural environment and protect public health.</p>
							</div>
							<div class="col-md-4 services-grid">
								<img src="images/power.jpg" alt="" class="utility-image"/>
								<h4>Electricity Supply</h4>
								<p>Our electricity supply is constant and always available 24/7, its 100% available and reliable.</p>
							</div>
							<div class="col-md-4 services-grid">
								<img src="images/water.jpg" alt="" class="utility-image"/>
								<h4>Treated Water Supply</h4>
								<p>Our water tratement plant remains second to none, we can guarantee you the purest as your healt is our priority.</p>
							</div>
							<div class="col-md-4 services-grid">
								<img src="images/road.jpg" alt="" class="utility-image"/>
								<h4>Good Roads and Drainage</h4>
								<p>The drainage system ensure there is no water lodging during rainy season while good roads add to the proximity of your moverment.</p>
							</div>
							<div class="clearfix"></div>
				<!--<div class="arrow1">
					<a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
				</div>-->
			</div>
		</div>
	</div>
	<div class="third-in">
		<h2>Here are some more reasons why you would just love Bethel estate</h2><br>
		<h1>. Proximity to town and Mile 12 market</h1><br>
		<h1>. Proximity to gas plant</h1><br>
		<h1>. Low cost units</h1>
	</div>
	<div class="works-section" id="work">
		<div class="works-header">
			<h3><span>[</span> Site Plan <span>]</span></h3>
			<div class="full-site1">
				<img width="100%" src="{{ asset('images/full-site-plan.png') }}">
			</div>
			<hr class="divider" />
			<h3><span>[</span> Floor Plans <span>]</span></h3>
			<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. </p>
			<div class="row">
				<div class="col-md-6">
					<div class="full-site">
						<img width="100%" class="crv" src="{{ asset('images/terrace.jpg') }}">
					</div>
					<div class="full-site">
						<img width="100%" src="{{ asset('images/ground-floor-plan.png') }}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="full-site">
						<img width="100%" src="{{ asset('images/first-floor-1.png') }}">
					</div>
					<div class="full-site">
						<img width="100%" src="{{ asset('images/pent-floor-plan.png') }}">
					</div>
				</div>
			</div>
		</div>
		<div class="arrow">
			<a href="#about" class="scroll"><img src="images/arrow.png" alt=""/></a>
		</div>
	</div>
</div>
</div>
<!--Streetview-->
<div class ="row conga bod">
	<div class="col-md-8 street-view">

	</div>
	<div class="col-md-4">
		<div class="logo-cen">
			<img width="100%" class="box-shad" src="{{ asset('images/logo2.png') }}">
		</div>
		<div class="site-locat-info">
			<h2>Info</h2>
			<p>With the proposed Forth Mainland Bridge within reach, you can be rest assured that Laggos Island is withing reach. Mile 12 Market affords you an ample opportunity to get all what you need within reach ranging from daily necessity which are foodstuffs to clothing, groceries, household equipment and lots more<br> A Gas plant within easy reach ensure you don't run out of gas. <br>
				In the pretty, serene environment, discover delightful shops, quirky boutiques and mouth-watering collection of eateries, Bars where you can easily relax after a long day at work. 
			Bethel estate is central to both Island and Mainland with just an hour drive to the Island. </p>
		</div>
	</div>
</div>
<!-- portfolio-section-ends -->
<div class="about-section" id="about" id="about">
	<div class="container">
		<div class="about-header">
			<h3><span>[</span> Find Us <span>]</span></h3>
			<p><i class="fa fa-map-marker"></i> Owode Elede, Along Ikorodu Road, Lagos, Nigeria. </p> 
			<p><i class="fa fa-phone"></i> +2348000000000000, +2348000000000 </p> 
			<p><i class="fa fa-envelope"></i> contact@bethelestate.com.ng </p> 
		</div>
		<div class="about-sectiongrids">
			<div class="col-md-6 about-leftgrid">
				<div class="enti-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1844.6453110003504!2d3.4060780871917817!3d6.604411342208203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMzYnMTUuMCJOIDPCsDI0JzI0LjkiRQ!5e0!3m2!1sen!2sng!4v1549884769091" class="in-map" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
			<div class="col-md-6 about-rightgrid">
				<div class="write-up">
					<div class="centered">
						Need to make an enquiry?
					</div>
					<div class="contactgrid">
						<input type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
					</div>
					<div class="contactgrid">
						<input type="text" class="text" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
					</div>
					<div class="contactgrid1">
						<textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
					</div>
					<div class="contactgrid2">
						<input type="button" value="[send message]">
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="arrow1">
			<a href="#contact" class="scroll"><img src="images/arrow1.png" alt=""/></a>
		</div>
	</div>
</div>
</div>

        <!--
        -->

        <div class="footer-section" id="contact" id="contact">
        	<div class="container"> 
        		<div class="contact-header">
        			<h3><span>[</span> Purchase <span>]</span></h3>
        			<p>Bethel estate remains second to none, click the <b>BUY NOW</b> button below to place an order for any of the teraces. </p>
        		</div>
        		<div class="social-icon">
        			<a href="#"><i class="icon1"></i></a>
        			<a href="#"><i class="icon2"></i></a>
        			<!--<a href="#"><i class="icon3"></i></a>-->
        			<a href="#"><i class="icon4"></i></a>
				<!--<a href="#"><i class="icon5"></i></a>
				<a href="#"><i class="icon6"></i></a>
				<a href="#"><i class="icon7"></i></a>
				<a href="#"><i class="icon8"></i></a>-->
			</div>
			<div class="contact">
				<div class="contactgrid3">
					<a href="{{ route('register') }}"><input type="button" value="[buy now]"></a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="footer-bottom">

				<p> Bethel Estate &copy;20{{ date('y') }}  All rights  Reserved | Brought to you by <strong>OKB and Associates</strong> </p>

			</div>
			<script type="text/javascript">
				$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
					 		*/

					 		$().UItoTop({ easingType: 'easeOutQuart' });

					 	});
					 </script>
					 <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
					</div>

				</div>		
			</div>


		</body>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		</html>