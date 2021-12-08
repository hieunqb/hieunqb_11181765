<?php
    require 'connectdb.php';
    $idmenu=$_GET['idmenu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit menu</title>
</head>
<body>
    <form action="" method='POST'>
        <p>Nhập tên menu: <input type="text" name='tenmenu'></p>
        <p><input type="submit" name='editmenu'></p>
    </form>
    <?php
    if(isset($_POST['editmenu']))
    if(!empty($_POST['tenmenu'])){
        $tenmoi=$_POST['tenmenu'];
        $query='UPDATE menu SET ten_menu="'.$tenmoi.'"WHERE id_menu="'.$idmenu.'"';
        echo 'Đã lưu chỉnh sửa';
        $result=mysqli_query($conn,$query);
        header('location:menu.php');
    }
    ?>
</body>
</html>