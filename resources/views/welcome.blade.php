
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
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
								<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="https://plus.google.com/u/0/" class="fa fa-google-plus icon-border googleplus"> </a></li> 
							</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@bigcompany.COM</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+62 821-1154-4535</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
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
                              <li class="menu__item menu__item--current">
                                 <a href="/ " class="menu__link">Home</a>
                              </li>
                              <li class="menu__item">
                                 <a href="/about" class="menu__link">About</a>
                              </li>
                              <li class="menu__item">
                                 <a href="/testimonial" class="menu__link">Testimonial</a>
                              </li>
                              <li class="menu__item">
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
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Big Company</h4>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Why Us</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Big Company</h4>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Why Us</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Big Company</h4>
								<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Why Us</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		    <div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
				</a>
			</div>
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
									@foreach ($why as $w)
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Big  <span>Company</span></h4>
										<img src="../images/1.jpg" alt=" " class="img-responsive">
										<h5>{{ $w->title }}</h5>
										<p>{{ $w->content }}</p>
									</div>
								</div>
								@endforeach
							</div>
						</div>
<!-- //Modal1 -->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href="#"><h2>Best Service In Bogor</h2></a>
</div>
	<div class="clearfix"> </div>
</div>
<br><br>
<!-- /about -->
 	<div class="about" id="about">
		  <div class="container">
		  @foreach ($about as $a)
				   <div class="ab-w3l-spa">
                    <br><br>
                            <h3 class="title-w3-agileits title-black-wthree">{{ $a->title }}</h3> 
						   <p class="about-para-w3ls">{{ $a->description }}</p>        
		          </div>
            </div>
        </div>
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Visi Misi</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Visi </h4>
			 		<p>{{$a->visi}}</p>
					</div>
			 </div>
             <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Misi </h4>
			 		<p>{{$a->misi}}</p>
					</div>
			 </div>
			</div>
		</div>
		@endforeach
	</div>
</div>
<!--//about-->


<!-- Gallery -->
<div class="wrapper">
    <br><br>
<h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3> 
  <div class="cols">
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/500/500/)">
						<div class="inner">
							<p>Diligord</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
						  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="url(https://unsplash.it/511/511/)">
						<div class="inner">
							<p>Rocogged</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/502/502/)">
						<div class="inner">
							<p>Strizzes</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/503/503/)">
						<div class="inner">
							<p>Clossyo</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/504/504/">
						<div class="inner">
							<p>Rendann</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/505/505/)">
						<div class="inner">
							<p>Reflupper</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/506/506/)">
						<div class="inner">
							<p>Acirassi</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col" ontouchstart="this.classList.toggle('hover');">
				<div class="containerservice">
					<div class="front" style="background-image: url(https://unsplash.it/508/508/)">
						<div class="inner">
							<p>Sohanidd</p>
              <span>Lorem ipsum</span>
						</div>
					</div>
					<div class="back">
						<div class="inner">
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias cum repellat velit quae suscipit c.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
 </div>
 <br><br>
<!-- //Gallery-->

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

  <!-- visitors -->
	<div class="w3l-visitors-agile" id="visitors">
		<div class="container">
         <h3 class="title-w3-agileits title-black-wthree">Testimonials</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="../images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="../images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Julia Rose</h5>
								<p>Germany</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="../images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="../images/c2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Jahnatan Smith</h5>
								<p>United States</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="../images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="../images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Rosalind Cloer</h5>
								<p>Italy</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="../images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="../images/c4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus. 
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, 
									at imperdiet urna. </p>
								<h5>Amie Bublitz</h5>
								<p>Switzerland</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->

  <!-- blog -->
<br><br>
<h3 class="title-w3-agileits title-black-wthree">Blog</h3> 
<div class="band">
  <div class="item-1">
    <a href="https://design.tutsplus.com/articles/international-artist-feature-malaysia--cms-26852" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-1.jpg);"></div>
      <article>
        <h1>International Artist Feature: Malaysia</h1>
        <span>Mary Winkler</span>
      </article>
    </a>
  </div>
  <div class="item-2">
    <a href="https://webdesign.tutsplus.com/articles/how-to-conduct-remote-usability-testing--cms-27045" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/users-2.png);"></div>
      <article>
        <h1>How to Conduct Remote Usability Testing</h1>
        <span>Harry Brignull</span>
      </article>
    </a>
  </div>
  <div class="item-3">
    <a href="https://design.tutsplus.com/articles/envato-tuts-community-challenge-created-by-you-july-edition--cms-26724" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flex-5.jpg);"></div>
      <article>
        <h1>Created by You, July Edition</h1>
        <p>Welcome to our monthly feature of fantastic tutorial results created by you, the Envato Tuts+ community! </p>
        <span>Melody Nieves</span>
      </article>
    </a>
  </div>
  <div class="item-4">
    <a href="https://webdesign.tutsplus.com/tutorials/how-to-code-a-scrolling-alien-lander-website--cms-26826" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/landing.png);"></div>
      <article>
        <h1>How to Code a Scrolling “Alien Lander” Website</h1>
        <p>We’ll be putting things together so that as you scroll down from the top of the page you’ll see an “Alien Lander” making its way to touch down.</p>
        <span>Kezz Bracey</span>
      </article>
    </a>
  </div>
  <div class="item-5">
    <a href="https://design.tutsplus.com/tutorials/stranger-things-inspired-text-effect--cms-27139" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/strange.jpg);"></div>
      <article>
        <h1>How to Create a “Stranger Things” Text Effect in Adobe Photoshop</h1>
        <span>Rose</span>
      </article>
    </a>
  </div>
  <div class="item-6">
    <a href="https://photography.tutsplus.com/articles/5-inspirational-business-portraits-and-how-to-make-your-own--cms-27338" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/flor.jpg);"></div>
      <article>
        <h1>5 Inspirational Business Portraits and How to Make Your Own</h1>

        <span>Marie Gardiner</span>
      </article>
    </a>
  </div>
  <div class="item-7">
    <a href="https://webdesign.tutsplus.com/articles/notes-from-behind-the-firewall-the-state-of-web-design-in-china--cms-22281" class="card">
      <div class="thumb" style="background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/china.png);"></div>
      <article>
        <h1>Notes From Behind the Firewall: The State of Web Design in China</h1>
        <span>Kendra Schaefer</span>
      </article>
    </a>
  </div>
</div>
<br><br>
<!-- //blog -->

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


