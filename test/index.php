<?php

//// Hàm Kết Nối Database
function ConnectDB()
{
    // Gọi tới biến toàn cục $conn
    //global $conn;
    
    // Database name
    $database_name = "tbl_tudien.db";

    // Database Connection
    $db = new SQLite3($database_name);

    // Create Table "bang_tudien" into Database if not exists 
    // Tạo Bảng "bang_tudien" vào Cơ sở dữ liệu nếu không tồn tại
    $query = "CREATE TABLE IF NOT EXISTS tbl_tudien (td_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, td_tv STRING, td_ts STRING, td_mt STRING, td_loai STRING, td_chude STRING, td_creat STRING, td_update STRING, td_ta STRING)";
    $db->exec($query);

    // Makes query with td-id
$query = "SELECT td_id, * FROM tbl_tudien ORDER BY td_id DESC";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

 return $result;
 
 }




$result = ConnectDB();
?>


<?php
while ($row = $result->fetchArray()) {
?>
           <hr>
            <tr>
                <!--td class="d-none" display="hide"><?php
    echo $row['td_id'];
?></td-->

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
        echo "<pre class='alert alert-success'>" . $row['td_mt'] . "</pre>";
    }
?></td>
                
                <td ><button class="btn btn-primary" ><?php
    echo $row['td_loai'];
?></button></td>
<td><?php
    echo $row['td_chude'];
?></td><td><?php
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
?>" class="btn btn-success m-1 btn-sm">Search</a> |
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
            </tr>
            <?php
}
?>