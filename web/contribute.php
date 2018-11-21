<?php
session_start();
include("dbcon.php");
$mailid=$_SESSION["fname"];
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Ente Rechana</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
<!--Custom-Theme-files-->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="all" />
<script src="js/modernizr.custom.js"></script>
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
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
					<!--	<li><a href="login.php" data-hover="LogOut">Logout</a></li> -->
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
			<div class="col-md-3 top-nav gallery-sec">
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
						<li><a class="active" href="contribute.php" data-hover="contribute">Contribute</a></li>
						
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
	


<title>contribution form</title>
<meta name="keywords" content="example, JavaScript Form Validation, Sample registration form" />
<meta name="description" content="This document is an example of JavaScript Form Validation using a sample registration form. " />
<link rel='stylesheet' href='js-form-validation.css' type='text/css' />
<script src="sample-registration-form-validation.js"></script>
</head>
<!-- <body onload="document.registration.userid.focus();"> -->
<h1>Write For Us!!!</h1>
<b>Be a part of this team.Become a creative contributor.</b>
<b>NB:"New user fill the name and email-id" </b>

<form name='registration'  method="post" action="" enctype="multipart/form-data" >
	<table  class="table" align="center" height ="450" width="170" cellpadding = "10" >
		<tr>
			<td><label for="username">Name:</label></td>
			<td><input type="text" name="username" maxlength="30" /> </td>
		</tr>
		<tr>
			<td><label for="email">Email:</label></td>
			<td><input type="text" name="email" maxlength="30" /></td>
		</tr>
		<tr>
			<td><label id="gender">Sex:</label></td>
			<td><input type="radio" name="msex" value="Male" /><span>Male</span></td>
			<td><input type="radio" name="fsex" value="Female" /><span>Female</span></td>
		</tr>
		<tr>
			<td><label>Category:</label></td>
			<td><select name="category" ><option  value="story" checked /><span>Story</span></option>
			<option   value="poem" /><span>Poem</span></option>
			<option   value="review" /><span>Review</span></option></td></select>
		</tr>
		<tr>
		<td>TITLE<input type="text" name="abs" align="left" class="form-control">
		</td>
		</tr>
   <tr>
      <td><label>Image</label><input type="file" name="image"  required value="" class="form-control" style="width:500px;"/></td>
    </tr>
		<tr>
    
        <tr>
      <td><label>File</label><input type="file" name="files"  required value="" class="form-control" style="width:500px;"/></td>
    </tr>
		<tr>
      <td><input type="submit" name="submit" value="Upload" class="btn btn-primary" style="margin-top:5px;" style="width:500px;"/></td>
    </tr>
		
		
		
			<?php

if(isset($_POST['submit']))
{
    $date=date("M,d,Y h:i:s A");
    $abs=$_POST['abs'];
	$cat=$_POST['category'];
	$image =$_FILES['image']['name'];
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/". $_FILES["image"]["name"]);
    $file =$_FILES['files']['name'];
        move_uploaded_file($_FILES["files"]["tmp_name"], "uploads/". $_FILES["files"]["name"]);
	
	$qry2="INSERT INTO uploads(name,date,files,mailid,category,image) VALUES('$abs',NOW(),'$file','$mailid','$cat','$image')";
	mysqli_query($conn,$qry2); 
        //echo $date;
         
   }
        ?>
	</table>
</form>



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
						     <li><i class="glyphicon glyphicon-map-marker"></i>SJCET, Palai </li>
							 <li><i class="glyphicon glyphicon-earphone"></i>phone: (+91) 812-931-2918 </li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	         </div>
		<div class="copy">
		    <p>&copy; 2018 Blogger. All Rights Reserved | Design by <a href="www.enterechana.com">Team EnteRechana</a> </p>
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
<style>
.table{
  font-family: Calibri; 
  color:black; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 
  background-color: #f2f2f2; 
  border-collapse: collapse; 
  border: 2px solid navy
}
</style>
</html>