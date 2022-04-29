
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
            body {font-family: Arial, Helvetica, sans-serif;background-color:#f2f2f2;}
            * {box-sizing: border-box;  }
            
            input[type=text], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: vertical;
            }

            input[type=email], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: vertical;
            }
            input[type=number], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: vertical;
            }
            
            input[type=submit] {
              background-color: #04AA6D;
              color: white;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            
            input[type=submit]:hover {
              background-color: #45a049;
            }
            
           
            .container {
                width:100%;
              border-radius: 5px;
              background-color: #f2f2f2;
              padding: 20px;
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

    <div class="container" style="width:95%">
        <h1 style="margin-top: 170px; margin-bottom: 40px; font-size:30px; margin-left: -30px; background-color:#f2f2f2">Contact</h1>

      <form method="POST" action="{{url('sendcontactmessage')}}">
        @csrf
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
    
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    
        <label for="lname">Email</label>
        <input type="email" id="Email" name="email" placeholder="Your Email..">

        <label for="lname">Phone Number</label>
        <input type="number" id="phone" name="phone" placeholder="Your Phone Number..">

        <label for="subject">Message</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
    
        <input type="submit" value="Submit">
      </form>
    </div>

 <!--footer start-->
 @include('layouts.inc.incuser.footer')

 <!--/.footer-->
 <!--footer end-->
 
 <!-- Include all js compiled plugins (below), or include individual files as needed -->
 @include('layouts.inc.incuser.javascript')
    
</body>
</html>

        
