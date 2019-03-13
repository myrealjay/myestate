<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Bethel Estate</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Housing, Realestate, OKB" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>	 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous"> 
	<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="icon" href="images/favicon.png" type="image/png">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/animation-aos.css" type="text/css" />
	<!--Trial-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/stylesnew.less" rel="stylesheet" type="text/less" media="all" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
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
<div class="total">
	<div class="prelude" id="prelude">
		<div class="side-topic">
		<img class="tsideImg" id="tsideImg" src="{{ asset('images/websiteBethelEstate2.png') }}"/>
		</div>
		<div class="firstInfo" id="firstInfo">
			<!--<img class="infoImg" id="infoImg" src="{{ asset('images/welcome.png') }}"/>-->
			<div class="enterd" onclick="fader()">
				<div class="imgholder">
					<img width="100%" height="100%" src="{{ asset('images/welcome.png') }}"/>
				</div>
				<p id="enterd">Click to enter</p>
			</div>
		</div>
	</div>
<div class="header" id="head">	

     <!--<div class="carul" id="karul">
		 <div class="animation-slides">
			 Welcome to bethel estate
		 </div>
		 <div class="animation-slides2">
			 The home of your dreams
		 </div>
		 <div class="animation-slides3">
		 	<img width="100%" class="in-imgs" src="{{ asset('images/sm2.jpg') }}">
		 </div>
	 </div>-->
	 <!------ Carul animation suspended ------>	

	 <div class="headbg">
	 <div class="widthy">
         <div class="header-top">
      		 <div class="logo" id="home">
                <a href="{{ url('') }}"><img src="images/logo.png" Width="100%" alt="Bethel-M12"/></a>
                <!--<h2>Bethel</h2>-->
			 </div>
		   <div class="top-menu">
               <div class="chi"   onclick="opener()">
                    <!--<img class="hima" width="100%" height="width" src="{{ asset('images/hamburger.png') }}" >-->
                    <i class="fas fa-bars"></i>
                </div>
               <span class="menu fas"  onclick="opener()">. </span>
               
			<ul id="daps">
			 	<nav class="cl-effect-5">
				<li style="font-size:14px"><a class="active" href="/" class="scroll"><span data-hover="Home">home</span></a> </li>
				<li><a href="#services" class="scroll"><span data-hover="facilities">facilities</span></a> </li>
				<li><a href="#work" class="scroll"><span data-hover="plans"><span>plans</span></a> </li>
				<li><a href="#video" class="scroll"><span data-hover="Walk-through">Walk-through</span></a> </li><!--
				<li><a href="{{ route('login') }}" ><span data-hover="login">login</span></a> </li>
				<li><a href="{{ route('register') }}" ><span data-hover="purchase">purchase</span></a></li>
				@if (!Auth::guest())
					<li><a href="/home" ><span data-hover="dashboard">dashboard</span></a></li>
				@endif-->
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
		 <script>
		 /*$("span.menu").click(function(){
            $(".top-menu ul").slideToggle("slow" , function(){
            });
		 });*/
		 </script>
			<div class="clearfix"></div>
		 </div>  
	</div>
	</div>
     <!-- <div class="container"> -->

	<div class="index-banner">
		<div class="niner">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators --><!--
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>-->

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/cropb.jpg" alt="Bethel Estate" class="top-imgs">
					</div>

					<div class="item">
						<img src="images/cropb2.jpg" alt="Bethel Estate" class="top-imgs">
					</div>

					<div class="item">
						<img src="images/cropb3.jpg" alt="Bethel Estate" class="top-imgs">
					</div>
				</div>

				<!-- Left and right controls --><!--
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a><!-- -->
			</div>
			

		</div>
		<script src="js/jquery.wmuSlider.js"></script> 
		<script>
			function fader(){
				D('prelude').style.opacity = 0;
				setTimeout('D("prelude").style.display = "none"', 2000);
			}
			function crone(){
				D('infoImg').style.opacity = 0;
				D('enterd').style.opacity = 1;
			}
			setTimeout(crone, 3900);
			$('.example1').wmuSlider();       
			function D(sun){
				return document.getElementById(sun);
			}  
			var turner = true;
			function opener(){
				if(turner == true){
					D('daps').style.display = 'block';
					turner = false;
				} else{
					D('daps').style.display = 'none';
					turner = true;
				}
			}
			function bgtrans (){
				D('prelude').style.backgroundImage = "url('../images/websitelayout1.jpg')";
			}
			setTimeout("D('karul').style.display = 'none'", 3390);
			setTimeout("bgtrans()", 3390);
		</script> 	           	      
	</div>
	@if (isset($success))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $success }}</strong>
		</span>
	@endif
<!--</div> container close-->    
</div>

<div class="n-about">
	<div class="container" data-aos="flip-left">
		<h1>About Bethel-M12</h1>
		<p>Bethel housing estate will comprise of block of 6 and block of 4 terrace duplexes with every unit built to world-class standards and will offer a convenient and comfortable living experience.
		Bethel housing estate will comprise of block of 6 and block of 4 terrace duplexes with every unit built to world-class standards and will offer a convenient and comfortable living experience.
		Bethel housing estate will comprise of block of 6 and block of 4 terrace duplexes with every unit built to world-class standards and will offer a convenient and comfortable living experience.
		</p>
	</div>
</div><!--
<div class ="row conga">
	<div class="col-md-6 few-wordshh">
		<div class="floter">
			<h1>Surrounded with serene environment for family living</h1>
			<div class="transe-text">
				Bethel housing estate will comprise of block of 6 and block of 4 terrace duplexes with every unit built to world-class standards and will offer a convenient and comfortable living experience.
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="logo-cen">
			<img width="100%" src="{{ asset('images/logo2.png') }}">
		</div>
		<div class="tab-o-c">
			<h1>Welcome to Bethel estate<br> Home for all <br> Second to none<h1>
				<p>&nbsp;</p>
				<img width="100%" class="smalli" src="{{ asset('images/multi-image.jpg') }}">
			</div>
		</div>
	</div>-->
	<div class="second-in">
		<div class="fisher">

			<!-- start-->
			<div class="container" data-aos="fade-up">
				<h1></h1>
				<div class="row">
					<div class="col-md-12">
					<div class="carousel slide multi-item-carousel" id="theCarousel">
						<div class="carousel-inner">
						<div class="item active">
							<div class="col-xs-4"><a href="#1"><img src="images/slide1.jpg" class="img-responsive"></a></div>
						</div>
						<div class="item">
							<div class="col-xs-4"><a href="#1"><img src="images/slide2.jpg" class="img-responsive"></a></div>
						</div>
						<div class="item">
							<div class="col-xs-4"><a href="#1"><img src="images/slide3.jpg" class="img-responsive"></a></div>
						</div>
						<div class="item">
							<div class="col-xs-4"><a href="#1"><img src="images/slide4.jpg" class="img-responsive"></a></div>
						</div>
						<div class="item">
							<div class="col-xs-4"><a href="#1"><img src="images/slide5.jpg" class="img-responsive"></a></div>
						</div>
						<div class="item">
							<div class="col-xs-4"><a href="#1"><img src="images/slide6.jpg" class="img-responsive"></a></div>
						</div>
						<!-- add  more items here -->
						<!-- Example item start:  -->
						<!--
						<div class="item">
							<div class="col-xs-4"><a href="#1"><img src="http://placehold.it/300/8bc34a/000000" class="img-responsive"></a></div>
						</div>
						-->
						<!--  Example item end -->
						</div>
						<a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
						<a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
					</div>
					</div>
				</div>
			</div>
			<script>
				$('.multi-item-carousel').carousel({
				interval: false
				});

				// for every slide in carousel, copy the next slide's item in the slide.
				// Do the same for the next, next item.
				$('.multi-item-carousel .item').each(function(){
				var next = $(this).next();
				if (!next.length) {
					next = $(this).siblings(':first');
				}
				next.children(':first-child').clone().appendTo($(this));
				
				if (next.next().length>0) {
					next.next().children(':first-child').clone().appendTo($(this));
				} else {
					$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
				}
				});
			</script>
			<!--end-->
		</div>
		<div class="fisher2">

			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-aos="fade-up">
				<!-- Indicators --><!--
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>-->

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active row">
							<img src="images/slide1.jpg" alt="Bethel Estate" class="sl-imgs feature fea-slider" data-aos="fade-right">
					</div>

					<div class="item">
						<img src="images/slide2.jpg" alt="Bethel Estate" class="sl-imgs">
						<div class="carousel-caption slider-text">
						</div>
					</div>

					<div class="item">
						<img src="images/slide3.jpg" alt="Bethel Estate" class="ls-imgs">
						<div class="carousel-caption slider-text">
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
					<span class="sr-only">Next</span>
				</a><!-- -->
			</div>
		</div>
	</div>
	<div class="content dark">
		<div class="services-section" id="services">
			<div class="container"> 
				<div class="services-header">


					<h3>Facilities</h3>
					<p>Bethel estate is a contempory and affordable estate located 30 minutes drive from the popular Ikeja city mall and directly off the Ikorodu Road dual carriage way. The estate is in close proximity to several commercial centres such as banks, filling stations, grocery stores, supermarkets, pharmacies, gas plant and less than an hour drive to Lagos Island. </p>
					</div>
					<div class="services-sectiongrids">
						<div class="col-md-4 services-grid">
							<img src="images/fac1.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Playground</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac3.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">24/7 Security</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac2.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Maid's B/Q Homes</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac4.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Good Road Network</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac5.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Ample Parking Space</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac6.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Resort style luxury</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac7.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Commercial Centers</h4>
							<p></p>
						</div>
						<div class="col-md-4 services-grid">
							<img src="images/fac8.png" alt="" class="utility-image smallis" data-aos="zoom-in-left"/>
							<h4 data-aos="zoom-in-left">Spectacular manicured garden</h4>
							<p></p>
						</div>
					</div>
				</div><!---->
			</div>
		</div>
		
		<div class="works-section" id="work">
			<div class="works-header">
				<div data-aos="flip-left">
					<h3> Floor Plans </h3>
					<p>Information about the building floors</p>
				</div>
				<div class="row">
					<div class="col-md-4" data-aos="fade-right">
						<div class="full-site change">
							<img width="100%" src="{{ asset('images/bgroundfloor.jpg') }}" class="curvy">
						</div>
					</div>
					<div class="col-md-4" data-aos="fade-up">
						<div class="full-site change">
							<img width="100%" src="{{ asset('images/bfirstfloor.jpg') }}" class="curvy">
						</div>
					</div>
					<div class="col-md-4" data-aos="fade-left">
						<div class="full-site change">
							<img width="100%" src="{{ asset('images/bpentfloor.jpg') }}" class="curvy">
						</div>
					</div>
				</div>
			</div>
			<div class="arrow">
				<a href="#about" class="scroll"><img src="images/arrow.png" alt=""/></a>
			</div>
		</div>
		<!--Streetview--><!--
		<div class ="row conga bod">
			<div class="col-md-8 street-view">

			</div>
			<div class="col-md-4">
				<div class="logo-cen">
					<img width="100%" class="box-shad" src="{{ asset('images/logo2.png') }}">
				</div>
				<div class="site-locat-info">
					<h2>Info</h2>
					<p class="text-justify">With the proposed Forth Mainland Bridge within reach, you can be rest assured that Laggos Island is withing reach. Mile 12 Market affords you an ample opportunity to get all what you need within reach ranging from daily necessity which are foodstuffs to clothing, groceries, household equipment and lots more<br> A Gas plant within easy reach ensure you don't run out of gas. <br>
						In the pretty, serene environment, discover delightful shops, quirky boutiques and mouth-watering collection of eateries, Bars where you can easily relax after a long day at work. 
					Bethel estate is central to both Island and Mainland with just an hour drive to the Island. </p>
					<br>
					<h5>Facilities and Amenities</h5>
					<ul class="col-md-10 text-left">
						<li>Round the clock security service</li>
						<li>Lush Green Areas</li>
						<li>Play grounds for kids</li>
						<li>Ample parking space</li>
						<li>Shopping centres</li>
						<li>Maid’s room</li>
						<li>Pent Floor</li>
						<li>Good Road Network</li>
						<li>Street Lighting</li>
						<li>Sewage Treatment</li>
					<li>Central power generator</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<div class="arrow">
				<a href="#about" class="scroll"><img src="images/arrow.png" alt=""/></a>
			</div>
		</div>
	</div>-->
	<!-- portfolio-section-ends -->
	<div class="video-sect" id="video">
		<div class="holder" data-aos="zoom-in-left">
			<div class="vid">
				<iframe class="interior" src="https://www.youtube.com/embed/NqP1i5xHOnY?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="offer-sect">
		<div class="offer-control">
			<p>Refer and earn 1,000,000 Naira</p>
			<div class="butti">
				<button class="buttin" id="shif" onclick="collapser()" data-aos="fade-up">Learn More</button>
			</div>
		</div>
		<div class="offer-info">
			<div class="crop-info" id="crops">
				Buy one Unit for 20million naira <br>
				Buy two units for 40million naira and get one free
			</div>
		</div>
	</div>
	<script>
		D('crops').style.height = 0;
		var switcher = false;
		function collapser(){
			if(switcher == true){
				D('crops').style.height = 0;
				switcher = false;
				D('shif').innerHTML = 'See less';
			} else {
				D('crops').style.height = '';
				switcher = true;
				D('shif').innerHTML = 'Learn More';
			}
		}
	</script>
	 <div class="partner">
		 <div class="bg-guy"></div>
		 <!--<h2>Our Pertner</h2>-->
		 <div class="pat-img" data-aos="fade-up">
			 <img width="100%" height="width" alt="Wema Bank Plc" src="images/wema-bank.jpg" />
		 </div>
	 </div>
	<!--<div class="about-section" id="about" id="about">
		<div class="container">
			<div class="about-header">
				<h3>Find Us</h3>
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
						<form method="post" action="/sendmail">
						@csrf
						<div class="contactgrid">
							<input name="email" type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required>
							@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
						<div class="contactgrid">
							<input name="phone" type="text" class="text" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}" required>
							@if ($errors->has('phone'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('phone') }}</strong>
								</span>
							@endif
						</div>
						<div class="contactgrid1">
							<textarea name="message" onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" required>Your Message</textarea>
							@if ($errors->has('message'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('message') }}</strong>
								</span>
							@endif
						</div>
						<div class="centered">
							<br>
							<input type="submit" class="sender" value="Send message">
						</div>
						</form>
						<br>
						<div class="centered">
							<br>
							<p>To get a detailed run through of our estate<p>
							<br>
							<button id="brochure" onclick="downloader()" class="brochure"><a href="/broschure">Download Brochure</a></button>
							<br><br><span id="helper"></span>

							<br>
							<button id="brochure" class="brochure"><a href="/downloadapp">Download Agent App</a></button>
							<br><br><span id="helper"></span>
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
</div>-->

        <!--
        -->

        <div class="footer-section" id="contact">
        	<div class="row footee"> 
        		<div class="col-md-3 footer-in">
        			<a href="#"><img width="130" height="width" src="images/about-logo.png" /></a><br><br>
        			<p>Bethel estate remains second to none, click the <b>BUY NOW</b> button below to place an order for any of the teraces. </p>
				</div>
				<div class="col-md-3"></div>
        		
			<div class="col-md-3 footer-in">
				<h3> Quick links </h3>
				<p><i class="fa fa-arrow-left shifter"></i><a href="#home" class="scroll"> Home </a></p>
				<p><i class="fa fa-arrow-left shifter"></i><a href="#services" class="scroll"> Facilities </a></p>
				<p><i class="fa fa-arrow-left shifter"></i><a href="/broschure"> Download Brochure </a></p>
				<p><i class="fa fa-arrow-left shifter"></i><a href="/downloadapp"> Download Agent App </a></p>
			</div>
			<div class="col-md-3 footer-in">
        			<h3> Find us </h3>
        			<p>30, Lanre Awolokun Street, Gbagada, Lagos.</p>
        			<p>+234 806 941 6226</p>
					<p>contact@bethelestate.com.ng</p><!--
					<div class="social-icon">
						<a href="#"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>	
					</div>-->
				</div>
			<div class="clearfix"></div>
			</div>
			<div class="footer-bottom">

				<p> Bethel Estate &copy;20{{ date('y') }}  All rights Reserved | Brought to you by <a href="http://www.okbestate.com.ng"><img width="50" height="width" class="smalli" src="{{ asset('images/okblogo.png') }}"></a> </p>

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
						 function downloader(){
							 D('brochure').innerHTML = 'processing';
							 D('helper').innerHTML = '';
							 setTimeout(call1, 2000);
							 setTimeout('call2()', 3000);
							 setTimeout('call3()', 6000);
						 }
							 function call1(){
								D("helper").innerHTML = "Download Started"
							 }
							 function call2(){
								D('brochure').innerHTML = 'Download Brochure';
							 }
							 function call3(){
								D("helper").innerHTML = ""
							 }
					 </script>
					 <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

				</div>		
			</div>
			<script src='js/aos.js'></script>
			<script>
				AOS.init({
					easing: 'ease-out-back',
					duration: 1000
				});

			</script>

		</div>
		</body>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		</html>