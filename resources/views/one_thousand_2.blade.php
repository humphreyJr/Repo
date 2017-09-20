@include('includes.header') 
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
      <div class="charities" id="charities" style="background-color: #fff;">
        <div style="padding-top: 60px; padding-bottom: 60px; margin-left: 25px; margin-right: 25px;">
			<div class="row">
				<div class="col-md-8">
            		<center><h2 style="text-decoration: underline;font-size: 36px;">Our $1000 Promise</h2></center>
					<h2>How it works:</h2>
					<ul style="font-size: 18px;">
						<li>Sign up & upload your current credit card statement</li>
						<li>We negotiate bids to find the best rates for your business</li>
						<li>To be simple & transparent, we present you with all the bids</li> 
						<li>You choose your preferred bid and we connect you so they can help you get started!</li>
					</ul>

					<h2>It's a WIN-WIN:</h2>
					<p style="font-size: 18px;">If none of our partners can beat your current rate, we will give you $1,000!
					You have nothing to lose and everything to gain! You either get $1,000 cash, or you save even way more than that with your new processor!</p>	
					
					<center><h2 style="font-style: italic;">Either Way You & Your Business Win:</h2></center>
					<center><img src="/img/one_thousand.jpg" width="800"></center>
				</div>
				<div class="col-md-4">
					<img src="/img/screen-shot.jpg" style="padding-top: 20px;">
					<center><h3>Sign Up Now</h3></center>
					<form action="/registration/signup2/" method="post" enctype="multipart/form-data" style="padding-top: 10px;">
                		<div class="form-group">
                  			<input type="text" id="regName" name="name" value="" data-validation="required" style="background-color: #fff; color: #000;" class="form-control" placeholder="Name">
                		</div>
                		<div class="form-group">
                  			<input type="email" id="regMail" name="email" value="" data-validation="email" class="form-control" style="background-color: #fff; color: #000" placeholder="Email">
                		</div>
                		<div class="form-group">
                  			<input type="email" id="confirmEmail" name="confirmemail" value="" data-validation="confirmation" data-validation-confirm="email" class="form-control " style="background-color: #fff; color: #000" placeholder="Confirm Email">
                		</div>
                		<div class="form-group">
                  			<input type="password" id="password" name="password" value="" data-validation="length" data-validation-length="min6" class="form-control" style="background-color: #fff; color: #000" placeholder="Password">
                		</div>
                		<div class="form-group">
                  			<input type="password" id="password1" name="password1" value="" data-validation="confirmation" data-validation-confirm="password" class="form-control " style="background-color: #fff; color: #000" placeholder="Confirm Password">
                		</div>
                		<div class="form-group">
							<span class="btn btn-success btn-file btn-lg" style="background-color: #5cb85c;">	
								Upload Statement<input type="file" name="file-upload" id="file-upload">
							</span>
                            <div style="padding-top: 5px;">
                                Your contact information is secure with us, and will not be shared. 
                            </div>
                		</div>
						<p>By clicking on continue, you agree to our <a href="https://slashmyfees.com/terms" target="_blank">Terms and Service</a>.</p>
						<button class="btn btn-primary" style="text-transform: uppercase; background-color: #e86c00; border-color: #e86c00;">Continue</button>	
						<input type='hidden' value='{{ $aff_id }}' name="aff_id">
					</form>				
				</div>	
			</div>
        </div>
    </div> 
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '922313467856590');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=922313467856590&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@include('includes.footer') 
