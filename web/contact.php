<?php
session_start();
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email_id=$_POST["email_id"];
$number=$_POST["number"];
$comment=$_POST["comment"];
include ("dbcon.php");
$sql="INSERT INTO contact(name,email_id,number,comment) VALUES ('$name','$email_id','$number','$comment')";
//echo $sql;
$result = mysqli_query($conn, $sql);
}


?>





<!DOCTYPE HTML>
<html>
<head>
<title>EnteRechana.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery.min.js"> </script>
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
						<li><a href="registration.php" data-hover="Registration">Registration</a></li> 
						<li><a class="active" href="contact.php" data-hover="CONTACT">Contact</a></li>
						<li><a href="#"><span>
						<?php
						if(isset($_SESSION["fname"]))
						echo "WELCOME  ".$_SESSION["fname"];
						?></span></a></li>
						<li><a href="index.php" data-hover="Logout">Logout</a></li>
					</ul>
					<div class="search-box">
					    <div class="b-search">
								<form>
										<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
										<input type="submit" value="">
								</form>
							</div>
						</div>

					<div class="clearfix"></div>
				</div>
       </div>
	<div class="full">
			<div class="col-md-3 top-nav contact">
				     <div class="logo">
						<a href="home.php"><h1>EnteRechana</h1></a>
					</div>
				<div class="top-menu">
					 <span class="menu"> </span>
						<ul class="cl-effect-16">
						<li><a href="home.php" data-hover="HOME">Home</a></li> 
						<li><a href="stories.php" data-hover="Stories">Stories</a></li>
						<li><a href="poems.php" data-hover="Poems">Poems</a></li>
						<li><a href="reviews.php" data-hover="Reviews">Reviews</a></li>
						<li><a href="contribute.php" data-hover="Contribute">contribute</a></li>
						
					</ul>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					<ul class="side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>
<!-- contact -->
	<div class="col-md-9 main">
	 <div class="contact">
	   <h3 class="tittle">Find Us <i class="glyphicon glyphicon-map-marker"></i></h3>
		<div class="contact-left">
			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3932.4677646865684!2d76.72250296483163!3d9.72638558035403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d9.726526!2d76.7247829!4m5!1s0x3b07cc030879c97d%3A0x6e9bfc73b18c855a!2sBharananganam+Pravithanam+Rd%2C+Choondacherry%2C+Kerala+686579!3m2!1d9.7262346!2d76.7247056!5e0!3m2!1sen!2sin!4v1540181802652"></iframe>

		</div>
		<div class="contact-right">
			<p class="phn">+91 8129 31 29 18</p>
			<p class="phn-bottom">
					<span>SJCET,Palai</span></p>
			<p class="lom">Follow the map to reach us!!</p>
		</div>
		<div class="clearfix"> </div>
		<div class="contact-left1">
			<h3>Contact Us With <span>Any questions</span></h3>
			<div class="in-left">
				<form method="POST">
					<p class="your-para">Your Name :</p>
							<input type="text" value="" name="name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Your Mail :</p>
							<input type="text" value="" name="email_id" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Phone Number:</p>
							<input type="text" value="" name="number" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">

				
			</div>
			<div class="in-right">
				
					<textarea cols="77" rows="6" name="comment" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-right1">
			<h3><span>Social Websites</span></h3>
			<h4>To reach us on Social media platforms follow the social media tabs given below!!</label></h4>
			<p>In the new era, social media like facebook,twitter,instagram are of great importance.For our users covenience our team
			have imprints on every social platforms.Come follow and be part of our team!!Love and regards from team enterechana.com</p>
			     <ul class=" side-icons con">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
		</div>
		<div class="clearfix"> </div>
<!-- //contact -->
			</div>
			<div class="clearfix"> </div>
	<!--/footer-->
	     <div class="footer">
				 <div class="footer-top">
				    <div class="col-md-4 footer-grid">
					     <h4>Lorem sadipscing </h4>
				          <ul class="bottom">
							 <li>Consetetur sadipscing elitr</li>
							 <li>Magna aliquyam eratsed diam</li>
						 </ul>
				    </div>
					  <div class="col-md-4 footer-grid">
					     <h4>Message Us Now</h4>
				            <ul class="bottom">
						     <li><i class="glyphicon glyphicon-home"></i>Available 24/7 </li>
							 <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">mail@example.com</a></li>
						   </ul>
				    </div>
					<div class="col-md-4 footer-grid">
					     <h4>Address Location</h4>
				           <ul class="bottom">
						     <li><i class="glyphicon glyphicon-map-marker"></i>2901 Glassgow Road, WA 98122-1090 </li>
							 <li><i class="glyphicon glyphicon-earphone"></i>phone: (888) 123-456-7899 </li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	     </div>
		<div class="copy">
		    <p>&copy; 2018 Blogger. All Rights Reserved | Design by <a href="http://enterechana.com">Team EnteRechana.com</a> </p>
		</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>	
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>