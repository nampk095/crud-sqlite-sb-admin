<?php
#sbadmin indexphp

// Includs database connection
include "db_connect.php";

// Makes query with td-id
$query = "SELECT td_id, * FROM tbl_tudien ORDER BY td_id DESC";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

//
$querylastrow = "SELECT td_id, * FROM tbl_tudien ORDER BY td_id DESC";
$resultlastrow = $db->query($querylastrow);

//
$soHangDemDuoc= 0;

// random color background
$a           = array(
    "red",
    "green",
    "blue",
    "yellow",
    "brown"
);
$random_keys = array_rand($a, 5);

?>

<?php
include "inc/topbar.php";
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!--?php
include "inc/cards-component.php";
?-->
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Cơ sở dữ liệu</h1>
                    <p class="mb-4">Đây là cơ sở dữ liệu từ điển cơ bản <a target="_blank"
                            href="https://minhquydesign.com">@minhquydesign</a>.</p>

                            <p class="mb-4"><a href="insert.php" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">TỪ ĐIỂN</span>
                                    </a>
                                    <a href="#" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Split Button Success</span>
                                    </a>
                                </p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Từ điển</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div class="table table-bordered" id="dataTablex">
                                     

                                   <?php
while ($row = $result->fetchArray()) { ++$soHangDemDuoc;
?>
           
            
            <!--code><?php
    echo $row['td_id'];
?></code></br-->

<td><?php
    echo $row['td_ts'];
?></td> - 
                <small><a href="search.php?s=<?php
    echo $row['td_tv'];
?>"><?php
    echo $row['td_tv'];
?></a> </small>
                
                
                </br>
                <td><?php
    if ($row['td_mt']) {
        echo "<pre class='alert alert-success border-left-info mt-2'>" . $row['td_mt'] . "</pre>";
    }
?></td>
                
                <td ><button class="btn btn-sm btn-primaryx border-left-warning bg-gray-100" ><?php
    echo $row['td_loai'];
?></button></td>

<td><button class="btn btn-sm btn-primaryx border-left-info bg-gray-100 mx-2" ><?php
    echo $row['td_chude'];
?></button><td><?php
echo $row['td_creat'];
?></td><td><?php
echo $row['td_update'];
?></td><td><?php
echo $row['td_ta'];
?></td>
 </br>
                <td>
                    <a href="search.php?s=<?php
    echo $row['td_tv'];
?>" class="btn btn-info m-1 btn-sm">Search</a> |
                    <a href="update.php?id=<?php
    echo $row['td_id'];
?>" class="btn btn-primary m-1 btn-sm">Edit</a> | 
                    <a href="view.php?id=<?php
    echo $row['td_id'];
?>" class="btn btn-success m-1 btn-sm">view</a> |
                    
                    <a href="delete.php?id=<?php
    echo $row['td_id'];
?>" onclick="return confirm('Are you sure?');" class="btn btn-default m-1 btn-sm">Delete</a>
                </td>
            
            <hr>
            <?php
}
?>

                                   
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            
<?php
include "inc/footer.php";
?>

