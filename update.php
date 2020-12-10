<?php
$message = ""; // initial message 

// Includs database connection
include "db_connect.php";

// Updating the table row with submited data according to rowid once form is submited 
if (isset($_POST['submit_data'])) {
    
    
    // Gets the data from post
    //$id     = $_POST['id'];
   // $name   = $_POST['name'];
   // $email  = $_POST['email'];
   // $email2 = $_POST['email2'];
    $td_id = $_POST['td_id'];
    $td_tv = $_POST['td_tv'];
    $td_ts = $_POST['td_ts'];
    $td_mt = $_POST['td_mt'];

    $td_loai = $_POST['td_loai'];
    $td_chude = $_POST['td_chude'];
    $td_creat = $_POST['td_creat'];
    $td_update = $_POST['td_update'];
    $td_ta = $_POST['td_ta'];
    // Makes query with post data
    //$query = "UPDATE tbl_tudien set td_tv='$td_tv', td_ts='$td_ts', td_mt='$td_mt',    td_loai='$td_loai' , td_chude='$td_chude', td_creat='$td_creat', td_update='$td_update', td_ta='$td_ta'   WHERE td_id=$td_id";
    $query  = "UPDATE tbl_tudien set td_tv='$td_tv', td_ts='$td_ts', td_mt='$td_mt', td_loai='$td_loai' , td_chude='$td_chude', td_creat='$td_creat', td_update='$td_update', td_ta='$td_ta' WHERE rowid=$td_id";
    

    // Executes the query
    // If data inserted then set success message otherwise set error message
    // Here $db comes from "db_connection.php"
    if ($db->exec($query)) {
        $message = "<div class='alert alert-primary' role='alert'> Data is updated successfully. <a href='index.php' class='btn btn-primary'>Home Index</a></div>";
        //header("location:index.php");
    } else {
        $message = "Sorry, Data is not updated.";
    }
}

// submit_data_and_backhome
if (isset($_POST['submit_data_and_backhome'])) {
    
    // Gets the data from post
    //$id     = $_POST['id'];
   // $name   = $_POST['name'];
   // $email  = $_POST['email'];
   // $email2 = $_POST['email2'];
   $td_id = $_POST['td_id'];
   $td_tv = $_POST['td_tv'];
   $td_ts = $_POST['td_ts'];
   $td_mt = $_POST['td_mt'];

   $td_loai = $_POST['td_loai'];
   $td_chude = $_POST['td_chude'];
   $td_creat = $_POST['td_creat'];
   $td_update = $_POST['td_update'];
   $td_ta = $_POST['td_ta'];
   // Makes query with post data
   //$query = "UPDATE tbl_tudien set td_tv='$td_tv', td_ts='$td_ts', td_mt='$td_mt',    td_loai='$td_loai' , td_chude='$td_chude', td_creat='$td_creat', td_update='$td_update', td_ta='$td_ta'   WHERE td_id=$td_id";
   $query  = "UPDATE tbl_tudien set td_tv='$td_tv', td_ts='$td_ts', td_mt='$td_mt', td_loai='$td_loai' , td_chude='$td_chude', td_creat='$td_creat', td_update='$td_update', td_ta='$td_ta' WHERE rowid=$td_id";
   

   // Executes the query
   // If data inserted then set success message otherwise set error message
   // Here $db comes from "db_connection.php"
   if ($db->exec($query)) {
       $message = "<div class='alert alert-primary' role='alert'> Data is updated successfully. <a href='index.php' class='btn btn-primary'>Home Index</a></div>";
       header("location:index.php");
   } else {
       $message = "Sorry, Data is not updated.";
   }
}

$td_id     = $_GET['id']; // rowid from url
// Prepar the query to get the row data with rowid
$query  = "SELECT td_id, * FROM tbl_tudien WHERE td_id=$td_id";
$result = $db->query($query);
$data   = $result->fetchArray(); // set the row in $data
?>

<?php
include "inc/topbar.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Edit/Update Page</h1>


				         <table class="table table-responsive table-striped">
							<form action="" method="post">
							<input type="hidden" name="td_id" value="<?php
				echo $td_id;
				?>">
							<div class="form-group">
								<label for="xxx">td_tv</label>
								<input name="td_tv" type="text" value="<?php
				echo $data['td_tv'];
				?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="xxx">td_ts</label>
								<input name="td_ts" type="text" value="<?php
				echo $data['td_ts'];
				?>" class="form-control">
							</div>
							<div class="form-group">
								<label for="xxx">td_mt</label>
								<textarea name="td_mt"   class="form-control alert alert-success" rows="7"><?php
				echo $data['td_mt'];
				?></textarea>
                            </div>

                            

                            <!--div class="form-group">
								<label for="xxx">td_loai</label>
								<textarea name="td_loai"   class="form-control alert alert-success" rows="7"><?php
				echo $data['td_loai'];
				?></textarea>
                            </div-->

                            <div class="form-group">
    <label for="x">Loại</label>
    <select class="form-control  alert-danger"  name="td_loai" id="exampleFormControlSelect1">
    <option  value="<?php echo $data['td_loai']; ?>"><?php echo $data['td_loai']; ?> - curent</option>
      <option  value="Từ">Từ</option>
      <option  value="câu">Câu</option>
      <option  value="Cụm từ">Cụm từ</option>
      
    </select>
  </div>



  <div class="form-group">
    <label for="x">td_chude</label>
    <select name="td_chude"  class="form-control  alert-info" id="exampleFormControlSelect1">
    <option  value=""></option>
      <option  value="1">Nail</option>
      <option  value="Cuộc sống">Cuộc sống</option>
      <option  value="Cơ bản">Cơ bản</option>
      
    </select>
  </div>

                            </div>
                            <div class="form-group">
								<label for="xxx">td_creat</label>
								<input readonly name="td_creat"  value="<?php echo $data['td_creat']; ?>"  class="form-control alert alert-success">
                            </div>
                            <div class="form-group">
								<label for="xxx">td_update</label>
								<input name="td_update"   class="form-control alert alert-success" value="<?php echo date("Y-m-d h:i:s A"); ?>">
                            </div>
                            <div class="form-group">
								<label for="xxx">td_ta</label>
								<textarea name="td_ta"   class="form-control alert alert-success"><?php
				echo $data['td_ta'];
				?></textarea>
                            </div>



							<div class="form-group">
								
								<button name="submit_data" type="submit" class="btn btn-primary"/>Update data</button>
							</div>

							<div class="form-group">
								
								<button name="submit_data_and_backhome" type="submit" class="btn btn-primary"/>Update data and backhome</button>
							</div>
							</form>
						</table>


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