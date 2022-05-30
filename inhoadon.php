<?php
session_start();
include 'ketnoi.php';
$MaHD=$_GET['MaHD'];
$sql="select * from hoadon where MaHD = $MaHD";
$thucthi=mysqli_query($conn,$sql);
$dulieu = mysqli_fetch_array($thucthi);
$idkhachhang = $dulieu['IDKhachhang'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style-homeuser-2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hóa Đơn</title>
</head>
<style>
    .size_container {
        margin-top: 20px;
        border: double 5px black;
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
        
        padding: 5px 0 5px 20px;
        margin: 20px 0px;
        border-top: 1px solid black;
        border-bottom: 1px solid black;
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
        background-color: rgb(50, 50, 50);
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
        margin-left: 70%;
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
</style>
<body>
    <div class="container">
        <div class="size_container">
            <div class="bill-sporter">
                <div class="row bill-sporter-header">
                    <div class="col-4 bill-sporter-header-img">
                        <img src="https://www.sporter.vn/wp-content/uploads/2017/05/logo.png">
                    </div>
                    <div class="col-6">
                        <h1 class="bill-sporter-header-heading">HÓA ĐƠN BÁN HÀNG</h1>
                        <div class="bill-sporter-header-sub">Bản thể hiện của hóa đơn điện tử</div>
                        <div class="bill-sporter-header-date">Ngày Mua Hàng: <?php echo $dulieu['NgayDatHang'] ?></div>
                    </div>
                    <div class="col-2">
                        <div class="denominator">Mẫu số: <i>01GTKT0/001</i></div>
                        <div class="symbol">Ký hiệu: HH/20E</div>
                        <div>Số: 11HQ</div>
                    </div>
                </div>
            </div>

            <div class="row bill-sporter-info-admin">
                <div class="col-3">
                    <div class="bill-sporter-info-sp">Đơn vị bán:</div>
                    <div class="bill-sporter-info-tax">Mã số thuế:</div>
                    <div class="bill-sporter-info-address">Địa chỉ:</div>
                    <div class="bill-sporter-info-tel">Điện Thoại:</div>
                </div>
                <div class="col-9">
                    <div> CTY TNHH THỂ THAO SPORTER</div>
                    <div> 0 1 0 7 4 0 6 9 7 2</div>
                    <div> 17 Đ. Kim Giang, Kim Giang, Thanh Trì, Hà Nội, Việt Nam</div>
                    <div> 0299 8888 999</div>
                </div>
            </div>
<?php
$sql = "select * from hoadon where IDKhachhang = $idkhachhang";
$thucthi = mysqli_query($conn,$sql);
        echo'   <div class="row bill-sporter-info-admin">
                <div class="col-3">
                    <div>Mã đơn hàng: </div>
                    <div class="bill-sporter-info-sp">Người mua hàng: </div>
                    <div class="bill-sporter-info-tax">Địa chỉ nhận hàng: </div>
                    <div class="bill-sporter-info-address">Số điện thoại: </div>
                    <div class="bill-sporter-info-address">Email: </div>
                    <div class="bill-sporter-info-tel">Lưu ý: </div>
                </div>
                <div class="col-9">
                    <div>'.$dulieu['MaHD'].'</div>
                    <div>'.$dulieu['Ten'].'</div>
                    <div>'.$dulieu['DiaChi'].'</div>
                    <div>'.$dulieu['SoDienThoai'].'</div>
                    <div>'.$dulieu['Email'].'</div>
                    <div>'.$dulieu['GhiChu'].'</div>
                </div>
            </div>

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
                            <b>'.$value['Gia'].'đ</b>
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
                <div class="sum-label">Tổng Tiền Thanh Toán:</div>
                <div class="cart-total">'.number_format($dulieu['TongTien'], 0, '.', '.').'đ</div>  
            </div>';
            ?>   
            <div class="row mt-30">
                <div class="col-6 col-md-">
                    <h4 class="bill-sporter-footer">Người mua hàng</h4>
                    <i class="bill-sporter-footer-i">(Ký, ghi rõ họ, tên)</i>
                </div>
                <div class="col-6">
                    <h4 class="bill-sporter-footer">Người bán hàng</h4>
                    <i class="bill-sporter-footer-i">(Ký, ghi rõ họ, tên)</i>
                </div>
            </div>  
            <div class="bill-sporter-footer-i">(Cần kiểm tra, đối chiếu khi lập, giao, nhận hóa đơn)</d>
        </div>

        </div>
    </div>
</body>
</html>