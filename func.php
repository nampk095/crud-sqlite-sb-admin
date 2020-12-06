<?php
function indexA(){
// Database name
echo  "A";


// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM bang_tudien ORDER BY name ASC";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);


}


?>