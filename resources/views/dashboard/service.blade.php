
<!DOCTYPE html>
<html lang="en">
<head>
<title>Big Company</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="../css/chocolat.css" type="text/css" media="screen">
<link href="../css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="../css/jquery-ui.css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
<div class="banner-top">
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Big <span>Company</span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
               <ul class="nav navbar-nav menu__list">
                              <li class="menu__item ">
                                 <a href=" /" class="menu__link">Home</a>
                              </li>
                              <li class="menu__item">
                                 <a href="/about" class="menu__link">About</a>
                              </li>
                              <li class="menu__item">
                                 <a href="/testimonial" class="menu__link">Testimonial</a>
                              </li>
                              <li class="menu__item menu__item--current">
                                 <a href="/service" class="menu__link">Service</a>
                              </li>
                              <li class="menu__item">
                                 <a href="/gallery" class="menu__link">Gallery</a>
                              </li>
                              <li class="menu__item">
                                 <a href="/blog" class="menu__link">Blog</a>
                              </li>
							  <li class="menu__item">
                                 <a href="/contact" class="menu__link">Contact</a>
                              </li>
                  </ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->

<!-- Service  -->
<div class="wrapper">
    <br><br>
<h3 class="title-w3-agileits title-black-wthree">Our Service</h3> 
  	<div class="cols">
		@foreach ($service  as $s)
		<div class = containersrvc>
    		<div class = cardsrvc>
     			<div class = imagesrvc>
        			<img href = "#" src = '/image/{{ $s->image }}'>
      			</div>
      		<div class = contentsrvc>
        		<h3>{{ $s->name_service }}</h3>
        		<p>{{ $s->description }}</p>
      		</div>
    	</div>    
  	</div>
  @endforeach
</div>		
</div>
<!-- //Service  -->


<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Fast Access</h4>
          <li>
            <a class="nav-link" href="/" style="color: white">Home</a><br>
          </li>
          <li>
            <a class="nav-link" href="/about" style="color: white">About Us</a><br>
          </li>
          <li>
            <a class="nav-link" href="/service" style="color: white">Service</a><br>
          </li>
          <li>
            <a class="nav-link" href="/gallery" style="color: white">Gallery</a><br>
          </li>
          <li>
            <a class="nav-link" href="/testimonial" style="color: white">Testimonial</a><br>
          </li>
          <li>
            <a class="nav-link" href="/blog" style="color: white">Blog</a><br>
          </li>
        </ul>
		</div>
			<div class="contact-agileits">
				<div class="row g-4">
					<div class="col-md-6">
						<img src="../images/1.jpg" alt="No Image" width="200" height="200" style="margin-top: 50px; margin-left: 20px;"> <br> <br>
					</div>
					<div class="col-md-6">
						<p class="contact-agile1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio quos tempore harum laborum eaque. Iusto illum mollitia at tempore ex, perferendis iste veritatis, debitis omnis, quas exercitationem eos cumque pariatur!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
		<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+62 821-1154-4535</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@BigCompany.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> Kota Bogor, Indonesia</p>							
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5543206459!2d106.77703051434406!3d-6.577790366129914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c53991e19627%3A0x6a1afcab769f29f8!2sGraha%20nurul%20menteng!5e0!3m2!1sid!2sid!4v1658157028633!5m2!1sid!2sid" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© BIG COMPANY . All Rights Reserved | Design by <a href="index.php">BIG COMPANY</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="../js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="../js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="../js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="../js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
<!--tabs-->
<script src="../js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


