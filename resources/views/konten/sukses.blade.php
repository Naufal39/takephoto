<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>TakePhoto | Booked</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="{{asset('sukses/css/font-awesome.min.css')}}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('sukses/css/style.css')}}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<div id="notfound">
		<div class="notfound-bg"></div>
		<div class="notfound">
			<div class="notfound-404">
                <h2>Hi, {{Auth::user()->name}}</h2>
                <img src="{{asset('images/dslr.png')}}" style="max-height:150px;" alt="">
			</div>
			<h2>Pesanan Photoshoot Telah Dibuat Persiapkan diri anda untuk sesi photo</h2>
			<form>
                <center><h2>TERIMAKASIH</h2> </center>
			
			</form>
			<div class="notfound-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-google-plus"></i></a>
			</div>
			<a href="{{url('/')}}">Back To Homepage</a>
		</div>
	</div>

</body>

</html>
