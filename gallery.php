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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/galleria.min.js"></script>


</head>
<body class="body-gallery" background="clay.jpg";>
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

<section class="section-galleria">

		<h1 class="meet-the-stars">Gallery</h1>
<br>
  <div class="wrapper">
    <div class="galleria">
                  <img src="tennis.jpg">
                  <img src="tennis2.jpg">
                  <img src="tennis3.jpg">
									<img src="tennis4.jpg">
                  <img src="tennis5.jpg">
                  <img src="tennis6.jpg">
									<img src="tennis7.jpg">
									<img src="tennis8.jpg">
									<img src="tennis9.jpg">
									<img src="tennis10.jpg">
    </div>
    <script>
        (function() {
                  Galleria.loadTheme('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.5.7/themes/classic/galleria.classic.min.js');
                  Galleria.run('.galleria');
          }());
    </script>
  </div>
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
