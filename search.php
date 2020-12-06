<?php

// Includs database connection
include "db_connect.php";


$ss=$_GET['s'];




// Makes query with rowid
$query = "SELECT rowid, * FROM tbl_tudien WHERE td_tv  LIKE '%$ss%'";

// Run the query and set query result in $result
// Here $db comes from db_connection.php
$result = $db->query($query);

//var_dump($result)
?>

<?php
include "inc/topbar.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>


						<table class="table table-sm table-responsive table-striped table-hover">
								    <caption>List of data by id</caption>
								    <thead>
									<tr>
									    <th>ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Email2</th>
										<th>Action</th>
									</tr>
									</thead>
									<tbody>
									<?php while($row = $result->fetchArray()) {?>
									<tr>
									    <td><?php echo $row['td_id'];?></td>
										<td><a href="search.php?s=<?php echo $row['td_tv'];?>"><?php echo $row['td_tv'];?></a> </td>
										<td><?php echo $row['td_ts'];?></td>
										<td><pre class="alert alert-success" style="font-family:Roboto"><?php echo $row['td_mt'];?></pre></td>
										<td>
											<a href="view.php?id=<?php echo $row['td_id'];?>">View</a> | 
											<a href="update.php?id=<?php echo $row['td_id'];?>">Edit</a> | 
											<a href="delete.php?id=<?php echo $row['td_id'];?>" onclick="return confirm('Are you sure?');">Delete</a>
										</td>
									</tr>
									<?php } ?>
									</tbody>
								</table>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
<?php
include "inc/footer.php";
?> 