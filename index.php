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

<section class="index-news">
	<div class="wrapper">

		<article class="news-article">
			<div class="news-img"></div>
			<h3>Roger in Timisoara!</h3>
			<p>Roger Federer is expected to make his debute at Narnia Bank Open on 32 of July.
				This is tremendously good news for his fans all around Romania.</p>

		</article>

		<article class="news-article">
			<div class="news-img"></div>
			<h3>Roger in Timisoara!</h3>
			<p>Roger Federer is expected to make his debute at Narnia Bank Open on 32 of July.
				This is tremendously good news for his fans all around Romania.</p>

		</article>
		<article class="news-article">
			<div class="news-img"></div>
			<h3>Roger in Timisoara!</h3>
			<p>Roger Federer is expected to make his debute at Narnia Bank Open on 32 of July.
				This is tremendously good news for his fans all around Romania.</p>

		</article>
		<article class="news-article">
			<div class="news-img"></div>
			<h3>Roger in Timisoara!</h3>
			<p>Roger Federer is expected to make his debute at Narnia Bank Open on 32 of July.
				This is tremendously good news for his fans all around Romania.</p>

		</article>
		<article class="news-article">
			<div class="news-img"></div>
			<h3>Roger in Timisoara!</h3>
			<p>Roger Federer is expected to make his debute at Narnia Bank Open on 32 of July.
				This is tremendously good news for his fans all around Romania.</p>

		</article>




	</div>

</section>


<section >
	<div class="slideshow-container">

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
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

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
