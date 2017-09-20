<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>SlashMyFees</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- =============== VENDOR STYLES ===============-->
   <link rel="shortcut icon" href="/img/favicon.ico">
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="/vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="/vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="/vendor/whirl/dist/whirl.css">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="/vendor/weather-icons/css/weather-icons.min.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="/user/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="/user/app.css" id="maincss">
</head>

<body class="layout-h">
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav role="navigation" class="navbar topnavbar" style="background-color: #fff;">
            <!-- START navbar header-->
            <div class="navbar-header" style="background-color: #fff;">
               <a href="/secure/user" class="navbar-brand">
                  <div class="brand-logo" style="position: relative; padding-top: 0px; top: -28px;">
                     <img src="/img/slashmyfeeslogo.png" height="110">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img src="/img/slashmyfeeslogo.png" height="110">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="navbar-collapse collapse">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li><a href="/secure/user/">{{ $user->name }}</a></li>
                  <li>
                        <a href="/secure/user/">My Quotes</a>
                  </li>
                  <li>
                        <a href="/secure/user/settings">Account Settings</a>
                  </li>
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->

               <ul class="nav navbar-nav navbar-right">
                  <!-- START Contacts button-->
                  <li>
                     <a href="/secure/logout">
                        Log Out
                     </a>
                  </li>
                  <!-- END Contacts menu-->
               </ul>
 				<!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
         </nav>
         <!-- END Top Navbar-->
      </header>
