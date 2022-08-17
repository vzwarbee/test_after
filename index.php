<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        table {
            margin: 0 auto;
            margin-top: 50px;
        }
        tr, td, th {
            border: 1px solid #333;
            padding: 20px;
        }
        i {
            color: #333;
            font-size: 18px;
        }
        tr td:nth-child(8) i{
            color: red ;
        }
        form #add {
            display: block;
            font-size: 20px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 0 10px #9999;
            background: #fffbd5;
            text-align: center;
            text-transform: uppercase;
            margin: 0 auto;
            margin-top: 20px;
            text-decoration: none;
            color: red;
        }
        img {
            display: block;
            width: 100px;
            height: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Mã hoa</th>
                    <th>Tên hoa</th>
                    <th>Hình ảnh</th>
                    <th>Xuất xứ</th>
                    <th>Ý nghĩa</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                <?php 
                    require 'db/connect.php';

                    $sql = "SELECT * FROM hoa";
                    $result = $conn-> query($sql);

                    while ($row = $result->fetch_assoc()){
                        $stt = 1;
                        echo 
                            "<tr>
                                <td>".$stt++."</td>
                                <td>".$row['ma_hoa']."</td>
                                <td>".$row['ten_hoa']."</td>
                                <td><img src='images/".$row['hinh_anh']."'></td>
                                <td>".$row['xuat_xu']."</td>
                                <td>".$row['y_nghia']."</td>
                                <td><a href='http://localhost:3000/update.php/?id=".$row['id']."'><i class='fa-solid fa-wrench'></i></a></td>
                                <td><a href='http://localhost:3000/delete.php/?id=".$row['id']."'><i class='fa-solid fa-square-minus'></i></a></td>
                            </tr>";
                    }
                
                ?>
            </table>
            <a id="add" href="add.php">Thêm</a>
        </form>
    </div>
    <script></script>
</body>
</html>