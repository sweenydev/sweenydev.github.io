$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
	scrollShow();
	//header();
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
function header(group){
	if(group==top){
		/*$(".navbar-fixed-top").html(
		<div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		</div>
		<div id="navbar1" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			  <a class="navbar-brand" href="index.html">
				  <img src="img/logo.PNG" width="150" height="40" id="nav-logo" alt="">
			  </a>
				<li class="active"><a href="index.html">About</a></li>
				<li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
				  <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="toolkitplus.html">Toolkit Plus</a></li>
					  <li><a href="dogetranslator.html">Doge Translator</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects in Progress
				  <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="dev/juggling.html">Juggling Trainer VR</a></li>
				  </ul>
			  </li>
			  <li class="dropdown">
				  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dev Blogs
				  <span class="caret"></span></a>
				  <ul class="dropdown-menu">
					  <li><a href="blog/juggling.html">Juggling Trainer VR</a></li>
				  </ul>
			  </li>
		  </ul>
	  </div>
		);*/
	}
	
}