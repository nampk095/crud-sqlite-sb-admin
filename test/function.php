<?php

function ConnectDB()
{
    
    // Database name
    $database_name = "tbl_tudien_demo6.db";

    // Database Connection
    $db = new SQLite3($database_name);

    // Create Table "bang_tudien" into Database if not exists 
    // Tạo Bảng "bang_tudien" vào Cơ sở dữ liệu nếu không tồn tại
    $query = "CREATE TABLE IF NOT EXISTS tbl_tudien (td_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, td_tv STRING, td_ts STRING, td_mt STRING, td_loai STRING, td_chude STRING, td_creat STRING, td_update STRING, td_ta STRING)";
    $db->exec($query);
 
 }

 //// Hàm 
function queryFetchAll()
{
    // Makes query with td-id
$query = "SELECT td_id, * FROM tbl_tudien ORDER BY td_id DESC";

// Run the query and set query result in $result
// Here $db comes from "db_connection.php"
$result = $db->query($query);

 return $result;
 
 }



 
//// Hàm 
function ConnectDBAndFetchAll()
{
    // Gọi tới biến toàn cục $conn
    //global $conn;
    
    // Database name
    $database_name = "tbl_tudien_demo6.db";

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


 


 ?>