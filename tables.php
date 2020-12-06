<?php
#sbadmin indexphp

// Includs database connection
include "db_connect.php";

// Makes query with rowid
$query = "SELECT rowid, * FROM bang_tudien ORDER BY name ASC";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

//
$querylastrow = "SELECT rowid, * FROM bang_tudien ORDER BY name ASC";
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

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>email2</th>
                                            <th>action</th>
                                            
                                        </tr>
                                    </thead>
                                     <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>email2</th>
                                            <th>action</th>
                                           
                                        </tr>
                                    </tfoot>
                                     <tbody>

                                   <?php
while ($row = $result->fetchArray()) { ++$soHangDemDuoc;
?>
          
            <tr>
                <td><?php
    echo $row['rowid'];
?></td>
                <th scope="row"><a href="update.php?id=<?php
    echo $row['rowid'];
?>"><?php
    echo $row['name'];
?></a> </th>
                
                <td><?php
    echo $row['email'];
?></td>
                
                <td><?php
    if ($row['email2']) {
        echo "<pre class='alert alert-success border-left-primary'>" . $row['email2'] . "</pre>";
    }
?></pre></td>
                
                <td>
                    <a href="view.php?id=<?php
    echo $row['rowid'];
?>" class="btn btn-success m-1 btn-sm">view</a> |
                    <a href="update.php?id=<?php
    echo $row['rowid'];
?>" class="btn btn-primary m-1 btn-sm">Edit</a> | 
                    <a href="delete.php?id=<?php
    echo $row['rowid'];
?>" onclick="return confirm('Are you sure?');" class="btn btn-default m-1 btn-sm">Delete</a>
                </td>
            </tr>
            <?php
}
?>

                                   
                                </table>
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