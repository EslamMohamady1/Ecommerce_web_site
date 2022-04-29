


<!--/.carousel-indicator -->

<!--/.carousel-inner -->


<!DOCTYPE html>
<html lang="en">

<head>

    
    

    <title>Pixie - Ecommerce HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="assetss/css/fontawesome.css">
<link rel="stylesheet" href="assetss/css/tooplate-main.css">
<link rel="stylesheet" href="assetss/css/owl.css">
<!--
Tooplate 2114 Pixie
https://www.tooplate.com/view/2114-pixie
-->

</head>

<body>
    <div class="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                <div class="line-dec"></div>
                <a href="{{url('allcategoty')}}" >
                    <h1>All Categories</h1>
                </a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    @foreach ($category as $item)
                        <a href="{{url('getcategory/'.$item->slug)}}">
                            <div class="featured-item">
                                <img src="upload\Adminimage\categoryImageFolder\{{$item->image}}" style="width: 270px;height:200px" alt="Item 1">
                                <h4>{{$item->name}}</h4>
                                <h6>{{$item->description}}</h6>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Featred Ends Here -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assetss/js/custom.js"></script>
    <script src="assetss/js/owl.js"></script>

    <script language = "text/Javascript"> 
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t){                   //declaring the array outside of the
    if(! cleared[t.id]){                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value='';         // with more chance of typos
        t.style.color='#fff';
        }
    }
    </script>


</body>

</html>


</div>