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
    <title>Cập Nhật Sporter</title>
    <link rel="icon" href="./IMG/logo_1.jpg" sizes="20x20" type="image/jpg" > 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./CSS/style-homeuser-2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container-mt-50 {
            margin-top: 130px;
        }
        .home-product-item {
            cursor: pointer;
        }
        .next-log-in-p {
            margin-top: 8px;
            font-size: 1.6rem;
            color: black;
            display: inline-block;
        }
        .next-log-in-a {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 1.6rem;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html {
            color: #333;
            font-size: 62.5%;
            font-family: "Open Sans", sans-serif;
        }
        .form {
        height: 100%;
        padding: 32px 24px;
        text-align: center;
        background: #fff;
        background-image: linear-gradient(to right, #99becf, #d2e5e9);
        border-radius: 2px;
        align-self: center;
        margin-left: 16px;
        box-shadow: 0 2px 5px 0 rgba(51, 62, 73, 0.1);
        }
        .form .heading {
        font-size: 2rem;
        }
        .form .desc {
        text-align: center;
        color: #636d77;
        font-size: 1.6rem;
        font-weight: lighter;
        line-height: 2.4rem;
        margin-top: 16px;
        font-weight: 300;
        }

        .form-group {
        display: flex;
        margin-bottom: 16px;
        flex-direction: column;
        }

        .form-label,
        .form-message {
        text-align: left;
        }

        .form-label {
        font-weight: 700;
        padding-bottom: 6px;
        line-height: 1.8rem;
        font-size: 1.4rem;
        }

        .form-control {
        height: 40px;
        padding: 8px 12px;
        border: 1px solid #b3b3b3;
        border-radius: 3px;
        outline: none;
        font-size: 1.4rem;
        }

        .form-control:hover {
        border-color: #1dbfaf;
        }

        .form-group.invalid .form-control {
        border-color: #f33a58;
        }

        .form-group.invalid .form-message {
        color: #f33a58;
        }

        .form-message {
        font-size: 1.2rem;
        line-height: 1.6rem;
        padding: 4px 0 0;
        }

        .form-submit {
        outline: none;
        background-color: var(--primary-color);
        margin-top: 12px;
        padding: 12px 16px;
        font-weight: 600;
        color: #fff;
        border: none;
        width: 100%;
        font-size: 14px;
        border-radius: 8px;
        cursor: pointer;
        }

        .form-submit:hover {
        background-color: #fb5a24;
        }

        .spacer {
        margin-top: 36px;
        }

        .header-log-up {
            width: 1200px;
            margin: 0 auto;
            max-width: 100%;
            position: relative;
        }
        .header-log-up--head {
            display: inline-block;
            font-size: 3rem;
            margin-bottom: 0px;
            margin-left: 10px;
        }
        .body-log-in {
            background-color: #ff5722;
            margin-top: 30px;
            height: 662px;
        }
        .body-log-in-img {
            position: relative;
            height: 200px;
            width: 400px;
            margin: auto;
        }
        .body-log-in-img>img {
            position: absolute;
            top: 15%;
            margin-left: 91px;
        }
        .body-log-in-p {
            margin-top: 150px;
            font-size: 3.5rem;
            color: var(--white-color);
        }
        .form-update-right-img {
            width: 100%;
            height: 100%;
        }
        .home-product-item-1 {
            overflow: hidden;
        }
        .home-product-item__img:hover {
            transform: scale(2);
            transition: 0.5s;
        }
        .home-product-list {
            display: flex;
            flex-wrap: wrap;
        }
        .home-product-item:first-child {
            margin-left: 16px;
        }

        .home-product-item {
            width: 18%;  
        }
        .clother-add {
            margin-left: 16px;
            margin-top: 20px;
        }
        .home-product-item__button {
            display: flex;
            justify-content: space-between;
            margin: 5px 10px;
            font-size: 1.8rem;
            
        }
        .home-product-item__button>button {
            border-radius: 2px;
            border: none;
            background-color: var(--primary-color);
            padding: 0px 30px;
        }
        .home-product-item__button>button:hover {
            background-color: #fb5a24;
        }
        .home-product-item__button a {
            text-decoration: none;
            color: var(--white-color);
        }
        .pagination {
            justify-content: center;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
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
                <form class="header__search search" action="timkiemspadmin.php" method="POST">
                    <div class="header__search-input-wrap">
                        <input type="text" name="tukhoa" class="header__search-input" placeholder="Nhập để tìm kiếm sản phẩm">
                    </div>
                    <button type="submit" name="timkiem" class="header__search-btn">
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

    <div class="container container-mt-50">
        <div class="size_container ">
            <div class="row">
                <div class="col-6 form-update-left">
                    <form action="themspadmin.php" method="POST" class="form" id="" enctype="multipart/form-data">
                        <img src="https://www.sporter.vn/wp-content/uploads/2017/05/logo.png" alt="">
                        <h1 class="">THÊM SẢN PHẨM</h2>

                        <div class="form-group">
                            <label for="" class="form-label">ID Sản Phẩm</label>
                            <input id="fullname" name="idsp" type="text" placeholder="VD: 1" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Tên sản phẩm</label>
                            <input id="" name="tensp" type="text" placeholder="VD: Bộ quần áo Arsenal sân nhà 2021 – 2022" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Giá</label>
                            <input class="form-control" name="gia" min="1" max="999999999" type="number" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Mô tả</label>
                            <input id="" name="mota" type="text" placeholder="" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Hình Ảnh</label>
                            <input type="file" class="form-control" name="image" required="">
                        </div>

                        <button type="submit" name="themsp" class="form-submit">Thêm</button>

<?php 
if(isset($_POST['themsp'])){
    $IDSP = $_POST['idsp'];
    $TenSP = $_POST['tensp'];
    $Gia = $_POST['gia'];
    $MoTa = $_POST['mota'];
    $errors= array();
$file_name = $_FILES['image']['name'];
$file_size = $_FILES['image']['size'];
$file_tmp = $_FILES['image']['tmp_name'];
$file_type = $_FILES['image']['type'];
$file_parts =explode('.',$_FILES['image']['name']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
$image = $_FILES['image']['name'];
$target = "photo/".basename($image);
$check = mysqli_num_rows(mysqli_query($conn, "SELECT * from sanpham where IDSP = '$IDSP'"));
if($check > 0){
    echo '<script language="javascript">alert("Đã có ID Sản phẩm này rồi!");</script>';
}
else{
    $sql = "INSERT INTO sanpham VALUES ('$IDSP','$TenSP','$Gia','$MoTa','$image')";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    echo '<script language="javascript">alert("Đã thêm sản phẩm thành công!");</script>';
    }else{
    echo '<script language="javascript">alert("Thêm sản phẩm thất bại!");</script>';
    }
    }
    // $result = mysqli_query($conn, "SELECT * FROM sanpham");
}

?>
                    </form>
                </div>
                <div class="col-6">
                    <img src="./photo/a1.jpg" alt="" class="form-update-right-img">
                </div>
            </div>

            <h1 class="clother-add">Danh Sách Sản Phẩm Đã Thêm</h1>                
            <div class="famous__place">
                <div class="home-product-list">
<script language="javascript" type="text/javascript">
function thongbao()
{
	return confirm("Bạn có muốn xóa sản phẩm này không ?");
}
</script>
<?php
$sql= mysqli_query($conn, "SELECT * FROM sanpham");
$total = mysqli_num_rows($sql);
$limit = 10;
$page = ceil($total/$limit);
$cr_page = (isset($_GET['page']) ? $_GET['page'] :1);
$start = ($cr_page - 1)*$limit;

$sql = mysqli_query($conn,"SELECT * FROM sanpham LIMIT $start,$limit");
$sql = "SELECT * FROM sanpham LIMIT $start,$limit";
$thucthi = mysqli_query($conn,$sql);
    while ($dulieu = mysqli_fetch_array($thucthi)) {      
        echo'   <div class="home-product-item" href="chitietsanpham.php?IDSP='.$dulieu['IDSP'].'">
                    <div class="home-product-item-1">
                    <div class="home-product-item__img" style="background-image:url( photo/'.$dulieu['Anh'].')"></div>
                    </div>
                    <h4 class="home-product-item__price-current">IDSP: '.$dulieu['IDSP'].'</h4>
                    <h4 class="home-product-item__name">'.$dulieu['TenSP'].'</h4>
                    <div class="home-product-item__price">
                        <span class="home-product-item__price-current">Giá: '.number_format($dulieu['Gia'], 0, '.', '.').'đ</span>
                    </div> 
                    <div class="home-product-item__button">
                        <button class="home-product-item__edit"><a href="suaspadmin.php?IDSP='.$dulieu['IDSP'].'">Sửa</a></button>
                        <button class="home-product-item__delete"><a href="xoaspadmin.php?IDSP='.$dulieu['IDSP'].'" onclick="return thongbao();">Xóa</a></button>
                    </div>                       
                </div> ';
                }
?> 

</div> 
<nav class="pagination" aria-label="...">
  <ul class="pagination pagination-lg">
    <li class="page-item <?php echo ($cr_page <= 1)? 'disabled' : '' ?>">
      <a class="page-link" href="themspadmin.php?page=<?php echo $cr_page -1 ?>" >Previous</a>
    </li>
    <?php for($i=1; $i <=$page ; $i++) { ?>
        <li class="page-item <?php echo ($cr_page == $i)? 'active' : '' ?>" aria-current="page">
        <a class="page-link" href="themspadmin.php?page=<?php echo $i ?>"><?php echo $i ?></a>
        </li>     
    <?php } ?>
    
    <li class="page-item <?php echo ($cr_page >= $page)? 'disabled' : '' ?>">
      <a class="page-link" href="themspadmin.php?page=<?php echo $cr_page + 1 ?>">Next</a>
    </li>
  </ul>
</nav>
            </div>     
        </div>   
    </div>   
</body>
</html>

