<?php 

include 'dbs.php';


echo '<tr>
<th>collegecode</th>
<th>student</th>
<th>degree</th>
<th>email</th>
<th>password</th>
<th>action</th>
</tr>';

$sql = "SELECT * FROM `datails`";
$result = $dbs->query($sql);
while($row = $result->fetch_assoc()){

    echo '<tr id="'.$row['id'].'">
    <td>'.$row['collegecode'].'</td>
    <td>'.$row['student'].'</td>
    <td>'.$row['degree'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['password'].'</td>
    <td>
        <button class="btn btn-info edit" data-id="'.$row['id'].'">Edit</button>
        <button class="btn btn-warning delete" data-id="'.$row['id'].'">Delete</button>
    </td>
</tr>';
}


?>