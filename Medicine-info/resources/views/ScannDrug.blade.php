<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>About US-MedicineInfo</title>
	
	<title>About us</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />


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
	
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/style.css">

	
	<script src="js/modernizr-2.6.2.min.js"></script>
	

	</head>
	<body>
	
	<div id="page">
	<nav class="colorlib-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="top">
							<div class="row">
								<div class="col-md-6">
									<div id="colorlib-logo"><a href="/">Medicine<span>Info</span></a></div>
								</div>
								<div class="col-md-3">
									<div class="num">
										<span class="icon"><i class="icon-phone"></i></span>
										<p><a href="#">+62-11-2222-3333
</a><br><a href="#">+62-22-1111-2222</a></p>
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
									
									<li ><a href="/Aboutus">About Us</a></li>

									<li><a href="/ViewCompareDrug">Compare Drug</a></li>

									<li><a href="/ScannDrug" class="active">Scan Original Drug</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

    <center>
    <br>
        <h1>Let's see if your drug is original! just scan the barcode!</h1>
        <input type="button" id="btn" value="Start the scanner" style="margin-top:25px;"/>
    
        <br><br>
        <!-- Div to show the scanner -->
        <div id="scanner-container" style="margin-left:500px;"></div>
    </center>    

<script src="https://cdnjs.cloudflare.com/ajax/libs/quagga/0.12.1/quagga.js"></script>
<script>
        var _scannerIsRunning = false;

        function startScanner() {
            Quagga.init({
                inputStream: {
                    name: "Live",
                    type: "LiveStream",
                    target: document.querySelector('#scanner-container'),
                    constraints: {
                        width: 480,
                        height: 320,
                        facingMode: "environment"
                    },
                },
                decoder: {
                    readers: [
                        "code_128_reader",
                        "ean_reader",
                        "ean_8_reader",
                        "code_39_reader",
                        "code_39_vin_reader",
                        "codabar_reader",
                        "upc_reader",
                        "upc_e_reader",
                        "i2of5_reader"
                    ],
                    debug: {
                        showCanvas: true,
                        showPatches: true,
                        showFoundPatches: true,
                        showSkeleton: true,
                        showLabels: true,
                        showPatchLabels: true,
                        showRemainingPatchLabels: true,
                        boxFromPatches: {
                            showTransformed: true,
                            showTransformedBox: true,
                            showBB: true
                        }
                    }
                },

            }, function (err) {
                if (err) {
                    console.log(err);
                    return
                }

                console.log("Initialization finished. Ready to start");
                Quagga.start();

                // Set flag to is running
                _scannerIsRunning = true;
            });

            Quagga.onProcessed(function (result) {
                var drawingCtx = Quagga.canvas.ctx.overlay,
                drawingCanvas = Quagga.canvas.dom.overlay;

                if (result) {
                    if (result.boxes) {
                        drawingCtx.clearRect(0, 0, parseInt(drawingCanvas.getAttribute("width")), parseInt(drawingCanvas.getAttribute("height")));
                        result.boxes.filter(function (box) {
                            return box !== result.box;
                        }).forEach(function (box) {
                            Quagga.ImageDebug.drawPath(box, { x: 0, y: 1 }, drawingCtx, { color: "green", lineWidth: 2 });
                        });
                    }

                    if (result.box) {
                        Quagga.ImageDebug.drawPath(result.box, { x: 0, y: 1 }, drawingCtx, { color: "#00F", lineWidth: 2 });
                    }

                    if (result.codeResult && result.codeResult.code) {
                        Quagga.ImageDebug.drawPath(result.line, { x: 'x', y: 'y' }, drawingCtx, { color: 'red', lineWidth: 3 });
                    }
                }
            });


            Quagga.onDetected(function (result) {
               //alert("Barcode detected and processed : [" + result.codeResult.code + "]", result);
               //window.location.href = "localhost:8000/doDetail/" + result.codeResult.code;
               
               if(result.codeResult.code < 20 && result.codeResult.code > 0)
               {
                //    alert('masuk');
                    var n ="{{URL::to('/doOriginal/"result.codeResult.code"')}}";
                    var url = n.replace('result.codeResult.code', result.codeResult.code).replace('&quot;','').replace('&quot;','');
                    window.location=url;
               }
               else
               {
                   alert('No Record Found, Its might be your drug is not original ')
               }
            });
        }


        // Start/stop scanner
        document.getElementById("btn").addEventListener("click", function () {
            if (_scannerIsRunning) {
                Quagga.stop();
            } else {
                startScanner();
            }
        }, false);
    </script>