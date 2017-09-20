<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
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
</body>
</html>
