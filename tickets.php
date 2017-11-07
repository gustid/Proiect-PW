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
					<br>
					<button type="submit" name="signout" ><a>Sign out</a></button>
			</form>'; ?>

		<?php endif; ?>

	</div>
</header>

<section class="tickets-section">
	<div class="wrapper">

		<?php
				if(isset($_SESSION['u_id']))
				{
					
				}else{
					echo '<form class="tickets-log" action="includes/signin.inc.php" method="POST">
						<br>
						<br>
						<br>
						<input type="text" name="uid" placeholder="Username/e-mail address">
						<br>
						<input type="password" name="password" placeholder="Password">
						<br>
						<button type="submit" name="signin" >Sign in</button>
					</form>
					<form class="tickets-log" action="includes/signup.inc.php" method="POST">
						<input type="text" name="firstname" placeholder="First name">
						<br>
						<input type="text" name="lastname" placeholder="Last name">
						<br>
						<input type="text" name="uid" placeholder="Username">
						<br>
						<input type="text" name="emailaddress" placeholder="Name@example.com">
						<br>
						<input type="password" name="password" placeholder="Password">
						<br>
						<button type="submit" name="submit" >Sign up</button>
					</form>';
				}

		?>



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
