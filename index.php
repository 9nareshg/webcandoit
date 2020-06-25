<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/pages/index.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<body>
	<!-- svg sprites -->
	<?php include("img/sprites-icon/sprite.svg") ?>
	
	<!-- header -->
	<?php include("include-file/header.php") ?>

	<!-- home page -->
	<div class="content">
		<div class="page-base">
			<!-- banner section starts-->
			<div class="banner">
				<img src="https://dummyimage.com/1110x430/f2e707/171717">
				<img src="https://dummyimage.com/1110x430/f2e707/171717">
				<img src="https://dummyimage.com/1110x430/f2e707/171717">
				<img src="https://dummyimage.com/1110x430/f2e707/171717">
				<img src="https://dummyimage.com/1110x430/f2e707/171717">
			</div>
			<!-- banner section ends-->			
		</div>
	</div>

	<!-- footer -->
	<?php include("include-file/footer.php") ?>

	<!-- slick slider -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
		      			arrows: false,
		      			dots:true
		      		}
		      	}
	      	]
      	});
  	</script>
</body>
</html>