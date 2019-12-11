
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
<div class="wow fadeIn imageBanner ">
  <img src="images/about.jpg" style="width: 100%;"  class="img-responsive"  >
</div>

<div class="container">
	<div class="about" id="about">
<div class="row">
	
	 <div class=".col-6 col-sm-6 col-md-6 col-lg-6 wow fadeIn" data-wow-delay="200ms">
	 	<h1 ><b>ABOUT US</b></h1>
	 	<div class="broder"></div>
<br>
<p><b>GET ON FIRST</b><br> 
	<i>
We live and breathe digital. The Internet is our home.</i>is established in 2016. we are providing Website Development & Designing, Digital Marketing, Out Sourcing to apply for all contracts and all work undertaken by Retouch IT Services. Our key focus is to exceed and meet the complex and growing needs of our clients.From non-voice to experienced, our journey so far has been eventful and momentous. Our management and our highly trained employees have contributed to the success of every facet of the company.Rapidly moving through the new millennium, we at ReTouch are well-equipped with right expertise to build a strong and lasting business to business relationship. We believe and accept that our client’s long-term success is our growth. Our support relies on many open technologies and provides its services free to everyone. Retouch offers Premium services and many integration options to continue growth, research and development. It is exciting to see the results of open collaboration network helping millions of individuals, businesses.</p>
	 </div>
	
	<div class=".col-6 col-sm-6 col-md-6 col-lg-6 progressbarDiv">
		

  
  <h3>Designing</h3>
  <div class="progress border" style="height: 25px;">

    <div class="progress-bar  progress-bar-animated bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70</div>
  </div>
  <h3>Developing</h3>
  <div class="progress border" style="height: 25px;">
    <div class="progress-bar  progress-bar-animated bg-danger"  role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50</div>
  </div>
  <h3>Digital marketing</h3>
  <div class="progress border" style="height: 25px;">
    <div class="progress-bar  progress-bar-animated bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90</div>
  </div>

  <h3>Result</h3>
  <div class="progress border" style="height: 25px;">
    <div class="progress-bar  progress-bar-animated bg-warning" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100</div>
  </div>
</div>
</div>
</div>
</div>

<!--clients start-->
<section id="client">
  <h2>Our  Partners</h2>
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
<!--clients end-->



  <!--footer start-->
<?php include('includes/footer.php')?>
<!--footer end-->
<script type="text/javascript">
  
  var delay = 700;
$(".progress-bar").each(function(i) {
  $(this).delay(delay * i).animate({
    width: $(this).attr('aria-valuenow') + '%'
  }, delay);

  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: delay,
    // easing: 'swing',
    step: function(now) {
      $(this).text(Math.ceil(now) + '%');
    }
  });
});
</script>

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