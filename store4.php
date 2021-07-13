<?php


require('./dbconnect.php');


extract($_POST);

$fn1 = $_FILES['outside']['name'];
$tm1 = $_FILES['outside']['tmp_name'];
move_uploaded_file($tm1, "image1/" . $fn1);

$fn2 = $_FILES['inside']['name'];
$tm2 = $_FILES['inside']['tmp_name'];
move_uploaded_file($tm2, "image2/" . $fn2);
$sql = "INSERT INTO `test4` ( `text`,`files`,`files2`) VALUES ( '$text','$fn1','$fn2' );";


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