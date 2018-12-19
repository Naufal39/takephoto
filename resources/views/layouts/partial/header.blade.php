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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
					<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
					<li class="active"><a class="page-scroll" href="#home">Home</a></li>
					<li><a class="page-scroll scroll" href="#about">About</a></li>
					<li><a class="page-scroll scroll" href="#services">Services</a></li>
					<li><a class="page-scroll scroll" href="{{ route('post.index') }}">Post</a></li>
					<li><a class="page-scroll scroll" href="{{route('konten.galeri')}}">Gallery</a></li>
                    <li><a class="page-scroll scroll" href="#mail">Mail Us</a></li>
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{ route('post.profile') }}" class="dropdown-item" >Profile</a> 
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
    </div>