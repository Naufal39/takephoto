@extends('layouts.applog')

@section('content')

    <h1>LOGIN TAKE PHOTO</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Login here</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div style="margin-left:30px;">
                <input type="email" Name="email" id="email" placeholder="EMAIL ADDRESS" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required="">
                 @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
            </div>
            
            <div style="margin-left:30px;">
                <input type="password" Name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="PASSWORD" required="">
             @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                         <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
            </div>
            
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}><span></span>Remember me</label>
					<a href="#">Forgot password?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<!-- //for register popup -->
	
	<div class="w3footeragile">
		<p> &copy; 2018 Existing Login Form. All Rights Reserved | Design by <a href="{{url('/')}}" target="_blank">TakePhoto Team</a></p>
	</div>

	
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>

	<!-- pop-up-box-js-file -->  
		<script src="{{asset('js/jquery.magnific-popup.js')}} " type="text/javascript"></script>
	<!--//pop-up-box-js-file -->
	<script>
				$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
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


@endsection