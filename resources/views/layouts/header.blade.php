<!DOCTYPE html>
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
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{asset('css/font-awesome.cs')}}s"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="{{asset('css/simpleLightbox.css')}}" rel="stylesheet" type="text/css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!-- //online-fonts -->
        <title>TakePhoto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
 

</head>
 <body>

        <div class="header-w3layouts"> 
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">TakePhoto</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="{{ url('/') }}"><span>T</span>akePhoto</a></h1>
			</div> 
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    @guest
                           <li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
					<li><a class="page-scroll scroll" href="#about"> <strong>About</strong> </a></li>
					<li><a class="page-scroll scroll" href="{{ route('post.index') }}"> <strong>Post</strong> </a></li>
                    <li><a class="page-scroll scroll" href="#   "> <strong>Gallery</strong> </a></li>
                    <li><a class="page-scroll scroll" href="{{url('konten/filter')}}"> <strong>Filter</strong> </a></li>
                    <li><a class="page-scroll scroll" href="#mail"> <strong>Mail Us</strong> </a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> <strong> {{ __('Login') }} </strong> </a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}"> <strong> {{ __('Register') }} </strong>  </a>
                                @endif
                            </li>
                        @else
					<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
					<li><a class="page-scroll scroll" href="#about"> <strong>About</strong> </a></li>
					<li><a class="page-scroll scroll" href="{{ route('post.index') }}"> <strong>Post</strong> </a></li>
                    <li><a class="page-scroll scroll" href="#gallery"> <strong>Gallery</strong> </a></li>
                    <li><a class="page-scroll scroll" href="{{url('konten/filter')}}"> <strong>Filter</strong> </a></li>
                    <li><a class="page-scroll scroll" href="#mail"> <strong>Mail Us</strong> </a></li>
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('post.profile',Auth::user()->id) }}" class="dropdown-item" >Profile</a> 
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
			</div>
			<!-- /.navbar-collapse -->
        </nav>  
        @include('layouts.partial.alert')
            @yield('content')
    </div>
        
    </body>
</html>
