<?php 

include 'dbs.php';

// print_r($_POST);

if(isset($_POST['collegecode'])){
    extract($_POST);

    $sql = "INSERT INTO `datails` (`collegecode`, `student`, `degree`, `email`, `password`) VALUES ('$collegecode','$student','$degree','$email','$password')";

    if($dbs->query($sql)){
        echo  "Data inserted";
    }
    else{
        echo "data not inserted";
    }

}

?>