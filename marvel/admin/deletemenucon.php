<?php
require 'connectdb.php';
    $idmenucon=$_GET['idmenucon'];
    $query='DELETE FROM menu_con WHERE id_menu_con="'.$idmenu.'"';
    $result=mysqli_query($conn,$query);
    if(!$result) echo 'Không thể xoá đối tượng này!'; 
    else  header('location:menucon.php');

?>