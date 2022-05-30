<?php
session_start();
include 'ketnoi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style-homeuser-2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./CSS/style-homeuser-2.css">
    <link rel="stylesheet" href="./CSS/call.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script language="javascript" src="./main.js"></script>
    <title>Hóa Đơn</title>
</head>
<style>
     body{
        padding-top: 15%;
    }
    .size_container {
        margin-top: 20px;
        border-top: 1px solid black;
        /* border-bottom: 1px solid black; */
        overflow: hidden;   
    }
    .bill-sporter-header {
        padding-left: 20px;
    }
    .bill-sporter-header-img {
        margin-top: 10px;
        width: 288px;
        height: 145px;
        border: solid 3px black;
    }
    .bill-sporter-header-img>img {
        position: relative;
        top: 25%;
        left: 0;    
    }
    .bill-sporter-header-heading {
        font-size: 3rem;
    }
    .bill-sporter-header-sub {
        font-style: italic;
        font-size: 1.7rem;
        padding-top: 4px;
        padding-bottom: 10px;
    }
    .col-6 {
        text-align: center;
        margin-top: 40px;
    }
    .bill-sporter-header-date {
        font-size: 2rem;
    }
    .col-2 {
        margin-top: 40px;
        font-size: 1.8rem;
    }
    .bill-sporter-info-admin {
        
        padding: 5px 0 5px 0px;
        font-size: 2rem;
    }
    .bill-sporter-info-admin span {
        font-weight: 500;
        margin-left: 20px;
    }
    .col-9 {
        font-weight: 500;
        margin-left: -20px
    }
    .table th {
        background-color: var(--primary-color);
        color: white;
        font-size: 2rem;
    }
    .table td {
        font-size: 1.8rem;
    }
    .label-cart-index {
        text-align: center;
    }
    .label-cart>td>b {
        font-weight: 400;
    }
    .cart-img {
        width: 100px;
    }

    .sum-cart {
        margin-left: 67%;
        display: flex;
        font-size: 2rem;
        font-weight: 500;
    }
    .cart-total {
        color: var(--primary-color);
        padding-left: 5px;  
    }
    .bill-sporter-footer {
        font-size: 2.5rem;
        font-weight: 500;
    }
    .bill-sporter-footer-i {
        font-size: 1.6rem;
    }
    .mt-30 {
        margin-bottom: 130px;
    }
    .bill-sporter-footer-i {
        display: flex;
        justify-content: center;
        font-size: 1.8rem;
        font-style: italic;
    }
    .heading_bill {
        display: flex;
        text-align: center;
        justify-content: center;
        color: var(--primary-color);
        margin-top: -57px;
        font-weight: 700;
    }
    .cart-img {
        width: 100px;
    }
    .sum-cart-printf {
        text-decoration: none;
        color: black;
        padding-left: 44px;
    }
    .sum-cart-printf:hover {
        color: black;
        opacity: 0.8;
    }
    .fa-print {
        padding-right: 3px;
    }
</style>
<body>
<header class="header">
        <div class="grid">
            <nav class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                        SPORTER.VN: Quần áo thể thao chính hãng
                    </li>
                </ul>

                <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-user">
                        <img src="./Img/logo user.jpg" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name">
                        <?php
                            if($_SESSION['TenDN'] !="")
                            {
                                echo $_SESSION['TenDN'];
                            }
                        ?>
                        </span>
                    </li>

                    <li class="header__navbar-item">
                        <a href="dangxuatadmin.php" class="header__navbar-item-link">
                            <i class="header__navbar-icon fas fa-sign-out-alt"></i>
                            Đăng xuất
                        </a>
                    </li>
                </ul>
            </nav> 
            <!-- Header With Search  -->
            <div class="header-with-search">
                <div class="header__logo">
                    <a href="themspadmin.php" class="header__logo-link">
                        <img src="https://www.sporter.vn/wp-content/uploads/2017/05/logo.png" class="header__logo-img" alt="Hệ Thống Bán Lẻ Đồ Thể Thao Sporter.vn">
                    </a>
                </div>
                <form class="header__search search" action="timkiemadmin.php" method="POST">
                    <div class="header__search-input-wrap">
                        <input type="text" name="tukhoa" class="header__search-input" placeholder="Nhập để tìm kiếm hóa đơn">
                    </div>
                    <button type="submit" name="timkiemadmin" class="header__search-btn">
                        <i class="header__search-btn-icon fas fa-search"></i>
                    </button>
                </form>
                <!-- Cart Layout -->
                <div class="header__cart">
                    <div class="header__cart-wrap">
                        <a href="hoadonadmin.php">
                            <i class="header__cart-icon fas fa-receipt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    <h1 class="heading_bill">Hóa đơn</h1>
<?php
    if (isset($_POST['timkiemadmin'])) {
        $_tukhoa = $_POST['tukhoa'];
        $sql = "select * from hoadon where (MaHD like '%".$_tukhoa."%') OR (IDKhachHang like '%".$_tukhoa."%') OR (Ten like '%".$_tukhoa."%')";
        $thucthi = mysqli_query($conn,$sql);
        if(mysqli_num_rows($thucthi)<=0){
            echo ' <div><h4 class="home-product-item__name">Không có hóa đơn cần tìm</h4></div>';
        }
        while ($dulieu = mysqli_fetch_array($thucthi)) {
            echo' <div class="size_container">
        
                   <div class="row bill-sporter-info-admin"> 
                        <div class="col-3">
                            <div>Mã đơn hàng: </div>
                            <div class="bill-sporter-info-sp">Người mua hàng: </div>
                            <div class="bill-sporter-info-tax">Địa chỉ nhận hàng: </div>
                            <div>Ngày đặt hàng: </div>
                            <div class="bill-sporter-info-address">Số điện thoại: </div>
                            <div class="bill-sporter-info-address">Email: </div>
                            <div>Lưu ý: </div>
                        </div>
                        <div class="col-9">
                            <div>'.$dulieu['MaHD'].'</div>
                            <div>'.$dulieu['Ten'].'</div>
                            <div>'.$dulieu['DiaChi'].'</div>
                            <div>'.$dulieu['NgayDatHang'].'</div>
                            <div>'.$dulieu['SoDienThoai'].'</div>
                            <div>'.$dulieu['Email'].'</div>
                            <div>'.$dulieu['GhiChu'].'</div>
                        </div>
                    </div>';
                    echo'
                    <table class="table">
                        <thead>
                            <tr class="label-cart">
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Size</th>
                                <th>Số lượng</th>
                                <th>Đơn giá</th>
                                <th>Thành Tiền</th>                           
                            </tr>
                        </thead>';
                        $mahd = $dulieu['MaHD'];
                        $sql1 = "select * from chitiethoadon,sanpham where MaHD = $mahd and chitiethoadon.IDSP=sanpham.IDSP";
                        $thucthi1 = mysqli_query($conn,$sql1);
                        $stt=0;
                        while ($value = mysqli_fetch_array($thucthi1)) {
                            $stt +=1;
                            echo'
                        <tbody>
                            <tr class="label-cart">
                                <td>
                                    <b class="label-cart-index">'.$stt.'</b>
                                </td>
                                <td>
                                    <b>'.$value['TenSP'].'</b>
                                </td>
                                <td>
                                    <b>'.$value['Size'].'</b>                                  
                                </td>
                                <td>
                                    <b>'.$value['SoLuong'].'</b>
                                </td>
                                <td>
                                    <b>'.number_format($value['Gia'], 0, '.', '.').'đ</b>
                                </td>
                                <td>
                                    <b>'.number_format($value['Gia'] * $value['SoLuong'], 0, '.', '.').'đ</b>
                                </td>
                            </tr>
                        </tbody>';
                    }
                    echo'
                    </table>
                        
                    <div class="sum-cart">
                        <div class="sum-label">Tổng Tiền:</div>
                        <div class="cart-total">'.number_format($dulieu['TongTien'], 0, '.', '.').'đ</div>  
                        <a class = "sum-cart-printf" href="inhoadon.php?MaHD='.$dulieu['MaHD'].'"><i class="fas fa-print">In Hóa Đơn</i></a>
                    </div>
                </div>';
    }
}
    ?>
    </div>
</body>
</html>