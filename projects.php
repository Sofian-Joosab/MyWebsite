<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sofian Joosab</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="styleProjects.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript">
		$(window).on('scroll', function(){
			if($(window).scrollTop()){
				$(".navbar").css('background', 'rgba(255,255,255)');
				$(".navbar-brand").css('color', '#000');
				$(".navbar-inverse .navbar-nav #nav1").css('color', '#000');
				$(".navbar-inverse .navbar-nav #nav2").css('color', '#000');
				$(".navbar-inverse .navbar-nav #nav3").css('color', '#000');
				$(".navbar-inverse .navbar-nav #nav4").css('color', '#000');
				
			}
			else{
				$(".navbar").css('background', 'rgba(37,37,35)');
				$(".navbar-brand").css('color', '#FFF');	
				$(".navbar-inverse .navbar-nav li a").css('color', '#FFF');	
				$(".navbar-inverse .navbar-nav #nav1").css('color', '#FFF');	
				$(".navbar-inverse .navbar-nav #nav2").css('color', '#FFF');
				$(".navbar-inverse .navbar-nav #nav3").css('color', '#FFF');
				$(".navbar-inverse .navbar-nav #nav4").css('color', '#FFF');
			}
		})
	</script>
	<script type="text/javascript">
					$(document).ready(function(){
			  $("a").on('click', function(event) {
			    if (this.hash !== "") {
			      event.preventDefault();
			      var hash = this.hash;
			      $('html, body').animate({
			        scrollTop: $(hash).offset().top
			      }, 800, function(){
			        window.location.hash = hash;
			      });
			    } 
			  });
			});
	</script>
</head>
<?php 
	include 'Parts/nav.html';
?>
<body>

	<!-- Cover IMG -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/coding.jpg" alt="Main-bg" class="img-responsive">
				<div class="carousel-caption" id="Rep">
					<h1>Code repository</h1>
				</div>
			</div>
		</div>
		<div id="aboutme"></div>
	</div>
	<!-- Cover IMG end -->

	<div class="container text-center">
		<div class="row">
			<div class="col-md-3 text-left" id="Goal">
				<h2>My goal</h2>
			</div>
			<div class="col-md-12 text-left" id="iconMsg">
				<p>I have been developing software since 2014 with a deep understanding of core computer science principles ranging from low-level algorithms and data structures in C, to object-oriented design in Java, C#, and embedded software, assembly code, and web design. I have a keen eye for automating processes especially in the multimedia field as I am a software developer. Combining this knowledge I have developed software in many areas. All the work on this website are personal projects I developed in my spare time, which you may use for free and view all the source code on github! I have a very entrepreneurial spirit and enjoy solving meaningful problems in a simplistic and lightweight approach.</p>
			</div>
		</div>
	</div>

	<div class="container" id="Software">
		<div class="row">
			<h1 id="TitleSoft">TECHNICAL SKILLS</h1>
			<div class="softwareContent text-center">
				<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12" id="languageJ">
				<h1>Java</h1>
				<h4>My first programming language.</h4>
				<p>Java is my go to for object oriented design with +4 years of experience in my personal projects. Most of my software(android) are written in Java, <br> as well as graphics interface applications (Desktop). Recently I have been using java mostly for android development</p>
			</div>
			<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>PHP,JavaScript,HTML,CSS,SQL</h1>
				<h4>+4 years using these languages to develop online solutions.Most of the software developed are for companies and unfortunately i can't show the code in github,<br> but the few that i have developed in my spare time like this website they will be available in github.</h4>
			</div>
			<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>Python</h1>
				<h4>+2 years using Python  Did a few small projects in my spare time using python to create a small game and a vending machine simulator.</h4>
			</div>
			<div class="col-lg-12 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>C#</h1>
				<h4>+1 years using C# to build Games <br> Did a simple roll the ball style of game and currently under development a First Person Shooter game.</h4>
			</div>
			</div>
		</div>
	</div>
	</body>
	<?php 
		include 'Parts/footer.html';
	?>
</html>