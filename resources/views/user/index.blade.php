@include('user.header')
<style>
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
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
				<form method="post" enctype="multipart/form-data" action="">	
				<input type="hidden" name="update_form" value="1">
				<div style="padding-top: 20px;">	
					 <div class="row" style="padding-bottom: 5px;">	
						<div class="col-md-2 text-center">
							<span style="font-weight: bold; font-size: 16px;">Your Details</span>
						</div>
						<div class="col-md-2 text-center">
							<span style="font-weight: bold; font-size: 16px;">% Sales by Channel</span>
						</div>
						<div class="col-md-2 text-center">
							<span style="font-weight: bold; font-size: 16px;">Amex/Discover</span>	
						</div>
						<div class="col-md-3 text-center">
							<span style="font-weight: bold; font-size: 16px;">How do you process transactions?</span> 	
						</div>
						<div class="col-md-3 text-center">
							<span style="font-weight: bold; font-size: 16px;">Tools</span>
						</div>
					 </div>
					 <div class="row" style="padding-bottom: 20px;">	
						<div class="col-md-2 text-center">
							<span>Monthly Card Volume</span>
							<center>
								<input type="text" name="monthly_transaction" value="$ {{ number_format( $user->monthly_transaction, 2, '.', ',') }}" class="form-control" style="width: 120px;">
							</center>
							<div style="padding-top: 7px;">
								<span>Avg. Transaction Size</span>
								<center>
									<input type="text" name="avg_transaction" value="$ {{ number_format( $user->avg_transaction, 2, '.', ',') }}" class="form-control" style="width: 120px;">
								</center>
							</div>
						</div>
						<div class="col-md-2 text-center">
							<span>In Person</span>
							<center>
								<input type="text" name="in_person" value="{{ $user->in_person }} %" class="form-control" style="width: 70px;">
							</center>
							<div style="padding-top: 7px;">
								<span>Online</span>
								<center>
									<input type="text" name="online" value="{{ $user->online }} %" class="form-control" style="width: 70px;">
								</center>
							</div>
							<div style="padding-top: 7px;">
								<span>Hand-key</span>
								<center>
									<input type="text" name="mobile" value="{{ $user->mobile }} %" class="form-control" style="width: 70px;">
								</center>
							</div>
						</div>
						<div class="col-md-2">
							<div style="padding-left: 50px;">
								<div style="padding-bottom: 4px;">
									<input type="checkbox" @if($user->use_amex == 1 ) checked @endif name="use_amex" value="1">&nbsp;&nbsp;<img src="/img/amex_512.png" style="width: 40px;">
								</div>	
								<div>
									<input type="checkbox" @if($user->use_discover == 1 ) checked @endif name="use_discover" value="1">&nbsp;&nbsp;<img src="/img/icon-payment-discover.png" style="width: 40px;">
								</div>	
							</div>
						</div>
						<div class="col-md-3">
							<div style="padding-left: 30px;">
								<div style="padding-bottom: 5px;"><input type="radio" name="process_transaction" value="3" @if( $user->process_transaction == 3 ) checked @endif>&nbsp;&nbsp;POS System/Other</div> 	
								<div style="padding-bottom: 5px;"><input type="radio" name="process_transaction" value="2" @if( $user->process_transaction == 2 ) checked @endif>&nbsp;&nbsp;Mobile Payments</div> 
								<div style="padding-bottom: 5px;"><input type="radio" name="process_transaction" value="1" @if( $user->process_transaction == 1 ) checked @endif>&nbsp;&nbsp;Online Gateway</div> 
							</div>
						</div>
						<div class="col-md-3 text-center">
							<button class="btn btn-primary btn-lg" style="background-color: #27c24c; font-size: 24px;"><span class="fa fa-refresh"></span>&nbsp;&nbsp;Refresh Bids</button>
			               	<div class="form-group" style="padding-top: 20px;">
								<span class="btn btn-success btn-lg btn-file btn-lg" style="background-color: #27c24c;">
									Upload Statement<input type="file" name="file-upload" id="file-upload">
								</span>
					           	<div style="padding-top: 5px; text-align: left; font-weight: bold; font-color: #000;">
                                	Your contact information is secure with us, and will not be shared. 
                            	</div>
                        	</div>		
						</div>
					 </div>
				</div>	

               </div>
			   </form>
               <!-- END chart-->
            </div>
		   <div id="panelChart9" ng-controller="FlotChartController" class="panel">
				<p style="padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">* Below are estimates</p>
		   </div>
            <!-- START radial charts-->
            <!-- START Multiple List group-->
			<?php 
				$pricing_array = array();
			?>
			@foreach($vendors as $vendor)	
				<div class="panel" style="min-height: 100px;">
				  <table class="wd-wide">
					 <tbody>
						<tr>
						   <td style="width: 40px;">
							<div style="padding-left: 5px;" class="text-center">
							<?php
								$monthly_fee = 0;
								$avg_transaction = $user->avg_transaction;
								$monthly_transaction = $user->monthly_transaction;
								$markup_amount = 0;
								$markup_percentage = 0;
	
								if( $avg_transaction == 0 ) {
									$avg_transaction = 1;
								}

								if( $monthly_transaction > 5000 ) {
									$monthly_fee = $vendor->above_5000; 
								} else {
									$monthly_fee = $vendor->below_5000; 
								}

								if( $vendor->id == 7 ) {
									if( $user->online > 50 ) {
										$monthly_fee = 25; 
									} else {
										$monthly_fee = 12; 
									}	
								}

								$processor_markup = 0;
								if( $vendor->id == 3 ) {
									if( $monthly_transaction > 5000 ) {
										$markup_amount = .10;
										$markup_percentage = .002;
										$processor_markup = ($monthly_transaction * .002) + (($monthly_transaction/$avg_transaction) * .10); 
									} else {
										$markup_amount = .10;
										$markup_percentage = .005;
										$processor_markup = ($monthly_transaction * .005) + (($monthly_transaction/$avg_transaction) * .10); 
									}
								}


								if( $vendor->id == 4 ) {
									if($avg_transaction > 10) {
										$markup_amount = .10;
										$markup_percentage = .002;
										$processor_markup = ($monthly_transaction * .002) + (($monthly_transaction/$avg_transaction) * .10); 
									} else {
										$markup_amount = .10;
										$markup_percentage = .001;
										$processor_markup = ($monthly_transaction * .001) + (($monthly_transaction/$avg_transaction) * .10); 
									}
								}

								if( $vendor->id == 5 ) {
									$markup_amount = .10;
									$markup_percentage = .0025;
									$processor_markup = ($monthly_transaction * .0025) + (($monthly_transaction/$avg_transaction) * .10); 
								}

								if( $vendor->id == 6 ) {
									if( $user->online > 50 ) {
										$markup_amount = .15;
										$markup_percentage = .002;
										$processor_markup = ($monthly_transaction * .002) + (($monthly_transaction/$avg_transaction) * .15); 
									} else {
										$markup_amount = .10;
										$markup_percentage = .002;
										$processor_markup = ($monthly_transaction * .002) + (($monthly_transaction/$avg_transaction) * .10); 
									}	
								}

								if( $vendor->id == 7 ) {
									if( $user->online > 50 ) {
										$markup_amount = .25;
										$markup_percentage = .0036;
										$processor_markup = ($monthly_transaction * .0036) + (($monthly_transaction/$avg_transaction) * .25); 
									} else {
										$markup_amount = .08;
										$markup_percentage = .0018;
										$processor_markup = ($monthly_transaction * .0018) + (($monthly_transaction/$avg_transaction) * .08); 
									}	
								}

								if( $vendor->id == 8 ) {
									$month_fee = 20.00;
								}

								if( $vendor->id == 8 ) {
									if( $user->online > 50 ) {
										$markup_amount = .15;
										$markup_percentage = .0025;
										$processor_markup = ($monthly_transaction * .0025) + (($monthly_transaction/$avg_transaction) * .15); 
									} else {
										$markup_amount = .10;
										$markup_percentage = .0025;
										$processor_markup = ($monthly_transaction * .0025) + (($monthly_transaction/$avg_transaction) * .10); 
									}	
								}

								if( $vendor->id == 9 ) {
									if( $user->online > 50 ) {
										$monthly_fee = 25.00;
									} else {
										$monthly_fee = 15.00;
									}	
								}

								if( $vendor->id == 9 ) {
									if( $monthly_transaction > 10000 ) {
										if( $user->online > 50 ) {
											$markup_amount = .12;
											$markup_percentage = .0039;
											$processor_markup = ($monthly_transaction * .0039) + (($monthly_transaction/$avg_transaction) * .12); 
										} else {
											$markup_amount = .07;
											$markup_percentage = .0039;
											$processor_markup = ($monthly_transaction * .0039) + (($monthly_transaction/$avg_transaction) * .07); 
										}	
									} else if($monthly_transaction > 10000 && $monthly_transaction < 15000) {
										if( $user->online > 50 ) {
											$markup_amount = .12;
											$markup_percentage = .0029;
											$processor_markup = ($monthly_transaction * .0029) + (($monthly_transaction/$avg_transaction) * .12); 
										} else {
											$markup_amount = .07;
											$markup_percentage = .0029;
											$processor_markup = ($monthly_transaction * .0029) + (($monthly_transaction/$avg_transaction) * .07); 
										}	
									} else if($monthly_transaction > 15000 && $monthly_transaction < 25000) {
										if( $user->online > 50 ) {
											$markup_amount = .12;
											$markup_percentage = .002;
											$processor_markup = ($monthly_transaction * .002) + (($monthly_transaction/$avg_transaction) * .12); 
										} else {
											$markup_amount = .12;
											$markup_percentage = .002;
											$processor_markup = ($monthly_transaction * .002) + (($monthly_transaction/$avg_transaction) * .07); 
										}	
									} else if($monthly_transaction > 25000 && $monthly_transaction < 50000) {
										if( $user->online > 50 ) {
											$markup_amount = .12;
											$markup_percentage = .0015;
											$processor_markup = ($monthly_transaction * .0015) + (($monthly_transaction/$avg_transaction) * .12); 
										} else {
											$markup_amount = .07;
											$markup_percentage = .0015;
											$processor_markup = ($monthly_transaction * .0015) + (($monthly_transaction/$avg_transaction) * .07); 
										}	
									} else {
										if( $user->online > 50 ) {
											$markup_amount = .12;
											$markup_percentage = .0009;
											$processor_markup = ($monthly_transaction * .0009) + (($monthly_transaction/$avg_transaction) * .12); 
										} else {
											$markup_amount = .07;
											$markup_percentage = .0009;
											$processor_markup = ($monthly_transaction * .0009) + (($monthly_transaction/$avg_transaction) * .07); 
										}	
									}	
								}


								if( $vendor->id == 10 ) {
									$monthly_fee = 15.00;
								}

								if( $vendor->id == 10 ) {
									$markup_amount = .10;
									$markup_percentage = .0015;
									$processor_markup = ($monthly_transaction * .0010) + (($monthly_transaction/$avg_transaction) * .10); 
								}

								$vendor_rate = $monthly_transaction * ($vendor->interchange * .01 ) + ($monthly_transaction/$avg_transaction * $vendor->interchange_rate ) + $monthly_fee + $processor_markup;	
								if( $category_id == 15 ) {
									$vendor_rate = $vendor_rate - ($vendor_rate * .10);	
								}
								$pricing_array[$vendor->id] = $vendor_rate;
							?>
								<div style="color: red; font-weight: bold;">Estimated fees</div>
								<span style="font-size: 46px; font-weight: bold;">$ {{ number_format( $vendor_rate, 2, '.', ',') }} </span><span class="font-size: 14px;"> / Month</span>
							</div>	
							<div class="text-center">
							  	<button class="btn btn-primary btn-lg" data-toggle="modal" style="font-size: 24px; background-color: #e86c00; border-color: #e86c00;" data-target="#vendor-accept-modal-{{ $vendor->id }}">Select Bid</button>
							</div>
						    <div style="height: 20px;">

						    </div>
						  </td>
						   <td class="wd-xs" style="width: 120px;">
								<div style="height: 20px;">
								</div>
							  	<div class="ph">
								 	<img src="{{ $vendor->company_logo }}" alt="" class="media-box-object img-responsive img-rounded" style="margin-left: auto;  margin-right: auto; height: 130px;">
							  	</div>
								<div style="height: 20px;">
								</div>
								<!--
							 		<div style="font-weight: bold;">Rating:</div>
								-->
						   </td>
						   <td class="wd-sm hidden-xs hidden-sm">
							<div style="padding-left: 10px;">
								<div class="row">
									<div class="col-md-5">
										Overall Rate
									</div>	
									<div class="col-md-3">
										{{ number_format($vendor->interchange + ($markup_percentage * 100), 2, '.','')  }} %
									</div>	
									<div class="col-md-3">
										$ {{ number_format($vendor->interchange_rate + $markup_amount, 2, '.', '') }}	
									</div>	
								</div>
								<div class="row">
									<div class="col-md-5">
										<p style="font-size: 9px;">Include all fees</p>	
									</div>	
									<div class="col-md-2">
										<p style="font-size: 9px;">of volume</p>
									</div>	
									<div class="col-md-3">
										<p style="font-size: 9px;">per transaction</p>	
									</div>	
								</div>
								<div class="row">
									<div class="col-md-5">
										<p style="font-size: 12px;">Processor Markup</p>	
									</div>	
									<div class="col-md-3">
										<p style="font-size: 12px;">{{ number_format(($markup_percentage * 100), 2, '.','') }} %</p>	
									</div>	
									<div class="col-md-3">
										<p style="font-size: 12px;">$ {{ number_format($markup_amount, 2, '.', '') }}</p>	
									</div>	
								</div>
								<div class="row">
									<div class="col-md-5">
										<p style="font-size: 12px;">Avg. Interchange</p>	
									</div>	
									<div class="col-md-3">
										<p style="font-size: 12px;">{{ number_format(($vendor->interchange), 2, '.','') }} %</p>	
									</div>	
									<div class="col-md-3">
										<p style="font-size: 12px;">$ {{ number_format($vendor->interchange_rate, 2, '.', '') }}</p>	
									</div>	
								</div>

							</div>
							<p style="font-size: 10px; padding-left: 5px;">This processor charges a fixed markup regardless <br />of the type of card</p>
						   </td>
						   <td class="wd-sm" style="width: 60px;">
								 <div><button class="btn btn-primary" style="font-size: 20px; background-color: #27c24c;">Explain</button></div>
								 <!-- <div style="padding-top: 10px;"><em class="fa fa-sort-desc"></em> <span style="font-size: 14px;">More Details</span></div> -->
						   </td>
						</tr>
					 </tbody>
				  </table>
				   <!-- END dashboard main content-->
				</div>
			@endforeach
            <!-- END Multiple List group-->
         </div>
      </section>
      <!-- Page footer-->
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '124985447910485');
fbq('track', "PageView");
fbq('track', 'CompleteRegistration');

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=124985447910485&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@include('user.footer')
