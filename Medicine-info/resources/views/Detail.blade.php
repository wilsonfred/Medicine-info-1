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
        body
        {
            font-family: 'Poppins', sans-serif;
        }
        img
        {
            width:150px;
            height:150px;
        }
        td
        {
            padding:15px;
            font-size:20px;
            style="text-align: center; vertical-align: middle;"
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: white;
            }

            li {
            float: left;
            }

            li a {
            display: block;
            color: #4CAF50;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size:20px;
            }

            li a:hover {
            background-color: white;
            color:grey;
            }

            .menu-1
            {
                padding-top:2%;
                padding-bottom:2%;
            }
    </style>

</head>
<body>

    <center>    
    <nav class="colorlib-nav" role="navigation" >
        <div class="menu-1">
            <ul>
                <li><a href="/" style="padding-left:510px;">Home</a></li>
                
                <li><a href="/MedicineInfo">Medicine Info</a></li>
                <li><a href="/Aboutus">Contact</a></li>
                <li><a href="/ViewCompareDrug" class="active">Compare Drug</a></li>
            </ul>
        </div>
    </nav>
    
    <div style=" margin-left:0%; margin-top:0.5%;">
        <div>
            {{csrf_field()}}

            <table width="60%" height="50%" style="">
                <tr><td style="text-align: center; vertical-align: middle;"><img width="50px" height="50px" src="{{url($drug->ImageUrl)}}" style="margin-right:4px; margin-top:0px; margin-down:4px;"> <br></td></tr>
                <tr><td style="text-align: center; vertical-align: middle;">Drug Name : {{$drug->Name}}</td></tr>
                <tr><td style="text-align: center; vertical-align: middle;">Distrubute by : {{$drug->Brand}}</td></tr>
                <tr><td style="text-align: center; vertical-align: middle;">Drug Type : {{$drug->Type}}</td></tr>
                <tr><td style="text-align: center; vertical-align: middle;">Avarage Price : {{$drug->AvgPrice}}</td></tr>
                <tr><td style="text-align: center; vertical-align: middle;">{{$drug->General}}</td></tr>
            </table>

        </div>
    </div>
    </center>

    <br><br>

</body>
</html>