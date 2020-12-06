<?php
// Database name
$database_name = "tbl_tudien_demo6.db";

// Database Connection
$db = new SQLite3($database_name);

// Create Table "bang_tudien" into Database if not exists 
// Tạo Bảng "bang_tudien" vào Cơ sở dữ liệu nếu không tồn tại
$query = "CREATE TABLE IF NOT EXISTS tbl_tudien (td_id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, td_tv STRING, td_ts STRING, td_mt STRING, td_loai STRING, td_chude STRING, td_creat STRING, td_update STRING, td_ta STRING)";
$db->exec($query);


?>