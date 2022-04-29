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

        

    

        <!--Cart -->     

<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

    $(".update-cart").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
            window.location.reload();
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection
        <!--Cart -->

        

    



        <!--newsletter strat -->
        <section id="newsletter"  class="newsletter">
            <div class="container">
                <div class="hm-footer-details">
                    <div class="row">
                        <div class=" col-md-3 col-sm-6 col-xs-12">
                            <div class="hm-footer-widget">
                                <div class="hm-foot-title">
                                    <h4>information</h4>
                                </div><!--/.hm-foot-title-->
                                <div class="hm-foot-menu">
                                    <ul>
                                        <li><a href="#">about us</a></li><!--/li-->
                                        <li><a href="#">contact us</a></li><!--/li-->
                                        <li><a href="#">news</a></li><!--/li-->
                                        <li><a href="#">store</a></li><!--/li-->
                                    </ul><!--/ul-->
                                </div><!--/.hm-foot-menu-->
                            </div><!--/.hm-footer-widget-->
                        </div><!--/.col-->
                        <div class=" col-md-3 col-sm-6 col-xs-12">
                            <div class="hm-footer-widget">
                                <div class="hm-foot-title">
                                    <h4>collections</h4>
                                </div><!--/.hm-foot-title-->
                                <div class="hm-foot-menu">
                                    <ul>
                                        <li><a href="#">wooden chair</a></li><!--/li-->
                                        <li><a href="#">royal cloth sofa</a></li><!--/li-->
                                        <li><a href="#">accent chair</a></li><!--/li-->
                                        <li><a href="#">bed</a></li><!--/li-->
                                        <li><a href="#">hanging lamp</a></li><!--/li-->
                                    </ul><!--/ul-->
                                </div><!--/.hm-foot-menu-->
                            </div><!--/.hm-footer-widget-->
                        </div><!--/.col-->
                        <div class=" col-md-3 col-sm-6 col-xs-12">
                            <div class="hm-footer-widget">
                                <div class="hm-foot-title">
                                    <h4>my accounts</h4>
                                </div><!--/.hm-foot-title-->
                                <div class="hm-foot-menu">
                                    <ul>
                                        <li><a href="#">my account</a></li><!--/li-->
                                        <li><a href="#">wishlist</a></li><!--/li-->
                                        <li><a href="#">Community</a></li><!--/li-->
                                        <li><a href="#">order history</a></li><!--/li-->
                                        <li><a href="#">my cart</a></li><!--/li-->
                                    </ul><!--/ul-->
                                </div><!--/.hm-foot-menu-->
                            </div><!--/.hm-footer-widget-->
                        </div><!--/.col-->
                        <div class=" col-md-3 col-sm-6  col-xs-12">
                            <div class="hm-footer-widget">
                                <div class="hm-foot-title">
                                    <h4>newsletter</h4>
                                </div><!--/.hm-foot-title-->
                                <div class="hm-foot-para">
                                    <p>
                                        Subscribe  to get latest news,update and information.
                                    </p>
                                </div><!--/.hm-foot-para-->
                                <div class="hm-foot-email">
                                    <div class="foot-email-box">
                                        <input type="text" class="form-control" placeholder="Enter Email Here....">
                                    </div><!--/.foot-email-box-->
                                    <div class="foot-email-subscribe">
                                        <span><i class="fa fa-location-arrow"></i></span>
                                    </div><!--/.foot-email-icon-->
                                </div><!--/.hm-foot-email-->
                            </div><!--/.hm-footer-widget-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.hm-footer-details-->

            </div><!--/.container-->

        </section><!--/newsletter-->	
        <!--newsletter end -->

        <!--footer start-->
        @include('layouts.inc.incuser.footer')

        <!--/.footer-->
        <!--footer end-->
        
        <!-- Include all js compiled plugins (below), or include individual files as needed -->
        @include('layouts.inc.incuser.javascript')
                
    </body>
    
</html>