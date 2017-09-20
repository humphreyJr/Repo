@include('user.header')
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
			   <form method="post" action="/secure/user/settings/update">
               <div id="panelChart9" ng-controller="FlotChartController" class="panel">
                  <div class="panel-heading">
                     <div class="panel-title"><h2>Account Settings</h2></div>
                  </div>
				  <div style="padding-left: 10px; padding-right: 10px; padding-bottom: 20px;">		
					<div class="row" style="padding-bottom: 14px;">
						<div class="col-md-6">
							<p style="font-size: 22px;">Name</p>
							<input type="text" name="name" value="{{ $user->name }}" class="form-control">
						</div>	
						<div class="col-md-6">
							<p style="font-size: 22px;">Email</p>
							<input type="text" name="email" value="{{ $user->email }}" class="form-control">
						</div>	
					</div>

					<div class="row" style="padding-bottom: 14px;">
						<div class="col-md-6">
							<p style="font-size: 22px;">Business Name</p>
							<input type="text" name="business_name" value="{{ $user->business_name }}" class="form-control">
						</div>	
						<div class="col-md-6">
							<p style="font-size: 22px;">Business Age</p>
							<input type="text" name="business_age" value="{{ $user->business_age }}" class="form-control">
						</div>	
					</div>

					<div class="row" style="padding-bottom: 14px;">
						<div class="col-md-6">
							<p style="font-size: 22px;">Category</p>
							<select class="form-control" name="base-category" id="base-category">
								@foreach($categories as $category) 
									<option value="{{ $category->id }}" @if($category->id == $parent_id) selected @endif>{{ $category->category }}</option>
								@endforeach
							</select>
						</div>	
						<div class="col-md-6">
							<p style="font-size: 22px;">Sub-Category</p>
							<select class="form-control" name="category" id="category">
								@foreach($category_list as $category) 
									<option value="{{ $category->id }}" @if($category->id == $category_id) selected @endif>{{ $category->category }}</option>
								@endforeach
							</select>
						</div>	
					</div>

					<div class="row" style="padding-bottom: 14px;">
						<div class="col-md-6">
							<p style="font-size: 22px;">Zip Code</p>
							<input type="text" name="zipcode" value="{{ $user->zipcode }}" class="form-control">
						</div>	
						<div class="col-md-6">
							<p style="font-size: 22px;">Phone Number</p>
							<input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control">
						</div>	
					</div>

					<div class="row">
						<div class="col-md-6">
							<p style="font-size: 22px;">Tell us about your business?</p>
							<textarea name="business_desc" id="business_desc" class="form-control input-lg">{{ $user->business_desc }}</textarea>
						</div>	
						<div class="col-md-6">
							<p style="font-size: 22px;">How did you hear about us?</p>
							<textarea name="hear_about_us" id="hear_about_us" class="form-control input-lg">{{ $user->hear_about_us }}</textarea>
						</div>	
					</div>
				  </div>

				  <div style="padding-left: 10px; padding-bottom: 20px;">		
				    <button class="btn btn-success btn-lg" style="font-size: 20px;">Update</button>
				  </div>
               </div>
               <!-- END chart-->
            </div>
            <!-- START radial charts-->
	   		</form>
         </div>
      </section>
      <!-- Page footer-->
@include('user.footer')
