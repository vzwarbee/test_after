<?php

$id = $_GET['id'];
$ma_hoa = $_POST['ma_hoa'];
$ten_hoa = $_POST['ten_hoa'];
$hinh_anh = $_POST['hinh_anh'];
$xuat_xu = $_POST['xuat_xu'];
$y_nghia = $_POST['y_nghia'];

require 'db/connect.php';

$sql = "UPDATE hoa SET ma_hoa = '$ma_hoa', ten_hoa = '$ten_hoa', hinh_anh = '$hinh_anh', xuat_xu = '$xuat_xu', y_nghia = '$y_nghia' WHERE id = $id";
$result = $conn->query($sql);

if($result) {
    header('location: http://localhost:3000/index.php');
    // echo 'sửa thành công';
}else{
    echo 'Sửa không thành công';
}

?>