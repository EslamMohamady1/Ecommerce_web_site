
<!doctype html>
<html class="no-js" lang="en">

	<head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        
        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="{{ asset('assets/logo/favicon.png')}}"/>
       
        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">

        <!--linear icon css-->
		<link rel="stylesheet" href="{{ asset('assets/css/linearicons.css')}}">

		<!--animate.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
		
        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
		
		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css')}}" >	
        
        <!--style.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        
        <!--responsive.css-->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		
        <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
	
	
	<body>
       
		<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		
		
	
		<!--welcome-hero start -->
		<header id="home" class="welcome-hero">

		
			<!-- top-area Start -->
			@include('layouts.inc.incuser.navbar')
			<!-- top-area End -->

		</header><!--/.welcome-hero-->
		<!--welcome-hero end -->

        <section id="feature" class="feature">
			<div class="container">
				<div class="section-header">
					<h2>All Categories</h2>
				</div><!--/.section-header-->
				<div class="feature-content">
					<div class="row">
						@foreach ($allcategoty as $item)
							<div style="margin-top: 30px" class="col-sm-3 ">
                                <a style="font-size: 30px;" href="{{url('getcategory/'.$item->slug)}}">
                                    <div class="single-feature">
                                        <img src="{{ asset('upload/Adminimage/categoryImageFolder/'.$item->image) }}" class="thumbnail" style="width: 250px;height:290px; margin-top:-47px" alt="new-arrivals images">
                                        <div class="single-feature-txt text-center">
                                            <p>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <span class="spacial-feature-icon"><i class="fa fa-star"></i></span>
                                                <span class="feature-review">(45 review)</span>
                                            </p>
                                            <h1 > {{$item->name}} </h1>
                                            <h3><a href="{{url('getcategory/'.$item->slug)}}">{{$item->description}}</a></h3>
                                            <h5>{{$item->meta_description}}</h5>
                                        </div>
                                    </div>
                                </a>
							</div>
						@endforeach
					</div>
				</div>
			</div><!--/.container-->

		</section><!--/.feature-->
        
		<!--footer start-->
        @include('layouts.inc.incuser.footer')

		<!--/.footer-->
		<!--footer end-->
		
		<!-- Include all js compiled plugins (below), or include individual files as needed -->
        @include('layouts.inc.incuser.javascript')
		        
    </body>
	
</html>