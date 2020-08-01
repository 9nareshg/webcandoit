<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/pages/index.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>	
	<!-- header -->
	<?php include("include-file/header.php") ?>

	<!-- home page -->
	<div class="content">
		<div class="page-base">
			<!-- banner section starts-->
			<div class="banner">
				<img src="https://dummyimage.com/1110x430/f2e707/171717">
				<img src="https://dummyimage.com/1110x430/0d2e63/ffffff">
				<img src="https://dummyimage.com/1110x430/368210/ffffff">
			</div>
			<!-- banner section ends-->

			<!-- introduction section starts -->
			<div class="introduction">
				<div class="name">Hey, I'm Naresh Suthar</div>
				<div class="b-title">I'll help you build a custom website.</div>
				<div class="s-title">I am experienced and passionate web designer,</div>
				<div class="s-title">having specialization in building website for small & medium sized businesses.</div>
				<a href="#">Know more</a>
				<a href="#">Contact me</a>
			</div>
			<!-- introduction section ends -->

			<!-- q&a section starts -->
			<div class="qna">
				<h2>#1. why you need website for your small business ?</h2>
				<div>
					<div class="content-sec">
						<h3 class="animatethis">
<pre>If you have restaurent, school, college,
showroom, gym, hotel or if you are 
interior designer, architect, builder or 
anything like this then you need a website, 
where you can showcase your work, 
place or services or even can run sell & offers.
					
website makes bigger impact on consumers,
it makes you look professional.</pre>
						</h3>
						<a href="#">Explore more <img src="img/rightarrow.png"></a>
					</div>
					<div class="slide-sec">
						<img src="https://dummyimage.com/555x300/cee619/000000">
						<img src="https://dummyimage.com/555x300/368210/000000">
						<img src="https://dummyimage.com/555x300/0d2e63/000000">
					</div>
				</div>
				<h2>#2. why you should choose me ?</h2>
				<div>
					<div class="slide-sec">
						<img src="https://dummyimage.com/555x300/cee619/000000">
						<img src="https://dummyimage.com/555x300/368210/000000">
						<img src="https://dummyimage.com/555x300/0d2e63/000000">
					</div>
					<div class="content-sec">
						<h3 class="animatethis">
<pre dir="rtl">having a good website for small businesses
is very expensive in today's market

here you get affordable price for both
maintenance and completely new website
as well as good quality</pre>
						</h3>
						<a href="#" style="float: right;">Go to pricing <img src="img/rightarrow.png"></a>
					</div>
				</div>
				<h2>#3. what you get extra here ?</h2>
				<div>
					<div class="content-sec">
						<h3 class="animatethis">
<pre>website isn't everything, you need to reach
all that platform in order to get potential
client/customer.
e.g. if you've store then you'll need to put
your store on amazon, flipkart and various these sites.

here you get full guidance for complete digitalize
business.</pre>
						</h3>
						<a href="#">Know more <img src="img/rightarrow.png"></a>
					</div>
					<div class="slide-sec">
						<img src="https://dummyimage.com/555x300/cee619/000000">
						<img src="https://dummyimage.com/555x300/368210/000000">
						<img src="https://dummyimage.com/555x300/0d2e63/000000">
					</div>
				</div>
			</div>
			<!-- q&a section ends -->			
		</div>
	</div>
	<!-- contact -->
	<?php include("include-file/contact.php") ?>

	<!-- footer -->
	<?php include("include-file/footer.php") ?>

	<!-- slick slider -->
	<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script>
		//banner sec
	    $('.banner').slick({
	  		prevArrow:'<span class="prev-arrow"><span style="border-width: 0 0 3px 3px;"></span></span>',
	  		nextArrow:'<span class="next-arrow"><span style="border-width: 3px 3px 0 0;"></span></span>',
	  		autoplay:true,
	      	responsive:[
		      	{
		      		breakpoint:1130,
		      		settings:{
		      			arrows: false
		      		}
		      	}
	      	]
	  	});
	  	
	  	//Q&A sec
	  	$('.slide-sec').slick({
	  		autoplay:true,
				arrows: false
	  	});
	</script>
</body>
</html>