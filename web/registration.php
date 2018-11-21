<?php
				if(isset($_POST["Submit"]))
				{
						$fname=$_POST["fname"];
						$lname=$_POST["lname"];
						$mailid=$_POST["mailid"];
						$passwd=$_POST["passwd"];
						
						include("dbcon.php");
						
						$sql="insert into regform (fname,lname,mailid,passwd) VALUES ('$fname','$lname','$mailid','$passwd')";
						echo $sql;
						$result = mysqli_query($conn, $sql);
						if ($_POST["password"] === $_POST["c_password"])
						{
							header('location:login.php');
						}
					
				}
				?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ente Rechana.com</title>
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
<script type="text/javascript">
						function myFunction() 
						{
							var password = document.getElementById("password").value;
							var confirmPassword = document.getElementById("c_password").value;
							if (password != confirmPassword) 
							{
								alert("Passwords do not match.");
								return false;
							}
						alert("Registered");
						}
</script>

</head>
<body>
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
						<li><a class="active" href="registration.php" data-hover="Registration">Registration</a></li> 						
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
						<li><a href="login.php" data-hover="Login">Login</a></li>
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
			<div class="col-md-3 top-nav register">
				     <div class="logo">
						<a href="home.php"><h1>EnteRechana</h1></a>
					</div>
					<div class="top-menu">
					 <span class="menu"> </span>

					<ul class="cl-effect-16">
						<li><a class="active" href="index.html" data-hover="HOME">Home</a></li> 
						<li><a href="stories.php" data-hover="Stories">Stories</a></li>
						<li><a href="poems.php" data-hover="Poems">Poems</a></li>
						<li><a href="reviews.php" data-hover="Reviews">Reviews</a></li>
						<li><a href="contribute.php" data-hover="contribute">contribute</a></li>
						
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
	<div class="col-md-9 main">
	<!-- register -->
	<form method="POST" name="myForm" onsubmit="return(validate());" >
			<div class="sign-up-form">
				 <h3 class="tittle">Registration <i class="glyphicon glyphicon-file"></i></h3>
					<p>Welcome...!</p>
				<div class="sign-up">
					 <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="a">First Name<font color="red"> *</font></h4>
						</div>
						
						<div class="sign-up2">
							
								<input type="text" class="text" name="fname" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Last Name<font color="red"> *</font></h4>
						</div>
						<div class="sign-up2">
							
									<input type="text" class="text" name="lname" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="c">Email Address<font color="red"> *</font> </h4>
						</div>
						<div class="sign-up2">
							
								 <input type="text" class="text" name="mailid" value="john@example.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'john@example.com';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					 <h3 class="tittle reg">Login Information <i class="glyphicon glyphicon-off"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Password<font color="red"> *</font> </h4>
						</div>
						<div class="sign-up2">
							
								 <input type="password" class="Password" name="passwd" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password <font color="red"> *</font> </h4>
						</div>
						<div class="sign-up2">
							
								
											 <input type="password" class="Password" value="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}">
	

							
						</div>
						<div class="clearfix"> </div>
					</div>
					
						<input href="login.php" type="submit" value="Submit" name="Submit">
					</form>
				</div>
			</div>
<!-- //register -->
<!-- //login-page -->
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
							 <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">mail@enterechana.com</a></li>
						   </ul>
				    </div>
					<div class="col-md-4 footer-grid">
					     <h4>Address Location</h4>
				           <ul class="bottom">
						     <li><i class="glyphicon glyphicon-map-marker"></i>SJCET PALAI </li>
							 <li><i class="glyphicon glyphicon-earphone"></i>phone: 091 8129312918 </li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	        </div>
		<div class="copy">
		    <p>&copy; 2018 Blogger. All Rights Reserved | Design by <a href="http://google.com/">Team Ente Rechana.com</a> </p>
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