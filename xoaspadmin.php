<?php
session_start();
include 'ketnoi.php';
	$IDSP = $_GET['IDSP'];
	$sql="delete from sanpham where IDSP=$IDSP";
    if(mysqli_query($conn,$sql)){
        mysqli_query($conn,$sql);
        echo '<script>alert("Xóa thành công")</script>';
        echo '<script>window.location.href="themspadmin.php"</script>'; 
    }
    else{
        echo '<script>alert("Không thể xóa sản phẩm do có trong hóa đơn")</script>';
        echo '<script>window.location.href="themspadmin.php"</script>';
    }
?>