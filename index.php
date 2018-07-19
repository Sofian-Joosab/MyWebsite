<!DOCTYPE html>
<html lang="en">
<?php 
	include 'Parts/head.html';
	include 'Parts/nav.html';
?>
<body>

	<!-- Cover IMG -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/Main-bg.jpg" alt="Main-bg" class="img-responsive">
				<div class="carousel-caption">
					<h1>Sofian joosab</h1>
					<h3>a software developer passionate for innovative technology</h3>
					<a class="ct-btn-scroll ct-js-btn-scroll" href="#aboutme"><h5>Read more</h5><img alt="Arrow Down Icon" src="https://www.solodev.com/assets/anchor/arrow-down.png"></a>
				</div>
			</div>
		</div>
		<div id="aboutme"></div>
	</div>
	<!-- Cover IMG end -->

	<div class="container text-center">
		<div class="row">
			<div class="col-md-6">
				<img src="img/profile.jpg" alt="Profile Image" id="icon" class="img-responsive">
			</div>
			<div class="col-md-6 text-left" id="iconMsg">
				<p>Welcome to my website. I am a Software Developer,currently i am a student at the Victoria University in Melbourne. In the past few years I have worked on many independent projects alongside my formal education. My goal is to develop innovative solutions in the IT industry. I have advanced knowledge in Java and C, experience design, as well as building this website using responsive web technologies from scratch. Additionally, I am a Game Developer, i take it as a hobby. I created this site to share my interests, as they evolve, and connect with like minded individuals.</p>
			</div>
		</div>
	</div>

	<div class="container" id="Software">
		<div class="row">
			<h1 id="TitleSoft">Coding Languages</h1>
			<div class="softwareContent text-center">
				<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>Java</h1>
				<h4>4+ years of experience in developing <br> tools using OOP</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>PHP</h1>
				<h4>4+ years using Php to develop online solutions <br> such as e-commerces and e-learning sites,  <br> which includes HTML, CSS, JavaScript, <br> Database Management and more.</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>Python</h1>
				<h4>2+ years using Python <br> on small projects such as game creating</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>JavaScript</h1>
				<h4>3+ years using JavaScript to make the websites <br> more user friendly, such as pop-ups <br> and interactions on users clicks.</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>C#</h1>
				<h4>1+ years using C# to build Games <br> using it as the base language in Unity game development</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>HTML</h1>
				<h4>4+ years using HTML to make the websites using it along<br>  side bootstrap and other technologies to make them dynamic</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>CSS</h1>
				<h4>4+ years using CSS to style websites <br>  making them more user friendly</h4>
			</div>
			<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12" id="language">
				<h1>SQL</h1>
				<h4>5+ years using SQL to manage Databases making them more <br>  efficient using triggers and normalization forms</h4>
			</div>
			</div>
		</div>
	</div>
	</body>
	<?php 
		include 'Parts/footer.html';
	?>
</html>