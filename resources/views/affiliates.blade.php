@include('includes.header') 
      <div class="charities" id="charities" style="background-color: #fff;">
        <div style="padding-top: 120px; margin-left: 25px; margin-right: 25px;">
            <h2>Affiliates</h2>

			<div>
				We are the Uber/Kayak of credit card processing. If you’re looking to make extra money on the side sign up as a partner. Get paid to send someone to your unique online ID. If you’re a business owner that would like to sign up as a partner, sign up and get paid on your own transaction. If you have any questions, feel free to call us 1 800 209-2709.	
			</div>	

			<div style="padding-top: 40px;">
				If you're interested in our referral program, please fill out your information below for details:	
				<form method="post" action="/affiliates-thank-you">
					<div class="table" style="padding-top: 40px;">
						<table class="table">
							<tr>
								<td>Name:</td>
								<td><input type="text" name="name" id="name" value="" data-validation="required" class="form-control"></td>
							</tr>
							<tr>
								<td>Address:</td>
								<td><input type="text" name="address" id="address" value="" data-validation="required" class="form-control"></td>
							</tr>
							<tr>
								<td>Zipcode:</td>
								<td><input type="text" name="zipcode" id="zipcode" value="" data-validation="required" class="form-control"></td>
							</tr>
							<tr>
								<td>Phone Number:</td>
								<td><input type="text" name="phone_number" id="phone_number" value="" data-validation="required" class="form-control"></td>
							</tr>
							<tr>
								<td>Email:</td>
								<td><input type="text" name="email" id="email" value="" data-validation="required" class="form-control"></td>
							</tr>
							<tr>
								<td>How did you hear about us?</td>
								<td><textarea name="about" class="form-control"></textarea></td>
							</tr>
							<tr>
								<td>Notes:</td>
								<td><textarea name="notes" class="form-control"></textarea></td>
							</tr>
						</table>
						<input type="hidden" value="{{ $aff_id }}" name="aff_id">
						<button class="btn btn-lg btn-primary" style="background-color: #e86c00; border-color: #e86c00;">Contact Us</button>
					</div>
				</form>
			</div>	
        </div>
    </div> 
@include('includes.footer') 
