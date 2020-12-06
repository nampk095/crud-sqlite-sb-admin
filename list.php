<?php

// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM bang_tudien ORDER BY rowid asc";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

?>

<?php
include "inc/topbar.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

                    	<div class="table table-sm table-responsive table-striped table-hover">
						   
						    
							
							<?php while($row = $result->fetchArray()) {?>
								<hr>

							    <button class="btn btn-primary btn-sm border">ID <?php echo $row['rowid'];?></button>
								<td><a href="view.php?id=<?php echo $row['rowid'];?>"><?php echo $row['name'];?></a> </td> -
								<td><?php echo $row['email'];?></td>
							</br>
								<td><pre class='alert alert-success border-left-primary mt-2'><?php echo $row['email2'];?></pre></td>
								</br>
								<td>
									<a href="view.php?id=<?php echo $row['rowid'];?>">View</a> | 
									<a href="update.php?id=<?php echo $row['rowid'];?>">Edit</a> | 
									<a href="delete.php?id=<?php echo $row['rowid'];?>" onclick="return confirm('Are you sure?');">Delete</a>
								</td>
							</tr>
							<?php } ?>
							
						</div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
<?php
include "inc/footer.php";
?> 