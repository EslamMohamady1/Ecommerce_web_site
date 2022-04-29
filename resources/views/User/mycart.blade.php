
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

        <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 95%;
            margin-top: 20px;
            margin-left: 30px;

            }
            
            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }
            
            #customers tr:nth-child(even){background-color: #f2f2f2;}
            
            #customers tr:hover {background-color: #ddd;}
            
            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
            </style>
            
        
    </head>
    
    
    <body>
    
    
        
    
        <!--welcome-hero start -->
        <header id="home" class="welcome-hero">

            <!--/#header-carousel-->
            

            <!-- top-area Start -->
            @include('layouts.inc.incuser.navbar')
            <!-- top-area End -->

        </header><!--/.welcome-hero-->
        <!--welcome-hero end -->

        <h1 style=" margin-left: 30px;margin-top: 120px; font-size:35px">My Cart</h1>

<table id="customers">
<tr>
    <th>Product Name</th>
    <th>Product Quantity</th>
    <th>Description</th>
    <th>Price Before descount</th>
    <th>Price After descount</th>
    <th>Product Image</th>
    <th>Action</th>
</tr>
@foreach ($mycart as $mycart)
    
        <tr>
            <td><a href="{{url('productdetails/'.$mycart->prod_id)}}" >{{$mycart->name}}</a></td>
            <td><a href="{{url('productdetails/'.$mycart->prod_id)}}" >{{$mycart->prod_qty}}</a></td>
            <td><a href="{{url('productdetails/'.$mycart->prod_id)}}" >{{$mycart->description}}</a></td>
            <td><a href="{{url('productdetails/'.$mycart->prod_id)}}" >{{$mycart->original_price}}</a></td>
            <td><a href="{{url('productdetails/'.$mycart->prod_id)}}" >{{$mycart->selling_price}}</a></td>
        <div class="row">
                <div class="col-md-6">
                    <td>
                        <a href="{{url('productdetails/'.$mycart->prod_id)}}" >
                            <img  src="{{ asset('/upload/Adminimage/productsImageFolder/'.$mycart->image) }}" />
                        </a>
                    </td>
                </div>
            </div>
            <td>
                <a href="{{url('edietcart/'.$mycart->id)}}" >
                    <h2>
                    Ediet 
                    </h2>
                </a>
                <a href="{{url('deletcart/'.$mycart->id)}}" >
                    <h2>
                    Delet 
                    </h2>
                </a>

            </td>

        </tr>
    
@endforeach
@foreach ($mycartoffers as $mycartoffer)
   
        <tr>
            <td><a href="{{url('offerdetails/'.$mycartoffer->prod_id)}}" >{{$mycartoffer->name}} </a></td>
            <td><a href="{{url('offerdetails/'.$mycartoffer->prod_id)}}" >{{$mycartoffer->prod_qty}}</a></td>
            <td><a href="{{url('offerdetails/'.$mycartoffer->prod_id)}}" >{{$mycartoffer->description}}</a></td>
            <td><a href="{{url('offerdetails/'.$mycartoffer->prod_id)}}" >{{$mycartoffer->original_price}}</a></td>
            <td><a href="{{url('offerdetails/'.$mycartoffer->prod_id)}}" >{{$mycartoffer->selling_price}}</a></td>
            <div class="row">
                <div class="col-md-12">
                    <td>
                        <a href="{{url('offerdetails/'.$mycartoffer->prod_id)}}" >
                            <img style="max-width:49%;height:220px;max-height:850px" src="{{ asset('/upload/Adminimage/productsImageFolder/'.$mycartoffer->image) }}" />
                            <img style="max-width:49%;height:220px;max-height:850px" src="{{ asset('/upload/Adminimage/productsImageFolder/'.$mycartoffer->image2) }}" />
                        </a>
                    </td>
                </div>
            </div>
            <td>
                <a href="{{url('edietoffercart/'.$mycartoffer->id)}}" >
                    <h2>
                    Ediet 
                    </h2>
                </a>
                <a href="{{url('deletcart/'.$mycartoffer->id)}}" >
                    <h2>
                    Delet 
                    </h2>
                </a>

            </td>

        </tr>
@endforeach


</table>
<!--footer start-->
@include('layouts.inc.incuser.footer')

<!--/.footer-->
<!--footer end-->

<!-- Include all js compiled plugins (below), or include individual files as needed -->
@include('layouts.inc.incuser.javascript')
    </body>

    


</html>