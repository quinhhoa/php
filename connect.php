<!-- <?php 

     $server = 'localhost';
     $user = 'root';
     $password = '';
     $database = 'taikhoan';
    //  kết nối
    $conn = new mysqLi($server, $user, $password, $database);
    if($conn){
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo 'đã kết nối thành công' ."<br>" ;
    }
    else {
        echo 'kết nối không thành công' ."<br>";
    }
?> -->

<?php
const DB_TYPE = "mysql";
const DB_HOST = "localhost";
const DB_NAME = "curd ";
const USER_NAME = "root";
const USER_PASSWORD = "";
try {
    $connection = new PDO(sprintf("%s:host=%s;dbname=%s", DB_TYPE, DB_HOST, DB_NAME),USER_NAME,USER_PASSWORD);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Kết nối thành công!" ."<br>";
    ?>