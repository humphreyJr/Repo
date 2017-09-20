@include('includes.header') 
      <div class="charities" id="charities" style="background-color: #fff;">
        <div style="height: 400px; padding-top: 60px; margin-left: 25px; margin-right: 25px;">
            <h2>Sign In</h2>
			<form method="post" action="/auth/login/action">				
				<div style="width: 300px; margin-left: auto; margin-right: auto;">
					<div class="row">
						<div class="col-md-4"><p style="font-size: 18px;">Email:</p></div>
						<div class="col-md-8"><input type="text" name="email" class="form-control"></div>
					</div>
					<div class="row" style="padding-top: 10px;">
						<div class="col-md-4"><p style="font-size: 18px;">Password:</p></div>
						<div class="col-md-8"><input type="password" name="password" class="form-control"></div>
					</div>
					<div style="height: 20px;">
					</div>
					<button class="btn btn-primary btn-lg" style="background-color: #e86c00; border-color: #e86c00;">Sign In</button>
					<div style="display: inline; float: right;font-size: 18px; ">
						New to SlashMyFees? <p><a href="/registration">Sign up free here!</a></p>
					</div>
				</div>
			</form>
        </div>
    </div> 
@include('includes.footer') 
