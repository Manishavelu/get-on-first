

<div id='cssmenu'>
<ul>
   <li <?php if($_SERVER['REQUEST_URI']=='index.php'){?> class='active'<?php }?>><a href="index.php">Home</a></li>
   <li <?php if(strpos($_SERVER['REQUEST_URI'],'about.php')){?> class='active'<?php }?>><a href="about.php">About</a>
  
   </li>
  
    <li <?php if(strpos($_SERVER['REQUEST_URI'],'service.php')){?> class='active'<?php }?>><a href="service.php">Services</a>
	<ul>
	<li <?php if(strpos($_SERVER['REQUEST_URI'],'service.php')){?> class='active'<?php }?>><a href="website-designing.php">Website Designing/Developing</a></li>
	
	<li <?php if(strpos($_SERVER['REQUEST_URI'],'service.php')){?> class='active'<?php }?>><a href="digital.php">Digital Marketing</a></li>
	
	
	</ul>
	</li>

	
   
	<li <?php if(strpos($_SERVER['REQUEST_URI'],'clients.php')){?> class='active'<?php }?>><a href="clients.php">Our Clients</a></li>
	
	

   	<li <?php if(strpos($_SERVER['REQUEST_URI'],'contact.php')){?> class='active'<?php }?>><a href="contact.php">Contact Us</a></li>

   	
    
	


   
 
  
   
</ul>

</div>


