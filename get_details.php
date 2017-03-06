<?php
include("includes/functions.php");
$otherID=$_POST['otherID'];
$familyID=$_POST['familyID'];
$dbhost='localhost';
$dbuser='root';$dbpass="atulit";
$dbname="fs_".$familyID ;
$connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$info=getinfo($connection,$otherID);
echo $info['firstname']." ".$info['lastname'];
?>