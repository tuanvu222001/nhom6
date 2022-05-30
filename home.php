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
    <title>Sporter</title>
    <script type="text/javascript"  src="./jquery-3.6.0.min.js"></script>
    <link rel="icon" href="./IMG/logo_1.jpg" sizes="20x20" type="image/jpg" > 
    <link rel="stylesheet" href="./themify-icons/themify-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./CSS/style-homeuser-2.css">
    <link rel="stylesheet" href="./CSS/call.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script language="javascript" src="./main.js"></script>

    <style> 
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
        .container__banner img {
            border-radius: 0;
            height: 480px;
            margin-top: 86px;
        }
        .lol2 {
            display: none;
        }
        .home-product-item-1 {
            overflow: hidden;
        }
        .home-product-item__img:hover {
            transform: scale(2);
            transition: 0.5s;
        }

        .pagination {
            justify-content: center;
            text-align: center;
            margin-top: 15px;
        }
        .page-link {
            color: black;
        }
        .page-item.active .page-link {
            background-color: #ee4d2d;
            color: white;
            border: 0.7px solid #ee4d2d;
        }
        
    </style>
</head>
<body>
    <div class="main">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--separate">
                            SPORTER.VN: Quần áo thể thao chính hãng
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span>
                            <a href="https://www.facebook.com/DoTheThaoSporter.vn" class="header__navbar-item-icon-link">
                               <i class="header__navbar-icon fab fa-facebook-square"></i>
                            </a>
                            <a href="https://www.instagram.com/sportercom/?hl=en" class="header__navbar-item-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
    
                    <ul class="header__navbar-list">
                    <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="dangnhapadmin.php" class="header__navbar-item-link">
                                <i class="header__navbar-icon fas fa-user"></i>
                                Đăng nhập Admin
                            </a>
                
                        </li>
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="dangnhapnew.php" class="header__navbar-item-link">
                                <i class="header__navbar-icon fas fa-user"></i>
                                Đăng nhập
                            </a>
                
                        </li>
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="dangkynew.php" class="header__navbar-item-link">
                                <i class="header__navbar-icon fas fa-user-plus"></i>
                                Đăng ký
                            </a>
                        </li>
                    </ul>
                </nav> 
                <!-- Header With Search  -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="home.php" class="header__logo-link">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/05/logo.png" class="header__logo-img" alt="Hệ Thống Bán Lẻ Đồ Thể Thao Sporter.vn">
                        </a>
                    </div>

                    <form class="header__search search" action="timkiem.php" method="POST">
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
                        <a href="dangnhapnew.php">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice">0</span>
                            </a>
                        </div>
                    </div>   
                </div>
            </div>
            </header>
                            <button class="header__button"> <a class="logout__hover" href="dangxuatuser.php">ĐĂNG XUẤT</a></button>
                        </li>
                    </ul>
                </nav> 
            </div>
        </header>
        <!-- BANNER -->
        <div class="container__banner" id="slider">
            <img class="slide" src="https://www.sporter.vn/wp-content/uploads/2021/07/Banner-bong-da-1.png" stt="0">
            <img class="slide" src="https://www.sporter.vn/wp-content/uploads/2021/07/Banner-bong-da-2.png" stt="1" style="display:none">
            <img class="slide" src="https://www.sporter.vn/wp-content/uploads/2021/07/Banner-bong-da-3.png" stt="2" style="display:none">
            <button class="lol2 ok1 lol2-left" id="phai">
                <i class="fas fa-angle-left cc"></i>
            </button>
            <button class="lol2 lol2-right" id="trai">
                <i class=" fas fa-angle-right"></i>
            </button>
        </div>
        <div class="container">
            <div class="size_container">
                <div class="logo-title">
                    <b></b>
                    <span class="logo-title-main">
                        <i class="ti-star"></i> 
                        LOGO CÁC CÂU LẠC BỘ NỔI BẬT     
                    </span>
                    <b></b>
                </div>                

                <!-- CLB -->
                <div class="container container-mt-10">
                    <div class="row">
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/p1-arsenal.jpg" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/p2-chelsea.jpg" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2021/08/Logo-liverpool.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2021/08/Logo-man-city.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/p5-man-united.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2021/07/logo-atletico-1.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/l2-barca.jpg" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/l3-real.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="container container-mt-10">
                    <div class="row">
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/b2-dortmund.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/s1-ac-milan.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/s4-as-roma.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/s2-inter-milan.jpg" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2021/07/logo-juventus-1.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/Ligue-1-PSG.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/10/la-galaxy.png" alt="">
                        </div>
                        <div class="col">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/06/b1-bayern.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- Label -->
                <div class="logo-title ">
                    <b></b>
                    <span class="logo-title-main logo-title-border">
                        <i class="ti-star"></i> 
                        ÁO BÓNG ĐÁ CÂU LẠC BỘ - NGOẠI HẠNG ANH     
                    </span>
                    <b></b>
                </div>                   
            <div class="famous__place">
                    <div class="home-product-list">




<?php
$sql= mysqli_query($conn, "SELECT * FROM sanpham");
$total = mysqli_num_rows($sql);
$limit = 15;
$page = ceil($total/$limit);
$cr_page = (isset($_GET['page']) ? $_GET['page'] :1);
$start = ($cr_page - 1)*$limit;

$sql = mysqli_query($conn,"SELECT * FROM sanpham LIMIT $start,$limit");
$sql = "SELECT * FROM sanpham LIMIT $start,$limit";
$thucthi = mysqli_query($conn,$sql);
    while ($dulieu = mysqli_fetch_array($thucthi)) {      
        echo'
                        <a class="home-product-item" href="ctsp.php?IDSP='.$dulieu['IDSP'].'">
                        <div class="home-product-item-1">
                            <div class="home-product-item__img" style="background-image:url( photo/'.$dulieu['Anh'].')"></div>
                        </div>
                                <h4 class="home-product-item__name">'.$dulieu['TenSP'].'</h4>
                                <div class="home-product-item__price">
                                    <span class="home-product-item__price-current">Giá: '.number_format($dulieu['Gia'], 0, '.', '.').'đ</span>
                            </div>
                            <div class="home-product-item__origin">
                                <span class="home-product-item__brand">Sporter</span>
                                <span class="home-product-item__origin-name">Việt Nam</span>
                            </div>                     
                        </a>     
                   ';
                    if(isset($_GET['url']))
                        include($_GET['url']); 
                                }
        ?>
                        
                    </div>  
                </div> 
                <nav class="pagination" aria-label="...">
                  <ul class="pagination pagination-lg">
                    <li class="page-item <?php echo ($cr_page <= 1)? 'disabled' : '' ?>">
                      <a class="page-link" href="home.php?page=<?php echo $cr_page -1 ?>" >Previous</a>
                    </li>
                    <?php for($i=1; $i <=$page ; $i++) { ?>
                        <li class="page-item <?php echo ($cr_page == $i)? 'active' : '' ?>" aria-current="page">
                        <a class="page-link" href="home.php?page=<?php echo $i ?>"><?php echo $i ?></a>
                        </li>     
                    <?php } ?>
                    
                    <li class="page-item <?php echo ($cr_page >= $page)? 'disabled' : '' ?>">
                      <a class="page-link" href="home.php?page=<?php echo $cr_page + 1 ?>">Next</a>
                    </li>
                  </ul>
                </nav>             
            </div>
        </div>
         
        <!-- FOOTER -->
        <div class="footer-main">
            <div class="size_container ">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="footer-body">
                            <h3 class="footer-heading">VỀ SPORTER.COM</h3>
                            <p>Sporter – chuyên bán quần áo thể thao giá rẻ các mặt hàng quần áo thể thao nam, hàng VNXK chính hãng cao cấp, chất lượng không vì lợi nhuận mà cung cấp sản phẩm kém chất lượng tới tay người tiêu dùng nên Quý khách hàng hoàn toàn yên tâm về sản phẩm tại Sporter Shop.
                                Quần áo thể thao nam tại Sporter may theo quy chuẩn hàng xuất nhập khẩu với tiêu chí đẹp rẻ xịn chất lượng được kiểm định an toàn với người tiêu dùng, đặc biệt giá cả luôn ở mức cạnh tranh thị trường. Với nguồn hàng đồ bộ thể thao nam hàng xuất nhập khẩu từ adidas, nike, porsche… nên Khách hàng hoàn toàn yên tâm về nguồn gốc xuất xứ tại Sporter Shop.</p>
                            <p>Địa chỉ: 123 Nhóm 6, Kim Giang, Thanh Xuân, Hà Nội, Việt Nam</p>
                            <p>HOTLINE: 0385 661 623</p>
                        </div>  
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-body">
                            <h3 class="footer-heading">CHỈ DẪN</h3>
                            <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.178293557398!2d105.81160521540187!3d20.98548899462884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad270d78b019%3A0xa4deecf66709a878!2zU1BPUlRFUiAtIFF14bqnbiDDoW8gdGjhu4MgdGhhbyBuYW0!5e0!3m2!1svi!2s!4v1652605012970!5m2!1svi!2s" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- VISA -->
        <div class="footer_brand">
            <div class="footer_brand-left" >
                <h3 class="footer_header-col1--h3">SECURE YOUR TRANSACTION</h3>
                <div class="footer_brand-left-image" >
                    <img src="./IMG/visa.png" alt="">
                    <img src="./IMG/mastercard.png" alt="">
                    <img src="./IMG/masetro.png" alt="">
                </div>
            </div>
            <div class="footer_brand-center">
                <h3 class="footer_header-col1--h3">CRETIFICATION</h3>
                <div class="footer_brand-center-image">
                    <a href=""><img src="./IMG/ddki.png" alt=""></a>
                    <a href=""><img src="./IMG/dma.png" alt=""></a>
                </div>
            </div>
            <div class="footer_brand-right">
                <h3 class="footer_header-col1--h3">FOLLOW US</h3>
                <a href=""><img src="./IMG/ig.png" alt=""></a>
                <a href=""><img src="./IMG/yt.png" alt=""></a>
                <a href=""><img src="./IMG/fb.png" alt=""></a>

            </div>
        </div>
    </div>
    <div class="hotline-phone-ring-wrap">
        <div class="hotline-phone-ring">
            <div class="hotline-phone-ring-circle"></div>
            <div class="hotline-phone-ring-circle-fill"></div>
            <div class="hotline-phone-ring-img-circle">
            <a href="tel:0987654321" class="pps-btn-img">
                <img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
            </a>
            </div>
        </div>
    </div>
</body>
</html>