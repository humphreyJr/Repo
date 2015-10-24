@include('includes.header') 
    <!-- ///  begin content  /// -->

    <!-- ///  begin promo  /// -->
    <div class="promo" id="home" style="background-image:url(/img/main.jpg);">
      <!-- ///  semitransparent layer  /// -->
      <div class="color-correction"></div> 
      <!-- ///  begin entry  /// -->         
      <div class="container">
        <div class="row">
          <!-- ///  begin text section  /// -->
          <div class="col-md-6 wow fadeInDown" data-wow-duration="2s">
            <div class="promo-text">
              <h1><i class="fa fa-signal success-color"></i> <b>SlashMyFees</b></h1>
              <hr>                  
              <p class="lead">When credit card processors bid, your business wins! Use our independent search engine to find the right credit card processor and POS System for your business. We can help you save an average of 40% on your credit card processing fees.</p>                  
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
            </div>
          </div>
          <!-- ///  end text section  /// -->
          <!-- ///  begin registration form  /// -->
          <div class="col-md-4 col-md-offset-2 wow fadeInUp" data-wow-duration="2s">
            <div class="register">
              <form role="form" method="POST" action="/registration">
                <div class="form-group">                      
                  <input type="text" id="regName" name="name" data-validation="length" data-validation-length="min4" style="background-color: #fff; color: #000;" class="form-control input-lg" placeholder="Name">
                </div>
                <div class="form-group">                      
                  <input type="email" id="regMail" name="email" data-validation="email" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Email">
                </div>
                <div class="form-group">                      
                  <input type="email" id="confirmMail" name="confirmemail" data-validation="email" class="form-control input-lg" style="background-color: #fff; color: #000" placeholder="Confirm Email">
                </div>
                <button type="submit" class="btn btn-success btn-block btn-lg" style="background-color: #DAA520">Sign Up</button>
			 	<p style="padding-top: 10px; text-align: left;">By signing up you agree to the terms of service.</p>
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
                    <p>"I own a small restaurant in Los Angeles, and our credit card fees were way too high. I decided to test out slashmyfees and I was surprised at the amount they were able to save us. Highly recommended."</p>
                    <footer>Las Morelianas Fernando</footer>
                  </blockquote>
                </div>
              </div>
              <div class="item">      
                <div class="carousel-caption">
                  <blockquote>                        
                    <p>"I was able to save $390 a month using slashmyfees. For a small business like mine, that's huge."</p>
                    <footer>Bob <cite title="Source Title">Bobs burgers</cite></footer>
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
				  <iframe src="//player.vimeo.com/video/77790506?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			  </div>
			  <div class="col-md-6 wow fadeInRight">
				<h1>Why you should use our platform!</h1>
				<!-- <p class="lead">Helping You Save Money</p> -->
				<hr>
					<ul>
						<li style="text-align: left;">We are always neutral, objective, and trusted when finding the right fit for your business.</li>
						<li style="text-align: left;">Our values are all about empowering businesses to make the right choice and giving back to the community.</li>
						<li style="text-align: left;">SlashMyFees only allows companies that meet our standards for transparency and best business practices. We certify each of the partners on our platform. </li>
						<li style="text-align: left;">10% of our revenue goes to the charities listed on our platform every time we help you find the right fit POS or credit card processor. So we thank you for your business.</li>
						<li style="text-align: left;">We will not share your information with anyone until you select a bid.</li>
					</ul>
			  </div>
			</div>
			<div style="height: 20px;"></div>
        </div>
      </div>
    </div>
    <!-- ///  end schedule  /// -->

    <!-- ///  begin faq  /// -->
    <div class="faq" id="faqSection">
      <div class="container">
        <div class="row">
          <div class="col-md-4 wow fadeInLeft">
            <h1>FAQ</h1>
            <hr>
          </div>
          <div class="col-md-8 wow fadeInRight">
            <div class="panel-group" id="faq">
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq1">
                 	How much does SlashMyFees cost?
                </a>
                <div id="faq1" class="panel-collapse collapse">
                  <p>SlashMyFees is 100% free. Credit card processors pay us a small commission if you select their quote. This allows us to keep our services free for you.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq2">
                	Is SlashMyFees a credit card processor?
                </a>
                <div id="faq2" class="panel-collapse collapse">
                  <p>No. SlashMyFees is not a credit card processor and we don't provide credit card processing services. We deliver quotes from leading registered credit card processors, and then we help you choose the best option. We also remain a point of contact for support for as long as you're with your new processor.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq3">
                	How does SlashMyFees work?
                </a>
                <div id="faq3" class="panel-collapse collapse">
                  <p>Sign up for a free account (make this link to sign up) and you will receive multiple cost-saving quotes from leading credit card processors. <br />Option #1<br />You upload a credit card statement, which is then reviewed by our team. We make sure your information is not on any of the documents to protect your privacy. Then it’s sent out to all our partners for bidding. Within 24 hours, you’ll receive multiple bids. 
<br />Option#2<br /> You input a few key numbers and our algorithm will populate with an instant estimated quote. We will assist you along the way and be readily available with any questions.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq4">
               		How does SlashMyFees select processors?
                </a>
                <div id="faq4" class="panel-collapse collapse">
                  <p>We ensure that each of the processors we work with are transparent.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq5">
               		What if I don't currently accept credit cards?
                </a>
                <div id="faq5" class="panel-collapse collapse">
                  <p>You don't have to accept credit cards to use SlashMyFees. We help new and existing business alike.</p>
                </div>
              </div>
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq6">
                 	Why should I use SlashMyFees?
                </a>
                <div id="faq6" class="panel-collapse collapse">
                  <p>We have made sure our partners are very transparent. We started SlashMyFees because we are looking out for small businesses best interest. We know the credit card processing is expensive and confusing. Showing you what you’ll be paying before you speak to a rep is extremely helpful. </p>
                </div>
              </div>   
              <div class="panel">
                <a data-toggle="collapse" data-parent="#faq" href="#faq7">
                 	Will I receive a ton of sales calls and emails?
                </a>
                <div id="faq7" class="panel-collapse collapse">
                  <p>No. Processors aren't able to see your contact information. We keep your information hidden, and it's only given to the processor whose quote you accept.</p>
                </div>
              </div>   

            </div>                
          </div>
        </div>
      </div>
    </div>
    <!-- ///  end faq  /// -->

    <!-- ///  begin partners  /// -->
    <div class="partners wow fadeInUp" id="partners">
      <div class="container">
        <div class="section-heading">
          <h1>Partners</h1>
          <p class="lead">Who We Work With</p>
        </div>
        <div class="row text-center">
          <div class="col-lg-12">
            <ul class="list-inline">                  
              <li><img src="/img/gravity.jpg" alt=""></li>
              <li><img src="/img/payline.jpg" alt=""></li>
              <li><img src="/img/dharmamerchantservices.gif" alt=""></li>
              <li><img src="/img/heartland.jpg" alt=""></li>
              <li><img src="/img/cayan.jpeg" alt=""></li>
              <li><img src="/img/helcim.jpg" alt=""></li>
              <li><img src="/img/future.jpg" alt=""></li>
              <li><img src="/img/clover.jpg" alt=""></li>
              <li><img src="/img/touchbistro.jpg" alt=""></li>
              <li><img src="/img/ncr.jpg" alt=""></li>                  
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- ///  end partners  /// -->
 
    <!-- ///  begin speakers  /// -->
    <div class="speakers" id="whoweare" style="background-color: #eee;">
      <div class="container">
        <div class="section-heading">
          <h1>Who We Are</h1>
        </div> 
        <div class="row">
          <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1s">
            <div class="speaker-img">
              <img src="/img/bryan.jpg" alt="">
            </div>
            <div class="speaker-desc">
              <p>Bryan Lorden</p>
              <span>CEO / Cofounder</span>
            </div>
          </div>
          <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.1s">
            <div class="speaker-img">
              <img src="/img/profile_pic_gray.jpg" alt="">
            </div>
            <div class="speaker-desc">
              <p>Phonexay Singharatsavong</p>
              <span>CTO / Cofounder</span>
            </div>
          </div>
          <div class="col-md-4 speaker wow fadeInDown" data-wow-delay="1.2s">
            <div class="speaker-img">
              <img src="/img/BRAD.jpg" alt="">
            </div>
            <div class="speaker-desc">
              <p>Brad Yasar</p>
              <span>COO / CoFounder</span>
            </div>
          </div>

        </div> 
    </div>
    <!-- ///  end speakers  /// -->

    <!-- ///  begin map, subscribe, contacts  /// -->
    <!-- ///  set your venue address in data-location attribute  /// -->
    <div class="charities" id="charities" style="background-color: #fff;">
      <div class="container" style="padding-top: 60px;">
        <div class="section-heading">
          <h1>Charities</h1>
        </div> 
        <div class="row">
          <div class="col-md-3 speaker wow fadeInDown" data-wow-delay="1s">
			<center><img src="/img/powermylearning.jpg" width="240" style="padding-top: 20px;"></center>
            <div class="speaker-desc">
              <p><a href="http://powermylearning.org/" target="_blank">Power My Learning</a></p>
              <span></span>
            </div>
          </div>
          <div class="col-md-3 speaker wow fadeInDown" data-wow-delay="1.1s">
			<center><img src="/img/dreamcenter.jpg" width="240"></center>
            <div class="speaker-desc">
              <p><a href="http://www.dreamcenter.org/" target="_blank">Dream Center</a></p>
              <span></span>
            </div>
          </div>
          <div class="col-md-3 speaker wow fadeInDown" data-wow-delay="1.2s">
			<h1 class="text-center">Indigo Threads</h1>
            <div class="speaker-desc">
              <p><a href="http://www.indigothreads.org/" target="_blank">Indigo Threads</a></p>
            </div>
          </div>
          <div class="col-md-3 speaker wow fadeInDown" data-wow-delay="1.2s">
			<center><img src="/img/mercy_housing.jpg" width="240" style="padding-top: 20px;"></center>
            <div class="speaker-desc">
              <p><a href="https://www.mercyhousing.org/" target="_blank">Mercy Housing</a></p>
            </div>
          </div>
		</div>
    </div>
    <!-- ///  end map, subscribe, contacts  /// -->
    <!-- ///  end content  /// -->

    <!-- ///  begin map, subscribe, contacts  /// -->
    <!-- ///  set your venue address in data-location attribute  /// -->
    <div class="contact" id="contact" style="background-color: #eee;">
		<div style="height: 400px; padding-top: 20px;">
			<div class="row">
				<div class="col-md-6">
					<div style="padding-left: 20px;">
						<h2 class="text-left">Contact Us</h2>
						<div class="row">
							<div class="col-md-2">
								Name:
							</div>
							<div class="col-md-10">
								<input type="text">	
							</div>
						</div>
						<div class="row" style="padding-top: 10px;">
							<div class="col-md-2">
								Email:	
							</div>
							<div class="col-md-10">
								<input type="text">	
							</div>
						</div>
						<div class="row" style="padding-top: 10px;">
							<div class="col-md-2">
								Message:	
							</div>
							<div class="col-md-10">
								<textarea colspan="4" rowspan="10"></textarea>
							</div>
						</div>
						<div class="row" style="padding-top: 10px;">
							<div class="col-md-4">
								<button>Contact Us</button>	
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div style="padding-left: 20px;">
						<h2 class="text-left">Location</h2>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4155.65604199297!2d-118.23695696646928!3d34.044486856910964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c639555975d5%3A0xf8eb2f1fc1c9da25!2sImpact+Hub+LA!5e0!3m2!1sen!2sus!4v1444967909795" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>	
					</div>
				</div>
			</div>
		</div>
    </div>
    <!-- ///  end map, subscribe, contacts  /// -->
    <!-- ///  end content  /// -->
   
@include('includes.footer') 
