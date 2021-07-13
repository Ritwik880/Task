<?php


require('./dbconnect.php');


extract($_POST);


$sql = "INSERT INTO `test3` (`text`, `type1`, `type2`, `type3`, `type4`, `type5`, `type6`, `type7`) VALUES ('$text', '$type1', '$type2', '$type3', '$type4', '$type5', '$type6', '$type7');";


$success = $conn->query($sql);
if ($conn) {
    ?>
	<script>
		alert("Inserted Succesfull");
	</script>
<?php
	header("location: index4.php");

} else {
?>
    <script>
        alert("NO Connection");
    </script>
<?php
}

$conn->close();
?>
