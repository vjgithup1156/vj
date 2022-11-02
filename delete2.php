<?php 
include 'dbs.php';

$sql = "Delete from `datails` where id='$_POST[id]'";
if($dbs->query($sql)){
    echo 1;
} else {
    echo 0;
    
}


?>