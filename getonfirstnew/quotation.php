<?php
if (isset($_POST['submit'])) 
{
$name=$_POST['username'];
$email=$_POST['useremail'];
$phone=$_POST['userphone'];
$service=$_POST['service'];
$message=$_POST['usermessage'];
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
</tr>
<tr><td style='width:150px;'><strong>Service:</strong></td>
<td style='width:400px;'>$service</td>
</tr>
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

else
{
  echo "<script>alert('Message not Sent Successfully')</script>";
}



}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Get Quotation</title>
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

<!--banner end-->


<!--All Service Section start-->


<section id="getQuoteDiv">
	<div class="container quoteform">
		<div class="row">
		<div class="col-sm-4 col-md-2 col-lg-4"></div>
		<div class="col-sm-4 col-md-8 col-lg-4">
		<form action="" method="post" onsubmit="return validation()">
  <div class="form-group">
    
    <input type="text" class="form-control textBox wow fadeIn" data-wow-delay="200ms" placeholder="Name" name="username" id="name" required >
     
  </div>
  <div class="form-group">
    
    <input type="email" class="form-control textBox wow fadeIn" data-wow-delay="300ms" placeholder="Email" name="useremail" required >
  </div>
   <div class="form-group">
    
    <input type="text" class="form-control textBox wow fadeIn" data-wow-delay="400ms" placeholder="Phone"  name="userphone" id="phone" required>
    <span id="mobileerror" class="text-white font-weight-bold" ></span>
  </div>
  <div class="form-group">
    
    <select class="selectBox" name="service" required>
      <option required >--Select Services--</option>
      <option>Website Designing & Developing</option>
      <option>SEO</option>
      <option>SMO</option>
      <option>SMM</option>
      <option>PPC</option>
    </select>
  </div>
   <div class="form-group">
    
    <textarea class="textBox    wow fadeIn" data-wow-delay="500ms" name="usermessage"  placeholder="Message"></textarea>
  </div>
  
  <button type="submit" class="btnQuotesubmit wow fadeIn" name="submit" data-wow-delay="600ms">Submit</button>
</form>

	</div>
</div>
</section></div>

<script type="text/javascript">

  function validation()
    {
    var username = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var usercheck = /^[A-Za-z. 1-99]{3,85}$/ ;
    var phonecheck = /^[789][0-9]{9}$/;
    if(usercheck.test(name)){
 
      document.getElementById('usererror').innerHTML =" ";
   }
   else{
     document.getElementById('usererror').innerHTML ="Enter Correct Username";
     return false;
    }
    if(phonecheck.test(phone)){
       document.getElementById('mobileerror').innerHTML =" ";
     }

    else{
     document.getElementById('mobileerror').innerHTML ="Enter valid mobile number";
     return false;
    }
    }

  </script>



<!--footer part-->
<?php include('includes/footer.php')?>
<!--footer end-->


</body>
</html>