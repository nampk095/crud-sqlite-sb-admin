<?php

// Includs database connection
include "db_connect.php";

$id = $_GET['id']; // rowid from url

// Prepar the deleting query according to rowid
$query = "DELETE FROM tbl_tudien WHERE td_id=$id";

// Run the query to delete record
if( $db->query($query) ){
	$message = "Record is deleted successfully.";
    
    header('Location: index.php');
exit;
}else {
	$message = "Sorry, Record is not deleted.";
}

echo $message;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data List</title>

  <meta charset="utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   <!-- Argon CSS 
  <link rel="stylesheet" href="https://demos.creative-tim.com/argon-dashboard/assets/css/argon.min.css?v=1.2.0" type="text/css">-->




</head>
<body>

	<?php include 'inc/header.php'?>


<div class="container">
<a href="index.php" class="btn btn-primary aligin-right">Back to Home</a>
</div>

<div class="container">
<a href="list.php" class="btn btn-primary d-flex p-2">Back to List</a>
</div>
</body>
</html>