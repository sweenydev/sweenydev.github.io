$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
	scrollShow();
	$(".nav").innerHTML = "Hello JavaScript!";
});
$(document).scroll(function () {
   scrollShow();
});

function scrollShow(){
	 var y = $(this).scrollTop();
    $(".scroll-show").each(function() {
		var fadeZone=window.innerHeight/4;
		var showZone=window.innerHeight/6;
		var center = Math.floor(window.innerHeight/2);
		var dist = Math.abs((y+center) - $(this).position().top-$(this).height()/2);
		var opac;
		if(dist<showZone)
			opac = 1;
		else
			opac =  1 - 1/fadeZone * (dist-showZone);
		$(this).css({ 'opacity' : opac })
	});
}
function header(){
	document.getElementByClassName("navbar-fixed-top").innerHTML = "Hello JavaScript!";
}