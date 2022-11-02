<?php 
include 'dbs.php';

print_r($_POST);

if(isset($_POST['collegecode'])){
    extract($_POST);

    $sql = "update `datails` set `collegecode`='$collegecode',`student`='$student',`degree`='$degree',`email`='$email',`password`='$password' where id='$id'";
    if($dbs->query($sql)){
        echo "Data updated";
    } else {
        echo "Data Not updated";
    }
}


?>