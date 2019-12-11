<?php
if (isset($_POST['submit'])) 
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];

$message=$_POST['message'];
$to="support@getonfirst.in";
$subject="$name has been sent a mail";
//html message start here
$message="<html>
<body>
<table style='width:600px;' border='1'>
<tbody>
<tr><td style='width:150px;'><strong>Name:</strong></td>
<td style='width:400px;'>$name</td>
</tr>
<tr><td style='width:150px;'><strong>Email:</strong></td>
<td style='width:400px;'>$email</td>
</tr>
<tr><td style='width:150px;'><strong>Phone:</strong></td>
<td style='width:400px;'>$phone</td>

<tr><td style='width:150px;'><strong>Message:</strong></td>
<td style='width:400px;'>$message</td>
</tr>

</tbody>
</table>

</body>
</html>";
$headers="MIME=Version: 1.0"."\r\n";
$headers.="Content-type:text/html;charset=UTF8"."\r\n";
$headers.='From: Admin <support@getonfirst.in>'."\r\n";
$headers.='Cc:Admin <retouchitservices72@gmail.com>'."\r\n";
//$headers.='Bcc:Admin<khuntia.priyanka21@gmail.com>'."\r\n";

if (mail($to, $subject, $message,$headers)) {
  echo "<script>alert('Message Sent Successfully')</script>";
}



}
?>


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


<section id="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 leftContact wow fadeIn">
        <h2>Enquiry Form</h2>
  <form action="" method="post">
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text"  class="form-control" name="name" required >
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" name="email" required  >
  </div>
   <div class="form-group">
    <label for="pwd">Phone:</label>
    <input type="number" class="form-control" name="phone" required  >
  </div>
   <div class="form-group">
    <label for="pwd">Message:</label>
    <textarea cols="30" rows="3" class="form-control" name="message" required  ></textarea>
  </div>
  
  <input   type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
</div>
<div class="col-sm-1"></div>
 <div class="col-sm-5 wow fadeIn">
  <div class="contact-details">
    <h2>Contact Details</h2>
    <p>3/12 Outer ring road <br>
      Marathali,Bangalore<br>
       Email:getonfirst@gmail.com<br>
        Phone:+91 2347849879</p>
  </div>
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15553.361020335838!2d77.7006277!3d12.9500659!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x985ad6d0ea8c7bce!2sReTouch+IT+Services+-+Best+Web+design+%26+Development%2C+Digital+marketing+and+BPO+Services+in+Bangalore!5e0!3m2!1sen!2sin!4v1556130952950!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </div>

</div>


  
</section>


	<!--footer part-->
<?php include('includes/footer.php')?>
<!--footer end-->

	
</body>
</html>