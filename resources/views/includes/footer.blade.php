    <!-- ///  begin footer  /// -->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 social text-center">
            <ul class="list-inline">
              <li>
                <a href="https://twitter.com/slashmyfees"><i class="fa fa-twitter-square"></i></a>
                <a href="http://www.facebook.com/slashmyfees" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://plus.google.com/b/101420504852151295727/101420504852151295727/posts?gmbpt=true&pageId=101420504852151295727"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.linkedin.com/company/slashmyfees"><i class="fa fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-12 text-center">
            <span>SlashMyFees {{ date("Y") }}</span>
			<span style="padding-left: 15px;">
				<a href="/affiliates" style="color: #fff;">Affiliates</a>
			</span>
			<span style="padding-left: 15px;">
				<a href="/terms" style="color: #fff;">Terms
			</span>
			<span style="padding-left: 15px;">
				  <a href="http://www.slashmyfees.com/blog/" style="color: #fff;">Blog</a>
			</span>
			<span style="padding-left: 15px;">
				  <a href="/privacy/" style="color: #fff;">Privacy Policy</a>
			</span>
          </div>

          <div class="col-sm-12 text-center" style="padding-top: 20px;">
			<span>
				<a href="/what-are-merchant-services" style="color: #fff; font-size: 16px;">What are Merchant Services?</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/credit-card-processing" style="color: #fff; font-size: 16px;">Credit Card Processing</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/mobile-credit-card-processing" style="color: #fff; font-size: 16px;">Mobile Credit Card Processing</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/payment-terminals" style="color: #fff; font-size: 16px;">Payment Terminals</a>
			</span>
          </div>

          <div class="col-sm-12 text-center" style="padding-top: 20px;">
			<span>
				<a href="/merchant-solutions" style="color: #fff; font-size: 16px;">Merchant Solutions</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/pos-system" style="color: #fff; font-size: 16px;">POS Systems</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/what-is-emv-compliance" style="color: #fff; font-size: 16px;">EMV Compliance</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/credit-card-fees-rates" style="color: #fff; font-size: 16px;">Credit Card Fees & Rates</a>
			</span>
          </div>

          <div class="col-sm-12 text-center" style="padding-top: 20px;">
			<span>
				<a href="/credit-card-processing-providers" style="color: #fff; font-size: 16px;">Credit Card Processing Providers</a>
			</span>
			<span style="padding-left: 20px;">
				<a href="/pos-partners" style="color: #fff; font-size: 16px;">POS Partners</a>
			</span>
          </div>

        </div>
      </div>
    </footer>
    <!-- ///  end footer  /// -->

    <!-- ///  start script  /// -->
    <!-- ///  libs  /// -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="/js/libs/modernizr-latest.js"></script>
    <script src="/js/libs/jquery-1.11.0.min.js"></script>
    <script src="/bootstrap-3.1.1/js/bootstrap.min.js"></script>
	<script src="https://fb.me/react-0.14.0.min.js"></script>
	<script src="https://fb.me/react-dom-0.14.0.min.js"></script>
    <!-- ///  plugins  /// -->
    <script src="/js/plugins/fitvids/jquery.fitvids.js"></script>
    <script src="/js/plugins/select/bootstrap-select.min.js"></script>
    <script src="/js/plugins/gmap3/gmap3.min.js"></script>
    <script src="/js/plugins/scrollTo/jquery.scrollTo.js"></script>
    <script src="/js/plugins/nav/jquery.nav.js"></script>
    <script src="/js/plugins/countdown/countdown.js"></script>
    <script src="/js/plugins/placeholder/jquery.placeholder.js"></script>
    <script src="/js/plugins/validator/jquery.form-validator.min.js"></script>
    <script src="/js/plugins/wow/wow.min.js"></script>
    <script src="/js/main.js"></script>

	<script>
		$( document ).ready(function() {

			$.validate({
				modules : 'security'
			});

			$('#contact_button').click(function() {

				var contact_name = $('#contact_name').val();	
				console.log(contact_name);
				var contact_email = $('#contact_email').val();
				console.log(contact_email);
				var contact_message = $('#message').val();
				console.log(contact_message);
				if( contact_name != '' && contact_email != '' && contact_message != '' ) {
					$.post("/contact", { contact_name: contact_name, contact_email: contact_email, contact_message: contact_message});
					alert('Thank You For Contact Us');
				}
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

			$(".transaction-percentage").blur(function() {
				var sum = 0;
				$('.transaction-percentage').each(function() {
					sum += Number($(this).val());
				});

				if( sum == 100 ) {
					$('#total-percentage').html("<span style='color: green;'>" + sum + " %</span>");	
				} else {
					$('#total-percentage').html("<span style='color: red;'>" + sum + " %</span><div style='color:red'>This does not add up too 100%</div>");	
				}
				$('#total-validation').val(sum);
			});

		});

	</script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-69916374-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<script type="text/javascript">
		adroll_adv_id = "WPEVJQ3TOVEF5PCTDAUT3Y";
		adroll_pix_id = "ZZ4KY6563RC5NFO35WGSVS";
		/* OPTIONAL: provide email to improve user identification */
		/* adroll_email = "username@example.com"; */
		(function () {
			var _onload = function(){
				if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
				if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
				var scr = document.createElement("script");
				var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
				scr.setAttribute('async', 'true');
				scr.type = "text/javascript";
				scr.src = host + "/j/roundtrip.js";
				((document.getElementsByTagName('head') || [null])[0] ||
					document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
			};
			if (window.addEventListener) {window.addEventListener('load', _onload, false);}
			else {window.attachEvent('onload', _onload)}
		}());
	</script>

  </body>
</html>
