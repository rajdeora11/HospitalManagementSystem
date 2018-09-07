
<!DOCTYPE HTML>
<html>
	<head>
		<title>HMS | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
					<a href="index.html" style="font-size: 30px;">National Hospital, Bhopal</a>
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Home</a></li>
					
						<li class="active"><a href="contact.php">Contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
						<a href="https://www.google.co.in/maps/place/National+Hospital/@23.2169658,77.4361249,15z/data=!4m5!3m4!1s0x0:0x9e9a720a874fd95a!8m2!3d23.2169658!4d77.4361249" target="_blank">
							<h3>Hospital Address  :</h3>
						    	<p>E-3/61,Arera Colony</p>
						   		<p>Bhopal, Madhya Pradesh</p>
						   		<p>India</p>
						</a>
						<a href="tel:+917552440004">		
				   		<p><strong>Phone: </strong>(91) 755 244 0004 </p> </a>
				 	 	<a href="mailto:deorarajpal420@gmail.com" target="_top">
						<p><strong>Email: </strong>deorarajpal420@gmail.com</p>
						</a>
				   	
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="email"></span>
						    </div>
						    <div>
						     	<span><label>SUBJECT</label></span>
						    	<span><input type="text" name="subject"></span>
						    </div>
						    <div>
						    	<span><label>DETAILS</label></span>
						    	<span><textarea name="body"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="submit" name="submit"></span>
						  </div>
					    </form>
						<? php
							if(isset($_POST['submit'])){
								$name=$_POST['name'];
								$email = $_POST['email'];
								$body= $_POST['body'];
								$subject=$_POST['subject'];
								$body = wordwrap($body,70);
								$headers = "From: $email \r\n" ."CC: navoditjain111@gmail.com \r\n" ;
								mail("deorarajpal420@gmail.com",$subject,$body,$headers);
							}
						?>
				    </div>
  				</div>				
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Home</a></li>
						
						<li><a href="contact.php">Contact</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

