<style>
    /*******************************
* MODAL AS LEFT/RIGHT SIDEBAR
* Add "left" or "right" in modal parent div, after class="modal".
* Get free snippets on bootpen.com
*******************************/
	.modal.left .modal-dialog,
	.modal.right .modal-dialog {
		position: fixed;
		margin: auto;
		width: 374px;
		height: 100%;
		-webkit-transform: translate3d(0%, 0, 0);
		    -ms-transform: translate3d(0%, 0, 0);
		     -o-transform: translate3d(0%, 0, 0);
		        transform: translate3d(0%, 0, 0);
	}

	.modal.left .modal-content,
	.modal.right .modal-content {
		height: 100%;
		overflow-y: auto;
	}
	
	.modal.left .modal-body,
	.modal.right .modal-body {
		padding: 15px 15px 80px;
	}

/*Left*/
	.modal.left.fade .modal-dialog{
		left: -7px;
		-webkit-transition: opacity 0.3s linear, left 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, left 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, left 0.3s ease-out;
		        transition: opacity 0.3s linear, left 0.3s ease-out;
	}
	
	.modal.left.fade.in .modal-dialog{
		left: 0;
	}
        
/*Right*/
	.modal.right.fade .modal-dialog {
		right: -320px;
		-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
		   -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
		     -o-transition: opacity 0.3s linear, right 0.3s ease-out;
		        transition: opacity 0.3s linear, right 0.3s ease-out;
	}
	
	.modal.right.fade.in .modal-dialog {
		right: 0;
	}

/* ----- MODAL STYLE ----- */
	.modal-content {
		border-radius: 0;
		border: none;
	}

	.modal-header {
		border-bottom-color: #EEEEEE;
		background-color: #FAFAFA;
	}

/* ----- v CAN BE DELETED v ----- */



.btn-demo {
	margin: 15px;
	padding: 10px 15px;
	border-radius: 0;
	font-size: 16px;
	background-color: #FFFFFF;
}

.btn-demo:focus {
	outline: 0;
}

.demo-footer {
	position: fixed;
	bottom: 0;
	width: 100%;
	padding: 15px;
	background-color: #212121;
	text-align: center;
}

.demo-footer > a {
	text-decoration: none;
	font-weight: bold;
	font-size: 16px;
	color: #fff;
}
	
@media only screen and (max-width: 991px){
	.navbarhide {display:none;}
	}
	
  @media all and (max-width: 480px) {
    
	.logohead{margin-bottom: -83px;
    margin-top: -17px;}
	.laptopimage{margin-left: 0px;}
	.mobileimage{width:50%;}
	.typing{font-size:17px;}
	#scrollUp {display:none;visibility: hidden;}
}
 @media all and (min-width: 480px) {
    
	.logohead{margin-bottom: -134px;
    margin-top: -17px;}
	.laptopimage{margin-left: -120px;}
	.hide {display:none;}
	.typing{font-size:40px;}
}
/* Blink for Webkit and others
(Chrome, Safari, Firefox, IE, ...)
*/

@-webkit-keyframes blinker {
  from {opacity: 1.0;}
  to {opacity: 0.0;}
}
.blink{
	text-decoration: blink;
	-webkit-animation-name: blinker;
	-webkit-animation-duration: 0.6s;
	-webkit-animation-iteration-count:infinite;
	-webkit-animation-timing-function:ease-in-out;
	-webkit-animation-direction: alternate;
}
</style>
<div class="container demo">
	
	<!-- Modal -->
	<div class="modal left fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="z-index:9999999">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel"></h4>
				</div>
				<div class="modal-body">
					<div class="container" style="padding-right: 0;">
					<div class="row">	
					<div class="col-lg-3 " ></div>
					<div class="col-lg-6 " style="margin-top: 0%">
					<div class="text-l service-desc- ">
						<br>
						<img src="images/callback.png" alt="abc" class="mobileimage">
					</div>
					</div>
					<div class="col-lg-12">
					<div class="single-image wow fadeIn" >
					<br>
					<div class="head-call-back-content-title " style="font-weight: 900;text-align:center;">Request a Call Back</div><hr>
					<p style="font-family: 'Open Sans', sans-serif;text-align: justify;color: #000">Enter your contact details and  our team member will be in touch soon!</p>
					</div>
					</div>
					</div>
					</div>
						<form action="includes/ajax/header_form" id="header-form" method="POST" style="background:transparent;padding-left:8px;padding-right:8px;">
							<div class="row">
							   <div class=" col-sm-6" style="margin-bottom: -5px;padding-right: 0;">
								  <label for="first_name"></label>
								  <input type="text" id="side_first_name" maxlength="30" name="first_name" class="form-control keyup-header" placeholder="First Name" pattern="[A-Za-z]+" required>
								  <span id="first_name_error_header">* Valid First Name is Required</span>
							   </div>
							   <div class=" col-sm-6" style="margin-bottom: -5px;padding-right: 0;">
								  <label for="last_name"></label>
								  <input type="text" id="side_last_name" maxlength="30" name="last_name" required class="form-control keyup-header" pattern="[A-Za-z]+" placeholder="Last Name">
								  <span class="errormessage" id="last_name_error_header">* Valid Last Name is Required</span>
							   </div>
							   <div class=" col-sm-6" style="margin-bottom: 10px;padding-right: 0;">
								<label for="email"></label>
								  <input type="email" id="side_form_email" name="email" class="form-control keyup-header" placeholder="Email" required>
								  <span class="errormessage" id="email_error_header">* Valid Email is Required</span>
							   </div>
							   <div class=" col-sm-6" style="margin-bottom: 10px;padding-right: 0;">
								<label for="phone"></label>
								  <input type="text" id="side_mobile_number" name="phone" class="form-control keyup-header" placeholder="Mobile No."  required>
								  <div id="phone_error_header">* Valid Phone Number is Required</div>
							   </div>
								<div class=" col-sm-12" style="margin-bottom: 10px;padding-right: 0;">
								<select class="form-control keyup-header" id="side_interested" name="interested" required>
								  <option value="">-- Interested In --</option>
								  <option value="Website Designing">Website Designing</option>
								  <option value="Mobile App Development">Mobile App Development</option>
								  <option value="Web Application Development">Web Application Development</option>
								  <option value="Graphic Designing">Graphic Designing</option>
								  <option value="Conceptual Logo Designing">Conceptual Logo Designing</option>
								  <option value="Digital Marketing">Digital Marketing</option>
								  <option value="Best SEO Services">Best SEO Services</option>
								  <option value="Complete Brand Designing">Complete Brand Designing</option>
								</select>
								<span class="errormessage" id="interested_error_header"></span>
							   </div>
								<div class=" col-sm-12" style="margin-bottom: 10px;padding-right: 0;">
								 <textarea class="form-control keyup-header" id="side_message" name="enquiry" placeholder="Message" rows="3"></textarea>
								 <span class="errormessage" id="enquiry_error_header"></span>
							   </div>
						   </div>
						   <div class=" col-md-12 col-12 m-0 text-center">
							  <button type="button" class="btn-custome btn waves-effect waves-light contact-custome-btn submit_btn" style="font-family: 'Open Sans', sans-serif;background :#0000AA">Request a Call Back</button>
						   </div>
						</form>
				</div>

			</div><!-- modal-content -->
		</div><!-- modal-dialog -->
	</div><!-- modal -->
	
</div><!-- container -->
		<!--Start Header -->
		  
		<div id="top" class="top-review-bar navbarhide ">
      <div class="container">
         <div class="d-flex align-items-center justify-content-between">
           <div class="top-left-part">
             <a href="javascript:void(0);">
               <img src="images/google-logo.png" alt="#">
               <div class="star">
                <img src="images/footer-rating.png" alt="#">
               </div>
               <strong style="color: #fff">Excellent</strong> 
                <span style="color: #fff">4.9 out of 5</span>
             </a>
           </div>
           <div class="top-right-part d-flex align-items-center justify-content-between">
             <span style="font-family: Montserrat;"> <a href="#"><strong style="color: #fff"></strong></a>  Talk to our Executive</span>
             <a href="tel:+917001300600"><strong style="color: #fff">(+91) 7001-300-600</strong></a>
                             <span class="or">or</span>
               <a href="javascript:void(0);" class="head-requet-btn " style="color: #fff;font-weight:900;" data-toggle="modal" data-target="#myModal"><img src="images/image2/girl.png" width="30" alt="#"><span class="blink">Request a Call Back</span></a>
                         </div>
         </div>
      </div>
   </div>
		<header class="nav-bg-b main-header navfix fixed-top ">
			
				<div class="menu-header">
					<div class="dsk-logo"><a class="nav-brand" href="index.php">
						
						<img src="images/white-logo.png" alt="Logo" class=""/>
					</a></div>
					<div class="custom-nav" role="navigation">
						<ul class="nav-list">
							<li class="sbmenu"><a href="#" class="menu-links">IT Solutions </a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="col-md-12">
											<div class="sub-menu-center-block">
												<div class="sub-menu-column"  style="width:33.33%">
														<div class="menuheading">Graphic Designing</div>
														<ul class="link-hover">
															<li><a href="complete_branding.php"><img src="images/icons/branding%20(3).png" >&nbsp;  Complete Branding </a></li>
															<li><a href="logo-design.php"><img src="images/icons/logo-design.png" >&nbsp;   Logo Designing</a></li>
															<li><a href="graphic-design.php"><img src="images/icons/graphic-design.png" >&nbsp;  Graphic Designs</a></li>
															<li><a href="product-packet-design.php"><img src="images/icons/idea.png" >&nbsp;  Product Packaging Designs</a></li>
															<li><a href="business-presentation.php"><img src="images/icons/strategy.png" >&nbsp;  Business presentation</a></li>
															<li><a href="animation-video.php"><img src="images/icons/3d-movie.png" >&nbsp;  2D & 3D animated videos</a></li>
														</ul>
													
														<div class="menuheading"><br>Other Services</div>
														<ul class="link-hover">
															<li><a href="api-integration.php"><img src="images/icons/api.png" >&nbsp;  API Integration Services</a></li>
															<li><a href="customized-software-development.php"><img src="images/icons/custom-software.png" >&nbsp;  Custom Software Development Service</a></li>
															<li><a href="software-testing.php"><img src="images/icons/test.png" >&nbsp;  Software Testing Service</a></li>
															<li><a href="server-migration.php"><img src="images/icons/hosting.png" >&nbsp;  Hosting Migration Services</a></li>
															
														</ul>
												
													</div>
													<div class="sub-menu-column" style="width:33.33%">
														<div class="menuheading">Web Development</div>
														<ul class="link-hover">
															<li><a href="custom-web-development.php"><img src="images/icons/custom-website.png" >&nbsp;  Custom Website Development </a></li>
															<li><a href="#"><img src="images/icons/php-development.png" >&nbsp;  PHP based application Development</a></li>
															<li><a href="cms-development.php"><img src="images/icons/cms.png" >&nbsp;  CMS Web Development</a></li>
															<li><a href="php-development.php"><img src="images/icons/php-framework.png" >&nbsp;  PHP Framework Based Development</a></li>
															<li><a href="psd-to-wordpress-development.php"><img src="images/icons/psd.png" >&nbsp;  PSD to WORDPRESS Development</a></li>
															<li><a href="wordpress-development.php"><img src="images/icons/wordpress-logo.png" >&nbsp;  WORDPRESS Development</a></li>
															<li><a href="nodejs.php"><img src="images/icons/node.png" >&nbsp;  Node JS Development</a></li>
															<li><a href="angular-js.php"><img src="images/icons/angular.png" >&nbsp; Angular JS  Development</a></li>
															<li><a href="e-commerce-development.php"><img src="images/icons/ecommerce.png" >&nbsp;  E-Commerce Development</a></li>
														</ul>
													</div>
													<div class="sub-menu-column" style="width:33.33%">
														<div class="menuheading">Mobile App Development</div>
														<ul class="link-hover">
															<li><a href="web-app-development.php"><img src="images/icons/web.png" >&nbsp;  Web App</a></li>
															<li><a href="hybrid-app-development.php"><img src="images/icons/hybrid.png" >&nbsp;  Hybrid App</a></li>
															<li><a href="native-development.php"><img src="images/icons/native.png" >&nbsp;  Native Development</a></li>
														</ul>
												
												
														<div class="menuheading"><br>Website Designing</div>
														<ul class="link-hover">
															<li><a href="ui-ux-design.php"><img src="images/icons/ui.png" >&nbsp;  UI-UX Design</a></li>
															<li><a href="responsive-web-design.php"><img src="images/icons/web-design.png" >&nbsp;  Responsive Web Design</a></li>
															<li><a href="multi-purpose-landing-page-designing.php"><img src="images/icons/landing.png" >&nbsp;  Multi-purpose landing page Designing</a></li>
															<li><a href="web-redesigning.php"><img src="images/icons/redesign.png" >&nbsp;  Website Redesigning</a></li>
															<li><a href="custom-web-desiging.php"><img src="images/icons/customise.png" >&nbsp;  Fully Customised Website Design</a></li>
															
														</ul>
													</div>
												
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="sbmenu"><a href="#" class="menu-links">Start-Up Box</a>
							<div class="nx-dropdown">
								<div class="sub-menu-section">
									<div class="container">
										<div class="col-md-12">
											<div class="sub-menu-center-block">
												<div class="sub-menu-column" style="width:15%">
													<a href="#"><img src="images/digital_marketing.gif" alt="service" class="img-fluid"></a>
												</div>
												<div class="sub-menu-column" style="width:27%">
													<div class="menuheading">Enterprise Solutions</div>
													<ul class="link-hover">
														<li><a href="startup-mvp-development.php"><img src="images/icons/startup.png" >&nbsp;  Start-up MVP Development</a></li>
														<li><a href="erp-solution.php"><img src="images/icons/erp.png" >&nbsp;  ERP Solutions</a></li>
														<li><a href="crm-solution.php"><img src="images/icons/crm.png" >&nbsp;  CRM Solutions</a></li>
														<li><a href="accounting-development.php"><img src="images/icons/accounting.png" >&nbsp;  Complete Accounting Software</a></li>
														
													</ul>
												</div>
												<div class="sub-menu-column" style="width:28%">
													<div class="menuheading">Business Consultation</div>
													<ul class="link-hover">
														<li><a href="startup-consultion.php"><img src="images/icons/startup-tech.png" >&nbsp;  Start-Up Tech Consultation</a></li>
														<li><a href="business-planning.php"><img src="images/icons/busniess.png" >&nbsp;  Business Planning Consultation</a></li>
														<li><a href="launch-process-plan.php"><img src="images/icons/launch.png" >&nbsp;  Launch Process Plan </a> </li>
														<li><a href="future-growth.php" ><img src="images/icons/growth.png" >&nbsp;  Future Growth Plan</a></li>
														
													</ul>
												</div>
												<div class="sub-menu-column" style="width:32%">
													<div class="menuheading">Digital Marketing</div>
													<ul class="link-hover">
														<li><a href="#"><img src="images/icons/boost.png" >&nbsp;  Website Speed Boost & Optimization</a> </li>
														<li><a href="brand-outreach.php"><img src="images/icons/outreach.png" >&nbsp;  Brand Outreach & Promotion</a> </li>
														<li><a href="lead-generation.php"><img src="images/icons/lead.png" >&nbsp;  Lead Generation</a> </li>
														<li><a href="#"><img src="images/icons/target.png" >&nbsp;  Target Customer Database Acquisition </a> </li>
														<li><a href="social-media-marketing.php"><img src="images/icons/marketing.png" >&nbsp;  Social Media Marketing</a> </li>
														<li><a href="#"><img src="images/icons/social.png" >&nbsp;  Social Media Handle</a> </li>
														<li><a href="seo.php"><img src="images/icons/social.png" >&nbsp;  SEO</a> </li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="contact-show sbmenu"><a href="#" class="menu-links">Company</a> 
							<div class="contact-inquiry " style="margin-top:16px">
								<div class="contact-info-"  style="background:navy;">
									<div class="inquiry-card-nn ">

										<ul class="link-hover">
										<li ><a href="website-how-we-work.php" style="color:#fff"><img src="images/icons/we-work.png" >&nbsp;  How we work</a></li>
										<li ><a href="#" style="color:#fff"><img src="images/icons/trust.png" >&nbsp;  Why Trust and Choose Us?</a></li >
										<li ><a href="#" style="color:#fff"><img src="images/icons/tech.png" >&nbsp;  Technology We Use</a></li>
										<li ><a href="#" style="color:#fff"><img src="images/icons/quality.png" >&nbsp;  Our Achievements</a></li></ul>
									</div>
								</div>
							</div>
						</li>
						
						
						<li class="sbmenu"><a href="#" class="menu-links">Purchase</a>
						<div class="nx-dropdown">
							<div class="sub-menu-section">
								<div class="container">
									<div class="col-md-12">
										<div class="sub-menu-center-block">
											<div class="sub-menu-column" style="width:33.33%">
												<div class="menuheading">Domains</div>
												<ul class="link-hover">
													<li><a href="https://purchase.webingo.in/domain-registration/index.php" target="_blank"><img src="images/icons/domain.png" >&nbsp;  Register a Domain</a></li>
													<li><a href="https://purchase.webingo.in/login.php?show_bulkreg_blurb=yes" target="_blank" ><img src="images/icons/bulk-domain.png" >&nbsp;  Bulk Domain Registration</a></li>
													<li><a href="https://purchase.webingo.in/new-domain-extensions" target="_blank"><img src="images/icons/new-domain.png" >&nbsp;  New Domain Extensions</a></li>
													<li><a href="https://purchase.webingo.in/new-domain-extensions/sunrise"  target="_blank"><img src="images/icons/sunrise.png" >&nbsp;  Sunrise Domains</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/premium-domain.php"  target="_blank"><img src="images/icons/premium.png" >&nbsp;  Premium Domains</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/idn"  target="_blank"><img src="images/icons/ide.png" >&nbsp;  IDN Domain Registration</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/transfer/bulk-domain-transfer.php"  target="_blank"><img src="images/icons/bulk-domain-transfer.png" >&nbsp;  Bulk Domain Transfer</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/free-with-domain-registration.php"  target="_blank"><img src="images/icons/world-wide-web.png" >&nbsp;  Free with Every Domain</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/domain-name-suggestion-tool.php"  target="_blank"><img src="images/icons/suggestion.png" >&nbsp;  Name Suggestion Tool</a></li>
													<li><a href="https://purchase.webingo.in/domain-registration/domain-whois-lookup.php"  target="_blank"><img src="images/icons/whois.png" >&nbsp;  WHOIS LOOKUP</a></li>
												</ul>
											</div>
											<div class="sub-menu-column" style="width:33.33%">
												<div class="menuheading">Hosting </div>
												<ul class="link-hover">
													<li><a href="https://purchase.webingo.in/web-hosting/index.php" target="_blank"><img src="images/icons/shared-hosting.png" >&nbsp;  Shared Hosting</a> </li>
													<li><a href="https://purchase.webingo.in/web-hosting/windows-hosting.php" target="_blank" ><img src="images/icons/window.png" >&nbsp;  Windows Shared Hosting</a> </li>
													<li><a href="https://purchase.webingo.in/cloudhosting.php" target="_blank" ><img src="images/icons/cloud-hosting.png" >&nbsp;  Cloud Hosting</a> </li>
													<li><a href="#"  ><img src="images/icons/mobile-app.png" >&nbsp;  Windows App Development</a> </li>
													<li><a href="https://purchase.webingo.in/windows-reseller-hosting.php" target="_blank" ><img src="images/icons/reseller.png" >&nbsp;  Windows Reseller Hosting</a> </li>
													<li><a href="https://purchase.webingo.in/optimized-wordpress-hosting.php" target="_blank" ><img src="images/icons/wordpress-hosting.png" >&nbsp;  Wordpress Hosting</a> </li>
													<li><a href="#"  ><img src="images/icons/drupal.png" >&nbsp;  Drupal Hosting</a> </li>
													<li><a href="#"  ><img src="images/icons/joomla-logo.png" >&nbsp;  Joomla Hosting</a> </li>
												</ul>
											</div>
											<div class="sub-menu-column" style="width:33.33%">
												<div class="menuheading">Server</div>
												<ul class="link-hover">
													<li><a href="https://purchase.webingo.in/virtualserverlinux-hosting.php" target="_blank"><img src="images/icons/vps.png" >&nbsp;  VPS Server</a> </li>
													<li><a href="https://purchase.webingo.in/virtualserverlinux-hosting.php" target="_blank"><img src="images/icons/vps-server.png" >&nbsp;  Plesk VPS Server</a> </li>
													<li><a href="https://purchase.webingo.in/virtualserverlinux-hosting.php" target="_blank"><img src="images/icons/bluehost.png" >&nbsp;  Bluehost VPS</a> </li>
													<li><a href="https://purchase.webingo.in/dedicated-servers.php" target="_blank" ><img src="images/icons/dedicated.png" >&nbsp;  Dedicated Server</a> </li>
													<li><a href="https://purchase.webingo.in/dedicated-servers-windows.php" target="_blank"><img src="images/icons/window-dedicated.png" >&nbsp;  Windows Dedicated Server</a> </li>
													<li><a href="https://purchase.webingo.in/managed-servers.php" target="_blank"><img src="images/icons/managed.png" >&nbsp;  Managed Server</a> </li>
												</ul>
										
												<div class="menuheading"><br>Professional Emails</div>
												<ul class="link-hover">
													<li><a href="https://purchase.webingo.in/business-email" target="_blank"><img src="images/icons/mail.png" >&nbsp;  Business Mails </a> </li>
													<li><a href="#" ><img src="images/icons/web-mail.png" >&nbsp;  Web Mail</a> </li>
													<li><a href="https://purchase.webingo.in/web-hosting/enterprise-email-hosting.php" target="_blank"><img src="images/icons/enterprise-email.png" >&nbsp;  Enterprise Mail</a> </li>
													<li><a href="https://purchase.webingo.in/google_apps.php"  target="_blank"><img src="images/icons/g-suite.png" >&nbsp;  G Suite</a> </li>
												</ul>
											</div>
											<div class="sub-menu-column">
												<div class="menuheading">And Many More </div>
												<ul class="link-hover">													
													<li><a href="https://purchase.webingo.in/codeguard.php" target="_blank"><img src="images/icons/backup.png" >&nbsp;  Website Backup</a> </li>
													<li><a href="https://purchase.webingo.in/digital-certificate" target="_blank" ><img src="images/icons/ssl-certificate.png" >&nbsp;  SSL Certificate </a> </li>
													<li><a href="https://purchase.webingo.in/sitelock.php"  target="_blank" ><img src="images/icons/security.png" >&nbsp;  Website Security</a> </li>
													<li><a href="https://purchase.webingo.in/reseller.php?action=partnersite"  target="_blank" ><img src="images/icons/domain-reseller.png" >&nbsp;  Domain Reseller</a> </li>
													<li><a href="https://purchase.webingo.in/domain-registration/index.php" target="_blank"  style="font-size:14px;" ><img src="images/icons/domain-reg.png"  >&nbsp;  Domain Registration</a> </li>
													<li><a href="http://sms.webingo.in/login/" target="_blank" ><img src="images/icons/sms.png" >&nbsp;  Bulk SMS</a> </li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class=""><a href="portfolio.php" class="menu-links">Portfolio</a>
					<!--div class="nx-dropdown">
						<div class="sub-menu-section">
							<div class="container">
								<div class="col-md-12">
									<div class="sub-menu-center-block">
										<div class="sub-menu-column"  style="width:33.33%">
											<div class="menuheading">Growth and Outreach</div>
											<ul class="link-hover">
												<li><a href="#"><img src="images/icons/popular.png" >&nbsp;  Purchase Popular Social Media Pages</a></li>
												<li><a href="#"><img src="images/icons/promotion.png" >&nbsp;  PR promotion</a></li>
												<li><a href="#"><img src="images/icons/email-marketing.png" >&nbsp;  Email Marketing</a></li>
												<li><a href="#"><img src="images/icons/promote.png" >&nbsp;  Promote on renowned pages</a></li>
											</ul>
										</div>
										<div class="sub-menu-column">
											<div class="menuheading"> Built Applications</div>
											<ul class="link-hover">
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
												<li><a href="#"></a></li>
											
											</ul>
										</div>
										<div class="sub-menu-column" style="width:50%">
											<a href="#"><img src="images/banner2l.gif" alt="service" class="img-fluid" style="height: 255px;width: 1961px;"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div-->
				</li>
				<li class="contact-show sbmenu"><a href="#" class="menu-links "> Reach Us</a> 
				<div class="contact-inquiry" style="margin-top:16px">
					<div class="contact-info-"  style="background:navy;">
						<div class="inquiry-card-nn ">
							
							<ul class="link-hover">
							<li><a href="contact-us.php" style="color:#fff"><img src="images/icons/phone.png" >&nbsp;  Contact Us</a></li>
							<li><a href="hiring.php" style="color:#fff"><img src="images/icons/hire.png" >&nbsp;  Hiring</a></li>
							<li ><a href="#" style="color:#fff"><img src="images/icons/partner.png" >&nbsp;  Partner with us</a></li>
							<li><a href="#" style="color:#fff"><img src="images/icons/collb.png" >&nbsp;  Looking for Collaboration</a></li>
							<li><a href="http://hr.webingo.in/" target="_blank" style="color:#fff" ><img src="images/icons/quote.png" >&nbsp;  Ask for Quotations</a></li></ul>
						</div>
					</div>
				</div>
			</li>
				
				<li class="sbmenu">
					<div class="nx-dropdown">
						<div class="sub-menu-section">
							<div class="container">
								<div class="col-md-12">
									<div class="sub-menu-center-block">
										<div class="sub-menu-column">
											<a href="#"><img src="images/contact.gif" alt="service" class="img-fluid"></a>
										</div>
										
										
										<div class="sub-menu-column">
											<div class="menuheading">&nbsp;</div>
											<ul class="link-hover">
												<li><a href="contact-us.php"><img src="images/icons/phone.png" >&nbsp;  Contact Us</a></li>
												<li><a href="hiring.php"><img src="images/icons/hire.png" >&nbsp;  Hiring</a></li>
												<li><a href="#"><img src="images/icons/partner.png" >&nbsp;  Partner with us</a></li>
												<li><a href="#"><img src="images/icons/collb.png" >&nbsp;  Looking for Collaboration</a></li>
												<li><a href="http://hr.webingo.in/" target="_blank"><img src="images/icons/quote.png" >&nbsp;  Ask for Quotations</a></li>
											
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
				<!--menu right border-->
				
				<li class="contact-show"><a href="#" class="btn-round- trngl btn-br bg-btn"><i class="fas fa-phone-alt"></i></a>
				<div class="contact-inquiry">
					<div class="contact-info-">
						<div class="contct-heading">CONTACT INSTANTLY</div>
						<div class="inquiry-card-nn hrbg">
							<div class="title-inq-c">FOR SALES DEPARTMENT</div>
							<ul><li class="mb0"><img src="images/flags/in.svg" alt="us office" class="flags-size"> <a href="tel:+918389807466" >(+91) 83898 07466</a></li></ul>
						</div>
						<div class="inquiry-card-nn">
							<div class="title-inq-c">QUICK SUPPORT</div>
							<ul>
							<li><i class="fas fa-envelope"></i><a href="mailto:info@webingo.in" target="_blank">info@webingo.in</a></li>
							<li><i class="fab fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=+919732611075" target="_blank">(+91) 97326 11075</a></li>
							<li><i class="fab fa-facebook"></i><a href="https://www.facebook.com/webingo.in" target="_blank">/webingo.in</a></li></ul>
						</div>
					</div>
				</div>
			</li>
			<!--<li><a href="#" class="btn-br bg-btn3 btshad-b2 lnk" data-toggle="modal" data-target="#myModal1">Request A Quote <span class="circle"></span></a> </li>-->
		</ul>
	</div>
	<div class="mobile-menu2">
		<ul class="mob-nav2">
			
			<li><a  class="btn-round- trngl btn-br bg-btn btshad-b1"  data-toggle="modal" data-target="#myModal"><i class="fas fa-phone" style="color: #fff"></i></a></li>
			<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
		</ul>
	</div>
</div>
<!--Mobile Menu-->
<nav id="main-nav">
	<ul class="first-nav">
		<li><a href="#" style="background: #0d0c40">IT Solutions</a>
		<ul>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Graphic Designing</a>
				<ul >
					<li class="grey"><a href="complete_branding.php">➣ Complete Branding </a></li>
					<li class="grey"><a href="logo-design.php">➣ Logo Designing</a></li>
					<li class="grey"><a href="graphic-design.php">➣ Graphic Designs</a></li>
					<li class="grey"><a href="product-packet-design.php">➣ Product Packaging Designs</a></li>
					<li class="grey"><a href="business-presentation.php">➣ Business presentation</a></li>
					<li class="grey"><a href="animation-video.php">➣ 2D & 3D animated videos</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Web Development</a>
				<ul>
					<li class="grey"><a href="custom-web-development.php">➣ Custom Website Development </a></li>
					<li class="grey"><a href="php-development.php">➣ PHP based application Development</a></li>
					<li class="grey"><a href="cms-development.php">➣ CMS Web Development</a></li>
					<li class="grey"><a href="php-development.php">➣ PHP Framework Based Development</a></li>
					<li class="grey"><a href="psd-to-wordpress-development.php">➣ PSD to WORDPRESS Development</a></li>
					<li class="grey"><a href="wordpress-development.php">➣ WORDPRESS Development</a></li>
					<li class="grey"><a href="nodejs.php">➣ Node JS Development</a></li>
					<li class="grey"><a href="angular-js.php">➣ Angular JS Development</a></li>
					<li class="grey"><a href="e-commerce-development.php">➣ E-Commerce Development</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Mobile App Development</a>
				<ul>
					<li class="grey"><a href="#">➣ Web App</a></li>
					<li class="grey"><a href="hybrid-app-development.php">➣ Hybrid App</a></li>
					<li class="grey"><a href="native-development.php">➣ Native</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Website Designing</a>
				<ul>
					<li class="grey"><a href="ui-ux-design.php">➣ UI-UX Design</a></li>
					<li class="grey"><a href="responsive-web-design.php">➣ Responsive Web Design</a></li>
					<li class="grey"><a href="multi-purpose-landing-page-designing.php">➣ Multi-purpose landing page Designing</a></li>
					<li class="grey"><a href="web-redesigning.php">➣ Website Redesigning</a></li>
					<li class="grey"><a href="custom-web-desiging.php">➣ Fully Customised Website Design</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Other Services</a>
				<ul>
					<li class="grey"><a href="api-integration.php">➣ API Integration Services</a></li>
					<li class="grey"><a href="customized-software-development.php">➣ Custom Software Development Service</a></li>
					<li class="grey"><a href="software-testing.php">➣ Software Testing Service</a></li>
					<li class="grey"><a href="server-migration.php">➣ Hosting Migration Services</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" style="background: #0d0c40">Start-Up Box</a>
		<ul>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Enterprise Solutions</a>
				<ul >
					<li class="grey"><a href="startup-mvp-development.php">➣ Start-up MVP Development</a></li>
					<li class="grey"><a href="erp-solution.php">➣ ERP Solutions</a></li>
					<li class="grey"><a href="crm-solution.php">➣ CRM Solutions</a></li>
					<li class="grey"><a href="accounting-development.php">➣ Complete Accounting Software</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Business Consultation</a>
				<ul>
					<li class="grey"><a href="#">➣ Start-Up Tech Consultation</a></li>
					<li class="grey"><a href="business-planning.php">➣ Business Planning Consultation</a></li>
					<li class="grey"><a href="#">➣ Launch Process Plan </a> </li>
					<li class="grey"><a href="#" >➣ Future Growth Plan</a></li>
				</ul>
			</li>
			<li class="sec_ul" style="background: #0000FF">
				<a href="#">➣ Digital Marketing </a>
				<ul>
					<li class="grey"><a href="#">➣ Website Speed Boost & Optimization</a> </li>
					<li class="grey"><a href="#">➣ Brand Outreach & Promotion</a> </li>
					<li class="grey"><a href="#">➣ Lead Generation</a> </li>
					<li class="grey"><a href="#">➣ Target Customer Database Acquisition </a> </li>
					<li class="grey"><a href="#">➣ Social Media Marketing</a> </li>
					<li class="grey"><a href="#">➣ Social Media Handle</a> </li>
					<li class="grey"><a href="#">➣ SEO</a> </li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="#" style="background: #0d0c40">Company</a>
	<ul>
		<li class="grey"><a href="website-how-we-work.php">➣ How we work</a></li>
		<li class="grey"><a href="#">➣ Why Trust and Choose Us?</a></li>
		<li class="grey"><a href="#">➣ Technology We Use</a></li>
		<li class="grey"><a href="#">➣ Our Achievements</a></li>
		
	</ul>
</li>
<li><a href="#">Build Applications</a> </li>
<li><a href="#" style="background: #0d0c40">Purchase</a>
<ul>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Domains</a>
		<ul >
			
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/index.php" target="_blank">➣ Register a Domain</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/login.php?show_bulkreg_blurb=yes" target="_blank"  >➣ Bulk Domain Registration</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/new-domain-extensions" target="_blank" >➣ New Domain Extensions</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/new-domain-extensions/sunrise"  target="_blank" >➣ Sunrise Domains</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/premium-domain.php"  target="_blank">➣ Premium Domains</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/idn"  target="_blank">➣ IDN Domain Registration</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/transfer/bulk-domain-transfer.php"  target="_blank" >➣ Bulk Domain Transfer</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/free-with-domain-registration.php"  target="_blank" >➣ Free with Every Domain</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/domain-name-suggestion-tool.php"  target="_blank" >➣ Name Suggestion Tool</a></li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/domain-whois-lookup.php"  target="_blank" >➣ WHOIS LOOKUP</a></li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Hosting</a>
		<ul >
			
			<li class="grey"><a href="https://purchase.webingo.in/web-hosting/index.php" target="_blank">➣ Shared Hosting</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/web-hosting/windows-hosting.php" target="_blank" >➣ Windows Shared Hosting</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/cloudhosting.php" target="_blank" >➣ Cloud Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Windows App Developmen</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/windows-reseller-hosting.php" target="_blank" >➣ Windows Reseller Hosting</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/optimized-wordpress-hosting.php" target="_blank" >➣ Wordpress Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Drupal Hosting</a> </li>
			<li class="grey"><a href="#" >➣ Joomla Hosting</a> </li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Server</a>
		<ul >
			
			<li class="grey"><a href="https://purchase.webingo.in/virtualserverlinux-hosting.php" target="_blank">➣ VPS Server</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/virtualserverlinux-hosting.php" target="_blank" >➣ Plesk VPS Server</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/virtualserverlinux-hosting.php" target="_blank" >➣ Bluehost VPS</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/dedicated-servers.php" target="_blank" >➣ Dedicated Server</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/dedicated-servers-windows.php" target="_blank" >➣ Windows Dedicated Server</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/managed-servers.php" target="_blank" >➣ Managed Server</a> </li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ Professional Emails</a>
		<ul >
			
			<li class="grey"><a href="https://purchase.webingo.in/business-email" target="_blank">➣ Business Mails </a> </li>
			<li class="grey"><a href="#" >➣ Web Mail</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/web-hosting/enterprise-email-hosting.php" target="_blank" >➣ Enterprise Mail</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/google_apps.php"  target="_blank" >➣ G Suite</a> </li>
		</ul>
	</li>
	<li class="sec_ul" style="background: #0000FF">
		<a href="#">➣ And Many More</a>
		<ul >
			
			<li class="grey"><a href="https://purchase.webingo.in/codeguard.php" target="_blank" >➣ Website Backup</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/digital-certificate" target="_blank">➣ SSL Certificate </a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/sitelock.php"  target="_blank" >➣ Website Security</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/reseller.php?action=partnersite"  target="_blank" >➣ Domain Reseller</a> </li>
			<li class="grey"><a href="https://purchase.webingo.in/domain-registration/index.php" target="_blank" >➣ Domain Registration</a> </li>
			<li><a href="http://sms.webingo.in/login/" target="_blank" >Bulk SMS</a> </li>
		</ul>
	</li>
</ul>
</li>
<li><a href="#" style="background: #0d0c40">Growth and Outreach</a>
	<ul>
		<li class="grey"><a href="#">➣ Purchase Popular Social Media Pages</a></li>
		<li class="grey"><a href="#">➣ PR promotion</a></li>
		<li class="grey"><a href="#">➣ Email Marketing</a></li>
		<li class="grey"><a href="#">➣ Promote on renowned pages</a></li>
	</ul>
</li>
<li><a href="#">Hiring</a> </li>
<li><a href="#" style="background: #0d0c40">Reach Us</a>
	<ul>
		<li class="grey"><a href="contact-us.php">➣ Contact Us</a></li>
		<li class="grey"><a href="hiring.php">➣ Hiring</a></li>
		<li class="grey"><a href="#">➣ Partner with us</a></li>
		<li class="grey"><a href="#">➣ Looking for Collaboration</a></li>
		<li class="grey"><a href="http://hr.webingo.in/" target="_blank">➣ Ask for Quotation</a></li>
	</ul>
</li>


</ul>
<ul class="bottom-nav">
<li class="prb">
<a href="#">
	<i class="fab fa-facebook" style="color: #fff"></i>
</a>
</li>
<li class="prb">
<a href="#">
	<i class="fab fa-whatsapp" style="color: #fff"></i>
</a>
</li>
<li class="prb">
<a href="tel:+91 7001300600">
<i class="fas fa-phone" style="color: #fff"></i>
</a>
</li>
</ul>

</nav>
<!--Mobile contact-->

		  </header>
<!--End Header -->
