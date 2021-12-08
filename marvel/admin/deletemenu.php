<?php
require 'connectdb.php';
    $idmenu=$_GET['idmenu'];
    $query='DELETE FROM menu WHERE id_menu="'.$idmenu.'"';
    $result=mysqli_query($conn,$query);
    if(!$result) echo 'Không thể xoá!'; 
    else  header('location:menu.php');

?>