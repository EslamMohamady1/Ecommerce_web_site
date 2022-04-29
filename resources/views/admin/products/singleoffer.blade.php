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
            .body{margin-top:0px;
background:#eee;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
}

.panel-heading {
    border-color:#eff2f7 ;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}

/*product list*/

.prod-cat li a{
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a{
    border-bottom:none;
}
.prod-cat li ul li a:hover,.prod-cat li ul li a:focus, .prod-cat li ul li.active a , .prod-cat li a:hover,.prod-cat li a:focus, .prod-cat li a.active{
    background: none;
    color: #ff7261;
}

.pro-lab{
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img{
    width: 100%;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}
.adtocart {
    background: #fc5959;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    left: 45%;
    bottom: -25px;
    position: absolute;
}

.adtocart i{
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 20px;
    font-size: 16px;
}

.product-list .price {
    color:#fc5959 ;
    font-size: 15px;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}
.product_meta a, .pro-price{
    color:#fc5959 ;
}

.pro-price, .amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}
        </style>
         @livewireStyles
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

        


        
      
        

        <div  class="container bootdey">
            <div  class="col-md-12">
            <section class="panel">
                <div style="background-color: none; margin-top:150px" class="panel-body">
                    <div class="col-md-6">
                        @foreach ($offer as $product)
                            
                        @endforeach
                        <div class="row thumbnail" > 
                            <div style="margin-left: 0.5px;margin-top: 25px;width:51%" class="pro-img-details col-md-6">
                                <img src="{{ asset('/upload/Adminimage/productsImageFolder/'.$product->image) }}" style="width: 250px;height:300px" class="thumbnail" style="width: 250px;height:290px; margin-top:-47px" alt="new-arrivals images">
                            </div>
                            <div style="margin-top: 25px;width:51%" class="pro-img-details col-md-6">
                                <img src="{{ asset('/upload/Adminimage/productsImageFolder/'.$product->image2) }}" style="width: 250px;height:300px" class="thumbnail" style="width: 250px;height:290px; margin-top:-47px" alt="new-arrivals images">
                            </div>
                        </div>
                       
                        
                    </div>
                    <div class="col-md-6">
                        <h4 class="pro-d-title">
                            <a href="#" class="">
                                {{$product->name}}
                            </a>
                        </h4>
                        <p>
                            {{$product->small_description}}                        
                        </p>
                        <p>
                            {{$product->description}}                        
                        </p>
                        <p>
                            {{$product->meta_title}}                        
                        </p>
                        <p>
                            {{$product->meta_keywords}}                        
                        </p>
                        <p>
                            {{$product->meta_description}}                        
                        </p>
                        <div class="product_meta">
                            <span class="posted_in"> <strong>Categories:</strong> <a rel="tag" href="#">{{$product->category->name}}</a>.</span>
                            <span class="tagged_as"><strong>available quantity:</strong> {{$product->qty}}.</span>
                        </div>
                        <div class="m-bot15"> <strong>Price : </strong> <span class="amount-old">${{$product->original_price}}</span>  <span class="pro-price"> ${{$product->selling_price}}</span></div>
                        <div class="form-group">
                        
                            <p>
                                <form method="POST" action="{{url('addtocart/'.$product->id)}}">
                                    @csrf
                                    <div>
                                        <label>Quantity</label>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                                        <input type="button" value="-" id="minus" class="form-control quantity" />
                                        <input type="number" id="quantity" value="" name="qty" class="form-control quantity" />
                                        <input type="button" value="+" id="plus" class="form-control quantity" />
                                        <input type="hidden" id="" value="offer" name="offer" class="form-control quantity" />
                                    
                                    </div>
                                   <button type="submit" style="margin-top:10px; height:42px;width:50%;margin-left:180px" class="form-control btn btn-primary ">
                                        Add To Cart
                                    </button>
                                </form>
                                                        
                            </p>
                        </div>
                        <livewire:cardlivewire />
                    </div>
                </div>
            </section>
            </div>
            </div>
        
        

       

    

        <!--footer start-->
        @include('layouts.inc.incuser.footer')

        <!--/.footer-->
        <!--footer end-->
        
        <!-- Include all js compiled plugins (below), or include individual files as needed -->
        @include('layouts.inc.incuser.javascript')
                
    </body>
    
</html>