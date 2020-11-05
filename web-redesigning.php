<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>

		<?php include 'meta.php'; ?>
		
		<!--plugin-css-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/plugin.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
		<!-- template-style-->
		<link href="css/style.css" rel="stylesheet">
		<link href="css/responsive.css" rel="stylesheet">
		<link href="css/sideform.css" rel="stylesheet">
		<link href="css/breadcum-form.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164733026-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-164733026-1');
		</script>
	  <style>
		  @media (min-width: 320px) and (max-width: 765px){
   .hide {
         display:none;
	 }
			  
}
		  	  @media (min-width: 320px) and (max-width: 765px){
   .lm {
         margin-left: 0px;
	 }
			  
}
		  @media screen and (min-width: 1370px){
				.hero-card-web1 {
					position: relative;
					overflow: hidden;
					padding-top: 82px;
					padding-bottom: 72px;
					height: 65vh;
					align-items: center;
					display: flex;
					margin-left: -150px
				}
				.headerclient {
					padding-top: 14px;
					padding-bottom: 0px;
				}
				.computer{
					margin-left: -240px;
				}
			}
			@media screen and (max-width: 1370px){
				.image-sr-mm1{
					width: 100%;
					height: 130px;
					padding-top: 7px;
				}
				.pb1{
					padding-top: 7px;
				}
				.computer{
					margin-left: -120px;
				}
			}
	  </style>
  </head>
  <body>
       		<!--Start Header -->
		  
		  <?php include 'header.php'; ?>
<!--End Header -->

	     <!--Breadcrumb Area-->
  <!--Start Hero-->
<section class="hero-card-web hero-card-web1 hero-card-web2  bg-gradient12 shape-bg3">
<div class="hero-main-rp container-fluid">
<div class="row">
<div class="col-lg-4">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;margin-top:10%" >
<img src="images/image2/complete_branding.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
<div class="col-lg-4 col-12 " style="margin-top: 2%">
	<div class="service-sec-list " style="text-align:center">
		<img src="images/icons/tech.svg" alt="service" >
		<h5 class="mb10" style="color: white">WebInGo at It's Best</h5>
		<div class="row in-stats  about-statistics">
            <div class="col-lg-4 col-sm-4 counter1 " >
              <div class="">
                <div class="statnumb counter-number ">
                  <span class="counter counter-span2">4</span><span class="counter-span2">&nbsp;+</span><br>
                  <span class="counter-span1">Years Experience</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4 counter1" >
              <div class="">
                <div class="statnumb">
                  <span class="counter counter-span2">10</span><span class="counter-span2">&nbsp;+</span><br>
                  <span class="counter-span1">Org Recogination</span>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-4 counter1">
              <div class="">
                <div class="statnumb counter-number" style="margin-left:13px;">
                  <span class="counter counter-span2">500</span><span class="counter-span2">&nbsp;+</span><br>
                  <span class="counter-span1">Happy Clients</span>
                </div>
              </div>
            </div>
          </div>
		<p style="color: white;text-align: justify">WEBINGO® is a renowned end-to-end IT solutions company in India that provides ultimate IT solutions and has provided consultancy to numerous start-ups across India.  </p>
 </div>   
</div>
<div class="col-lg-4" >
<div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
<form method="post" style="margin-top: -23px;">
	<h5 class="mb10" style="text-align:center">Get Free Quotation</h5>
  <input 
    name="Your Name"
    placeholder="Name"
    required
  >
  <input 
    type="email"
    name="email" 
    placeholder="Email"
    required
  >
  <input
    type="mobile"
    name="mobile" 
    placeholder="Phone No"
  >
	<input
    type="text"
    name="city" 
    placeholder="Your City"
  >
 <select   name="interest" id="interest">
	<option value="" class="grey_color">Interested In*</option>
	<option value="Logo Design">Logo Design</option>
	<option value="Packaging Design">Packaging Design</option>
	<option value="Website Design">Website Design</option>
	<option value="Responsive / Bootstrap HTML">Responsive / Bootstrap HTML</option>
	<option value="Website Development">Website Development</option>
	<option value="Wordpress">Wordpress</option>
	<option value="Magento">Magento</option>
	<option value="SEO &amp; SMO">SEO &amp; SMO</option>
	<option value="Hosting">Hosting</option>
	<option value="ECommerce Website">ECommerce Website</option>
	<option value="Digital Marketing">Digital Marketing</option>
	<option value="Graphics Design">Graphics Design</option>
	<option value="Brochure, Business Card, Flyer Design">Brochure, Business Card, Flyer Design</option>
<option value="Content Writing Services">Content Writing Services</option>
</select>
 <br>
		    <div class="col-md-12"> 				
				<input type="hidden" value="" name="secret"   id="secret"/>
		      	<input class="btn btn-primary bg-btn2" type="button" value="Submit" name="Submit"   id="Submit" onclick="contactquick();"/>
			</div> 
</form>

</div>
  
</div>
</div>
	
</div>
</section>
  <!--End Breadcrumb Area-->
  <!--End Breadcrumb-->  
	   <section class="service pad-tb about-agency light-dark">
<div class="container">
<div class="row">
	 <div class="col-lg-12 text-center"><h2 class="mb20" style=""><div class="quotes">
    <blockquote>
      <p>Landing Pages are within your easy reach. You will be surprised<br> how your Business got by without them.</p>
      <footer>
      
      </footer>
    </blockquote>
  </div></h2></div>
<div class="col-lg-7" style="margin-top:4%">
<div class="text-l service-desc- pr25">
	<span  class="text-radius text-light text-animation bg-b">GROW TRAFFIC &amp; INCREASE REVENUE</span>
	<h2> Boost your Conversion</h2>
	<br>
<p style="text-align: justify">Many enterprises neglect their web designs play an important role in the development of their company. It is one of the essential features to get real-time benefits. As a part and parcel of marketing tool, it requires timely changes. Changing all the features from time to time, it remains attractive, capable to attract and increase the website traffic. To increase the performance of the website, it is necessary to make suitable changes in the existing features. All the existing features should be scrutinized to find out the useful features. All the features that are found to require improvements, should be considered and it should be redesigned efficiently to meet all the specification of the intended business. Efficient website redesign services are necessary to realize the clients' dreams and expectations.</p>

<a href="#" class="btn-main bg-btn2 lnk mt30">Request A Quote  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
	
</div>
</div>
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
</div>
</div>
</section>



	  <section class="service pad-tb bg-gradient15 light-dark">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
<div class="col-lg-7">
<div class="text-l service-desc- pr25">
  <h3 class="mb20" style="color:#000">Why Choose WEBINGO? </h3>  
  <p> By hiring website redesign services a, you can reach unrivalled position quickly, easily and cost-effectively, also it sets a new level of success.</p>
 <ul class="key-points mt20">

<li>We Focus on how to improve business and beat out the competition.</li>
<li>We offer customized engagement models as per the client’s requirement.</li>
<li>We develop a user-friendly website for all type of browsers and all devices compatible websites.</li>
<li>We Build Websites related to latest trends by using the latest technologies.</li>
<li>We provide you seamless integration solutions with other codes and APIs.</li>
<li>Our team update you daily, you can directly communicate (Skype, Telephone) with the developer, fast email response.</li>
<li>Redesign for lead generation and to improve User Experience (UX).</li>
<li>SEO friendly website with better website structure, navigation, and Keyword Optimisation. Correct task estimation and quality development.</li>
<li>With us, you get the best value of work under affordable price.</li>
  <a href="#" class="btn-main bg-btn2 lnk mt30">Get a package  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>

</div>
</div>
</section>

<section class="service-section pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading">
<span class="text-light text-animation bg-b">Services We Provided</span>
<h2 class="mb30">What we offer?</h2>
</div>
</div>
</div>
<div class="row upset link-hover shape-num justify-content-center">
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(-1.8deg) rotateY(0.08deg) scale3d(1, 1, 1); transition: all 1000ms cubic-bezier(0.03, 0.98, 0.52, 0.99) 0s;">
<div class="s-card-icon"><img src="images/icons/ecommerce-1.png" alt="service" class="img-fluid"></div>

<p style="color:#000;">E-Commerce Website Redesign</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/web-design-1.png" alt="service" class="img-fluid"></div>

<p style="color:#000;">Redesign for Lead Generation</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>

</div>
<div class="col-lg-3 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/redesign-1.png" alt="service" class="img-fluid"></div>

<p style="color:#000;">Redesign to Improve Look and Feel</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div> 
<div class="col-lg-3  col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/profit.png" alt="service" class="img-fluid"></div>

<p style="color:#000;">Increase Return on Investment</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div> 

</div>

<div class="-cta-btn mt70">
<div class="free-cta-title v-center wow zoomInDown" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: zoomInDown;">
<p>Hire a <span>Dedicated Developer</span></p>
<a href="#" class="btn-main bg-btn2 lnk">Hire Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
</div>
</div>
</div>
</section>
	 <!-- <section class="service-block pad-tb bg-gradient8">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="common-heading ptag">
									<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
									<h2>Why Choose WEBINGO?</h2>
									<p class="mb30" style="color: #fff">We are the best at what we do.</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-4 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/trustworthy.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Expert Team</h4>
										
										<p>We have team of highly expert app developers to fulfil your needs.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/dedicate-manager.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Hunger for Knowledge</h4>
										<p>We always strive to gain more knowledge and keep ourselves updated.</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/technical.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Dedicated Team</h4>
										<p >We assign a dedicated team and project manager for you.</p>
									</div>
								</div>
							</div>
							
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/customer-service.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Support</h4>
										<p>We always make sure to help you with your problems and issues.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.4s" style="visibility: visible; animation-delay: 1.4s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/timely.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Agile Approach</h4>
										<p style="font-size:15px">We give you knowledge about your project progress timely and communicate regarding the same.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.7s" style="visibility: visible; animation-delay: 1.7s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/punctuality.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Content Management</h4>
										<p>The best delivered in time is our prime focus to increase satisfaction and trust.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="-cta-btn mt70">
							<div class="free-cta-title v-center wow zoomInDown" data-wow-delay="1.8s" style="visibility: visible; animation-delay: 1.8s; animation-name: zoomInDown;">
								<p style="color: #fff">Let us <span>Serve you
									</span> </p>
								<a href="#" class="btn-main bg-btn2 lnk" data-toggle="modal" data-target="#myModal">Enquiry Now<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
							</div>
						</div>
					</div>
				</section>-->
	  
	  
				<section class="why-choos-lg pad-tb about-agency light-dark">
				<div class="container">
					<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">
							<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
							<h2>Why is it Required?</h2>
							<p class="mb30">Just like designing a website from scratch, Redesigning has it's own benefits.</p>
						</div>
					</div>
				</div>

				<div class="row">
				<div class="col-lg-6">
				<div class="common-heading text-l">

				<div class="itm-media-object mt40">
					<div class="media">
						<img src="images/icons/money.png" alt="icon">
						<div class="media-body">
							<h4>Brand values</h4>
							<p style="text-align:justify;">
			
							When it comes to redesigning your website it will add to your brand value, which will increase the value of your company. It is important that when it comes to ensuring that you are adding value to your brand that you know what you should do. There are a few things that we can do that will help this, including ensuring that the logo is visible and that it is easy to navigate and use for the viewer. The more your brand is worth, then the more clients you will see coming to your site.</p>

						</div>
					</div>
					<div class="media mt40">
						<img src="images/icons/quality-2.png" alt="icon">
						<div class="media-body">
							<h4> Quality of Leads</h4>
							<p style="text-align:justify;">
				When you have a cleaner website that has a good user experience and better SEO, then you are going to get better leads. This means that the leads that you are getting are going to be coming in, especially if you add forms that will allow them to give their contact information if they are interested. This is important, so let us help you get more leads by changing a few things on your website without much effort. The more leads you have and the higher quality, then the more income you are going to see.</p>
						</div>
					</div>
					
				</div>
				</div>
				</div>
				<div class="col-lg-6">
				<div class="itm-media-object mt40">
					<div class="media">
						<img src="images/icons/project-management.png" alt="icon">
						<div class="media-body">
							<h4> User Experience</h4>
							<p style="text-align:justify;">
				When it comes to redesigning your website one of the main things that you need to think about is the user experience. You want to ensure that the site is simple to navigate and that pages are easy to read and understand. You can add new parts that would be visible for the user as well as using some forms to get contact information. We can go through the site like we were the user and make sure that we improve the experience that we had before the site was redesigned.</p>
							
						</div>
					</div>
					<div class="media mt40">
						<img src="images/icons/workshop.png" alt="icon">
						<div class="media-body">
							<h4>SEO Performance</h4>
							<p style="text-align:justify;">
				SEO is important, which is why when you completely redo your website you will see an improvement in this area as well. You will be able to get rid of links, content and more that are bringing down the site. We can go over the entire website and find the areas that are not up to the mark and fix them. We will ensure that your content is good and that the links, keywords and more are in the right proportions. Let us help you get more clients through ensuring good SEO through the best and latest methods that are being used.</p>
						</div>
					</div>
					
				</div>

				</div>
				</div>
				</div>
				</section>
	  
		

	  <section class="pad-tb bg-gradient15" >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading">
	<span  class="text-radius text-light text-animation bg-b">FAQS</span>
            <h2 class="mb0">Frequently Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mt60">
          <div id="accordion" class="accordion">
            <div class="card-1">
              <div class="card-header" id="faq1" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-a" aria-expanded="true" aria-controls="collapse-a"style="color: #fff;" >
				How does the website redesign process work?
                </button>
              </div>
              <div id="collapse-a" class="card-body collapse " aria-labelledby="faq1" data-parent="#accordion">
                <p>

For website redesign, the functionality &amp; backend remains the same.
To say in other words, it&#39;s an upliftment of the design element of the
website. So, again the timeline depends on the number of pages
involved.</p>
              </div>
            </div>
           <div class="card-1 ">
              <div class="card-header" id="faq5" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-e" aria-expanded="true" aria-controls="collapse-e"style="color: #fff;" >
              Do you Offer Customizations to Existing Themes?
                </button>
              </div>
              <div id="collapse-e" class="card-body collapse" aria-labelledby="faq5" data-parent="#accordion2">
                <p>
					
Yes, we do offer theme customization too. Please connect with our
Sales people to discuss customization &amp; take it forward. Please
connect with our Sales team to help you understand better.</p>
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-md-6 mt60">
          <div id="accordion2" class="accordion">
			  
			  <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-b" aria-expanded="true" aria-controls="collapse-b"style="color: #fff;" >
                What will be the support/ maintenance period?
                </button>
              </div>
              <div id="collapse-b" class="card-body collapse" aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					

Totally depends on the website being built. The Minimum maintenance
is for 30 days &amp; can extend up to 90 days on complex platforms.</p>
              </div>
            </div>
            <div class="card-1 ">
              <div class="card-header" id="faq2" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-f" aria-expanded="true" aria-controls="collapse-f"style="color: #fff;" >
                How do I check the progress of my project?
                </button>
              </div>
              <div id="collapse-f" class="card-body collapse" aria-labelledby="faq2" data-parent="#accordion2">
                <p>
					
Totally depends on the website being built. The Minimum maintenance
is for 30 days &amp; can extend upto 90 days on complex platforms.</p>
              </div>
            </div>
          </div>
			
        </div>
      </div>
    </div>
  </section>
<!--Start Footer-->
 <?php include 'footer.php'; ?>
<!--End Footer-->
<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
		  <script>
		  $('.bxslider').bxSlider({
  autoHover: true,
  auto: true,
  slideWidth: 250,
  minSlides: 2,
  maxSlides: 6,
  controls: true,
  pager: true,
  speed: 500,
  captions: true,
  slideMargin: 5,
});
		  </script>	  
<script>
$(document).foundation();

// declare variables.
var $top_bar = $('.top-bar'),
    $menu_btn = $('#responsive-menu-btn');

// top bar sticky shrink class toggle.
$top_bar.on('sticky.zf.stuckto:top', function() {
  var $this = $(this);
  
  $this.addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function() {
  var $this = $(this);
  
  $this.removeClass('shrink');
})

// top bar responsive menu button context toggle.
$menu_btn.on('click', function(){
  $this = $(this);
  
  $this.toggleClass('alert').promise().done(function()
  {
    if ($this.hasClass('alert')) {
      $this.html('<i class="fa fa-md fa-times"></i> Close');
    } else {
      $this.html('<i class="fa fa-md fa-bars"></i> Menu');
    }
  });
});		  
</script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6Lf4wNEZAAAAACeNgAtPhbDG2MuNRHf5HYwGBOcF', {action: 'submit'}).then(function(token) {
    console.log(token);
       document.getElementById("g-token").value = token;
    });
});
</script>
</body>
</html>