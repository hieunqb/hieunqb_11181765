
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add menu</title>
</head>
<body>
    <form action="" method="POST">
    <p>Nhập ID menu: <input type="text" name='idmenu'></p>
    <p>Nhập tên menu: <input type="text" name='tenmenu'></p>
    <p><input type="submit" name='addmenu'></p>
    </form>
    <?php
        if(isset($_POST['addmenu']))
        if(!empty($_POST['idmenu']))
        {
            if(!empty($_POST['tenmenu']))
            {
                require 'connectdb.php';
                $idmenu=$_POST['idmenu'];
                $tenmenu=$_POST['tenmenu'];
                $query='INSERT INTO menu(id_menu,ten_menu) VALUES ("'.$idmenu.'","'.$tenmenu.'")';
                echo 'Thêm menu thành công!';
                $result=mysqli_query($conn,$query);
                
            }
            else echo 'Hãy nhập tên Menu!';
        }
        else echo 'Hãy nhập Mã Menu!';
    ?>
    <p><a href="menu.php">Trở về menu</a></p>
</body>
</html>