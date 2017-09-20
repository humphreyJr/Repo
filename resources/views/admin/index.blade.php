<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>SlashMyFees</title>
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
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="navbar-collapse collapse">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li></li>
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
			<h2>Latest Leads</h2>
			<table class="table">
				<tr>
					<td>

					</td>
					<td>
						Lead Id
					</td>
					<td>
						Name	
					</td>
					<td>
						Email
					</td>
					<td>
						Status
					</td>
					<td>
						Phone
					</td>
					<td>
						Avg. Monthly
					</td>
					<td>
						Edit
					</td>
					<td>
						Delete
					</td>
				</tr>
				<?php
					$i = 0;
				?>
				@foreach( $leads as $lead) 
				<?php
					$i++;	
				?>
				<tr>
					<td>
						{{ $i }}
					</td>
					<td>
						{{ $lead->id }}
					</td>
					<td>
						{{ $lead->name }}
					</td>
					<td>
						<a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>
					</td>
					<td>
						<?php
							$status = '';
							if( $lead->status_id == 1 ) {
								$status = 'Unreachable';	
							} else if ( $lead->status_id == 2 ) {
								$status = 'New';
							} else if ( $lead->status_id == 3 ) {
								$status = 'Pending';
							} else if ( $lead->status_id == 4 ) {
								$status = 'Accepted';
							} else if ( $lead->status_id == 5 ) {

							}
						?>
						<select name="lead_status_id" id="lead-status-id" class="form-control">
							<option value="1">Unreachable</option>
							<option value="2">New</option>
							<option value="3">Pending</option>
							<option value="4">Accepted</option>
						</select>	
					</td>
					<td>
						{{ $lead->phone_number }}
					</td>
					<td>
						<?php
							setlocale(LC_MONETARY, 'en_US');
						?>
						$ {{ money_format('%i', $lead->monthly_transaction) }}
					</td>
					<td>
						<button class="btn btn-primary">Edit</button>
					</td>
					<td>
						<button class="btn btn-danger">Delete</button>
					</td>
				</tr>
				@endforeach
			</table>
         </div>
      </section>
      <!-- Page footer-->
      <footer>
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
   <script src="/js/demo/demo-rtl.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SPARKLINE-->
   <script src="/vendor/sparklines/jquery.sparkline.min.js"></script>
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
   <script src="/js/demo/demo-flot.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="/js/app.js"></script>
</body>

</html>
