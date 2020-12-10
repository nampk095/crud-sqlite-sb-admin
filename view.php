<?php

// Includs database connection
include "db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 

$id = $_GET['id']; // rowid from url
// Prepar the query to get the row data with rowid
$query = "SELECT td_id, * FROM tbl_tudien WHERE td_id=$id";
$result = $db->query($query);
$data = $result->fetchArray(); // set the row in $data
?>


<?php
include "inc/topbar.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">View Page</h1>

					    <div class="VIEW p-2 m-2 text-center">
								<div>
								<div class="form-group text-center border-bottom-danger">
								<small>id </small></br> <?php echo $id;?>
							</div>
								<div class="form-group text-center border-bottom-success">
									<small>Tiếng Việt</small></br>
									<?php echo $data['td_tv'];?>
								</div>
								<div class="form-group border-bottom-info">
									<small for="xxx">Tiếng Slovak</small></br>
									<?php echo $data['td_ts'];?>
								</div>
								<div class="form-group alert alert-info">
									<small for="xxx">Mô tả/ghi chú</small></br>
									<?php echo $data['td_mt'];?>
								</div>

								<div class="form-group alert alert-success">
									<small for="xxx">Loại</small></br>
									<?php echo $data['td_loai'];?>
								</div>
								<div class="form-group alert alert-info">
									<small for="xxx">Chủ đề</small></br>
									<?php echo $data['td_chude'];?>
								</div>
								<div class="form-group alert alert-default">
									<small for="xxx">Created Time</small></br>
									<?php echo $data['td_creat'];?>
								</div>
								<div class="form-group alert alert-info">
									<small for="xxx">Time Update</small></br>
									<?php echo $data['td_update'];?>
								</div>
								<div class="form-group alert alert-info">
									<small for="xxx">Tiếng Anh</small></br>
									<?php echo $data['td_ta'];?>
								</div>

							</div>
						</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
<div class="container text-center my-3 " >
	<a class="btn btn-light" href="index.php">Back Home</a>
	<button onclick=" window.history.back();" class="btn btn-primary" href="index.php">Back History  window.history.back();</button>


</div>


<?php
include "inc/footer.php";
?> 