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
  </head>
   <body>
    		<!--Start Header -->
		<?php include 'header.php'; ?>
<!--End Header -->
<!--Breadcrumb Area-->
<section class="breadcrumb-areav2 banner-6">
<div class="text-block">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 v-center">
        <div class="bread-inner">
          <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
            <ul>
              <li><a href="index.php" style="">Home</a></li>
              
            </ul>
          </div>
          <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
            <h2 style="">ASK FOR QUOTATION</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!--End Breadcrumb Area-->

<!--Start Enquire Form-->
<section class="contact-page pad-tb">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6 v-center">
      <div class="common-heading text-l">
        <span>Contact Now</span>
      <h2 class="mt0 mb0">ASK FOR QUOTATION</h2>
        <p class="mb60 mt20">We will catch you as early as we receive the message</p>
      </div>
      <div class="form-block">
        <form id="contact-form" method="post" action="php/contact.php" data-toggle="validator">
          <div class="messages"></div>
          <div class="fieldsets row">
            <div class="col-md-12 form-group"><input id="name" type="text" name="name"  placeholder="Enter your name *" required="required" data-error="Name is required.">
            <div class="help-block with-errors"></div></div>
            <div class="col-md-12 form-group"><input id="from_email" type="email" name="email"  placeholder="Enter your email *" required="required" data-error="Valid email is required.">
            <div class="help-block with-errors"></div></div>
          </div>
          <div class="fieldsets row">
			  
            <div class="col-md-12 form-group"><input id="from_phone" type="text" name="phone"  placeholder="Enter your phone No *" required="required" data-error="Phone No is required.">
            <div class="help-block with-errors"></div></div>
           	
          </div>
          <div class="fieldsets form-group"> <textarea id="message" name="message"  placeholder="    Message for me *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
            <div class="help-block with-errors"></div>
          </div>
          
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
            <label class="custom-control-label" for="customCheck">I agree to Webingo Infotech Solution LLP<a href="javascript:void(0)"> Privacy Policy</a> &amp; <a href="javascript:void(0)"> Terms of Use.</a></label>
          </div> 

 
          <div class="fieldsets mt20">
            <button type="submit" class="lnk btn-main bg-btn">Submit <span class="circle"></span></button>
          </div>
          <p class="trm"><i class="fas fa-lock"></i>We hate spam, and we respect your privacy.</p>
        </form>
      </div>
    </div>
    <div class="col-lg-5 v-center">
      <div class="contact-details">
        <div class="contact-card wow fadeIn" data-wow-delay=".2s">
          <div class="info-card v-center">
            <span class="text-radius text-light text-animation bg-b"><i class="fas fa-phone-alt"></i> Phone:</span>
            <div class="info-body">
              <p>Assistance hours: Monday – Friday, 10 am to 6 pm</p>
              <a href="tel:+10000000000">(+91) 7001-300-600</a>
            </div>
          </div>
        </div>
        <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s">
          <div class="info-card v-center">
            <span class="text-radius text-light text-animation bg-b"><i class="fas fa-envelope"></i> Email:</span>
            <div class="info-body">
              <p>Our support team will get back to in 24-h during standard business hours.</p>
				<p><span><a href="mailto:info@webingo.in"><i class="fas fa-envelope"></i>info@webingo.in</a></span></p>
				<p><span><a href="mailto:sales@webingo.in"><i class="fas fa-envelope"></i>sales@webingo.in</a> </span></p>
				<p><span><a href="mailto:hr@webingo.in"><i class="fas fa-envelope"></i>hr@webingo.in</a>  </span></p><p><span><a href="mailto:support@weingo.in"><i class="fas fa-envelope"></i>support@weingo.in</a>  </span></p>


            </div>
          </div>
        </div>
       <!-- <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s">
          <div class="info-card v-center">
            <span><i class="fab fa-skype"></i> Skype:</span>
            <div class="info-body">
              <p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
              <a href="skype:niwax.company?call">niwax.company</a>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </div>
</div>
</section>
<!--End Enquire Form-->
<!--Start Location-->
 <section class="our-office bg-gradient15 pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
  <div class="common-heading">
    <span>Our Locations</span>
    <h2>WEBINGO’S OFFICE</h2>
  </div>
</div>
</div>
<div class="row justify-content-center upset shape-numm">
<div class="col-lg-6 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
  <div class="office-card">
    <div class="skyline-img">
      <img src="images/kolkata.png" alt="New York" class="img-fluid">
    </div>
    <div class="office-text">
       <h4>Kolkata Office</h4>
              <p>7th Floor, Monibhandar Building Webel
Bhavan Premises, Sector V, Ring Rd, Bidhannagar,

West Bengal 700091</p>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
		<a href="https://goo.gl/maps/7KTqxDnkUYxTcoiHA" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
    </div>
  </div>
</div>
<div class="col-lg-6 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
  <div class="office-card">
    <div class="skyline-img">
      <img src="images/jharkhand-Banner.jpg" alt="sydney" class="img-fluid">
    </div>
    <div class="office-text">
      <h4>Dhanbad Office</h4>
              <p>Om residency C block, flat no-101, near
vivah bhawan, Babudih Dhanbad, Jharkhand 828130</p>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
      <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
		<a href="https://goo.gl/maps/xwbtDz6tFf6xC3PT8" target="blank" class="btn-outline">View on Map <i class="fas fa-chevron-right fa-icon"></i></a>
    </div>
  </div>
</div>

</div>
</div>
</section>
<!--End Location-->
<!--Start Footer-->
<?php include 'footer.php'; ?>
<!--End Footer-->

<!--scroll to top-->
<a id="scrollUp" href="#top"></a>
<!-- js placed at the end of the document so the pages load faster -->
<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/ajax.form.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/plugin.min.js"></script>
<!--common script file-->
<script src="js/main.js"></script>
<script type="text/javascript">  
$(document).ready(function(){


	$(document).on('click', '.submit_btn', function(){
	    
		var txtname = $('#name').val();
		var txtemail = $('#from_email').val();
		var txtphone =$('#from_phone').val();
		var code = $('#from_code').val();
		var c_name = $('#c_name').val();
		var txtmessage = $('#message').val();
		
		    
		var action = "add";
		

        

		    
			$.ajax({
				url:"insert_contact.php",
				method:"POST",
				data:{txtname:txtname, txtemail:txtemail, txtphone:txtphone, code:code, c_name:c_name, txtmessage:txtmessage},
				success:function(data)
				{
				    
					alert("Thanks For Contacting Us");
				}
			});
		
	});
    
});

</script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lf4wNEZAAAAACeNgAtPhbDG2MuNRHf5HYwGBOcF"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="js/jjquery.min.js"></script>
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