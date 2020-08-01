$(document).ready(function(){
	$('.blur').click(function(){
		$('.blur').css({'opacity':'0','pointer-events':'none'});
		$('.slide-nav').removeClass('slide');
	})
	
	$('.bar').click(function(){
		$('.slide-nav').addClass('slide');
		$('.blur').css({'opacity':'1','pointer-events':'all'});
	});
	$('.slide-nav span').click(function(){
		$('.blur').css({'opacity':'0','pointer-events':'none'});
		$('.slide-nav').removeClass('slide');
	});

})