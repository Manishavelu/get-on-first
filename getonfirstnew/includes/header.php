<!--header start-->

	<header id="bg-head">
		<div class="header">
     <nav class="navbar navbar-expand-lg navbar-dark ">
<!--navbar brand-->
        <div class="logo"><a class="navbar-brand" href="index.php"><h1>GET ON FIRST</h1></a></div>
 <!--navbar brand end-->

         <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon mytoggler"></span>
        </button>

       <div class="collapse navbar-collapse" id="navbarNavDropdown">

<!--navbar items-->
         <ul class="navbar-nav ml-auto">
             <li class="nav-item active">
             <a class="nav-link text-white " href="index.php">Home <span class="sr-only">(current)</span></a>
             </li>

             <a class="nav-link text-white " href="about.php">About <span class="sr-only">(current)</span></a>
             </li>
      
             <li class="nav-item  dropdown">
              <a class="nav-link text-white dropdown-toggle" href="service.php" id="navbarDropdownMenuLink"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services
              </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item text-white " href="website-designing.php">Web Design & Developement</a>
              <a class="dropdown-item  text-white" href="digital.php">Digital Marketing</a>
              </div>
             </li>

	          <li class="nav-item  active">
              <a class="nav-link text-white " href="clients.php">Our Clients <span class="sr-only">(current)</span></a>
             </li>

	           <li class="nav-item  active">
              <a class="nav-link text-white " href="contact.php">Contact <span class="sr-only">(current)</span></a>



               <div class="wow fadeInLeft" data-wow-delay="500ms"><a href="quotation.php"><input type="button" class="getquote" value="Get a Quote" ></a></div>
               

          </ul>
          <!--navbar items end-->

      </div>
    </nav>

    <div class="heading-content">
		<h1 class="wow fadeInLeft" data-wow-delay="200ms">We Create <br><span data-wow-delay="400ms">Super Reach Experiences Online</span>
       
		</h1><br>
		<div class="wow fadeInLeft" data-wow-delay="500ms"><a href="about.php#about"><input type="button" class="btn1" value="Know More" name=""></a>
	</div>

	</div>
    
  </div>
  </header>
  <script type="text/javascript">
  	$(document).ready(function(){
  		$(".dropdown").hover(function(){
  			$('.dropdown-menu').stop(true).slideToggle(500).css(
  				{"backgroundColor":"#0FC3D3"});

  		});
  		$('.dropdown-toggle').click(function() {
    var location = $(this).attr('href');
    window.location.href = location;
    return false;
});
  	});
  </script>