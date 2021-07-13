<?php


require('./dbconnect.php');


extract($_POST);


$sql = "INSERT INTO `test2` (`type`, `rooftype`, `tarea`, `barea`, `fspace`, `height`,`type1`, `year`) VALUES ('$type', '$rooftype', '$tarea', '$barea', '$fspace', '$height','$type1', '$year');";


$success = $conn->query($sql);

if ($conn) {
?>
	<script>
		alert("Inserted Succesfull");
	</script>
<?php
	header("location: index3.php");
} else {
?>
	<script>
		alert("NO Connection");
	</script>
<?php
}
$conn->close();
?>
