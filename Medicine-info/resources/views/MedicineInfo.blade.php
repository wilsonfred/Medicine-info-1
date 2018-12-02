<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Healthcare Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <style>
        img
        {
            width:150px;
            height:150px;
        }
    </style>

	</head>
	<body>
	
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-6">
									<div id="colorlib-logo"><a href="index.html">Medicine<span>Info</span></a></div>
								</div>
								<div class="col-md-3">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">111-222-333</a><br><a href="#">99-222-333</a></p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="loc">
										<span class="icon"><i class="icon-location"></i></span>
										<p><a href="#">88 Route West 21th Street, Suite 721 New York NY 10016</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu-wrap">
				<div class="container">
					<div class="row">
						<div class="col-xs-8">
							<div class="menu-1">
								<ul>
									<li><a href="/">Home</a></li>
									
									<li><a href="/MedicineInfo">Medicine Info</a></li>
									<li><a href="/Aboutus">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>
    
	<div style=" margin-left:9%; margin-top:0.5%;">
		<!-- ini baru contoh nanti tolong ganti jadi foreach dari database -->
		<form action="{{ url('/doSearch') }}" method="GET">
			<div style="float:right; margin-right:12%;">
				<input type="search" name="search" id="sSearch" placeholder="Search By Name">
				<input type="submit" value="Search">
			</div>
		</form>

		<br>
		<br>
		
		<table style="width:90%;">
			<tr>
				<th>Medicine</th>
				<th>Name</th>
				<th>Description</th>
				<th>Brand</th>
				<th>Drug Type</th>
				<th>Avg Price</th>
				<th>Detail</th>
			</tr>
			@foreach($drug as $d)
			<tr>
				<td><img width="50px" height="50px" src="{{url($d->ImageUrl)}}" style="margin-right:4px; margin-top:4px; margin-down:4px;"></td>
				<td>{{$d->Name}}</td>
				<td>{{$d->Desc}}</td>
				<td>{{$d->Brand}}</td>
				<td>{{$d->Type}}</td>
				<td>{{$d->AvgPrice}}</td>
				<td><a href="{{url('/doDetail/'.$d->Id)}}">Detail</a></td>
			</tr>
			@endforeach
		</table>

		<p>
    	    {{ $drug->appends(['search'=>request()->search])->links() }}
	    </p>

	</div>

</body>
</html>