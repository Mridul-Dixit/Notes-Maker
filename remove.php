<?php
include "connect.php";
$ID= $_GET["id"];
$deleteQuery="DELETE FROM `notes` WHERE `SNo.`='$ID'";
$ans=mysqli_query($conn,$deleteQuery);
header("location:notes.php");

?>