$(document).scroll(function () {
    var y = $(this).scrollTop();
    $(".scroll-show").each(function() {
		var fadeZone=window.innerHeight/5;
		var showZone=window.innerHeight/4.5;
		var center = Math.floor(window.innerHeight/2);
		var dist = Math.abs((y+center) - $(this).position().top-$(this).height()/2);
		var opac;
		if(dist<showZone)
			opac = 1;
		else
			opac =  1 - 1/fadeZone * (dist-showZone);
		console.log (opac)
		$(this).css({ 'opacity' : opac })
	});
});