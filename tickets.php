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

	<script >
		function reserveSeats()
		{
			var selectedList = getSelectedList('Reserve Seats');

			if (selectedList) {
				if (confirm('Do you want to reserve selected seat/s ' + selectedList + '?'+' Total price :'+ 5*(selectedList.length/2) + '$')) {
//					document.forms[0].oldStatusCode.value=0;
	//				document.forms[0].newStatusCode.value=1;
//					document.forms[0].selectedSeats.value=selectedList;
					//$_SESSION['selected'] = $selectedList;
	//				document.forms[0].action='bookseats.php';
					document.getElementById("selected-seats-input").value = selectedList;
					document.getElementById("form-tickets").action = "bookseats.php";
					document.getElementById("form-tickets").submit();
				} else {
					clearSelection();
				}
			}
		}

		function getSelectedList(actionSelected) {

					// get selected list
					var obj = document.getElementsByName('seats[]');//elements;
					var selectedList = '';
					for (var i = 0; i < obj.length; i++) {
						if ( obj[i].checked ) {
							selectedList += obj[i].value + ', ';
						}
					}

					// no selection error
					if (selectedList == '') {
						alert('Please select a seat before clicking ' + actionSelected);
						return false;
					} else {
						//alert('Please select a seat before clicking '+selectedList.length + actionSelected);
						return selectedList;
					}

				}
				function clearSelection() {
							var obj = document.forms[0].elements;
							for (var i = 0; i < obj.length; i++) {
								if (obj[i].checked) {
									obj[i].checked = false;
								}
							}
						}

	</script>

</head>
<body >
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




		<?php
				if(isset($_SESSION['u_id']))
				{
					echo '
					<br>
					<table>
						<tr><td width="100%" align="center">
						<form id="form-tickets" action="<?php echo $_SERVER["PHP_SELF"]; ?" method="POST">

						<input type="hidden" name="oldStatusCode" value=""/>
						<input type="hidden" name="newStatusCode" value=""/>
						<input id="selected-seats-input" type="hidden" name="selectedSeats" value=""/>


						</td></tr>
						<tr><td width="100%" align="center">
						<table width="100%"" border="0">
						<tr><td >
						<input type="button" value="Reserve Seats" onclick="reserveSeats()"/>

						</td></tr>
						</table>

						</td></tr>
						<tr><td width="100%" align="center">
						<table width="100%" border="0">
						<tr><td >
						<input type="button" value="Clear Selection" onclick="clearSelection()"/></td>
						</tr>
						</table>
						</td></tr>
						<tr><td width="100%" align="center">';




						include 'includes/dbh.inc.php';
						/* Create and execute query. */
						$query = "SELECT * from seats order by rowId, columnId desc";
						$result = mysqli_query($conn,$query);
						$prevRowId = null;
						$seatColor = null;
						$tableRow = false;
						//echo $result;
						// echo "<table width='100%' border='0' cellpadding='3' cellspacing='3'>";
						echo '<div>';
						while (list($rowId, $columnId, $status, $updatedby) = mysqli_fetch_row($result))
						{
							if ($prevRowId != $rowId) {
								echo '</<div><div>';
								if ($rowId != 'A') {
									//echo "</tr></table></td>";
									//echo "\n</tr>";
								}
								$prevRowId = $rowId;
								//echo "\n<tr><td align='center'><table border='1' cellpadding='8' cellspacing='8'><tr>";
							} else {
								$tableRow = false;
							}
							if ($status == 0) {
								$seatColor = "lightgreen";
							//} else if ($status == 1 && $updatedby == 'user1') {
								//$seatColor = "FFCC99";
							//} else if ($status == 1 && $updatedby == 'user2') {
								//$seatColor = "FFCCFF";
							} else {
								$seatColor = "red";
							}

							//echo "\n<td style='background:$seatColor' align='center'>";
							if ($status == 0 || $status==1) {
								//echo "<input type='checkbox' name='seats[]' value='$rowId$columnId' ></checkbox>";

								if ($rowId >='D' && $rowId<='J' && $columnId >= 4 && $columnId <= 7)
								 {
									 // This fragment is for adding a blank cell which represent the "center aisle"

									 echo "<div style='margin: 2px; background-color: " . $seatColor . ";float: left; width: 55px; height:35px ;text-align: left; visibility:hidden'><input type='checkbox' name='seats[]' value='' />" . ($rowId . $columnId) . "</div>";

								//	echo "<input type='checkbox' name='seats[]' value='$rowId$columnId' style='visibility:hidden'></checkbox>";
							}else {
								if($status == 0 )
								echo "<div style='margin: 2px; background-color: " . $seatColor . ";float: left; width: 55px; height:35px ;text-align: left;'><input type='checkbox' name='seats[]' value='". ($rowId . $columnId) ."'  />" . ($rowId . $columnId) . "</div>";
								else {
									echo "<div style='margin: 2px; background-color: " . $seatColor . ";float: left; width: 55px; height:35px ;text-align: left;'><input type='checkbox' name='seats[]' value='' disabled />" . ($rowId . $columnId) . "</div>";
								}

							}

							}
							//echo "</td>";

						}

						echo '</div>';

						//echo "</tr></table></td>";
						//echo "</tr>";
						//echo "</table>";


						echo '
					</td></tr>
					<tr><td>&nbsp;</td></tr>
					<tr><td width="100%" align="center">
						<table border="1" cellspacing="8" cellpadding="8">
							<tr>
								<td style="background:lightgreen">Available</td>
								<td style="background:red"> Not Available</td>
							</tr>
						</table>



		</form>
		</table>
		<br>
		<br>';

				}else{
					echo '
					<section class="tickets-section">

						<h1 class="meet-the-stars">Get tickets</h1>
						<br>
						<br>
						<br>
						<div class="wrapper">
					<form class="tickets-log" action="includes/signin.inc.php" method="POST">
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
					</form>
					</div>


				</section>';

				}

		?>




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
