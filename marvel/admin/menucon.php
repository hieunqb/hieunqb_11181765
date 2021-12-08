<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu con</title>
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
    <div><h1>Danh sách menu con</h1></div>
    <table>
        <tr>
            <th>Mã menu con</th>
            <th>Tên menu con</th>
            <th>Mã menu</th>
            <th>Thao tác</th>
            
        </tr>
        <?php
            require('connectdb.php');
            $query='SELECT * FROM menu_con';
            $result=mysqli_query($conn,$query);
            //$n=mysqli_num_rows($result);
            //echo ' So khoa da nhap: '. $n;
            while ($row=mysqli_fetch_assoc($result)){
                //var_dump($row);
                echo'<tr>
                <td>'.$row['id_menu_con'].'</td>
                
                <td>'.$row['ten_menu_con'].'</td>
                <td>'.$row['id_menu'].'</td>
                <td><a href="deletemenucon.php?idmenucon='.$row['id_menu_con'].'">Xoá</a>
                <a href="editmenucon.php?idmenucon='.$row['id_menu_con'].'">Sửa</a>
                </td>
                </tr>';
            }
        ?>
    </table>
    <p><a href="addmenucon.php">Thêm menu con</a></p>
    <p><a href="admin.php">Quay về trang chủ</a></p>
</body>
</html>