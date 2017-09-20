@include('includes.header') 
      <div class="charities" id="charities" style="background-color: #fff;">
        <div style="padding-top: 60px; margin-left: 25px; margin-right: 25px; padding-bottom: 50px;">
			<form method="post" action="/registration/complete_signup">
				<input type="hidden" name="user_id" value="{{ $user_id }}">
				<div class="row">
					<div class="col-md-12">
						<h2 class="text-center" style="text-decoration: underline;">Complete Signup</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
							<h3 class="text-center" style="text-decoration: underline;">Business Information</h3>
							<div class="row">	
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" id="business_name" name="business_name" value="" data-validation="required" style="background-color: #fff; color: #000;" class="form-control input-lg" placeholder="Business Name">
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" id="business_age" name="business_age" value="" data-validation="required" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Business Age (Years)">
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12">
									<div class="form-group">
										<select class="form-control input-lg" name="base-category" id="base-category">
											<option>Please choose a category</option>
											@foreach($categories as $category) 
												<option value="{{ $category->id }}">{{ $category->category }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12">
									<div class="form-group">
										<select class="form-control input-lg" name="category" id="category" data-validation="length" data-validation-length="min1">
										</select>
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" id="zip_code" name="zip_code" value="" data-validation="length" data-validation-length="min4" style="background-color: #fff; color: #000;" class="form-control input-lg" style="width: 200px;" placeholder="Zip Code">
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" id="phone_number" name="phone_number" value="" data-validation="length" data-validation-length="min6" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Phone Number">
									</div>
								</div>
							</div>
					</div>
					<div class="col-md-6">
						<h3 class="text-center" style="text-decoration: underline;">Tell Us About Your Processing Volume</h3>

						<div class="row" style="padding-top: 20px;">
							<div class="col-md-6">
								Do you currently accept cards?	
								<div style="padding-top: 5px;">
										<span style="padding-right: 20px; padding-left: 20px;"><input type="radio">&nbsp;&nbsp;&nbsp;&nbsp;Yes</span>
										<span><input type="radio">&nbsp;&nbsp;&nbsp;&nbsp;No</span>
								</div>
							</div>
							<div class="col-md-6">
								Will you accept Amex & Discover?	
								<div style="padding-top: 5px;">
										<span style="padding-right: 20px; padding-left: 20px;">
											<input type="checkbox" name="use_discover" value="1">&nbsp;&nbsp;&nbsp;&nbsp;<img src="/img/icon-payment-discover.png" style="width: 40px;">
										</span>
										<span>
											<input type="checkbox" name="use_amex" value="1">&nbsp;&nbsp;&nbsp;&nbsp;<img src="/img/amex_512.png" style="width: 40px;">
										</span>
										<!-- <span style="padding-left: 20px;">
											<img src="/img/icon-visa-mcard.png" style="width: 60px;"> 		
										</span> -->	
								</div>
							</div>
						</div>

						<div class="row" style="padding-top: 20px;">
							<div class="col-md-6">
									Average Monthly Credit Card Processing?	
									<div style="padding-top: 5px;">
										<input type="text" name="average_monthly_credit" placeholder="$" data-validation="length" data-validation-length="min2" class="form-control input-lg" style="width: 200px;">
									</div>
							</div>
							<div class="col-md-6">
									Average Transaction Amount?	
									<div style="padding-top: 5px;">
										<input type="text" name="average_transaction_amount" placeholder="$" data-validation="length" data-validation-length="min2" class="form-control input-lg" style="width: 200px;">
									</div>
							</div>
						</div>

						<div class="row" style="padding-top: 20px;">
							<div class="col-md-4">
								In Store:	
								<input type="text" placeholder="%" name="in_person" class="transaction-percentage form-control input-lg" style="min-width: 20px;">
							</div>
							<div class="col-md-4">
								Online:	
								<input type="text" placeholder="%" name="ecommerce" class="transaction-percentage form-control input-lg" style="min-width: 20px;">
							</div>
							<div class="col-md-4">
								Hand-key:
								<input type="text" placeholder="%" name="phone" class="transaction-percentage form-control input-lg"  style="min-width: 20px;">
							</div>
						</div>

						<div class="row" style="padding-top: 20px;">
							<div class="col-md-12">
								<div class="text-center" style="font-size: 20px; font-weight: bold;" name="total" id="total">Total: <span id="total-percentage"></span></div>	
							</div>
						</div>

						<div class="row" style="padding-top: 20px;">
							<div class="col-md-6">
								Tell us about your business?
								<textarea name="business_description" id="business_description" class="form-control input-lg"></textarea>
							</div>
							<div class="col-md-6">
								How did you hear about us?	
								<textarea name="about_us" id="about_us" class="form-control input-lg"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<p style="padding-top: 10px; float: right;">We value your privacy, so we will keep your information safe. Only the vendor whose bid you select will be able to see your contact info.</p>
							</div>
						</div>	
					</div>
				</div>
			
				<div style="height: 20px;">
				</div>
				<div style="float: right;">
					<button class="btn btn-danger btn-lg" style="text-transform: uppercase;">Back</button>	
					<button class="btn btn-primary btn-lg" style="text-transform: uppercase; background-color: #e86c00; border-color: #e86c00;">Get Quotes</button>	
				</div>
			</form>
    </div> 
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '124985447910485');
fbq('track', "PageView");
fbq('track', 'Lead');

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=124985447910485&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
@include('includes.footer') 
