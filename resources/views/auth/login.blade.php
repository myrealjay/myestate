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
	 <!------ Light Box ------>
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script> 
    <!------ Eng Light Box ------>	


</head>
<body>
<div class="header2" id="head">	
	<div class="headbg2">
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
				<li><a href="/" class="scroll"><span data-hover="Home">home</span></a></li>
                <li><a class="active" href="{{ route('login') }}" ><span data-hover="login">login</span></a></li>
				<li><a href="{{ route('register') }}" ><span data-hover="purchase">purchase</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
			    
      </div>
	 </div>     
    </div>
</div>

<!--login section-->
<div style="background-color:#296791; ">

<div style="background-color:rgba(0,0,0,0.5); padding-top:50px;"  >
			<div class="container" > 
			<div class="contact-header" >
				<h3><span> Login </span></h3>
					<p>login to complete the purchasing process</p>
			</div>
			
			<div class="contact" style="min-height:400px; padding-top:70px;">
            <form method="post" action="{{ url('/login') }}">

                {!! csrf_field() !!}
                
				<div class="row">
				<div class="col-md-4"></div>
				
				<div class="col-md-4">

					<div class="row">
						<div class="col-md-12 contactgrid">
							<input name="email" type="text" class="text" value="email" onfocus="if (this.value == 'email') {this.value = '';}" onblur="if (this.value == '') {this.value = 'email';}" value="{{ old('email') }}" required>
							@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif        
						</div>
					</div>
				
               <div class="row">
					<div class="col-md-12 contactgrid">
						<input name="password" type="password" class="text" placeholder="password" required>
						@if ($errors->has('password'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif    
					</div>
			   </div>
                
				<div class="row">
					<div class="col-md-12 contactgrid">
						<input type="submit" value="Sign in" class="mybutton btn btn-primary" style="width:120px;">
					</div>
					<div class="clearfix"></div>
					</div>

					</div>
				</div>
				
				
			</div>
        </form>
				

		</div>		
	</div>
	
</div>

<!--login section ends!-->


<div class="footer-section" id="contact">
        	<div class="row footee"> 
        		<div class="col-md-3 footer-in">
        			<a href="#"><img width="130" height="width" src="images/about-logo.png" /></a><br><br>
        			<p>Bethel estate is a contempory and affordable estate located 30 minutes drive from the popular Ikeja city mall and directly off the Ikorodu Road dual carriage way.</p>
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
</html>