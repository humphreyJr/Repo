<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
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
         <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a href="#/" class="navbar-brand">
                  <div class="brand-logo">
                     <img src="img/logo.png" alt="App Logo" class="img-responsive">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img src="img/logo-single.png" alt="App Logo" class="img-responsive">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="navbar-collapse collapse">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li></li>
                  <li>
						<a href="/secure/user/" data-toggle="dropdown">Home</a>
                  </li>
                  <li>
						<a href="/secure/user/pointofsales">Point of Sales</a>
                  </li>
                  <li>
						<a href="/secure/user/settings">Settings</a>
                  </li>
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->
               <ul class="nav navbar-nav navbar-right">
                  <!-- START Contacts button-->
                  <li>
                     <a href="/secure/logout" data-toggle-state="offsidebar-open" data-no-persist="true">
						Log Out
                     </a>
                  </li>
                  <!-- END Contacts menu-->
               </ul>
               <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->
            <form role="search" action="search.html" class="navbar-form">
               <div class="form-group has-feedback">
                  <input type="text" placeholder="Type and hit enter ..." class="form-control">
                  <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
               </div>
               <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- offsidebar-->
      <aside class="offsidebar hide">
         <!-- START Off Sidebar (right)-->
         <nav>
            <div role="tabpanel">
               <!-- Nav tabs-->
               <ul role="tablist" class="nav nav-tabs nav-justified">
                  <li role="presentation" class="active">
                     <a href="#app-settings" aria-controls="app-settings" role="tab" data-toggle="tab">
                        <em class="icon-equalizer fa-lg"></em>
                     </a>
                  </li>
                  <li role="presentation">
                     <a href="#app-chat" aria-controls="app-chat" role="tab" data-toggle="tab">
                        <em class="icon-users fa-lg"></em>
                     </a>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="unwrap mv-lg">
               <!-- START chart-->
               <div id="panelChart9" ng-controller="FlotChartController" class="panel">
                  <div class="panel-heading">
                     <div class="panel-title">Overall progress</div>
                  </div>
                  <div collapse="panelChart9" class="panel-wrapper">
                  </div>
               </div>
               <!-- END chart-->
            </div>
            <!-- START radial charts-->
            <!-- START Multiple List group-->
            <div class="list-group">
               <a href="#" class="list-group-item">
                  <table class="wd-wide">
                     <tbody>
                        <tr>
                           <td class="wd-xs">
                              <div class="ph">
                                 <img src="img/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                              </div>
                           </td>
                           <td>
                              <div class="ph">
                                 <h4 class="media-box-heading">Project A</h4>
                                 <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small>
                              </div>
                           </td>
                           <td class="wd-sm hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0">Last change</p>
                                 <small class="text-muted">4 weeks ago</small>
                              </div>
                           </td>
                           <td class="wd-xs hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0 text-muted">
                                    <em class="icon-users mr fa-lg"></em>26</p>
                              </div>
                           </td>
                           <td class="wd-xs hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0 text-muted">
                                    <em class="icon-doc mr fa-lg"></em>3500</p>
                              </div>
                           </td>
                           <td class="wd-sm">
                              <div class="ph">
                                 <progressbar value="80" type="success" class="m0 progress-xs">80%</progressbar>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </a>
            </div>
            <div class="list-group">
               <a href="#" class="list-group-item">
                  <table class="wd-wide">
                     <tbody>
                        <tr>
                           <td class="wd-xs">
                              <div class="ph">
                                 <img src="img/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                              </div>
                           </td>
                           <td>
                              <div class="ph">
                                 <h4 class="media-box-heading">Project X</h4>
                                 <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small>
                              </div>
                           </td>
                           <td class="wd-sm hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0">Last change</p>
                                 <small class="text-muted">Today at 06:23 am</small>
                              </div>
                           </td>
                           <td class="wd-xs hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0 text-muted">
                                    <em class="icon-users mr fa-lg"></em>3</p>
                              </div>
                           </td>
                           <td class="wd-xs hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0 text-muted">
                                    <em class="icon-doc mr fa-lg"></em>150</p>
                              </div>
                           </td>
                           <td class="wd-sm">
                              <div class="ph">
                                 <progressbar value="50" type="purple" class="m0 progress-xs">50%</progressbar>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </a>
            </div>
            <div class="list-group">
               <a href="#" class="list-group-item">
                  <table class="wd-wide">
                     <tbody>
                        <tr>
                           <td class="wd-xs">
                              <div class="ph">
                                 <img src="img/dummy.png" alt="" class="media-box-object img-responsive img-rounded thumb64">
                              </div>
                           </td>
                           <td>
                              <div class="ph">
                                 <h4 class="media-box-heading">Project Z</h4>
                                 <small class="text-muted">Vestibulum ante ipsum primis in faucibus orci</small>
                              </div>
                           </td>
                           <td class="wd-sm hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0">Last change</p>
                                 <small class="text-muted">Yesterday at 10:20 pm</small>
                              </div>
                           </td>
                           <td class="wd-xs hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0 text-muted">
                                    <em class="icon-users mr fa-lg"></em>15</p>
                              </div>
                           </td>
                           <td class="wd-xs hidden-xs hidden-sm">
                              <div class="ph">
                                 <p class="m0 text-muted">
                                    <em class="icon-doc mr fa-lg"></em>480</p>
                              </div>
                           </td>
                           <td class="wd-sm">
                              <div class="ph">
                                 <progressbar value="20" type="green" class="m0 progress-xs">20%</progressbar>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </a>
               <!-- END dashboard main content-->
            </div>
            <!-- END Multiple List group-->
         </div>
      </section>
      <!-- Page footer-->
      <footer>
         <span>&copy; 2015 - Angle</span>
      </footer>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="/vendor/modernizr/modernizr.js"></script>
   <!-- JQUERY-->
   <script src="/vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="/vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="/vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="/vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="/vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="/vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="/vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
   <!-- RTL demo-->
   <script src="js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- FLOT CHART-->
   <script src="/vendor/Flot/jquery.flot.js"></script>
   <script src="/vendor/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
   <script src="/vendor/Flot/jquery.flot.resize.js"></script>
   <script src="/vendor/Flot/jquery.flot.pie.js"></script>
   <script src="/vendor/Flot/jquery.flot.time.js"></script>
   <script src="/vendor/Flot/jquery.flot.categories.js"></script>
   <script src="/vendor/flot-spline/js/jquery.flot.spline.min.js"></script>
   <!-- CLASSY LOADER-->
   <script src="/vendor/jquery-classyloader/js/jquery.classyloader.min.js"></script>
   <!-- MOMENT JS-->
   <script src="/vendor/moment/min/moment-with-locales.min.js"></script>
   <!-- SKYCONS-->
   <script src="/vendor/skycons/skycons.js"></script>
   <!-- DEMO-->
   <script src="js/demo/demo-flot.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>

</html>
