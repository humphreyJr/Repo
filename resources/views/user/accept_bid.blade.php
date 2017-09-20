@include('user.header')
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
				<div id="panelChart9" ng-controller="FlotChartController" class="panel">
					<div style="padding-left: 20px;">
						<h2 style="color: #000; margin-bottom: 0px;">What happens now?</h2>	
						<hr style="margin-top: 0px; margin-bottom: 10px;"/>
						<p style="font-size: 18px;">We have sent your contact information over to the merchant and they will be following up with you shortly</p>
					</div>

					<div style="padding-left: 20px;">
						<h2 style="color: #000; margin-bottom: 0px;">Your new processor</h2>	
						<hr style="margin-top: 0px; margin-bottom: 10px;"/>
						<p style="font-size: 18px;">If you would like to contact your new processor immediately, here is the relevant contact information:</p>
						<p><span style="font-weight: bold;">Business Name:</span> {{ $vendor->business_name }} </p>	
						<p><span style="font-weight: bold;">Contact:</span> {{ $vendor->contact_name }}</p>	
						<p><span style="font-weight: bold;">Phone:</span> {{ $vendor->phone_number }}</p>
						<p><span style="font-weight: bold;">Email:</span> <a href="mailto:{{ $vendor->email }}">{{ $vendor->email }}</a></p>
					</div>
				</div>
               <!-- END chart-->
            </div>
         </div>
      </section>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '124985447910485');
fbq('track', "PageView");
fbq('track', 'InitiateCheckout');

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=124985447910485&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@include('user.footer')
