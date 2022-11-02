<?php 

$dbs = new mysqli('localhost', 'root', '', 'project');

if ($dbs->connect_errno) {
    echo "Failed to connect to MySQL: (" . $dbs->connect_errno . ") " . $db->connect_error;
}

?>