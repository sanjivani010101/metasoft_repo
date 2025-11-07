

<?php
$servername = "localhost";
$username = "metasoft10_metasoft";
$password = "SRRTp#fuRd4w";
$dbname = "metasoft10_metasoft";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
