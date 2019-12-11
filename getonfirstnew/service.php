<!DOCTYPE html>
<html>
<head>
	<title>Get On First</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--bootstrap cdn-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!--bootstrap cdn ends-->
 <!--my styles-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <!--my styles end-->

  <!--google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<!--google font end-->

<!--wow js start-->
<script type="text/javascript" src="js/wow.min.js"></script>
<!--wow js end-->

<!--menu js-->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>

 <!--font awesome start-->
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <!--font awesome end-->
  
 <!--clients silk slider-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
   <!--clients silk end-->

     <!--responsive css-->
   <link rel="stylesheet" type="text/css" href="css/responsive.css">

</head>
<!--wow animation start-->
<script>
  new WOW().init();
</script>
<!--wow animation end-->
<body>
<!--header start-->
<?php include('includes/header1.php')?>
<!--header end-->

<!--banner-->
<div class="row wow fadeIn">
	<img src="images/service3.jpg" width="100%">
	</div>
<!--banner end-->


<!--All Service Section start-->

<section id="serviceTotal">
	<div class="row">
		<div class="col-sm-4 Service-in-black wow fadeIn" data-wow-delay="300ms">
			<div class="breakContent"><h1 class="">Our <br>
				<span>Services</span></h1></div>
				<div class="border1"></div>
		</div>
		
		<div class="col-sm-4 innerServices wow fadeIn" data-wow-delay="500ms"><div class="breakContent"><h2 class="">Website <br>
				Designing & Developing</h2></div>
				<div class="border1"></div>
				<p>“We leverage our years of experience to create the correct strategy and plans for your business which helps to grow your brand and revenue.</p>
				<a href="website-designing.php"><input type="button" value="Read More" class=" btn btn-primary "  name=""></a>

			</div>
		<div class="col-sm-4 innerServices wow fadeIn" data-wow-delay="700ms"><h2 class="">Digital <br>
				Marketing</h2>
				<div class="border1"></div>
				<p>“Creativity is a way of life at webeesocial. When we create something – a website, an app, emailer, an infographic, a social media post or...</p>
				<a href="digital.php"><input type="button" value="Read More" class=" btn btn-primary "  name=""></a>

			</div>
	</div>
</section>





<!--footer part-->
<?php include('includes/footer.php')?>
<!--footer end-->



	
</body>
</html>