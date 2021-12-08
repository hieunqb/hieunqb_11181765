<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        h1{
            background-color: pink;
            width: fit-content;
        }
        table,tr,th,td{
            border: 1px solid black;
        }
        th{
            background-color: violet;
            height: 1.5rem;
        }
        
    </style>
</head>
<body>
    <div><h1>Danh sách menu</h1></div>
    <table>
        <tr>
            <th>Mã menu</th>
            <th>Tên menu</th>
            <th>Thao tác</th>
        </tr>
        <?php
            require('connectdb.php');
            $query='SELECT * FROM menu';
            $result=mysqli_query($conn,$query);
           
            while ($row=mysqli_fetch_assoc($result)){
                echo'<tr>
                <td>'.$row['id_menu'].'</td>
                <td>'.$row['ten_menu'].'</td>
                <td><a href="deletemenu.php?idmenu='.$row['id_menu'].'">Xoá</a>
                <a href="editmenu.php?idmenu='.$row['id_menu'].'">Sửa</a>
                </td>
                </tr>';
            }
        ?>
    </table>
    <p><a href="addmenu.php">Thêm menu</a></p>
    <p><a href="admin.php">Quay về trang chủ</a></p>
</body>
</html>