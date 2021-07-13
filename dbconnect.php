<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "warehouse";


$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
?>
    <script>
        alert("Connection Successfull")
    </script>
<?php
} else {
?>
    <script>
        alert("NO Connection")
    </script>
<?php

}
?>