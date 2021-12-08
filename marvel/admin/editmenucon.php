<?php
    require 'connectdb.php';
    $idmenucon=$_GET['idmenucon'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit menu con</title>
</head>
<body>
    <form action="" method='POST'>
        <p>Nhập tên menu: <input type="text" name='tenmenucon'></p>
        <p><input type="submit" name='editmenucon'></p>
    </form>
    <?php
    if(isset($_POST['editmenucon']))
    if(!empty($_POST['tenmenucon'])){
        $tenmoicon=$_POST['tenmenucon'];
        $query='UPDATE menu_con SET ten_menu_con="'.$tenmoicon.'"WHERE id_menu_con="'.$idmenucon.'"';
        echo 'Đã lưu chỉnh sửa';
        $result=mysqli_query($conn,$query);
        header('location:menucon.php');
    }
    ?>
</body>
</html>