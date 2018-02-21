<!DOCTYPE html>
<html>
	<head>
		<title>Juggling Trainer VR</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">	
		<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="../js/inc.js"></script>
		<link rel="icon" type="image/png" href="../img/favicon.ico">
	</head>
	<body>
		<div id="fb-root"></div>
		<? include 'inc.php';
			echo(TESTETSTETS);
		?>
		
		<!--script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script-->
		<div class='container-fluid'>
			<nav class="navbar navbar-default navbar-fixed-top">
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
							<a class="navbar-brand" href="../index.html">
								<img src="../img/logo.PNG" width="150" height="40" id="nav-logo" alt="">
							</a>
						  	<li class=""><a href="../index.html">About</a></li>
						  	<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="../toolkitplus.html">Toolkit Plus</a></li>
									<li><a href="../dogetranslator.html">Doge Translator</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects in Progress
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="../dev/juggling.html">Juggling Trainer VR</a></li>
								</ul>
							</li>
							<li class="dropdown active">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dev Blogs
								<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="active"><a href="juggling.html">Juggling Trainer VR</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="container-fluid" id='info'>
			<div class="box shadow scroll-show">
				<img src="../img/juggle.jpg" width="150" height="150" id="nav-logo" alt="">
				<h1><b>Juggling Trainer VR Dev Blog</b></h1>
			</div>
			<div class="box shadow scroll-show" style="opacity:0.5">
				<h1><b>Haptic Feedback Breakthrough!</b></h1>
				<p><i>November 30th, 2017</i></p>
				<p><i>Andrew Johnson</i></p>
				<hr>
				<p>
				If you have ever used a professional VR set, you know that one of the most important aspects of game play is haptic feedback.  
				If you are unaware of what haptic feedback is, it is the use of touch to increase immersion in video games.
				Haptic feedback can make or break immersion in VR.  Today, Dean has accomplished implementing early stages of haptic feedback
				into Juggling Trainer VR, bringing us one step closer to total immersion!
				<br>
			</div>
			<div class="box shadow scroll-show">
				<h1><b>New Project</b></h1>
				<p><i>November 14th, 2017</i></p>
				<p><i>Andrew Johnson</i></p>
				<hr>
				<p>
				Today we have decided to embark on making a software to train people how to juggle in VR.  It will include features such as changable gravity,
				changeable object shapes, and competitive timed modes.  We look forward to making this happen!
				<br>
			</div>
			<div class="box shadow scroll-show">
				<h1><b>Place holder</b></h1>
				<p><i>November 1st, 2017</i></p>
				<p><i>Andrew Johnson</i></p>
				<hr>
				<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br>
			</div>
			<div class="box shadow">
				<h1>Comments</h1>
				<hr>
				<div class="fb-comments" data-href="https://sweenydev.github.io/blog/juggling.html" data-width="800" data-numposts="8"></div>
			</div>
		</div>		
	</body>
	