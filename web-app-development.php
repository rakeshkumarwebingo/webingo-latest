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
      <p>Tech will transform from something we actively use to a more<br> seamless integrated experience that is ‘on’ all the time.</p>
      <footer>
      
      </footer>
    </blockquote>
  </div></h2></div>
<div class="col-lg-7" style="margin-top:4%">
<div class="text-l service-desc- pr25">
	<span  class="text-radius text-light text-animation bg-b">GROW TRAFFIC &amp; INCREASE REVENUE</span>
	<h2>Web Application Development Company</h2>
	<br>
<p style="text-align: justify">Web application development is being employed widely in today's businesses across the globe. We create B2B and B2C compatible web applications to meet the business challenges. Our developers will create web application the way you need them from single page applications to customized complex web applications. Own a web application and transform your business. We offer 360 degree support in developing your web application.
<br>

Our full-stack web application developers have taken the development services to a world class quality and experience. Their experience is our asset and our asset is our confidence to serve you. Our customer-centric approach has rendered much help in the past and we know that it will hold up well in the future as well.</p>

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



<section class="service-section pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading">
<span class="text-light text-animation bg-b">Services We’re Provided</span>
<h2 class="mb30">Our Offerings</h2>
</div>
</div>
</div>
<div class="row upset link-hover shape-num justify-content-center">

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/customize.png" alt="service" class="img-fluid"></div>
<h4>Custom Web App </h4>
<p style="text-align:justify;">
 Our process ensures 360 degree support and quality maintenance. We will handle the backend as well as front end development along with testing and support.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/mobile-application.png" alt="service" class="img-fluid"></div>

<h4>E-commerce Web App </h4>
<p style="text-align:justify;">
E-commerce web application to carry out online sales. Integrate your business with a web application and witness the growth in sales as well as visitors to your website.</p>

<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/development.png" alt="service" class="img-fluid"></div>
<h4>Web App CMS</h4>
<p style="text-align:justify;">
Managing the content in you web application is another service we offer. Our experts ensure quality content management as well as manage them efficiently.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/real-time.png" alt="service" class="img-fluid"></div>
<h4>Web App Re-engineering</h4>
<p style="text-align:justify;">
Tired of your old-school web application. We’ve got it covered for you. Our experts will reengineer your web app and create the best one in the industry for you.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/security-check.png" alt="service" class="img-fluid"></div>
<h4>Web App Consulting</h4>
<p style="text-align:justify;">
Need some expert advice? We can help you with it. We will provide you the best web app consulting services to forge a world-class application. Join us and get upgraded.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/web-design-1.png" alt="service" class="img-fluid"></div>
<h4>Responsive Web App Designs</h4>
<p style="text-align:justify;">

We create responsive web app designs that accentuates user experience and easy navigation. Our designers have years of experience to aid the design process and create perfect web apps.</p>

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
				
	  <section class="service pad-tb bg-gradient15 light-dark">
<div class="container">
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-5">
<div class="servie-key-points">
  <h4>Benefits </h4>
 
  <ul class="key-points mt20">
	  <li>Improved Efficiency</li>
	  <li>24/7 Accessibility</li>
 	  <li>Security</li>
		<li>Cross-Platform Capabilities</li>
		<li>Simple Customisable and Scalable</li>
		<li>Money Saving</li>
		<li>Simple Installation and Maintenance</li>
		<li>Easy Expandability</li>
		
  </ul>
</div>
</div>
</div>
</div>
</section>

			
	  <section class="service-block pad-tb bg-gradient8">
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
							<div class="col-lg-6 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/trustworthy.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Global Mindset</h4>
										
										<p style="text-align:justify;">
											We think globally and act locally. We understand your needs and how to meet them efficiently. This global-local mindset has become the most successful and cost-effective approach for everyone involved.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/dedicate-manager.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Proven Methods</h4>
										<p style="text-align:justify;">
											The experience of working with numerous client base and latest technology has enabled Webingo to adopt the best practices and proven methodologies. Our agile methodology has earned us an enviable track record.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/deliver-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										
										<h4>On-time Delivery</h4>
										<p style="text-align:justify;">
											From the company head to development team, we communicate and collaborate promptly to make the client confident and comfortable with our services. On-time delivery is one thing we never compromise at any cost.</p>
									</div>
								</div>
							</div>
						
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/gain.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Competitive Pricing</h4>
										<p style="text-align:justify;">
											At Webingo, you get the product that is worth your money. We provide best in class solutions at the most competitive prices. Our budget-friendly and reliable services ensures that you receive the maximum ROI.</p>
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
				</section>
	  
	  

<section class="why-choos-lg pad-tb deep-dark ">
		<div class="container">
			<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="common-heading ptag">
					<span class="text-radius text-light text-animation bg-b">We Deliver Our Best</span>
					<h2>Our Process</h2>
					<p class="mb30">We follow an extremely extrinsic process with every minute detail taken care of and monitored. </p>
				</div>
			</div>
		</div>
		<div class="row">
		<div class="col-lg-6">
		<div class="common-heading text-l">

		<div class="itm-media-object mt40">
			<div class="media">
				<img src="images/icons/one.png" alt="icon">
				<div class="media-body">
					<h4>Requirement</h4>
					<p style="text-align:justify;">
						The customer is King! We treat him as one always! We ensure that every wish is taken care of with perfection and dedication.</p>


				</div>
			</div>
			<div class="media mt40">
				<img src="images/icons/two.png" alt="icon">
				<div class="media-body">
					<h4> Strategy</h4>
					<p style="text-align:justify;">
						We adopt our on-demand strategies only after rigorous research, understanding the requirement, and market situation.</p>
				</div>
			</div>
			<div class="media mt40">
				<img src="images/icons/three.png" alt="icon">
				<div class="media-body">
					<h4>Front-end Customization</h4>
			<p style="text-align:justify;">
				The app identity is to be maintained to make the users love it. We craft alluring UI/UX that will enchant users to stick on.</p>
				</div>
			</div>
			
			</div>
		</div>
 
</div>
<div class="col-lg-6">
<div class="itm-media-object mt40">
	<div class="media">
		<img src="images/icons/four.png" alt="icon">
		<div class="media-body">
			<h4>	Back-end Engineering</h4>
			<p style="text-align:justify;">
				We steer the wheels at the back end of your on-demand app efficiently. The data storage solutions are developed with utmost care to meet every requirement.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/five.png" alt="icon">
		<div class="media-body">
			<h4>Quality Checks</h4>
			<p style="text-align:justify;">
				Every stage of our app crafting is double checked by coherent testers. Yeah, they show no mercy to those bugs! We promise to deploy the best version.</p>
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
				How a web application works?
                </button>
              </div>
              <div id="collapse-a" class="card-body collapse " aria-labelledby="faq1" data-parent="#accordion">
                <p>
					Whenever a user triggers a request, it goes to a web server. From the web server, the request gets forwarded to the specified web application server. Then, the application server performs the requested work and gives an output. This output is sent to the web server, and then the webserver shows output to the user.</p>
              </div>
            </div>
           <div class="card-1 ">
              <div class="card-header" id="faq5" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-e" aria-expanded="true" aria-controls="collapse-e"style="color: #fff;" >
              Is there any NDA policy in your company?
                </button>
              </div>
              <div id="collapse-e" class="card-body collapse" aria-labelledby="faq5" data-parent="#accordion2">
                <p>
					Yes, we do have a non-disclosure agreement (NDA) policy in our company. Before outlining project details, our client and we sign an agreement that works as a confidentiality agreement between us. It ensures the safety of your ideas and data.</p>
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-md-6 mt60">
          <div id="accordion2" class="accordion">
			  
			  <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-b" aria-expanded="true" aria-controls="collapse-b"style="color: #fff;" >
               Can you develop progressive web applications?
                </button>
              </div>
              <div id="collapse-b" class="card-body collapse" aria-labelledby="faq4" data-parent="#accordion2">
                <p>
					Yes, we do develop PWS. Now you can have web application products that can be installed on the user's home screen. These applications can be accessed offline as well, and the user can also get push notifications using them.</p>
              </div>
            </div>
            <div class="card-1 ">
              <div class="card-header" id="faq2" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-f" aria-expanded="true" aria-controls="collapse-f"style="color: #fff;" >
                What is the difference between a Website & Web Application?
                </button>
              </div>
              <div id="collapse-f" class="card-body collapse" aria-labelledby="faq2" data-parent="#accordion2">
                <p>
					In a website, a user can only read the data, he/she can’t manipulate that data. But, when it comes to web-based applications, these are highly interactive and the user is also allowed to play or manipulate the data.</p>
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