<?php


require('./dbconnect.php');


extract($_POST);


$sql = "INSERT INTO `test` (`name1`, `name2`, `email`, `number`,`type`,`city`, `text1`, `text2`) VALUES ( '$name1', '$name2', '$email', '$phone','$type','$city', '$text1', '$text2');";


$success = $conn->query($sql);
if ($conn) {
?>
	<script>
		alert("Inserted Succesfull");
	</script>
<?php
	header("location: index2.php");
} else {
?>
	<script>
		alert("NO Connection");
	</script>
<?php
}

// if (!$success) {
//     die("Couldn't enter data: ".$conn->error);
// }
// echo "Thanks for filling the form";

$conn->close();
?>
<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form action="./index2.php">
		<button type="submit" name="submit" class="btn btn-primary">Next</button>
	</form>

</body>

</html> -->