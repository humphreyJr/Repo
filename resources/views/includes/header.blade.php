<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
      <meta charset="utf-8">
      <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->
      <!-- ///  page title  /// -->
      <title>SlashMyFees</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <link rel="stylesheet" type="text/css" href="bootstrap-3.1.1/css/bootstrap.css">      
      <!-- ///  main CSS file  /// -->        
      <link rel="stylesheet" type="text/css" href="/css/main.css">        
  </head>
  <body class="remove-scroll">
    <!-- ///  preloader  /// -->
    <div class="preloader">
      <img src="/img/loader.GIF" class="loader" alt="">
    </div>
    <!-- ///  begin header  /// -->
    <header class="main-header">
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <a class="navbar-brand" href="/"><i class="fa fa-signal success-color"></i>&nbsp;<b>SlashMyFees</b></a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
			@if($page == 'home') 
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="https://slashmyfees.com/sign_in">Sign In</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" id="nav">
				  <li class="active"><a href="#home">Home</a></li>
				  <li><a href="#howitworks">How It Works</a></li>
				  <li><a href="#faq">FAQ</a></li>
				  <li><a href="#partners">Partners</a></li>
				  <li><a href="#whoweare">Who We Are</a></li>
				  <li><a href="#charities">Charities</a></li>
				  <li><a href="#contact">Contact</a></li>
				</ul>
			@else 
				<ul class="nav navbar-nav navbar-right">
				  <li><a href="https://slashmyfees.com/sign_in">Sign In</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right" @if($page == 'home') id="nav" @endif>
				  <li class="active"><a href="https://slashmyfees.com/#home">Home</a></li>
				  <li><a href="https://slashmyfees.com/#howitworks">How It Works</a></li>
				  <li><a href="https://slashmyfees.com/#faq">FAQ</a></li>
				  <li><a href="https://slashmyfees.com/#partners">Partners</a></li>
				  <li><a href="https://slashmyfees.com/#whoweare">Who We Are</a></li>
				  <li><a href="https://slashmyfees.com/#charities">Charities</a></li>
				  <li><a href="https://slashmyfees.com/#contact">Contact</a></li>
				</ul>
			@endif
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <!-- ///  end header  /// -->
