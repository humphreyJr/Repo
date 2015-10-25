    <!-- ///  begin footer  /// -->
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 social text-center">
            <ul class="list-inline">
              <li>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="http://www.facebook.com/slashmyfees" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-vimeo-square"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-12 text-center">
            <span>SlashMyFees 2015</span>
			<span style="padding-left: 15px;">
				<a href="/affiliates" style="color: #fff;">Affiliates</a>
			</span>
			<span style="padding-left: 15px;">
				<a href="/terms" style="color: #fff;">Terms
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
    <script src="bootstrap-3.1.1/js/bootstrap.min.js"></script>
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

			$('#contact_button').click(function() {

				var contact_name = $('#contact_name').val();	
				var contact_email = $('#contact_email').val();
				var contact_message = $('#message').val();
				$.post("/contact", { contact_name: contact_name, contact_email: contact_email, contact_message: contact_message});

				alert('Thank You For Contact Us');
			});
		});
	</script>
  </body>
</html>
