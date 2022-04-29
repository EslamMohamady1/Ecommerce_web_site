<div class="top-area">
    <div class="header-area">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"  data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <form method="POST" action="{{url('search')}}" >
                            @csrf
                            <input type="text" class="form-control" name="search" placeholder="Search">
                            <button type="submit"  ></button>
                            bott
                        </form>
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->

            <div class="container">            
                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search">
                            <a href="#"><span class="lnr lnr-magnifier"></span></a>
                        </li><!--/.search-->
                        <li class="nav-setting">
                            <a href="#"><span class="lnr lnr-cog"></span></a>
                        </li><!--/.search-->
                        <li class="dropdown">
                            <a href="{{url('mycart/')}}" class="dropdown-toggle" data-toggle="dropdown" >
                                <span class="lnr lnr-cart"></span>
                                <span class="badge badge-bg-1">{{$mycartcount}}</span>
                            </a>
                            <ul class="dropdown-menu cart-list s-cate">
                                <?php $sum_tot_Price = 0 ?>
                                @foreach ($mycart as $mycart)
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="{{ asset('/upload/Adminimage/productsImageFolder/'.$mycart->image) }}" class="cart-thumb" alt="image" /></a>

                                        <div class="cart-list-txt">
                                            <h6><a href="#">{{$mycart->name}} <br> {{$mycart->prod_qty}}</a></h6>
                                            <p>{{$mycart->prod_qty}} x <span class="price">{{$mycart->selling_price}}</span> = {{$mycart->prod_qty * $mycart->selling_price}} </p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span id="myBtn" class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    
                                    <?php $sum_tot_Price += $mycart->selling_price * $mycart->prod_qty ?>
                                
                                @endforeach
                                @foreach ($mycartoffers as $mycart)
                                    <li class="single-cart-list">
                                        <a href="#" class="photo"><img src="{{ asset('/upload/Adminimage/productsImageFolder/'.$mycart->image) }}" class="cart-thumb" alt="image" /></a>

                                        <div class="cart-list-txt">
                                            <h6><a href="#">{{$mycart->name}} <br> {{$mycart->prod_qty}}</a></h6>
                                            <p>{{$mycart->prod_qty}} x <span class="price">{{$mycart->selling_price}}</span> = {{$mycart->prod_qty * $mycart->selling_price}} </p>
                                        </div><!--/.cart-list-txt-->
                                        <div class="cart-close">
                                            <span id="myBtn" class="lnr lnr-cross"></span>
                                        </div><!--/.cart-close-->
                                    </li><!--/.single-cart-list -->
                                    
                                    <?php $sum_tot_Price += $mycart->selling_price * $mycart->prod_qty ?>
                                
                                @endforeach
                                <li class="total">
                                    <span id="demo" >Total : {{ $sum_tot_Price}}$</span>
                                    <button class="btn-cart pull-right" onclick="window.location.href='{{url('mycart')}}'">view cart</button>
                                </li>                            </ul>
                        </li><!--/.dropdown-->
                        <li class="dropdown">
                            <a href="{{url('mycart/')}}" class="dropdown-toggle" data-toggle="dropdown" >
                                <span class="fa fa-user"></span>
                                <span class="badge badge-bg-1"></span>
                            </a>
                            <ul class="dropdown-menu cart-list s-cate">
                                <li  >
                                    <a  >
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li  >
                                    <a  >
                                        My Profile
                                    </a>
                                </li>
                                <li  >
                                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <hr>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </li>
                               
                            </ul>
                        </li><!--/.dropdown-->
                       
                      
                    
                    </ul>
                </div><!--/.attr-nav-->
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">sine<span>mkt</span>.</a>

                </div><!--/.navbar-header-->
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                        <li  ><a href="{{ url('/home') }}">Home</a></li>
                        <li ><a href="{{url('allproducts')}}">Products</a></li>
                        <li ><a href="#feature">Brands</a></li>
                        <li ><a href="{{url('useralloffers')}}">Offers</a></li>
                        <li ><a href="{{url('allcategoty')}}">Categories</a></li>
                        <li ><a href="{{url('contactus')}}">Contact</a></li>
                    
                    </ul><!--/.nav -->
                </div><!-- /.navbar-collapse -->
            </div><!--/.container-->
        </nav><!--/nav-->
        <!-- End Navigation -->
    </div><!--/.header-area-->
    <div class="clearfix"></div>

</div><!-- /.top-area-->