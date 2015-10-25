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
                  <li><a href="#dashboard" data-toggle="dropdown">Dashboard</a>
                     <ul class="dropdown-menu animated fadeIn">
                        <li><a href="dashboard.html">Dashboard v1</a>
                        </li>
                        <li><a href="dashboard_v2.html">Dashboard v2</a>
                        </li>
                        <li><a href="dashboard_v3.html">Dashboard v3</a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="widgets.html">Widgets</a>
                  </li>
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->
               <ul class="nav navbar-nav navbar-right">
                  <!-- START lock screen-->
                  <li class="dropdown">
                     <a href="lock.html" title="Lock screen">
                        <em class="icon-lock"></em>
                     </a>
                  </li>
                  <!-- END lock screen-->
                  <!-- Search icon-->
                  <li>
                     <a href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                     </a>
                  </li>
                  <!-- Fullscreen (only desktops)-->
                  <li class="visible-lg">
                     <a href="#" data-toggle-fullscreen="">
                        <em class="fa fa-expand"></em>
                     </a>
                  </li>
                  <!-- START Alert menu-->
                  <li class="dropdown dropdown-list">
                     <a href="#" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <div class="label label-danger">11</div>
                     </a>
                     <!-- START Dropdown menu-->
                     <ul class="dropdown-menu animated flipInX">
                        <li>
                           <!-- START list group-->
                           <div class="list-group">
                              <!-- list item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <em class="fa fa-twitter fa-2x text-info"></em>
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <p class="m0">New followers</p>
                                       <p class="m0 text-muted">
                                          <small>1 new follower</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- list item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <em class="fa fa-envelope fa-2x text-warning"></em>
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <p class="m0">New e-mails</p>
                                       <p class="m0 text-muted">
                                          <small>You have 10 new emails</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- list item-->
                              <a href="#" class="list-group-item">
                                 <div class="media-box">
                                    <div class="pull-left">
                                       <em class="fa fa-tasks fa-2x text-success"></em>
                                    </div>
                                    <div class="media-box-body clearfix">
                                       <p class="m0">Pending Tasks</p>
                                       <p class="m0 text-muted">
                                          <small>11 pending task</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- last list item -->
                              <a href="#" class="list-group-item">
                                 <small>More notifications</small>
                                 <span class="label label-danger pull-right">14</span>
                              </a>
                           </div>
                           <!-- END list group-->
                        </li>
                     </ul>
                     <!-- END Dropdown menu-->
                  </li>
                  <!-- END Alert menu-->
                  <!-- START Contacts button-->
                  <li>
                     <a href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                        <em class="icon-notebook"></em>
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
               <!-- Tab panes-->
               <div class="tab-content">
                  <div id="app-settings" role="tabpanel" class="tab-pane fade in active">
                     <h3 class="text-center text-thin">Settings</h3>
                     <div class="p">
                        <h4 class="text-muted text-thin">Themes</h4>
                        <div class="table-grid mb">
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-a.css">
                                    <input type="radio" name="setting-theme" checked="checked">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info"></span>
                                       <span class="color bg-info-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-b.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green"></span>
                                       <span class="color bg-green-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-c.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple"></span>
                                       <span class="color bg-purple-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-d.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger"></span>
                                       <span class="color bg-danger-light"></span>
                                    </span>
                                    <span class="color bg-white"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="table-grid mb">
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-e.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-info-dark"></span>
                                       <span class="color bg-info"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-f.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-green-dark"></span>
                                       <span class="color bg-green"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-g.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-purple-dark"></span>
                                       <span class="color bg-purple"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                           <div class="col mb">
                              <div class="setting-color">
                                 <label data-load-css="css/theme-h.css">
                                    <input type="radio" name="setting-theme">
                                    <span class="icon-check"></span>
                                    <span class="split">
                                       <span class="color bg-danger-dark"></span>
                                       <span class="color bg-danger"></span>
                                    </span>
                                    <span class="color bg-gray-dark"></span>
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <h4 class="text-muted text-thin">Layout</h4>
                        <div class="clearfix">
                           <p class="pull-left">Fixed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-fixed" type="checkbox" data-toggle-state="layout-fixed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Boxed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-boxed" type="checkbox" data-toggle-state="layout-boxed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">RTL</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-rtl" type="checkbox">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <h4 class="text-muted text-thin">Aside</h4>
                        <div class="clearfix">
                           <p class="pull-left">Collapsed</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-collapsed" type="checkbox" data-toggle-state="aside-collapsed">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Float</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-float" type="checkbox" data-toggle-state="aside-float">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                        <div class="clearfix">
                           <p class="pull-left">Hover</p>
                           <div class="pull-right">
                              <label class="switch">
                                 <input id="chk-hover" type="checkbox" data-toggle-state="aside-hover">
                                 <span></span>
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="app-chat" role="tabpanel" class="tab-pane fade">
                     <h3 class="text-center text-thin">Connections</h3>
                     <ul class="nav">
                        <!-- START list title-->
                        <li class="p">
                           <small class="text-muted">ONLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/05.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Juan Sims</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-success circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/06.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Maureen Jenkins</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-danger circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/07.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Billie Dunn</strong>
                                    <br>
                                    <small class="text-muted">Designeer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-warning circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/08.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tomothy Roberts</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                        </li>
                        <!-- START list title-->
                        <li class="p">
                           <small class="text-muted">OFFLINE</small>
                        </li>
                        <!-- END list title-->
                        <li>
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/09.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Lawrence Robinson</strong>
                                    <br>
                                    <small class="text-muted">Developer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                           <!-- START User status-->
                           <a href="#" class="media-box p mt0">
                              <span class="pull-right">
                                 <span class="circle circle-lg"></span>
                              </span>
                              <span class="pull-left">
                                 <!-- Contact avatar-->
                                 <img src="img/user/10.jpg" alt="Image" class="media-box-object img-circle thumb48">
                              </span>
                              <!-- Contact info-->
                              <span class="media-box-body">
                                 <span class="media-box-heading">
                                    <strong>Tyrone Owens</strong>
                                    <br>
                                    <small class="text-muted">Designer</small>
                                 </span>
                              </span>
                           </a>
                           <!-- END User status-->
                        </li>
                        <li>
                           <div class="p-lg text-center">
                              <!-- Optional link to list more users-->
                              <a href="#" title="See more contacts" class="btn btn-purple btn-sm">
                                 <strong>Load more..</strong>
                              </a>
                           </div>
                        </li>
                     </ul>
                     <!-- Extra items-->
                     <div class="p">
                        <p>
                           <small class="text-muted">Tasks completion</small>
                        </p>
                        <div class="progress progress-xs m0">
                           <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-80">
                              <span class="sr-only">80% Complete</span>
                           </div>
                        </div>
                     </div>
                     <div class="p">
                        <p>
                           <small class="text-muted">Upload quota</small>
                        </p>
                        <div class="progress progress-xs m0">
                           <div role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-warning progress-40">
                              <span class="sr-only">40% Complete</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="row">
               <div class="col-lg-4">
                  <!-- START List group-->
                  <ul class="list-group">
                     <li class="list-group-item">
                        <div class="row row-table pv-lg">
                           <div class="col-xs-6">
                              <p class="m0 lead">1204</p>
                              <p class="m0">
                                 <small>Commits this month</small>
                              </p>
                           </div>
                           <div class="col-xs-6 text-center">
                              <div data-sparkline="" data-bar-color="#23b7e5" data-height="60" data-bar-width="10" data-bar-spacing="6" data-chart-range-min="0" values="3,6,7,8,4,5"></div>
                           </div>
                        </div>
                     </li>
                     <li class="list-group-item">
                        <div class="row row-table pv-lg">
                           <div class="col-xs-6">
                              <p class="m0 lead">$ 3,200.00</p>
                              <p class="m0">
                                 <small>Available budget</small>
                              </p>
                           </div>
                           <div class="col-xs-6 text-center">
                              <div data-sparkline="" data-type="line" data-height="60" data-width="80%" data-line-width="2" data-line-color="#7266ba" data-chart-range-min="0" data-spot-color="#888" data-min-spot-color="#7266ba" data-max-spot-color="#7266ba"
                              data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" values="7,3,4,7,5,9,4,4,7,5,9,6,4" data-resize="true"></div>
                           </div>
                        </div>
                     </li>
                     <li class="list-group-item">
                        <div class="row row-table pv-lg">
                           <div class="col-xs-6">
                              <p class="m0 lead">67</p>
                              <p class="m0">
                                 <small>New followers</small>
                              </p>
                           </div>
                           <div class="col-xs-6">
                              <ul class="list-inline text-center">
                                 <li>
                                    <a href="#" tooltip="Katie">
                                       <img src="img/user/02.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" tooltip="Cody">
                                       <img src="img/user/01.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" tooltip="Tamara">
                                       <img src="img/user/03.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" tooltip="Gene">
                                       <img src="img/user/04.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" tooltip="Marsha">
                                       <img src="img/user/04.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                 </li>
                                 <li>
                                    <a href="#" tooltip="Robin">
                                       <img src="img/user/09.jpg" alt="Follower" class="img-responsive img-circle thumb24">
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                  </ul>
                  <!-- END List group-->
               </div>
               <div class="col-lg-8">
                  <!-- START bar chart-->
                  <div id="panelChart3" class="panel">
                     <div class="panel-heading">
                        <!-- START button group-->
                        <div class="pull-right btn-group">
                           <button type="button" data-toggle="dropdown" class="dropdown-toggle btn btn-default btn-sm">Monthly</button>
                           <ul role="menu" class="dropdown-menu fadeInLeft animated">
                              <li><a href="#">Daily</a>
                              </li>
                              <li><a href="#">Monthly</a>
                              </li>
                              <li><a href="#">Yearly</a>
                              </li>
                           </ul>
                        </div>
                        <!-- END button group-->
                        <div class="panel-title">Projects Hours</div>
                     </div>
                     <div collapse="panelChart3" class="panel-wrapper">
                        <div class="panel-body">
                           <div class="indicator show">
                              <span class="spinner"></span>
                           </div>
                           <div class="chart-bar-stackedv2 flot-chart"></div>
                        </div>
                     </div>
                  </div>
                  <!-- END bar chart-->
               </div>
            </div>
            <div class="unwrap mv-lg">
               <!-- START chart-->
               <div id="panelChart9" ng-controller="FlotChartController" class="panel">
                  <div class="panel-heading">
                     <!-- START button group-->
                     <div class="pull-right btn-group">
                        <button type="button" data-toggle="dropdown" class="dropdown-toggle btn btn-default btn-sm">All time</button>
                        <ul role="menu" class="dropdown-menu fadeInLeft animated">
                           <li><a href="#">Daily</a>
                           </li>
                           <li><a href="#">Monthly</a>
                           </li>
                           <li class="divider"></li>
                           <li><a href="#">All time</a>
                           </li>
                        </ul>
                     </div>
                     <!-- END button group-->
                     <div class="panel-title">Overall progress</div>
                  </div>
                  <div collapse="panelChart9" class="panel-wrapper">
                     <div class="panel-body">
                        <div class="chart-splinev2 flot-chart"></div>
                     </div>
                     <div class="panel-body">
                        <div class="row">
                           <div class="col-sm-3 col-xs-6 text-center">
                              <p>Projects</p>
                              <div class="h1">25</div>
                           </div>
                           <div class="col-sm-3 col-xs-6 text-center">
                              <p>Teammates</p>
                              <div class="h1">85</div>
                           </div>
                           <div class="col-sm-3 col-xs-6 text-center">
                              <p>Hours</p>
                              <div class="h1">380</div>
                           </div>
                           <div class="col-sm-3 col-xs-6 text-center">
                              <p>Budget</p>
                              <div class="h1">$ 10,000.00</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END chart-->
            </div>
            <!-- START radial charts-->
            <div class="row mb-lg">
               <div class="col-sm-3 col-xs-6 text-center">
                  <p>Current Project</p>
                  <canvas data-classyloader="" data-height="150px" data-diameter="60" data-font-size="25px" data-percentage="60" data-speed="30" data-line-color="#23b7e5" data-remaining-line-color="#edf2f6" data-line-width="2"></canvas>
               </div>
               <div class="col-sm-3 col-xs-6 text-center">
                  <p>Current Progress</p>
                  <canvas data-classyloader="" data-height="150px" data-diameter="60" data-font-size="25px" data-percentage="30" data-speed="30" data-line-color="#f532e5" data-remaining-line-color="#edf2f6" data-line-width="2"></canvas>
               </div>
               <div class="col-sm-3 col-xs-6 text-center">
                  <p>Space Usage</p>
                  <canvas data-classyloader="" data-height="150px" data-diameter="60" data-font-size="25px" data-percentage="50" data-speed="30" data-line-color="#7266ba" data-remaining-line-color="#edf2f6" data-line-width="2"></canvas>
               </div>
               <div class="col-sm-3 col-xs-6 text-center">
                  <p>Interactions</p>
                  <canvas data-classyloader="" data-height="150px" data-diameter="60" data-font-size="25px" data-percentage="75" data-speed="30" data-line-color="#ff902b" data-remaining-line-color="#edf2f6" data-line-width="2"></canvas>
               </div>
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
