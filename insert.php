<?php
$message = ""; // initial message 
if( isset($_POST['submit_data']) ){

    // Includs database connection
    include "db_connect.php";

    // Gets the data from post
    $td_tv = $_POST['td_tv'];
    $td_ts = $_POST['td_ts'];
    $td_mt = $_POST['td_mt'];

    $td_loai = $_POST['td_loai'];
    $td_chude = $_POST['td_chude'];
    $td_creat = $_POST['td_creat'];
    $td_update = $_POST['td_update'];
    $td_ta = $_POST['td_ta'];

    // Makes query with post data
    $query = "INSERT INTO tbl_tudien (td_tv, td_ts, td_mt, td_loai, td_chude, td_creat, td_update, td_ta) VALUES ('$td_tv', '$td_ts', '$td_mt', '$td_loai', '$td_chude', '$td_creat', '$td_update', '$td_ta')";
    
    // Executes the query
    // If data inserted then set success message otherwise set error message
    // Here $db comes from "db_connection.php"
    if( $db->exec($query) ){
        $message = "<div class='alert alert-primary' role='alert'>Data is inserted successfully. <a href='index.php' class='btn btn-primary'>Home Index</a></div>";
        // header("location:index.php");
    }else{
        $message = "Sorry, Data is not inserted.";
    }
}

#+++
if( isset($_POST['submit_data_and_backhome']) ){

    // Includs database connection
    include "db_connect.php";
   
    $td_tv = $_POST['td_tv'];
    $td_ts = $_POST['td_ts'];
    $td_mt = $_POST['td_mt'];

    $td_loai = $_POST['td_loai'];
    $td_chude = $_POST['td_chude'];
    $td_creat = $_POST['td_creat'];
    $td_update = $_POST['td_update'];
    $td_ta = $_POST['td_ta'];

    // Makes query with post data
    $query = "INSERT INTO tbl_tudien (td_tv, td_ts, td_mt, td_loai, td_chude, td_creat, td_update, td_ta) VALUES ('$td_tv', '$td_ts', '$td_mt', '$td_loai', '$td_chude', '$td_creat', '$td_update', '$td_ta')";
    
    // Executes the query
    // If data inserted then set success message otherwise set error message
    // Here $db comes from "db_connection.php"
    if( $db->exec($query) ){
        $message = "<div class='alert alert-primary' role='alert'>Data is inserted successfully. <a href='index.php' class='btn btn-primary'>Home Index</a></div>";
        header("location:index.php");
    }else{
        $message = "Sorry, Data is not inserted.";
    }
}

?>


<?php
include "inc/topbar.php";
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Creat/Insert Data</h1>




                    <!-- showing the message here-->
                    <div><?php echo $message;?></div>

                    <table class="table table-responsive" >
                        <form action="insert.php" method="post">
                            <div class="form-group">
                            <label for="xxx">Tiếng Việt*</label>
                            <input name="td_tv" type="text" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                    
                            <div class="form-group">
                            <label for="xxx">Tiếng Sovak*</label>
                            <input name="td_ts" type="text" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                            <label for="xxx">Mô tả/ ghi chú</label>
                            <textarea name="td_mt"    class="form-control" rows="3"></textarea>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>


                            <!--div class="form-group">
                            <label for="xxx">td_loai*</label>
                            <input name="td_loai" type="text" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div-->

                            <div class="form-group">
    <label for="x">Loại td_loai</label>
    <select class="form-control"  name="td_loai" id="exampleFormControlSelect1">
    <option  value=""></option>
      <option  value="Từ">Từ</option>
      <option  value="câu">Câu</option>
      <option  value="Cụm từ">Cụm từ</option>
      <option  value="Danh từ">Danh từ</option>
      <option  value="Động từ">Động từ</option>
      <option  value="Trạng từ">Trạng từ</option>

      
    </select>
  </div>


                            <!--div class="form-group">
                            <label for="xxx">td_chude</label>
                            <input name="td_chude" type="text" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div-->

                            <div class="form-group">
    <label for="x">td_chude</label>
    <select name="td_chude"  class="form-control" id="exampleFormControlSelect1">
    <option  value=""></option>
      <option  value="Nail">Nail</option>
      <option  value="Cuộc sống">Cuộc sống</option>
      <option  value="Cơ bản">Cơ bản</option>
      <option  value="Nâng cao">Nâng cao</option>
      
    </select>
  </div>

                            <div class="form-group">
                            <label for="xxx">Ngày tạo td_creat</label>
                            <input name="td_creat" type="text" class="form-control alert-warning" value="<?php echo date("Y-m-d h:i:s A"); ?>" readonly>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                            <label for="xxx">Ngày cập nhật td_update</label>
                            <input name="td_update" type="text" class="form-control alert-danger" readonly>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                            <label for="xxx">Từng vựng tiếng Anh td_ta</label>
                            <input name="td_ta" type="text" class="form-control">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>


                            
                            <button name="submit_data" type="submit" class="btn btn-sm btn-primary text-center m-2">Submit And Return</button>
                        
                            <button name="submit_data_and_backhome" type="submit" class="btn btn-sm btn-primary m-2">Submit Data And Backhome</button>
                            
                        
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