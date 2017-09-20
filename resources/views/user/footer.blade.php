      <footer class="text-center">
         <span>SlashMyFees {{ date("Y") }}</span>
      </footer>
   </div>

	@if(isset($vendors) != null) 
        @foreach($vendors as $vendor)
			<!-- Modal -->
			<div id="vendor-accept-modal-{{ $vendor->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade" style="display: none;">
			  <div class="modal-dialog">
				 <div class="modal-content">
					<div class="modal-header" style="background-color: #23b7e5; color: #fff;">
					   <button type="button" data-dismiss="modal" aria-label="Close" class="close">
						  <span aria-hidden="true">×</span>
					   </button>
					   <h4 id="myModalLabel" class="modal-title text-center">Confirm Bid</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-4">
								<img src="{{ $vendor->company_logo }}" alt="" class="media-box-object img-responsive img-rounded" style="align: center; height: 100px;">	
							</div>
							<div class="col-md-8">
								<h2 class="text-center" style="margin-bottom: 0px;">Your Quote:</h2>
								<h2 class="text-center" style="color: #27c24c; margin-top: 10px; font-size: 48px;">$ <span>{{ number_format( $pricing_array[$vendor->id], 2, '.', ',') }}</span> / <span style="font-size: 18px;">Month</span></h2>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<form method="post" action="/secure/user/accept_bid">
							<input type="submit" value="Accept Bid" class="btn btn-primary" style="background-color: #e86c00; border-color: #e86c00;">
							<input type="hidden" value="{{ $vendor->id }}" name="vendor_id">
							<input type="hidden" value="{{ $pricing_array[$vendor->id] }}" name="quote">
							<button type="button" data-dismiss="modal" class="btn btn-default">Look At Other Bid</button>
						</form>
					</div>
				 </div>
			  </div>
		   </div>
        @endforeach
	@endif
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
   <!-- =============== APP SCRIPTS ===============-->
   <script src="/js/app.js"></script>

    <script>
        $( document ).ready(function() {

            $('#contact_button').click(function() {

                var contact_name = $('#contact_name').val();    
                var contact_email = $('#contact_email').val();
                var contact_message = $('#message').val();
                $.post("/contact", { contact_name: contact_name, contact_email: contact_email, contact_message: contact_message});

                alert('Thank You For Contact Us');
            });

            $(".carousel").carousel({ interval: 1000 * 10 });       


            $("#base-category").change(function() {
                console.log(this.value);
                $.getJSON("/subcategory/" + this.value + "/", function(data) {
                    $("#category").find('option').remove().end();
                    $.each(data, function(){
                        $("#category").append('<option value="'+ this.id +'">'+ this.category +'</option>')
                    })
                })
            });

        });
		</script>
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


</body>
