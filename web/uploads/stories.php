<?php
session_start();

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
						
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
						<li><a href="login.php" data-hover="Logout">Logout</a></li>
						<li><a href="#"><span>
						<?php
						if(isset($_SESSION["fname"]))
						echo "WELCOME  ".$_SESSION["fname"];
						?></span></a></li>
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
			<div class="col-md-3 top-nav">
				     <div class="logo">
						<a href="index.php"><h1>EnteRechana</h1></a>
					</div>
					<div class="top-menu">
					 <span class="menu"> </span>

					<ul class="cl-effect-16">
						<li><a class="active" href="index.html" data-hover="HOME">Home</a></li> 
						<li><a href="stories.php" data-hover="Stories">Stories</a></li>
						<li><a href="poems.php" data-hover="Poems">POEMS</a></li>
						<li><a href="reviews.php" data-hover="Reviews">REVIEWS</a></li>
						<li><a href="contribute.php" data-hover="Contribute">CONTRIBUTE</a></li>
						
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
							<li><a class="fb" href="www.facebok.com/enterecahana"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>
	<div class="col-md-9 main">
		<!--banner-section-->
		
					<!--banner-->
	  			
			   <!--//banner-->
			  <!--/top-news-->
			  
			  
			
			<input onClick="location.href='contribute.php' "type="button" name="story" value="Upload Story" >
			  <div class="top-news">
				<div class="top-inner">
				<?php
					

				while ($row = mysqli_fetch_array($image))
					{
				
				echo "<td><a href='single.html'><img src='uploads/".$row['image']."' height='300' width='50' onclick='image()'>";
				<h5 class="top">echo "<p>".$row['name']."</p></a></td>"
				<p>On Jun 25 
								<a class="span_link" href="#">
									<span class="glyphicon glyphicon-comment"></span>0 
								</a>
								<a class="span_link" href="#">
									<span class="glyphicon glyphicon-eye-open"></span>5.6k 
								</a>
								<a class="span_link" href="danbrown.php">
									<span class="glyphicon glyphicon-circle-arrow-right"></span>
								</a>
							</p>
				}
				?>
				
					<div class="col-md-6 top-text">
				
					
					
						 <a href="danbrown.php">
							<img src="images/pic1.jpg"  alt="" height="300" width="50" /></a>
						    <h5 class="top"><a href="danbrown.php">DAN BROWN</a></h5>
							<p>Dan Brown writtern by john tequinto is romantic thriller which tells about the beautiful love story of John and Angel.One day the whole turns on a Sunday night.Read and experience the love and revenge of john.</p>
						    <p>On Jun 25 
								<a class="span_link" href="#">
									<span class="glyphicon glyphicon-comment"></span>0 
								</a>
								<a class="span_link" href="#">
									<span class="glyphicon glyphicon-eye-open"></span>5.6k 
								</a>
								<a class="span_link" href="danbrown.php">
									<span class="glyphicon glyphicon-circle-arrow-right"></span>
								</a>
							</p>
					 </div>
					<div class="col-md-6 top-text two">
						 <a href="gos.html"><img src="images/pic2.jpg"  alt=""height="300" width="50"  ></a>
						    <h5 class="top"><a href="gos.html">God Of Small Things</a></h5>
							<p>The God of Small Things (1996) is the debut novel of Indian writer Arundhati Roy. It is a story about the childhood experiences of fraternal twins whose lives are destroyed by the "Love Laws" that lay down "who should be loved, and how.</p>
						    <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>8.6k </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					 <div class="clearfix"> </div>
				 </div>
				 <div class="top-inner second">
					<div class="col-md-6 top-text">
						 <a href="itw.html"><img src="images/pic3.jpg"  alt="" height="300" width="50"  ></a>
						    <h5 class="top"><a href="itw.html">Into The Wild</a></h5>
							<p>
Into the Wild is a 1996 non-fiction book written by Jon Krakauer. It is an expansion of a 9,000-word article by Krakauer on Christopher
 McCandless titled "Death of an Innocent", which appeared in the January 1993 issue of Outside. The book was adapted to film in 2007, 
 directed by Sean Penn with Emile Hirsch starring as McCandless.</p>
						    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					<div class="col-md-6 top-text two">
						 <a href="slj.html"><img src="images/pic4.jpg"  alt=""height="300" width="50" ></a>
						    <h5 class="top"><a href="slj.html">Such A Long Journey</a></h5>
							<p>Such a Long Journey is a 1991 novel by Rohinton Mistry. It was shortlisted for the Booker Prize and won several 
							other awards.</p>
						    <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					 <div class="clearfix"> </div>
				 </div>
	            </div>
					<!--//top-news-->
		     </div>
			<!--//banner-section-->
			<div class="col-md-9 main">
		<!--banner-section-->
		
					<!--banner-->
	  			 
			   <!--//banner-->
			  <!--/top-news-->
			  <div class="top-news">
				<div class="top-inner">
					<div class="col-md-6 top-text">
						 <a href="danbrown.php"><img src="images/pic1.jpg"  alt="" height="300" width="50" ></a>
						    <h5 class="top"><a href="danbrown.php">DAN BROWN</a></h5>
							<p>Dan Brown writtern by john tequinto is romantic thriller which tells about the beautiful love story of John and
							Angel.One day the whole turns on a Sunday night.Read and experience the love and revenge of john.</p>
						    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>5.6k </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					<div class="col-md-6 top-text two">
						 <a href="gos.html"><img src="images/pic2.jpg" height="300" width="50" alt=""></a>
						    <h5 class="top"><a href="gos.html">God Of Small Things</a></h5>
							<p>The God of Small Things (1996) is the debut novel of Indian writer Arundhati Roy. It is a story about the childhood
							experiences of fraternal twins whose lives are destroyed by the "Love Laws" that lay down "who should be loved, and how.</p>
						    <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>8.6k </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					 <div class="clearfix"> </div>
				 </div>
				 <div class="top-inner second">
					<div class="col-md-6 top-text">
						 <a href="itw.html"><img src="images/pic3.jpg" height="300" width="50" alt=""></a>
						    <h5 class="top"><a href="itw.html">Into The Wild</a></h5>
							<p>
Into the Wild is a 1996 non-fiction book written by Jon Krakauer. It is an expansion of a 9,000-word article by Krakauer on Christopher McCandless
 titled "Death of an Innocent", which appeared in the January 1993 issue of Outside. The book was adapted to film in 2007, directed by Sean Penn 
 with Emile Hirsch starring as McCandless.</p>
						    <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
					 </div>
					<div class="col-md-6 top-text two">
						 <a href="slj.html"><img src="images/pic4.jpg" height="300" width="50" alt=""></a>
						    <h5 class="top"><a href="slj.html">Such A Long Journey</a></h5>
							<p>Such a Long Journey is a 1991 novel by Rohinton Mistry. It was shortlisted for the Booker Prize and won several other
							awards.</p>
						    <p>On Jun 27 <a class="span_link" href="#">
							<span class="glyphicon glyphicon-comment"></span>0 </a>
							<a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a>
							<a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span>
							</a>
						</p>
					 </div>
					 <div class="clearfix"> </div>
				 </div>
	            </div>
				
			<!--/general-news-->
			 
					   
			<!--//general-news-->
			<!--/news-->
			<!--/news-->
		 </div>
			<div class="clearfix"> </div>
	<!--/footer-->
	     <div class="footer">
				 <div class="footer-top">
				    <div class="col-md-4 footer-grid">
					     <h4>Ente Rechana </h4>
				          <ul class="bottom">
							 <li>Welcome to world of thoughts</li>
							 <li>Have a nice day!!!</li>
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
						     <li><i class="glyphicon glyphicon-map-marker"></i>SJCET,Palai </li>
							 <li><i class="glyphicon glyphicon-earphone"></i>phone: +91 8129312918 </li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	     </div>
		<div class="copy">
		    <p>&copy; 2018 Blogger. All Rights Reserved | Design by <a href="www.wordpress.com">Team Enterechana.com</a> </p>
		</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>	
		<!--//footer-->
			<!--start-smooth-scrolling-->
						


</body>
</html>