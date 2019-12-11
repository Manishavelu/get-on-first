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

<!--menu js-->
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>

<!--wow js start-->
<script type="text/javascript" src="js/wow.min.js"></script>
<!--wow js end-->

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
	<img src="images/service.jpg" width="100%">
	</div>
<!--banner end-->


<section id="client">
  <h2>Client Lists</h2>
   <div class="container customer-logos slider">
      <div class="slide"><img src="images/logo2.jpg"></div>
      <div class="slide"><img src="images/logo3.jpg"></div>
      <div class="slide"><img src="images/logo4.jpg"></div>
      <div class="slide"><img src="images/logo5.jpg"></div>
      <div class="slide"><img src="images/logo6.jpg"></div>
      <div class="slide"><img src="images/logo7.jpg"></div>
      <div class="slide"><img src="images/logo4.jpg"></div>
   </div>
</section>

<!--footer part-->
<?php include('includes/footer.php')?>
<!--footer end-->

<!--client script-->
	<script type="text/javascript">
		
		$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
	</script>
	<!--client script end-->

	
</body>
</html>