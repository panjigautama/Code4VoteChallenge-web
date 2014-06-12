<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Presidol | Tentukan calon presiden idola mu</title>
		<link href="{{ asset('landing/css/style.css') }}" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/images/fav-icon.png') }}" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!----//webfonts----> 
		<!--- start-tooltips------>
		<link rel="stylesheet" type="text/css" href="{{ asset('landing/css/simptip-mini.css') }}" media="screen,projection" />
		<!--- //End-tooltips------>
		<!---image-carsuals---->
	    <link href="{{ asset('landing/css/owl.carousel.css') }}" rel="stylesheet">
	    <link href="{{ asset('landing/css/owl.theme.css') }}" rel="stylesheet">
	    <script src="{{ asset('landing/js/jquery.min.js') }}"></script> 
   		<script src="{{ asset('landing/js/owl.carousel.js') }}"></script>
   		<script>
	    $(document).ready(function() {
	      $("#owl-demo").owlCarousel({
	      	navigation: true,
		    navigationText: [
		      "<i class='icon-chevron-left icon-white'></i>",
		      "<i class='icon-chevron-right icon-white'></i>"
		      ],
	        items :3,
	        slideSpeed :100,
	        lazyLoad : true,
	        autoPlay : true,
	      });
	    });
	    </script>
   		<!---//End-carsuals---->
   		<!-- Add fancyBox main JS and CSS files -->
		<script src="{{ asset('landing/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
		<link href="{{ asset('landing/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
				<script>
					$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
					});
				});
				</script>
	<!-- //End fancyBox main JS and CSS files -->
	</head>
	<body>
		<!--- start-wrap---->
		<div class="wrap">
			<!---start-header---->
			<div class="header">
				<div class="header-left">
					<span> </span>
				</div>
				<div class="header-right">
					<a class="logo" href="#"><img src="{{ asset('landing/images/logo.png') }}" title="App7" /></a>
					<p>Tentukan calon presiden idolamu</p>
					<ul class="fea-list">
						<li><a href="#"><span> </span>Lihat info lengkap calon presiden & wakil presiden</a></li>
						<li><a href="#"><span> </span>Kemudahan dalam melakukan komparasi latar belakang capres ataupun cawapres</a></li>
						<li><a href="#"><span> </span>Vote presiden pilihan mu dan suarakan opini mu !</a></li>
						<li><a href="#"><span> </span>Lihat animo masyarakat tentang pasangan capres idolamu</a></li>
						<li><a href="#"><span> </span>Dibuat dengan menggunakan API dari <a href="http://developer.pemiluapi.org" target="_blank"><img src="{{ asset('landing/images/pemilu_api_logo.png') }}" alt="" /></a></a></li>
					</ul>
					<ul class="big-btns">
						<!-- <li><a class="iapps" href=""> </a></li> -->
						<li><a class="gapps" href="{{ URL::asset('release/presidol.apk') }}" target="_blank"> </a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<!---End-header---->

			<!---start-content---->
			<div class="content">

				<!-- //Start-panels -->
				<div class="panels">
					<!----start-faq---->
				<div class="faq">
					<div class="faq-header">
						<h3>Pertanyaan & Jawaban</h3>
						<!-- <p>Frequently asked questions and simple answers to undersand</p> -->
					</div>
					<div class="faq-grids">
						<div class="faq-grid-left">
							<div class="faq-grid-left-grid">
								<h4><a href="#">Darimana data pasangan calon presiden didapat ?</a></h4>
								<p>Kami menggunakan data dari <a href="http://developer.pemiluapi.org" target="_blank"></a> dengan mengambil Presidential Candidate API.</p>
							</div>
							<div class="faq-grid-left-grid">
								<h4><a href="#">Darimana data animo masyarakat ?</a></h4>
								<p>Animo masyarakat kami dapatkan dengan melakukan <a href="http://en.wikipedia.org/wiki/Sentiment_analysis" target="_blank">analisis sentiment</a> pada media-media sosial dengan keyword masing-masing pasangan calon presiden.</p>
							</div>
						</div>
						<div class="faq-grid-right">
							<div class="faq-grid-left-grid">
								<h4><a href="#">Apakah aplikasi ini sudah stabil ?</a></h4>
								<p>Saat ini aplikasi masih dalam tahap pengembangan untuk segera rilis secepatnya.</p>
							</div>
							<div class="faq-grid-left-grid">
								<h4><a href="#">Apakah kode aplikasi ini dapat diakses ?</a></h4>
								<p>Ya ! Silahkan unduh source codenya di akun github <a href="https://github.com/panjigautama/Code4VoteChallenge-mobile" target="_blank">berikut ini</a>.</p>
							</div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<!----End-faq---->
				</div>
				<!---//End-panels---->

				<!---start-divice-scree-slider----->
				<div class="img-cursual">
						<div id="owl-demo" class="owl-carousel">
			                <div class="item"><img class="lazyOwl" data-src="{{ asset('landing/images/screen1.png') }}" alt="Lazy Owl Image"></div>
			                <div class="item"><img class="lazyOwl" data-src="{{ asset('landing/images/screen2.png') }}" alt="Lazy Owl Image"></div>
			                <div class="item"><img class="lazyOwl" data-src="{{ asset('landing/images/screen3.png') }}" alt="Lazy Owl Image"></div>
			                <div class="item"><img class="lazyOwl" data-src="{{ asset('landing/images/screen4.png') }}" alt="Lazy Owl Image"></div>
			                <div class="item"><img class="lazyOwl" data-src="{{ asset('landing/images/screen5.png') }}" alt="Lazy Owl Image"></div>
			                <div class="item"><img class="lazyOwl" data-src="{{ asset('landing/images/screen6.png') }}" alt="Lazy Owl Image"></div>
		               </div>
				</div>
				<!---//End-divice-scree-slider----->

				<!---start-testimonials---->
					<div class="testimonials">
						<div class="testimonial-head">
							<h4>Tim Pengembang</h4>
							<p>dari jogja dengan ♥</p>
						</div>
						<div class="testimonial-grids">
							<div class="testimonial-grid">
								<a href="#"><img src="{{ asset('landing/images/dev_1.png') }}" alt="" /></a>
								<p></p>
								<a href="https://twitter.com/geralaldi" target="_blank">@geralaldi, programmer</a>
							</div>
							<div class="testimonial-grid">
								<a href="#"><img src="{{ asset('landing/images/dev_2.png') }}" alt="" /></a>
								<p></p>
								<a href="https://twitter.com/gitalistyaa" target="_blank">@gitalistyaa, designer</a>
							</div>
							<div class="testimonial-grid">
								<a href="#"><img src="{{ asset('landing/images/dev_3.png') }}" alt="" /></a>
								<p></p>
								<a href="https://twitter.com/panji_g" target="_blank">@panji_g, programmer</a>
							</div>
							<div class="clear"> </div>
						</div>
				  </div>
				<!---//End-testimonials---->

				<!---start-stay-with----->
				<div class="stay-with">
					<div class="stay-with-head">
						<h3>Kontak Kami</h3>
						<p>Kontak kami kapan saja melalui <a href="mailto:panji.gautama@gmail.com">email.</a></p>
					</div>
				</div>
				<!---End-stay-with----->
				<!---start-footer----->
				<div class="footer">
					<div class="footer-left">
						<p>Copyright &#169; 2014. Presidol.</p>
					</div>
					<div class="footer-right">
						<!----move-top-path---->
							<script type="text/javascript">
							$(document).ready(function() {
								$().UItoTop({ easingType: 'easeOutQuart' });
							});
							</script>
							<script type="text/javascript" src="{{ asset('landing/js/move-top.js') }}"></script>
							<script type="text/javascript" src="{{ asset('landing/js/easing.js') }}"></script>
							<script type="text/javascript">
								jQuery(document).ready(function($) {
									$(".scroll").click(function(event){		
										event.preventDefault();
										$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
									});
								});
							</script>
					   <!----move-top-path---->
			    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
						<!-- <p>Template by <a href="http://w3layouts.com/">W3layouts</a></p> -->
					</div>
					<div class="clear"> </div>
				</div>
				<!---//End-footer----->
			</div>
			<!---End-content---->
		</div>
		<!--- //End-wrap---->
	</body>
</html>

