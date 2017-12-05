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


<section class="contact-section">
	<h1 class="meet-the-stars">Contact</h1>

	<div class="wrapper">
		<p style="font-size=16px">
			<strong style="font-weight=bold">Ticket-Info</strong>
			<br>
			Phone : 0723456161
			<br>
		</p>
<br>
		<p style="font-size=16px">
			<strong style="font-weight=bold">Contact: tennis@timisoara.open</strong>
			<br>
			Suggestions, Inquiries, etc.
			<br>
		</p>
		<br>
		<p style="font-size=16px">
			<strong style="font-weight=bold">Where will you find us?</strong>
			<br>
			Str. Păunescu Podeanu nr.2, Timisoara
			<br>
		</p>

	</div>
	<br>

	<div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 45.74322979999999, lng: 21.248171500000012};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 17,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyKjvry6jdm872HgRIVCi_0zJm8uI9EuY&callback=initMap">
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
