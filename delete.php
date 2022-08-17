<?php

require 'db/connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM hoa WHERE id = $id";
$result = $conn->query($sql);

if($result) {
    header('location: http://localhost:3000/index.php');
}else {
    echo 'Xóa không thành công';
}

?>
