<div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!--/.carousel-indicator -->
    <ol class="carousel-indicators">
        <li data-target="#header-carousel" data-slide-to="0" class="active"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="1"><span class="small-circle"></span></li>
        <li data-target="#header-carousel" data-slide-to="2"><span class="small-circle"></span></li>
    </ol><!-- /ol-->
    <!--/.carousel-indicator -->

    <!--/.carousel-inner -->
    <div class="carousel-inner" role="listbox">
        <!-- .item -->
        @foreach ($trendingproduct as $item)
            
        @endforeach
        <div class="item active">
            <div class="single-slide-item slide1">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h4>{{$item->small_description}}</h4>
                                        <h2>{{$item->name}}</h2>
                                        <p>
                                            {{$item->description}}
                                        </p>
                                        <div class="packages-price">
                                            <p>
                                                {{$item->selling_price}}
                                                <del>{{$item->original_price}}</del>
                                            </p>
                                        </div>
                                        <button class="btn-cart welcome-add-cart" onclick="window.location.href='{{url('productdetails/'.$item->id)}}'">
                                            <span class="lnr lnr-plus-circle"></span>
                                            add <span>to</span> cart
                                        </button>
                                        <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                            more info
                                        </button>
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="upload\Adminimage\productsImageFolder\{{$item->image}}" alt="slider image">
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.welcome-hero-content-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->

        </div><!-- /.item .active-->
        @foreach ($trendingproduct as $item)
        <div class="item">
            <div class="single-slide-item slide2">
                <div class="container">
                    <div class="welcome-hero-content">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-txt">
                                        <h4>{{$item->small_description}}</h4>
                                        <h2>{{$item->name}}</h2>
                                        <p>
                                            {{$item->description}} 
                                        </p>
                                        <div class="packages-price">
                                            <p>
                                                {{$item->selling_price}}
                                                <del>{{$item->original_price}}</del>
                                            </p>
                                        </div>
                                        <button class="btn-cart welcome-add-cart" onclick="window.location.href='{{url('productdetails/'.$item->id)}}'">
                                            <span class="lnr lnr-plus-circle"></span>
                                            add <span>to</span> cart
                                        </button>
                                        <button class="btn-cart welcome-add-cart welcome-more-info" onclick="window.location.href='#'">
                                            more info
                                        </button>
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                            <div class="col-sm-5">
                                <div class="single-welcome-hero">
                                    <div class="welcome-hero-img">
                                        <img src="upload\Adminimage\productsImageFolder\{{$item->image}}"  alt="slider image">
                                    </div><!--/.welcome-hero-txt-->
                                </div><!--/.single-welcome-hero-->
                            </div><!--/.col-->
                        </div><!--/.row-->
                    </div><!--/.welcome-hero-content-->
                </div><!-- /.container-->
            </div><!-- /.single-slide-item-->

        </div><!-- /.item .active-->
        @endforeach
       

        

      
    </div><!-- /.carousel-inner-->

</div>