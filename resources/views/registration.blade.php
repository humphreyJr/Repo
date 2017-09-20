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
        <div style="padding-top: 60px; margin-left: 25px; margin-right: 25px; padding-bottom: 50px;">
			<div class="row">
				<div class="col-md-12">
            		<h2 class="text-center">Step 1: Sign Up Below To Receive Your Quotes</h2>
				</div>
			</div>
			<div class="row" style="padding-top: 20px;">
				<div class="col-md-5">
					<form action="/registration/signup2/" method="post" enctype="multipart/form-data">
                		<div class="form-group">
                  			<input type="text" id="regName" name="name" value="" data-validation="required" style="background-color: #fff; color: #000;" class="form-control input-lg" placeholder="Name">
                		</div>
                		<div class="form-group">
                  			<input type="email" id="regMail" name="email" value="{{ $email }}" data-validation="email" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Email">
                		</div>
						<!--
                		<div class="form-group">
                  			<input type="email" id="confirmEmail" name="confirmemail" value="" data-validation="confirmation" data-validation-confirm="email" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Confirm Email">
                		</div>
						-->
                		<div class="form-group">
                  			<input type="password" id="password" name="password" value="" data-validation="length" data-validation-length="min6" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Password">
                		</div>
						<!--
                		<div class="form-group">
                  			<input type="password" id="password1" name="password1" value="" data-validation="confirmation" data-validation-confirm="password" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Confirm Password">
                		</div>
						-->
                        <div class="form-group" style="display:none;">
                            <span class="btn btn-success btn-file btn-lg" style="background-color: #5cb85c;">
                                Upload Statement<input type="file" name="file-upload" id="file-upload">
                            </span>
							<div style="padding-top: 5px;">
								<h3>Your contact information is secure with us, and will not be shared.</h3>	
							</div>
                        </div>	
						<p>By clicking on continue, you agree to our <a href="https://slashmyfees.com/terms" target="_blank">Terms and Service</a>.</p>
						<button class="btn btn-primary btn-lg" style="text-transform: uppercase; background-color: #e86c00; border-color: #e86c00;">Continue</button>	
					</form>
			</div>
			<div class="col-md-5">
				<div class="registration-step-1-box" style="background-color: #f9f9f9; position: relative;">
					<div style="padding-left: 0px;">
						<h2 class="text-center" style="padding-top: 20px; text-decoration: underline;">SlashMyFees Offers</h2>
						<div class="registration-step-1-box-left">
							<ul style="font-size: 18px;" class="bullet-trick">
								<li style="text-align: left;"><span style="color: #000; font-size: 20px;">Instant quotes from our certified partners</span></li>
								<li style="text-align: left;"><span style="color: #000; font-size: 20px;">View detailed explainations of your rates</span></li>
								<li style="text-align: left;"><span style="color: #000; font-size: 20px;">No hidden costs or cancellation fees</span></li>
								<li style="text-align: left;"><span style="color: #000; font-size: 20px;">Protection of your private information</span></li>
								<li style="text-align: left;"><span style="color: #000; font-size: 20px;">Top tier customer service</span></li>
								<li style="text-align: left;"><span style="color: #000; font-size: 20px;">Full transparency</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div> 
<!-- Google Code for SlashMyFees Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1063897908;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "Z5gpCOXtyGEQtJan-wM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1063897908/?label=Z5gpCOXtyGEQtJan-wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
@include('includes.footer') 
