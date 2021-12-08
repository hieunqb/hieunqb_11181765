
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add menu con</title>
</head>
<body>
    <form action="" method="POST">
    <p>Nhập ID menu con: <input type="text" name='idmenucon'></p>
    <p>Nhập tên menu con: <input type="text" name='tenmenucon'></p>
    <p><input type="submit" name='addmenucon'></p>
    </form>
    <?php
        if(isset($_POST['addmenucon']))
        if(!empty($_POST['idmenucon']))
        {
            if(!empty($_POST['tenmenucon']))
            {
                require 'connectdb.php';
                $idmenucon=$_POST['idmenucon'];
                $tenmenucon=$_POST['tenmenucon'];
                $query='INSERT INTO menu_con(id_menu_con,ten_menu_con) VALUES ("'.$idmenucon.'","'.$tenmenucon.'")';
                echo 'Thêm menu con thành công!';
                $result=mysqli_query($conn,$query);
                
            }
            else echo 'Hãy nhập tên Menu con!';
        }
        else echo 'Hãy nhập Mã Menu con!';
    ?>
    <p><a href="menucon.php">Trở về menu con</a></p>
</body>
</html>