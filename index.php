<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bank of Narnia Timisoara Open</title>
<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ultra" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body background="clay.jpg";>
<header >
	<div class="wrapper">
		<img src="tennisball.png" alt="">
		<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="tickets.php">Tickets</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
		</nav>
		<?php if (isset($_SESSION['u_id'])):
			echo '<form class="signout-form" action="includes/signout.inc.php" method="POST">
					<br>
					<br>
					<button type="submit" name="signout" >Sign out</button>
			</form>'; ?>

		<?php endif; ?>

	</div>


</header>

<section class="section-intro" >
	<div class="index_intro">
		<div class="wrapper">
			<h1 class="intro-h1">BANK OF NARNIA TIMISOARA OPEN</h1>
			<p class="intro-p">An experience delivered by Bank of Narnia in association with Carbrand</p>

		</div>

	</div>
</section>




<section >

	<br>
	<div class="slideshow-containerr" style="background-color:rgba(255, 255, 255,0.9)">

		<div class="mySlidess fade">

			<div class="row">
				<br>
						<div class="column">
							<div class="card" >
								<img src="federer.png" alt="federer" style="width:100%">
								<div class="container" style="align-content:center">
									<h1 >Roger Federer</h1>
									<p class="title">SUI</p>
									<br>
									<p ><button class="button" ><a style="color:white" href="http://www.atpworldtour.com/en/players/roger-federer/f324/overview">See more</a></button></p>
								</div>
							</div>
						</div>

						<div class="column">
							<div class="card">
								<img src="nadal.png" alt="Mike" style="width:100%">
								<div class="container">
									<h1 >Rafael Nadal</h1>
									<p class="title">ESP</p>
									<br>
									<p><button class="button"><a style="color:white" href="http://www.atpworldtour.com/en/players/rafael-nadal/n409/overview">See more</a></button></p>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="card">
								<img src="thiem.png" alt="John" style="width:100%">
								<div class="container">
									<h1 >Dominic Thiem</h1>
									<p class="title">AUT</p>
									<br>
									<p><button class="button"><a style="color:white" href="http://www.atpworldtour.com/en/players/dominic-thiem/tb69/overview">See more</a></button></p>
								</div>
							</div>
						</div>
						</div>
				</div>

				<div class="mySlidess fade">

					<div class="row">
						<br>
								<div class="column">
									<div class="card">
										<img src="goffin.png" alt="Jane" style="width:100%">
										<div class="container">
											<h1 >David Goffin</h1>
											<p class="title">BEL</p>
											<br>
											<p><button class="button"><a style="color:white" href="http://www.atpworldtour.com/en/players/david-goffin/gb88/overview">See more</a></button></p>
										</div>
									</div>
								</div>

								<div class="column">
									<div class="card">
										<img src="zverev.png" alt="Mike" style="width:100%">
										<div class="container">
											<h1 >Alexander Zverev</h1>
											<p class="title">GER</p>
											<br>
											<p><button class="button"><a style="color:white" href="http://www.atpworldtour.com/en/players/alexander-zverev/z355/overview">See more</a></button></p>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="card">
										<img src="pouille.png" alt="John" style="width:100%">
										<div class="container">
											<h1 >Lucas Pouille</h1>
											<p class="title">FRA</p>
											<br>
											<p><button class="button"><a style="color:white" href="http://www.atpworldtour.com/en/players/lucas-pouille/pf39/overview">See more</a></button></p>
										</div>
									</div>
								</div>
								</div>
						</div>


	</div>



		</div>

<br>



<script>
var slideIndexx = 0;
showSlidess();

function showSlidess() {
    var i;
    var slides = document.getElementsByClassName("mySlidess");
    //var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndexx++;
    if (slideIndexx > slides.length) {slideIndexx = 1}
    //for (i = 0; i < dots.length; i++) {
    //    dots[i].className = dots[i].className.replace(" active", "");
    //}
    slides[slideIndexx-1].style.display = "block";
    //dots[slideIndex-1].className += " active";
    setTimeout(showSlidess, 4000); // Change image every 4 seconds
}
</script>

<p class="meet-the-stars">Meet the stars!</p>

<br>

</section>

<section>
	<br>
	<br>
	<div class="wrapper">
		<h1 class="text-section">		Bank of Narnia Open is the main tennis tournament held in Romania. It is part of the official ATP callendar and supported by the International Tennis Federation.
</h1>
	</div>
	<br>
	<br>
</section>

<section >
	<div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="tennis.jpg" style="width:100%">
  <div class="text-slideshow">People watching the matches on Court 1</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="tennis2.jpg" style="width:100%">
  <div class="text-slideshow">Rafael Nadal capturing his 10th title last year after amazing battle with Wawrinka</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="tennis3.jpg" style="width:100%">
  <div class="text-slideshow">Ryan Harrison and Michael Venus qualify for their first final here in Timisoara</div>
</div>

</div>

<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000); // Change image every 6 seconds
}
</script>

</section>


<section>
	<br>
	<p class="meet-the-stars">Save the date!</p>
	<br>
	<div class="month">
  <ul style="list-style-type: none">
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      August<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li><span class="active">8</span></li>
  <li><span class="active">9</span></li>
  <li><span class="active">10</span></li>
  <li><span class="active">11</span></li>
  <li><span class="active">12</span></li>
  <li><span class="active">13</span></li>
  <li><span class="active">14</span></li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

<br>
<br>
</section>

<footer>
	<div class="wrapper">
		<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="tickets.php">Tickets</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
		</nav>

	</div>
</footer>

</body>
</html>
