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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	 <!------ Light Box ------>
    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script> 
    <!------ Eng Light Box ------>	

</head>
<body>
<div class="header2" id="head">	
    <div class="headbg">
      <div class="container"> 
         <div class="header-top">
      		 <div class="logo">
                <a href="{{ url('') }}"><img src="images/logo.png" alt=""/></a>
                <!--<h2>Bethel</h2>-->
			 </div>
		   <div class="top-menu">
		   	<span class="menu"> </span>
			<ul>
			 	<nav class="cl-effect-5">
				<li><a href="/" class="scroll"><span data-hover="Home">home</span></a></li>
                <li><a href="{{ route('login') }}" ><span data-hover="login">login</span></a></li>
				<li><a class="active"  href="{{ route('register') }}" ><span data-hover="purchase">purchase</span></a></li>
				</nav>
			 </ul>
			 </div>
			 <!--script-nav-->
			    
      </div>
	 </div>     
    </div>
</div>
  
<div style="background-color:#296791; ">
	<div style="background-color:rgba(0,0,0,0.5); padding-top:50px;" >
			<div class="container"> 
			<div class="contact-header">
				<h3><span>Purchase</span></h3>
					<p>Fill this form to register and complete the purchasing process</p>
			</div>
			
			<div class="contact">
            <form method="post" action="{{ url('/register') }}">

                {!! csrf_field() !!}
                <div class="col-md-4 contactgrid">
				<input name="title" type="text" class="text" value=" title" onfocus="if (this.value == ' title') {this.value = '';}" onblur="if (this.value == '') {this.value = ' title';} " value="{{ old('title') }}" required>
                @if ($errors->has('title'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif    
            </div>
                <div class="col-md-4 contactgrid">
				<input name="surname" type="text" class="text" value=" surname" onfocus="if (this.value == ' surname') {this.value = '';}" onblur="if (this.value == '') {this.value = ' surname';} " value="{{ old('surname') }}" required>
                @if ($errors->has('surname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif        
            </div>
                <div class="col-md-4 contactgrid">
				<input name="firstname" type="text" class="text" value=" firstname" onfocus="if (this.value == ' firstname') {this.value = '';}" onblur="if (this.value == '') {this.value = ' firstname';} " value="{{ old('firstname') }}" required>
                @if ($errors->has('firstname'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('firstname') }}</strong>
                    </span>
                @endif        
            </div>
                <div class="col-md-4 contactgrid">
				<input name="middlename" type="text" class="text" value=" middlename" onfocus="if (this.value == ' middlename') {this.value = '';}" onblur="if (this.value == '') {this.value = ' middlename';} " value="{{ old('middlename') }}" required>
                @if ($errors->has('middlename'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('middlename') }}</strong>
                    </span>
                @endif                    
            </div>
                
                <div class="col-md-4 contactgrid">
				<input name="dob" type="text" class="text" value=" Date of birth" onfocus="if (this.value == ' Date of birth') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Date of birth';} " value="{{ old('dob') }}" required>
                @if ($errors->has('dob'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                @endif        
            </div>
                <div class="col-md-4 contactgrid">
				<input name="pob" type="text" class="text" value=" Place of birth" onfocus="if (this.value == ' Place of birth') {this.value = '';}" onblur="if (this.value == '') {this.value = ' Place of birth';} " value="{{ old('pob') }}" required>
                @if ($errors->has('pob'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('pob') }}</strong>
                    </span>
                @endif        
            </div>
                
                <div class="col-md-4 contactgrid">
				<input name="address" type="text" class="text" value=" address" onfocus="if (this.value == ' address') {this.value = '';}" onblur="if (this.value == '') {this.value = ' address';} " value="{{ old('address') }}" required>
                @if ($errors->has('address'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif        
            </div>
                <div class="col-md-4 contactgrid">
				<input name="phone" type="text" class="text" value=" phone" onfocus="if (this.value == ' phone') {this.value = '';}" onblur="if (this.value == '') {this.value = ' phone';} " value="{{ old('phone') }}" required>
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif        
            </div>
				<div class="col-md-4 contactgrid">
				<input name="email" type="text" class="text" value=" email" onfocus="if (this.value == ' email') {this.value = '';}" onblur="if (this.value == '') {this.value = ' email';}" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif        
            </div>
                <div class="col-md-4 contactgrid">
                <select name="gender" class="text" value=" gender" onfocus="if (this.value == ' gender') {this.value = '';}" onblur="if (this.value == '') {this.value = ' gender';} " value="{{ old('gender') }}" >
                    <option>Male</option>
                    <option>Female</option>
                </select>
                </div>
                <div class="col-md-4 contactgrid">
				<select name="status" type="text" class="text">
                    <option>Single</option>
                    <option>Married</option>
                </select>
                </div>
                <div class="col-md-4 contactgrid">
				<select name="nationality" class="text" >
                    <option>Nigeria</option>
                    <option>Algeria</option>
                    <option>Ghana</option>
                    <option>South Africa</option>
                </select>
                </div>
                <div class="col-md-4 contactgrid">
                <input name="password" type="password" class="text" placeholder="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif    
                </div>
                <div class="col-md-4 contactgrid">
				<input name="password_confirmation" type="password" class="text" placeholder="password confirmation" required>
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif    
            </div>

				<div class="col-md-4 contactgrid2">
				<input type="submit" value="Register" class="mybutton btn btn-primary" style="width:120px;">
			   </div>
			   <div class="clearfix"></div>
                </div>
        </form>
				

		</div>		
	</div>
	</div>

    <!--login ends!-->
    <div class="footer-section" id="contact">
        	<div class="row footee"> 
        		<div class="col-md-3 footer-in">
        			<a href="/"><img width="130" height="width" src="images/about-logo.png" /></a><br><br>
        			<p>Bethel estate is a contemporary and affordable estate located 30 minutes drive from the popular Ikeja city mall and directly off the Ikorodu Road dual carriage way.</p><br>
				</div>
				<div class="col-md-3"></div>
        		
			<div class="col-md-3 footer-in">
				<h3> Quick links </h3>
				<p><i class="fa fa-arrow-left shifter"></i><a href="/"> Home </a></p>
				<p><i class="fa fa-arrow-left shifter"></i><a href="/broschure"> Download Brochure </a></p>
				<p><i class="fa fa-arrow-left shifter"></i><a href="/downloadapp"> Download Agent App </a></p>
			</div>
			<div class="col-md-3 footer-in">
        			<h3> Find us </h3>
        			<p>30, Lanre Awolokun Street, Gbagada Phase II, Lagos.</p>
					<p>+234 809 888 0164</p>
					<p>+234 809 888 0174</p>
					<p>info@bethelestate.com.ng</p><br><!--
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