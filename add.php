<?php 

require 'db/connect.php';

if (isset($_POST['send'])) {
    $ma_hoa = $_POST['ma_hoa'];
    $ten_hoa = $_POST['ten_hoa'];
    $hinh_anh = $_POST['hinh_anh'];
    $xuat_xu = $_POST['xuat_xu'];
    $y_nghia = $_POST['y_nghia'];

    if (!empty($ma_hoa) && !empty($ten_hoa) && !empty($hinh_anh) && !empty($xuat_xu) && !empty($y_nghia)) {
        $sql = "INSERT INTO `hoa`(`ma_hoa`, `ten_hoa`, `hinh_anh`, `xuat_xu`, `y_nghia`) VALUES ('$ma_hoa', '$ten_hoa', '$hinh_anh', '$xuat_xu', '$y_nghia')";

        if($conn->query($sql) === true){
            header('location: http://localhost:3000/index.php/');
        }else {
            echo "lỗi {$sql}".$conn->error;
        }
    }else {
        echo "<h2 style='margin:10px 0;text-align:center;color:red;'>Bạn cần điền đầy đủ thông tin</h2>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="ma_hoa">Mã hoa:</label>
                <input type="text" class="form-control" name="ma_hoa" id="ma_hoa">
            </div>
            <div class="form-group">
                <label for="ten_hoa">Tên hoa:</label>
                <input type="text" class="form-control" name="ten_hoa" id="ten_hoa">
            </div>
            <div class="form-group">
                <label for="hinh_anh">Hình ảnh:</label>
                <input type="file" class="form-control" name="hinh_anh" id="hinh_anh">
            </div>
            <div class="form-group">
                <label for="xuat_xu">Xuất xứ:</label>
                <input type="text" class="form-control" name="xuat_xu" id="xuat_xu">
            </div>
            <div class="form-group">
                <label for="y_nghia">Ý nghĩa:</label>
                <input type="text" class="form-control" name="y_nghia" id="y_nghia">
            </div>
            <button type="submit" name="send" class="btn btn-default">Thêm</button>
        </form>
    </div>
    <a style="text-decoration: none;font-size: 20px;color: black;" href="index.php">Quay lại dữ liệu</a>
</body>
</html>