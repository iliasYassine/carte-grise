<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/fav.png">
        <!-- Author Meta -->
        <meta name="author" content="CodePixar">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Service Carte Grise</title>
        <!--
            CSS
            ============================================= -->
        <link rel="stylesheet" href="{{ asset('css/linearicons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('css/nouislider.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/ion.rangeSlider.skinFlat.css')}}" />
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    </head>

<body>
    <header class="header_area sticky-header">
		<div class="main_menu">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light main_box">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="img/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>

               <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}"">Carte Grise</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="{{url('/prix')}}" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prix</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/documents')}}"">Documents</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}"">Contact</a></li>
                           <!-- Authentication Links -->
                           @guest
                           <li class="nav-item">
                               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                           </li>
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                               </li>
                           @endif
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                               </div>
                           </li>
                       @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                 
                </div>
            </div>
        </nav>
        
      
    </div>
</div>
    </header>
    <!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Votre Carte Grise En 3 Etapes </h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
    <main class="py-4">
        @yield('content')
    </main>
    	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							teste teste
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
													<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
												</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
							<li><img src="" alt=""></li>
						</ul>
					</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by 
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
    <!-- End footer Area -->
	<script src="{{ asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('js/nouislider.min.js')}}"></script>
	<script src="{{ asset('js/countdown.js')}}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('js/gmaps.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
