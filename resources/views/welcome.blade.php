<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="STakePhoto web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="css/simpleLightbox.css" rel="stylesheet" type="text/css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //online-fonts -->
        <title>TakePhoto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div>
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

                <div class="main-agile">
<div class="w3l-overlay">
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
									<p>kami menyediakan</p>
									<h3>TEMPAT PHOTOGRAPHER</h3>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Find More</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<p>Kami menyediakan</p>
									<h3>PESAN JASA PHOTO</h3>
									<div class="agileits_w3layouts_more menu__item">
										<a href="{{route('post.index')}}">Find More</a>
									</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<p>Kami menyediakan</p>
									<h3>FILTER PHOTO</h3>
									<div class="agileits_w3layouts_more menu__item">
										<a href="{{url('konten/filter')}}">Find More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!-- //banner-text -->
		</div>
    </div>	
    	<!-- header -->
	@section('header')
    @include('layouts.partial.header')
@show
	<!-- //header -->
	<!-- //banner --> 
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
	<div class="banner-bottom" id="gallery">
		<div class="container">
			<h3 class="title-w3l" style="color:#fff">Gallery</h3>
			<div class="w3ls_gallery_grids">
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g1.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>TakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g2.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>SakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g3.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g3.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>SakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g4.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g4.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>SakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g6.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g6.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>SakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g5.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>SakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 w3_agile_gallery_grid">
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g7.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g7.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>SakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g8.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g8.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>TakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
					<div class="agile_gallery_grid">
						<a title="Donec sapien massa, placerat ac sodales ac, feugiat quis est." href="images/g9.jpg">
							<div class="agile_gallery_grid1">
								<img src="images/g9.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_gallery_grid1_pos">
									<h3>TakePhoto</h3>
									<p>Donec vitae hendrerit faucibus.</p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
    </div>
	<!-- Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<img src="images/3.jpg" alt=" " class="img-responsive">
						<h5>Donec lobortis pharetra dolor</h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, rds which don't look even slightly believable..</p>
				</div>
			</div>
			<!-- //Modal content-->
		</div>

        </div>

        <div class="agileits_w3layouts_mail_grids" id="mail" >	
            <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
		<h3 class="title-w3l" style="color:#fff; " >Mail us</h3>
		<div class="col-md-6 w3l_mail_right">
			<h3>Contact Info</h3>
			<ul>
				<li><span><i class="fa fa-home" aria-hidden="true"></i>Address<label>:</label></span> Jl. A.H. Nasution No.105, Cipadung, Cibiru, Bandung, Jawa Barat 40614</li>
				<li><span><i class="fa fa-phone" aria-hidden="true"></i>Phone<label>:</label></span>  (022) 7800525</li>
				<!-- <li><span><i class="fa fa-fax" aria-hidden="true"></i>Fax<label>:</label></span> +82-21-1218</li> -->
				<li><span><i class="fa fa-envelope" aria-hidden="true"></i>Email<label>:</label></span> <a href="official@uinsgd.ac.id>info@example.com</a></li>
				<li><span><i class="fa fa-globe" aria-hidden="true"></i>Website<label>:</label></span> <a href="https://uinsgd.ac.id/">UIN bandung</a></li>
			</ul>
		</div>
		<div class="col-md-6 w3l_mail_left">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.65920809796!2d107.71548211412585!3d-6.9312740949920375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dd42c254a55d%3A0xee52343f78dc2e32!2sUIN+Sunan+Gunung+Djati+Bandung!5e0!3m2!1sid!2sid!4v1544893993524" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //Contact -->

	<br> <br>
	<div class="footer w3ls">
	<div class="container">
			<div class="ftr-menu">
				 <ul>
					<li><a class="scroll" href="#home">Home </a></li>
					<li><a class="scroll" href="#about">About</a></li>
					<li><a class="scroll" href="#services">Services</a></li>
					<li><a class="scroll" href="#team">Team</a></li>
					<li><a class="scroll" href="#gallery">Gallery</a></li>
					<li><a class="scroll" href="#contact">Contact Us</a></li>
				 </ul>
			</div>
			<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
			</div>
			<div class="logo-fo">
				<h2><a href="index.html">TakePhoto</a></h2>
			</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="copyrights">
	<p>&copy; 2018 TakePhoto. All rights reserved | Design by <a href="http://w3layouts.com">TakePhoto Team</a></p>
</div>
        
        <!-- js-scripts -->			
		<!-- js -->
			<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
		<!-- //js -->
	
		<!-- Baneer-js -->
			<script src="js/responsiveslides.min.js"></script>
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
			 <script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider").responsiveSlides({
									auto: true,
									pager:false,
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
			
							 
		<!-- //Baneer-js -->
		<!-- fixed-scroll-nav-js --> 
		<script src="js/scrolling-nav.js"></script>  
		<!-- //fixed-scroll-nav-js --> 
			<!-- Stats-Number-Scroller-Animation-JavaScript -->
			<script src="js/waypoints.min.js"></script> 
			<script src="js/counterup.min.js"></script> 
			<script>
				jQuery(document).ready(function( $ ) {
					$('.counter').counterUp({
						delay: 10,
						time: 1000,
					});
				});
			</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->
	<!-- Progressive-Bars-JavaScript -->
			<script src="js/bars.js"></script>
		<!-- //Progressive-Bars-JavaScript -->
		<!-- gallery -->
		<script src="js/simpleLightbox.js"></script>
	<script>
		$('.w3_agile_gallery_grid a').simpleLightbox();
	</script>
	<!-- //gallery -->

		<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- start-smoth-scrolling -->
		
		<!-- smooth scrolling-bottom-to-top -->
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
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		<!-- //smooth scrolling-bottom-to-top -->
		<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- FlexSlider -->
<!-- //js-scripts -->
    </body>
</html>
