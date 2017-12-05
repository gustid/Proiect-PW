<?php

session_start();

?>

<html>
<head>
	<title>Tickets</title>
	<style>
		* {
			font-size: 14px;
			font-family: arial;
		}
	</style>
</head>
<body>
<?php include 'includes/dbh.inc.php'; ?>
<center>
<br/>
<br/>
<br/>
<?php

	if (isset($_SESSION['u_id']))
	{
		//$user = $_SERVER['PHP_AUTH_USER'];
	//	echo "string";
//		$newStatusCode = $_POST['newStatusCode'];
//		$oldStatusCode = $_POST['oldStatusCode'];
//    $selectedSeats = $_post['selectedSeats'];
		$selectedSeats = $_POST['selectedSeats'];
	//	echo $selectedSeats;
    $token = strtok($selectedSeats, ",");

    while ($token !== false)
    {
	//		echo $token;
			$thisrowId=$token[0];
		//	echo $thisrowId;
      $thiscolumnId=intval(substr($token,1));
	//		echo $thiscolumnId;

      $sql = sprintf("UPDATE seats SET status=1 , updatedby = %s WHERE rowId = '%s' AND columnId = %s", $_SESSION['u_id'], $thisrowId, $thiscolumnId);

      if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
      } else {
				print '<br />' . $sql . "<br />";
        echo "Error updating record: " . mysqli_error($conn);
      }

      $token = strtok(" ");
    }


    /*foreach($_POST['seats'] AS $seat) {
      $sql = "UPDATE seats SET status=1,updatedby=$_SESSION['u_id'] WHERE rowId=substr($seat, 0, 1),columnId=substr($seat, 1)";

      if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    } */

    echo "<a href='tickets.php'>Go back</a>";
	}
?>
</center>
</body>
</html>
