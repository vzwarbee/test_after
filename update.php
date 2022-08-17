<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sửa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <?php 

            require 'db/connect.php';

            $id = $_GET['id'];
            $sql = "SELECT * FROM hoa WHERE id = $id";
            $result = $conn->query($sql)->fetch_assoc();

            echo "<form action='http://http://localhost:3000/xu_ly_update.php/?id=".$id."' method='post'>
                    <div class='form-group'>
                        <label for='ma_hoa'>Mã hoa:</label>
                        <input type='text' class='form-control' name='ma_hoa' id='ma_hoa' placeholder='".$result['ma_hoa']."'>
                    </div>
                    <div class='form-group'>
                        <label for='ten_hoa'>Tên hoa:</label>
                        <input type='text' class='form-control' name='ten_hoa' id='ten_hoa' placeholder='".$result['ten_hoa']."'>
                    </div>
                    <div class='form-group'>
                        <label for='hinh_anh'>Hình ảnh:</label>
                        <input type='file' class='form-control' name='hinh_anh' id='hinh_anh' placeholder='".$result['hinh_anh']."'>
                    </div>
                    <div class='form-group'>
                        <label for='xuat_xu'>Xuất xứ:</label>
                        <input type='text' class='form-control' name='xuat_xu' id='xuat_xu' placeholder='".$result['xuat_xu']."'>
                    </div>
                    <div class='form-group'>
                        <label for='y_nghia'>Ý nghĩa:</label>
                        <input type='text' class='form-control' name='y_nghia' id='y_nghia' placeholder='".$result['y_nghia']."'>
                    </div>
                    <button type='submit' name='send' class='btn btn-default'>Sửa</button>
                </form>";    
        ?>
    </div>
    <a style="text-decoration: none;font-size: 20px;color: black;" href="index.php">Quay lại dữ liệu</a>
</body>
</html>