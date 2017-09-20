@include('includes.header') 
    <!-- ///  begin content  /// -->

    <!-- ///  begin promo  /// -->
    <div class="promo" id="home" style="background-image:url('/img/background_image.jpg');">
      <!-- ///  semitransparent layer  /// -->
      <div class="color-correction"></div> 
      <!-- ///  begin entry  /// -->         
      <div class="container">
        <div class="row">
          <!-- ///  begin text section  /// -->
          <div class="col-md-7" data-wow-duration="2s">
            <div class="promo-text register" style="max-width: 630px;">
			  <h2 class="text-left" style="font-weight: bold; font-size: 40px;">Find the best credit card processor with no long term contracts!</h2>
              <p class="lead text-left" style="font-weight: bold; font-size: 20px;">The free service that finds & negotiates the best rates for your business, delivering them for you to compare - Contact Us Today!</p>                  
       		  <ul class="text-left" style="font-weight: bold; font-size: 18px;">
				<li>In Less Than 5 Minutes, Save up to 40% on Your Credit Card Processing Fees</li>
				<li>Transparent - No Hidden Fees - No Cancellation Fees!</li>
				<li>Instant Quotes - No long term commitment</li>
				<li>We guarantee savings, if not we'll give you $100 gift card</li> 
				<li>Call Us Today: 1.800.240.0698</li>
			  </ul> 
    		</div>
          </div>
          <!-- ///  end text section  /// -->
          <!-- ///  begin registration form  /// -->
          <div class="col-md-4 col-md-offset-1" data-wow-duration="2s">
            <div class="register">
			  <script>
			  function validateStep1() {
					var email = document.getElementById("regMail").value;
					if ( email == null || email == "Email" || email == '' ) {
						alert("Please fill in your email.");
						return false;
					}
				}	
			  </script>
			  <div style="position: relative; top: -15px;">	
				<h2 style="border-bottom: 1px solid #fff; padding-bottom: 3px; width: 200px; margin-left: auto; margin-right: auto;">Step 1</h2>
			  </div>
              <form role="form" method="POST" action="/registration" onsubmit="return validateStep1()">
                <div class="form-group"> 
                  <input type="email" id="regMail" name="email" data-validation="email" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-success btn-block btn-lg" style="background-color: #e86c00; border-color: #e86c00;" id="registration-email">Get Started - Free Consultation</button>
				<!--
					<p style="margin-bottom: 0px; padding-top: 10px; font-size: 22px; font-weight: bold;"> or call for <br/>free consultation: <div style="font-size: 30px; font-weight: bold;">1 800 240-0698</div></p>
				-->
			 	<p style="text-align: left;padding-top: 10px;">Privacy is important to us! We will only share your info with the company you select.</p>
              </form>
            </div>
          </div>
          <!-- ///  end registration form  /// -->
        </div>            
      </div>
      <!-- ///  end entry  /// -->
    </div>       
    <!-- ///  end promo  /// --> 
    <!-- ///  begin testimonials  /// -->
    <div class="testimonials wow flipInX" style="background-color: #333;">
      <div class="color-correction"></div>
      <div class="container">
        <div class="row">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">  
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">      
                <div class="carousel-caption">
                  <blockquote>                        
                    <p>"I was able to save $390 a month using slashmyfees. For a small business like mine, that's huge."</p>
                    <footer><cite title="Source Title">Maya's Tacos</cite></footer>
                  </blockquote>
                </div>
              </div>
              <div class="item">      
                <div class="carousel-caption">
                  <blockquote>                        
                    <p>"I own a small restaurant in Los Angeles, and our credit card fees were way too high. I decided to test out slashmyfees and I was surprised at the amount they were able to save us. Highly recommended."</p>
                    <footer><cite title="Source Title">Burrito King</cite></footer>
                  </blockquote>
                </div>
              </div>
              <div class="item">      
                <div class="carousel-caption">
                  <blockquote>                        
                    <p>"Slashmyfees helped me get setup with a great point of sale for my business. I like that I didn't have to deal with different sales reps."</p>
                    <footer>Francisco <cite title="Source Title">Sarita's</cite></footer>
                  </blockquote>
                </div>
              </div>                  
            </div>              
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>                            
          </div>
        </div>
      </div>
    </div>  
    <!-- ///  end testimonials  /// -->

    <!-- ///  begin schedule  /// -->
    <div class="howitworks" id="howitworks">
      <div class="container"> 
        <div class="section-heading text-center">
          <h1>How It Works</h1>
			<div class="row mt20">
			  <div class="col-md-6 wow fadeInLeft">
				<div class="video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/gHiyNikqrWU" frameborder="0" allowfullscreen></iframe>
				</div>
			  </div>
			  <div class="col-md-6 wow fadeInRight">
				<h1>3 Simple Steps To Slash Your Fees</h1>
				<!-- <p class="lead">Helping You Save Money</p> -->
				<hr>
					<ul style="font-size: 18px;">
						<li style="text-align: left;"><span style="color: #3baabd;font-weight: bold;">STEP 1</span> TELL US ABOUT YOUR BUSINESS</li>
						<li style="text-align: left;"><span style="color: #3baabd;font-weight: bold;">STEP 2</span> WE PRESENT YOU WITH THE BEST OPTIONS</li>
						<li style="text-align: left;"><span style="color: #3baabd;font-weight: bold;">STEP 3</span> YOU CHOOSE YOUR BID</li>
					</ul>
			  </div>
			</div>
			<div style="height: 20px;"></div>
        </div>
      </div>
    </div>
    <!-- ///  end schedule  /// -->

    <!-- ///  begin faq  /// -->
    <div class="faq" id="faqSection" style="padding: 0px;">
      <div class="container" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="row">
          <div class="col-md-4 wow fadeInLeft">
            <h1>FAQ</h1>
            <hr>
          </div>
          <div class="col-md-8 wow fadeInRight">
            <div class="panel-group" id="faq">
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq6">
                 	Why should I use SlashMyFees?
                </a>
                <div id="faq6" class="panel-collapse collapse">
                  <p>SlashMyFees is <b>the fast, simple, stress-free way to save you tons of time & money</b>, in your search for the best credit card processing and point of sale systems for your business!</p>
                </div>
              </div>   
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq1">
                 	How much does SlashMyFees cost?
                </a>
                <div id="faq1" class="panel-collapse collapse">
                  <p>SlashMyFees is <b>100% FREE!</b></p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq8">
                 	How does SlashMyFees make money?
                </a>
                <div id="faq8" class="panel-collapse collapse">
                  <p>We're able to provide this service for free to our users, since we collect small fees from the credit card processors when you choose a solution on our platform.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq2">
                	Is SlashMyFees a credit card processor?
                </a>
                <div id="faq2" class="panel-collapse collapse">
                  <p>No. SlashMyFees is not a credit card processor. Similar to how travel search engines work, (think Expedia), we negotiate and deliver the best quotes from leading credit card processors, making it easy for you to see and simply select the best option for your business.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq3">
                	How does SlashMyFees work?
                </a>
                <div id="faq3" class="panel-collapse collapse">
                  <p>We built SlashMyFees to be simple & quick. We take care of everything so all you need to do is follow these three simple steps:</p>
					<ol>
						<li>Create your free account to see & compare bids for your busines</li>
						<li>Select your preferred bid that best serves your business</li>
        				<li>Only your chosen vendor will see your info, so they can contact you within 24 hours to get you set up</li>
        				<li><b>Bonus)</b> Congratulate yourself! You just saved time and money by using SlashMyFees!</li>
					</ol> 
       			</div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq4">
               		How does SlashMyFees select processors?
                </a>
                <div id="faq4" class="panel-collapse collapse">
                 	<p>We carefully select only merchant service providers who meet the highest standards of outstanding customer service, ethical practices, true transparency, and competitive pricing.</p>
                 	<p>In order to participate in the bidding process for your business, we negotiate the best rates and require our partners to have <b>no cancellantion fees</b> for our users</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq5">
               		What if I don't currently accept credit cards?
                </a>
                <div id="faq5" class="panel-collapse collapse">
                  <p>No problem at all! Using SlashMyFees, you can start taking credit cards for the first time with the peace of mind that you are getting the best rates available to you.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq7">
                 	Will I receive a bunch of calls and emails if I use SlashMyFees?
                </a>
                <div id="faq7" class="panel-collapse collapse">
                  	<p>NEVER! A big reason we developed SlashMyFees is because we know how frequent and annoying sales calls can be. We promise that you will only be contacted by the provider you choose and no one else. We protect your privacy, so our partners have no way to see your contact information during the bidding process.</p>
					<p>We also DO NOT share or sell your info with any other third-parties for any purpose.</p>
                </div>
              </div> 
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq9">
                 	What if I am under contract with my current provider?
                </a>
                <div id="faq9" class="panel-collapse collapse">
                  	<p>That's totally okay! Many business owners find the monthly savings they get with our partners to be so significant that it's financially beneficial to break their current contract. Additionally, many of our partners are sometimes able to help you get your out of your old contracts. It's easy and free to <a href="https://slashmyfees.com/registration">sign up!</a></p>
					<p>We also DO NOT share or sell your info with any other third-parties for any purpose.</p>
                </div>
              </div> 
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq10">
                 	Have more questions?
                </a>
                <div id="faq10" class="panel-collapse collapse">
                  	<p>Please feel free to <a href="https://slashmyfees.com/#contact">contact us</a> if you have any additional questions about SlashMyFees.</p>
                </div>
              </div> 
            </div>                
          </div>
        </div>
      </div>
    </div>
    <!-- ///  end faq  /// -->

    <!-- ///  begin partners  /// -->
    <div class="partners wow fadeInUp" id="partners" style="padding-bottom: 0px;">
      <div class="container">
        <div class="section-heading" style="margin-bottom: 0px;">
          <h1 style="font-weight: bold;">Partners</h1>
          <p class="lead" style="margin-bottom: 0px; font-weight: bold;">Who We Work With</p>
        </div>
        <div class="row text-center">
          <div class="col-lg-12">
			<div class="row">
				<div class="col-md-3 col-sm-6" style="padding-top; 20px;">
              		<img src="/img/gravity.gif" width="250" alt="Gravity Payments">
				</div>
				<div class="col-md-3 col-sm-6" style="padding-top: 20px;">
              		<img src="/img/payline.gif" width="250" alt="Payline">
				</div>
				<div class="col-md-3 col-sm-6" style="padding-top: 20px;">
              		<img src="/img/dharma.gif" width="250" alt="Dharma Merchant Services">
				</div>
				<div class="col-md-3 col-sm-6" style="padding-top: 20px;">
              		<img src="/img/cayan.gif" width="250" alt="Cayan">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6" style="padding-top: 20px;">
              		<img src="/img/helcim.gif" width="250" alt="Helcim">
				</div>
				<div class="col-md-3 col-sm-6" style="padding-top: 20px;">
              		<img src="/img/serve_first.gif" width="250" alt="Serve 1st">
				</div>
				<div class="col-md-3 col-sm-6" style="padding-top: 20px;">
              		<img src="/img/sps.gif" width="200" alt="SPS Logo">
				</div>
			</div>
          </div>
        </div>
      </div>
    </div>
    <!-- ///  end partners  /// -->

    <!-- ///  begin map, subscribe, contacts  /// -->
    <!-- ///  set your venue address in data-location attribute  /// -->
    <div class="charities" id="charities" style="background-color: #fff;">
      <div class="container" style="padding-bottom: 20px;">
        <div class="section-heading" style="padding-top: 20px;">
          <h1 class="text-center" style="color: #000; font-weight: bold; margin-top: 0px; margin-bottom: 0px;">Giving Back</h1>
        </div> 
        <div class="row">
          <div class="col-md-3 col-sm-6 speaker wow" style="padding-top: 20px;" >
			<center><a href="http://powermylearning.org/" target="_blank"><img src="/img/powermylearning.gif" style="padding-top: 20px;"></a></center>
          </div>
          <div class="col-md-3 col-sm-6 speaker wow" style="padding-top: 20px;" >
			<center><a href="http://www.dreamcenter.org/" target="_blank"><img src="/img/dreamcenter.jpg" width="240"></a></center>
          </div>
          <div class="col-md-3 col-sm-6 speaker wow" style="padding-top: 20px;">
			<a href="http://www.indigothreads.org/" target="_blank"><h1 class="text-center">Indigo Threads</h1></a>
          </div>
          <div class="col-md-3 col-sm-6 speaker wow" style="padding-top: 20px;">
			<center><a href="https://www.mercyhousing.org/" target="_blank"><img src="/img/mercy_housing.jpg" width="240" style="padding-top: 20px;"></a></center>
          </div>
		</div>
    </div>
    <!-- ///  end map, subscribe, contacts  /// -->
    <!-- ///  end content  /// -->

    <!-- ///  begin map, subscribe, contacts  /// -->
    <!-- ///  set your venue address in data-location attribute  /// -->
    <div class="contact" id="contact" style="background-color: #3baabd; color: #fff;">
		<div style="min-height: 400px; padding-top: 20px;">
			<div class="row">
				<div class="col-md-6">
					<div style="padding-left: 20px; padding-right: 20px;">
						<h2 class="text-left">Contact Us</h2>
						<div class="row">
							<div class="col-md-6 col-sm-3">
								<input type="text" id="contact_name" name="contact_name" class="form-control input-lg" placeholder="Name">	
							</div>
						</div>
						<div class="row" style="padding-top: 10px;">
							<div class="col-md-6 col-sm-3">
								<input type="text" id="contact_email" name="contact_email" class="form-control input-lg" placeholder="Email">	
							</div>
						</div>
						<div class="row" style="padding-top: 10px;">
							<div class="col-md-6 col-sm-3">
								<textarea id="message" colspan="4" rowspan="10" class="form-control input-lg" placeholder="Message"></textarea>
							</div>
						</div>
						<div class="row" style="padding-top: 10px;">
							<div class="col-md-4 col-sm-3">
								<button class="btn btn-lg btn-primary" id="contact_button" style="text-transform: uppercase; background-color: #e86c00; border-color: #e86c00;">Contact Us</button>	
							</div >
						</div>
					</div>

					<div class="row" style="padding-top: 15px; padding-left: 15px;">
						<div class="col-md-6 col-sm-3" style="font-size: 20px;">
							Phone Number: 1 800 240-0698 
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-3" style="min-height: 400px;">
					<div style="padding-left: 20px; padding-right: 20px; width: 100%;">
						<h2 class="text-left">Location</h2>
						<div style="min-height: 300px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4155.65604199297!2d-118.23695696646928!3d34.044486856910964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c639555975d5%3A0xf8eb2f1fc1c9da25!2sImpact+Hub+LA!5e0!3m2!1sen!2sus!4v1444967909795" height=300 style="width: 100%; min-width: 360px;" frameborder="0" style="border:0" allowfullscreen></iframe>	
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- ///  end map, subscribe, contacts  /// -->
    <!-- ///  end content  /// -->
  	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '124985447910485');
fbq('track', "PageView");

</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=124985447910485&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --> 
@include('includes.footer') 
