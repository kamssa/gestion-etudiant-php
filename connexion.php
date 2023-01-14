<?php
$conn = mysqli_connect("localhost", "root", "");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conn,"ETUDIANT_BD") or die("Database connection failed: " . mysqli_connect_error());

?>