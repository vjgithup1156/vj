<?php 
include 'dbs.php';

$sql = "SELECT * FROM `datails` where id='$_POST[id]'";
$result = $dbs->query($sql);
$row = $result->fetch_assoc();

echo json_encode($row);
?>