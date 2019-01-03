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

    <meta charset="utf-8">
    <title>Judul Halaman Saya</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />

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
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <style>
            * {margin:0; padding:0;}
     
     body {
       
     }
      
     .menu-wrap {
         background-color:#53bd84; 
         height:50px; 
         line-height:50px; 
         position:relative;
         width:770px;
         margin:auto;
         margin-top:70px;
     }
      
     .menu-wrap ul {
         list-style:none;
     }
      
     .menu-wrap ul li a {
         float:left; 
         width:150px; 
         display:block; 
         text-align:center; 
         color:#FFF; 
         text-decoration:none; 
         text-transform:uppercase;
     }
      
     .menu-wrap ul li a:hover {
         background-color:#666; 
         display:block;
     }
      
     .menu-wrap ul li:hover ul {
         display:block;
     }
      
     .menu-wrap ul ul {
         display:none; 
         list-style:none; 
         position:absolute; 
         background-color:#53bd84;
         left:300px; 
         top:50px; 
         width:190px;
     }
      
     .menu-wrap ul ul li a {
         float:none; 
         display:block; 
         padding-left:30px; 
         text-align:left; 
         width:160px;
     }
      
     .menu-wrap ul ul li a:hover {
         color:#fff;
     }

     td
     {
         padding:5px;
     }
        </style>
    
</head>
<body>

    <center>    
            
                   
        <div class="menu-wrap">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/MedicineInfo">Medicine Info</a></li>
                    <li><a href="/Aboutus">About Us</a></li>
                    <li><a href="/ViewCompareDrug">Compare Drug</a></li>
                        
                    
                </ul>
                </div>
                  
          
    
    <div style=" margin-left:0%; margin-top:0.5%;">
        <div>
            {{csrf_field()}}

            <table width="60%" height="50%" style="">
                <tr><td style="text-align: center; vertical-align: middle;"><img width="300px" height="300px" src="{{url($drug->ImageUrl)}}" style="margin-right:4px; margin-top:0px; margin-down:4px;"> <br></td></tr>
                <tr><td style="text-align: center; vertical-align: middle;"><h2>Drug Name : {{$drug->Name}}</h2></td></tr>
                <tr><td style="text-align: center; vertical-align: middle;"><h4>Distrubute by : {{$drug->Brand}}</h4></td></tr>
                <tr><td style="text-align: center; vertical-align: middle;"><h4>Drug Type : {{$drug->Type}}</h4></td></tr>
                <tr><td style="text-align: center; vertical-align: middle;"><h4>Avarage Price : {{$drug->AvgPrice}}</h4></td></tr>
                <tr><td style="text-align: center; vertical-align: middle;">{{$drug->General}}</td></tr>
            </table>

        </div>
    </div>
    </center>

    <br><br>

</body>
</html>