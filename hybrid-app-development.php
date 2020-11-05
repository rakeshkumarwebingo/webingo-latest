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
      <p>Your mobile device has quickly become the easiest portal into <br>your digital self.</p>
      <footer>
      
      </footer>
    </blockquote>
  </div></h2></div>
<div class="col-lg-7" style="margin-top:4%">
<div class="text-l service-desc- pr25">
	<span  class="text-radius text-light text-animation bg-b">GROW TRAFFIC &amp; INCREASE REVENUE</span>
	<h2> About Hybrid App</h2>
	<br>
<p style="text-align: justify"><strong>Hybrid app development</strong> eradicates the rigidity of mobile apps making them suitable for multiple platforms and cost-effective for business using technology for speed and accuracy. The developers at WEBINGO make the best use of frameworks based on web languages like JavaScript and HTML to develop cross-platform apps.<br>
<strong>Hybrid mobile application development</strong> has improved communication and uplifted the networking aspect necessary for an app-based enterprise. The apps developed using web languages behave in a similar way as the native apps taking full advantage of the platform to support specific features. The advantages of cross-platform development are reliable to use for all industrial to retail-based apps. Our cross-platform developers have hands-on experience in the below-mentioned frameworks.</p>

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
<h2 class="mb30">What we Offer?</h2>
</div>
</div>
</div>
<div class="row upset link-hover shape-num justify-content-center">

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/customize.png" alt="service" class="img-fluid"></div>
<h4>Custom Hybrid App Development</h4>
<p style="text-align:justify;">Get end-to-end cross platform app development services from initial consultation, planning to the final app development & support we cover everything.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/support-11.png" alt="service" class="img-fluid"></div>

<h4>Support & <br>Maintenance</h4>
<p style="text-align:justify;">Our hybrid app development company not only provides app development services but also provide complete support and maintenance services to our customers.</p>

<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/development.png" alt="service" class="img-fluid"></div>
<h4>Application Testing <br>& QA</h4>
<p style="text-align:justify;">We test hybrid applications stringently and conduct timely code reviews, create performance testing plans, debug issues, check the performance of applications.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/migrating.png" alt="service" class="img-fluid"></div>
<h4>Migration and Upgrade</h4>
<p style="text-align:justify;">Our hybrid app developers are proficient in adding new features in your present app as well as optimize it to improve overall performance.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/security-check.png" alt="service" class="img-fluid"></div>
<h4>Technology Consulting</h4>
<p style="text-align:justify;">If you need any help related to cross platform mobile app development, feel free to contact us. Our mobile app consultants always ready to help you.</p>
<!--<a href="javascript:void(0)">Learn More <i class="fas fa-chevron-right fa-icon"></i></a>-->
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/web-design-1.png" alt="service" class="img-fluid"></div>
<h4>UI/UX Design Services</h4>
<p style="text-align:justify;">
Assisted by a team of skilled and dedicated UI/UX developers, we provide eye-catchy designing that perfectly reflects your brand image.</p>

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

<div class="col-lg-5">
<div class="single-image wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
<img src="images/demo1.png" alt="image" class="img-fluid no-shadow">
</div>
</div>
<div class="col-lg-1"></div>
<div class="col-lg-6">
<div class="servie-key-points">
  <h4>Benefits of Hybrid.</h4>
 
  <ul class="key-points mt20">
    
     	<li> Hybrid Application development saves your time as a single code can be used to
			develop a similar application for different platforms such as Android and iOS.</li>
		<li>You can get a flawless UX/UI across all the platforms with Hybrid Application
			development as it is lightweight and loads quickly.</li>
		<li>With Hybrid Application Development, you can get a high speed, progressive,
			responsive and high-performance application.</li>
		<li>Hybrid Applications are easy to maintain as versioning is shunned and the web
			pages are updated for the changes.</li>
		<li>You can access the Hybrid applications offline or in low-speed connectivity as well.</li>
		
  </ul>
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
<h2 class="mb30">Industries We Cater.</h2>
</div>
</div>
</div>
<div class="row upset link-hover shape-num justify-content-center">

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/ecommerce-1.png" alt="service" class="img-fluid"></div>
<h4>Retail & E-carts</h4>
<p style="text-align:justify;">Webingo builds powerful e-commerce solutions including e-carts & marketplaces, auctions & reverse auctions, social commerce solutions, etc.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/mobile-application.png" alt="service" class="img-fluid"></div>
<h4>E-Learning Solutions</h4>
<p style="text-align:justify;">Our e-learning solutions include professional online training web apps, learning management systems, corporate learning port-als, online courses, to name a few.</p>
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/website.png" alt="service" class="img-fluid"></div>
<h4>Social Networks Solutions</h4>
<p style="text-align:justify;">The web applications with social connectivity developed by Webingo include social networks & communities, collaboration solutions, blogs & Wikis, etc.
</div>
</div>

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/travel.png" alt="service" class="img-fluid"></div>
<h4>Travel & Tourism Solutions</h4>
<p style="text-align:justify;">Our agile software development solutions improve your travel business’ Return on Investment and lessen the operational cost.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/deliver-1.png" alt="service" class="img-fluid"></div>
<h4>Logistics & Transport Solutions</h4>
<p style="text-align:justify;">Our result driven software development services for logistics & transportations maximize RoI and effectively manage daily workflows.</p>
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/entertainment.png" alt="service" class="img-fluid"></div>
<h4>Media & Entertainment</h4>
<p style="text-align:justify;">
We provide online promotion solutions, social networking development tools, media content distribution channels with the use of the latest trends.</p>
</div>
</div>

<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/medical-app.png" alt="service" class="img-fluid"></div>
<h4>Healthcare App Solutions</h4>
<p style="text-align:justify;">
We are specialized in developing advanced e-healthcare solutions with end-to-end web & mobile healthcare application development services.</p>
</div>
</div>
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
<div class="s-block" data-tilt="" data-tilt-max="5" data-tilt-speed="1000" style="will-change: transform; transform: perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1);">
<div class="s-card-icon"><img src="images/icons/bank.png" alt="service" class="img-fluid"></div>
<h4>Banking & Finance Solutions</h4>
<p style="text-align:justify;">
We provide custom banking & financial software development services for constant cost leadership, increased operational efficiency and agility.</p>
</div>
</div> 
<div class="col-lg-4 col-sm-6 mt30 shape-loc wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
<div class="s-block mb0" data-tilt="" data-tilt-max="5" data-tilt-speed="1000">
<div class="s-card-icon"><img src="images/icons/data-analysis.png" alt="service" class="img-fluid"></div>
<h4>Automotive Solutions</h4>
<p style="text-align:justify;">
Our innovative web and mobile applications help the automotive sector to be more cost efficient, functional & sustainable.</p>
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


<section class="why-choos-lg pad-tb deep-dark bg-gradient15">
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
					<h4>Protecting your IP</h4>
					<p style="text-align:justify;">We safeguard your brilliant idea by signing a NDA to protect your original concept.</p>


				</div>
			</div>
			<div class="media mt40">
				<img src="images/icons/two.png" alt="icon">
				<div class="media-body">
					<h4> Discovery</h4>
					<p style="text-align:justify;">We ask questions to gather detailed mobile app requirements and propose the best solution.</p>
				</div>
			</div>
			<div class="media mt40">
				<img src="images/icons/three.png" alt="icon">
				<div class="media-body">
					<h4>Design</h4>
			<p style="text-align:justify;">We design wireframe prototypes before turning them into world class UI designs.</p>
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
			<h4>Development</h4>
			<p style="text-align:justify;">	We convert the designs into a cross platform app using the latest technologies and frameworks.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/five.png" alt="icon">
		<div class="media-body">
			<h4>Testing</h4>
			<p style="text-align:justify;">We do comprehensive testing to chalk out bugs and issues before making your app live.</p>
		</div>
	</div>
	<div class="media mt40">
		<img src="images/icons/six.png" alt="icon">
		<div class="media-body">
			<h4>Support and Maintenance</h4>
			<p style="text-align:justify;">We continue to offer extended support and maintenance to ensure smooth operations.</p>
		</div>
	</div>
	
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
										<h4>We Have Talents They Strive To Get</h4>
										
										<p style="text-align:justify;">We have trained the qualified developers to grasp and implement the latest trends and technologies in the industry of cross-platform app development.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/friends.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>We Foster Collaboration And Creativity</h4>
										<p style="text-align:justify;">We have the latest infrastructural facilities to create collaborative environment and nurture the creativity by facilitating them with the latest tools and technologies</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/web-design-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										
										<h4>We Have Knowledge of Latest Frameworks</h4>
										<p style="text-align:justify;">Our expertise on the latest cross-platform frameworks and technologies enable us to remain competitive in the ever-growing technology world.</p>
									</div>
								</div>
							</div>
						
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/quality-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Our Prolonged Experiences</h4>
										<p style="text-align:justify;">Our prolonged exposure in the industry has enabled us to deal with any scale of complexities without affecting the quality.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30  wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/icons/support-1.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Our Project Management</h4>
										
										<p style="text-align:justify;">We use the latest project management software, and our trained & experienced project managers make active participation of clients possible.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/dedicate-manager.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Our Dedicated Developers</h4>
										<p style="text-align:justify;">Our team of dedicated developers is the real force behind our success, hence yours. Thus, they take care of your project with full attention.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/technical.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										
										<h4>Our Flexible Engagement Models</h4>
										<p style="text-align:justify;">We offer various engagement models ranging from fixed priced to full-time, part-time, and hourly hiring with required flexibilities.</p>
									</div>
								</div>
							</div>
						
							<div class="col-lg-6 col-sm-6 mt30 wow fadeIn" data-wow-delay="1.1s" style="visibility: visible; animation-delay: 1.1s; animation-name: fadeIn;">
								<div class="s-block wide-sblock">
									<div class="s-card-icon"><img src="images/png/customer-service.png" alt="service" class="img-fluids"></div>
									<div class="s-block-content">
										<h4>Our Exclusive Support And Maintenance</h4>
										<p style="text-align:justify;">We always welcome queries from the clients and provide them technical and general support round-the-clock by allocating a dedicated team.</p>
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
				How long does it take to create a hybrid mobile <br>app?
                </button>
              </div>
              <div id="collapse-a" class="card-body collapse " aria-labelledby="faq1" data-parent="#accordion">
                <p>The time to create a fully functional hybrid mobile app is based on many factors. Customized UI/UX designing work can take anywhere from 1 to 4 weeks, depending on the complexity of the project and the number of revisions you need. After that development phase needs an additional 1 to 6 weeks, depending on the number of pages and functionality required. We follow agile hybrid mobile app development process that help us to deliver your project in minimum possible time.</p>
              </div>
            </div>
           <div class="card-1 ">
              <div class="card-header" id="faq5" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-e" aria-expanded="true" aria-controls="collapse-e"style="color: #fff;" >
              Are your web applications responsive?
                </button>
              </div>
              <div id="collapse-e" class="card-body collapse" aria-labelledby="faq5" data-parent="#accordion2">
                <p>Yes. Every web apps we have built since our inception has been mobile-friendly. With responsive design methods, we ensure that the web apps work well on a wide variety of screen sizes, from tablets and smartphones to small & large desktop monitors.</p>
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-md-6 mt60">
          <div id="accordion2" class="accordion">
			  
			  <div class="card-1 ">
              <div class="card-header" id="faq4" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-b" aria-expanded="true" aria-controls="collapse-b"style="color: #fff;" >
                Can we schedule a call to discuss my app idea and understand your technical capabilities?
                </button>
              </div>
              <div id="collapse-b" class="card-body collapse" aria-labelledby="faq4" data-parent="#accordion2">
                <p>Yes, we are available for a call or email to discuss your app idea, whatever seems convenient to you.</p>
              </div>
            </div>
            <div class="card-1 ">
              <div class="card-header" id="faq2" style="background: linear-gradient(135deg,#3F74A3,#0000AA 32%,#4D4DFF);">
                <button class="btn btn-link btn-block text-left card-title collapsed" type="button" data-toggle="collapse" data-target="#collapse-f" aria-expanded="true" aria-controls="collapse-f"style="color: #fff;" >
                I have a website, can you build an app for the same?
                </button>
              </div>
              <div id="collapse-f" class="card-body collapse" aria-labelledby="faq2" data-parent="#accordion2">
                <p>Yes, we can easily develop an app for your website. We use cloud databases so the data will be synchronized across your website and mobile app as well.</p>
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