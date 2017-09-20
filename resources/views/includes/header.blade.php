<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
      <!-- ///  page title  /// -->
	  @if( isset($title) ) 
      	<title>{!! $title !!}</title>
      	<meta name="description" content="{!! $description !!}">
	  @else 
      	<title>SlashMyFees –Free Credit Card Processor Comparison Website</title>
      	<meta name="description" content="See & Compare the best rates for your credit card processing and point of sale needs. See instant quotes – 100% FREE FOR BUSINESS OWNERS.">
	  @endif
      <meta name="google-site-verification" content="ZuIds8z8Z4rAgQTzGiiuBeY22573NDu15ZYlWdb3dHA" />

	  <meta name="og:image" content="http://slashmyfees.com/img/slashmyfeeslogo.png"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="shortcut icon" href="/img/favicon.ico">
      <!-- /// font icons  /// -->
      <link rel="stylesheet" type="text/css" href="/fonts/fontawesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="/fonts/linecons/css/linecons.css">
      <!-- ///  google fonts  /// -->
      <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
      <!-- ///  animate.css  /// -->
      <link rel="stylesheet" type="text/css" href="/css/plugins/animate/animate.css">
      <!-- ///  bootstrap-select.css /// -->
      <link rel="stylesheet" type="text/css" href="/css/plugins/select/bootstrap-select.css">
      <!-- ///  bootstrap.css  /// -->
      <link rel="stylesheet" type="text/css" href="/bootstrap-3.1.1/css/bootstrap.css">      
      <!-- ///  main CSS file  /// -->        
      <link rel="stylesheet" type="text/css" href="/css/main.css"> 

  </head>
  <body>
    <!-- ///  begin header  /// -->
    <header class="main-header">
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header" style="padding: 0px;">
	      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
             </button>	
             <a class="navbar-brand" href="/" style="padding: 0px;"><img valign="top" src="/img/slashmyfeeslogo.png" height="110" style="position: relative; top: -26px;"></a>
	  		 <div class="text-center number_position" style="color: #3baabd; padding-top: 10px;font-size: 16px;font-weight: bold;">Toll Free <br /><span style="font-size: 26px;">1 800 240-0698</span></div>
	     </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-collapse">
			@if($page == 'home') 
				<ul class="nav navbar-nav navbar-right sign-in-padding">
				  <li><a href="https://slashmyfees.com/auth/login">Sign In</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="#howitworks">How It Works</a></li>
				  <li><a href="#partners">Partners</a></li>
				  <li><a href="https://slashmyfees.com/about-us">About Us</a></li>
				  <li><a href="#contact">Contact</a></li>
				  <li><a href="#faq">FAQ</a></li>
				  <li><a href="https://www.slashmyfees.com/blog/">Blog</a></li>
				</ul>
			@else 
				<ul class="nav navbar-nav navbar-right sign-in-padding">
				  <li><a href="https://slashmyfees.com/auth/login">Sign In</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" @if($page == 'home') id="nav" @endif>
				  <li><a href="https://slashmyfees.com/#howitworks">How It Works</a></li>
				  <li><a href="https://slashmyfees.com/#partners">Partners</a></li>
				  <li @if($page == 'about')class="active"@endif><a href="https://slashmyfees.com/about-us">About Us</a></li>
				  <li><a href="https://slashmyfees.com/#contact">Contact</a></li>
				  <li><a href="https://slashmyfees.com/#faq">FAQ</a></li>
				  <li><a href="https://www.slashmyfees.com/blog/">Blog</a></li>
				</ul>
			@endif
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <!-- ///  end header  /// -->
