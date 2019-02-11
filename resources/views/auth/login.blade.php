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
  

	<div class="footer-section" id="contact" id="contact">
			<div class="container"> 
			<div class="contact-header">
				<h3><span>[</span> Login <span>]</span></h3>
					<p>login to complete the purchasing process</p>
			</div>
			
			<div class="contact" style="min-height:400px; padding-top:70px;">
            <form method="post" action="{{ url('/login') }}">

                {!! csrf_field() !!}
                
				<div class="col-md-4 contactgrid">
				<input name="email" type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif        
            </div>
               
                <div class="col-md-4 contactgrid">
                <input name="password" type="password" class="text" placeholder="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif    
                </div>

				<div class="col-md-4 contactgrid2">
				<input type="submit" value="Sign in" class="mybutton btn btn-primary" style="width:120px;">
			   </div>
			   <div class="clearfix"></div>
                </div>
        </form>
				<div class="footer-bottom">

					<p> Bethel Estate &copy;20{{ date('y') }}  All rights  Reserved | Brought to you by <strong>OKB and Associates</strong> </p>

					</div>
					
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</div>

		</div>		
	</div>
	
	
</body>
</html>