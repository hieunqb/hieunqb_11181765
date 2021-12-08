<?php
    $serverName='localhost';
    $username='root';
    $password='';
    $dbName='marvel';
    $conn=mysqli_connect($serverName,$username,$password,$dbName);
    if (!$conn) echo 'Không có kết nối đến dữ liệu';
?>