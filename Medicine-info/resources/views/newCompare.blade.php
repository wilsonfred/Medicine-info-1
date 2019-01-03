<!DOCTYPE HTML>
<html>
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Medicine-info</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="" />
 <meta name="keywords" content="" />
 <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
 <meta property="og:title" content=""/>
 <meta property="og:image" content=""/>
 <meta property="og:url" content=""/>
 <meta property="og:site_name" content=""/>
 <meta property="og:description" content=""/>
 <meta name="twitter:title" content="" />
 <meta name="twitter:image" content="" />
 <meta name="twitter:url" content="" />
 <meta name="twitter:card" content="" />

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

    <style>
        img
        {
            width:150px;
            height:150px;
        }
        td
        {
            padding:8px;
        }
    </style>

 </head>
 <body>
 
 <nav class="colorlib-nav" role="navigation">
  <div class="top-menu">
   <div class="container">
    <div class="row">
     <div class="col-xs-12">
      <div class="top">
       <div class="row">
        <div class="col-md-6">
         <div id="colorlib-logo"><a href="index.html">Medicine<span>Info</span></a></div>
        </div>
        <div class="col-md-3">
         <div class="num">
          <span class="icon"><i class="icon-phone"></i></span>
          <p><a href="#">+62-11-2222-3333</a><br><a href="#">+62-22-1111-2222</a></p>
         </div>
        </div>
        <div class="col-md-3">
         <div class="loc">
          <span class="icon"><i class="icon-location"></i></span>
          <p><a href="#">Medicine Info Tower</a></p>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="menu-wrap">
    <div class="container">
     <div class="row">
      <div class="col-xs-8">
       <div class="menu-1">
        <ul>
         <li><a href="/">Home</a></li>
         
         <li><a href="/MedicineInfo">Medicine Info</a></li>
         <li><a href="/Aboutus">About Us</a></li>
         <li><a href="/ViewCompareDrug" class="active">Compare Drug</a></li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </nav>

        <div style=" margin-left:9%; margin-top:0.5%;">
            <form action="{{ url('/newCompare/')}}" method="GET" id="fCompare">
                <div style="margin-right:12%;">

                    <table border="0">
                        <tr>
                            <td>
                                
                            </td>
                            <td>
                                <h3>First Drug</h3>
                                <input type="search" name="search1" id="srcDrug1" placeholder="Search By Name" class="form-control">

                              
                            </td>
                            <td>
                                <h3>Second Drug</h3>
                                <input type="search" name="search2" id="srcDrug2" placeholder="Search By Name" class="form-control">
                            </td>
                            <td>
                                <input type="submit" value="Search" id="src1" style="margin-top:45px;" class="btn btn-default">
                            </td>
                        </tr>

                        @if($isShow == 'false' )
                            
                        @else

                        @foreach($toReturn['drug1'] as $d)
                        @foreach($toReturn['drug2'] as $d2)
                        <tr>
                            <td>Image</td>
                            <td><img width="50px" height="50px" src="{{url($d->ImageUrl)}}" style="margin-right:4px; margin-top:4px; margin-down:4px;"></td>
                            <td><img width="50px" height="50px" src="{{url($d2->ImageUrl)}}" style="margin-right:4px; margin-top:4px; margin-down:4px;"></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>{{$d->Name}}</td>
                            <td>{{$d2->Name}}</td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td>{{$d->Brand}}</td>
                            <td>{{$d2->Brand}}</td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>{{$d->Type}}</td>
                            <td>{{$d2->Type}}</td>
                        </tr>
                        <tr>
                            <td>Avarage Price</td>
                            <td>{{$d->AvgPrice}}</td>
                            <td>{{$d2->AvgPrice}}</td>
                        </tr>
                        <tr> 
                            <td>Description</td>
                            <td>{{$d->Desc}}</td>
                            <td>{{$d2->Desc}}</td>
                        </tr>
                        @endforeach
                        @endforeach
                            
                        @endif
                            
                        </tr>
                    </table>

                    <br>
                </div>
            </form>
        </div>
        
        <br><br><br>

    <footer id="colorlib-footer" role="contentinfo">
  <div class="overlay"></div>
  <div class="container">
   <div class="row row-pb-md">
    <div class="col-md-3 colorlib-widget">
      <h3>Head Office</h3>
      <ul class="colorlib-footer-links">
       <li>MedicineInfo<br>Building A,No.668,Sutomo Road,Jakarta of Indonesia.</li>
       <li><a href="tel://1234567920"><i class="icon-phone"></i>+62-11-2222-3333</a></li>
       <li><a href="mailto:info@yoursite.com"><i class="icon-mail"></i> medicineinfo@gmail.com</a></li>
       
      </ul>
     </div>
     
     <div class="col-md-2 colorlib-widget">
      <h3>Useful Links</h3>
      <p>
       <ul class="colorlib-footer-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Medicine Info</a></li>
        <li><a href="#">About Us</a></li>
       </ul>
      </p>
     </div>


    <div class="col-md-3 colorlib-widget" style="float: right;">
     <h3>Give us Feedback</h3>
     <form class="contact-form">
      <div class="form-group">
       <label for="name" class="sr-only">Name</label>
       <input type="name" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group">
       <label for="email" class="sr-only">Email</label>
       <input type="email" class="form-control" id="email" placeholder="Email">
      </div>
      <div class="form-group">
       <label for="message" class="sr-only">Message</label>
       <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
      </div>
      <div class="form-group">
       <input type="submit" id="btn-submit" class="btn btn-primary btn-send-message btn-md" value="Send Message">
      </div>
     </form>
    </div>
   </div>
  </div>
  <div class="row copyright">
   <div class="col-md-12 text-center">
    <p>
    <!-- <small class="block">&copy;  Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!--| This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></small>  
     <!--<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>-->
    </p>
   </div>
  </div>
 </footer>
 </div>

 <div class="gototop js-top">
  <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
 </div>
 
 <!-- jQuery -->
 <script src="js/jquery.min.js"></script>
 <!-- jQuery Easing -->
 <script src="js/jquery.easing.1.3.js"></script>
 <!-- Bootstrap -->
 <script src="js/bootstrap.min.js"></script>
 <!-- Waypoints -->
 <script src="js/jquery.waypoints.min.js"></script>
 <!-- Stellar Parallax -->
 <script src="js/jquery.stellar.min.js"></script>
 <!-- Carousel -->
 <script src="js/owl.carousel.min.js"></script>
 <!-- Flexslider -->
 <script src="js/jquery.flexslider-min.js"></script>
 <!-- countTo -->
 <script src="js/jquery.countTo.js"></script>
 <!-- Magnific Popup -->
 <script src="js/jquery.magnific-popup.min.js"></script>
 <script src="js/magnific-popup-options.js"></script>
 <!-- Sticky Kit -->
 <script src="js/sticky-kit.min.js"></script>
 <!-- Main -->
 <script src="js/main.js"></script>

</body>
</html>