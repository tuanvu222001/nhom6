<?php
    
session_start();
include 'ketnoi.php';
$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
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
        .home-product-item-1 {
            overflow: hidden;
        }
        .home-product-item__img:hover {
            transform: scale(2);
            transition: 0.5s;
        }
        .container__banner img {
            border-radius: 0;
            height: 480px;
            margin-top: 86px;
        }
        .lol2 {
            display: none;
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
                            SPORTER.VN: Qu???n ??o th??? thao ch??nh h??ng
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">K???t n???i</span>
                            <a href="" class="header__navbar-item-icon-link">
                               <i class="header__navbar-icon fab fa-facebook-square"></i>
                            </a>
                            <a href="" class="header__navbar-item-icon-link">
                                <i class="header__navbar-icon fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
    
                    <ul class="header__navbar-list">
                    
    
                        <li class="header__navbar-item header__navbar-user">
                            <img src="./Img/logo user.jpg" alt="" class="header__navbar-user-img">
                            <span class="header__navbar-user-name">
                            <?php
                                if($_SESSION['Ten'] !="")
                                {
                                    echo $_SESSION['Ten'];
                                }
                            ?>
                            </span>
                        </li>

                        <li class="header__navbar-item">
                            <a href="dangxuatuser.php" class="header__navbar-item-link">
                                <i class="header__navbar-icon ti-shift-right"></i>
                                ????ng xu???t
                            </a>
                        </li>
                    </ul>
                </nav> 
                <!-- Header With Search  -->
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="homeuser.php" class="header__logo-link">
                            <img src="https://www.sporter.vn/wp-content/uploads/2017/05/logo.png" class="header__logo-img" alt="H??? Th???ng B??n L??? ????? Th??? Thao Sporter.vn">
                        </a>
                    </div>

                    <form class="header__search search" action="timkiemuser.php" method="POST">
                        <div class="header__search-input-wrap">
                            <input type="text" name="tukhoa" class="header__search-input" placeholder="Nh???p ????? t??m ki???m s???n ph???m">
                        </div>
                        <button type="submit" name="timkiem" class="header__search-btn">
                            <i class="header__search-btn-icon fas fa-search"></i>
                        </button>
                    </form>
                    
                    <!-- Cart Layout -->
                    <div class="header__cart">
                        <div class="header__cart-wrap">
                        <a href="giohangmain.php">
                            <i class="header__cart-icon fas fa-shopping-cart"></i>
                            <span class="header__cart-notice"><span class="header__cart-notice"><?php echo count($cart) ?></span></span>
                            </a>
                        </div>
                    </div>
                    <a href="hoadon.php">
                        <i class="header__cart-icon fas fa-receipt"></i>
                    </a>   
                </div>


            </div>

        </header>
                            <button class="header__button"> <a class="logout__hover" href="dangxuatuser.php">????NG XU???T</a></button>
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
            <div class="size_container">

                               
        
            <div class="famous__place">
                    <div class="home-product-list">

<?php
if (isset($_POST['timkiem'])) {
    $_tukhoa = $_POST['tukhoa'];
    $sql = "select * from sanpham where (TenSP like '%".$_tukhoa."%') OR (Gia like '%".$_tukhoa."%')";
    //$sql = "select * from sanpham";
    $thucthi = mysqli_query($conn,$sql);
    if(mysqli_num_rows($thucthi)<=0){
        echo ' <div><h4 class="home-product-item__name">Kh??ng c?? s???n ph???m c???n t??m</h4></div>';
    }
    while ($dulieu = mysqli_fetch_array($thucthi)) {
        echo'           <a class="home-product-item" href="chitietsanpham.php?IDSP='.$dulieu['IDSP'].'">
                            <div class="home-product-item-1">
                                <div class="home-product-item__img" style="background-image:url( photo/'.$dulieu['Anh'].')"></div>
                            </div>
                                <h4 class="home-product-item__name">'.$dulieu['TenSP'].'</h4>
                                <div class="home-product-item__price">
                                    
                                    <span class="home-product-item__price-current">Gi??: '.number_format($dulieu['Gia'], 0, '.', '.').'??</span>
                            </div>
                            <div class="home-product-item__origin">
                                <span class="home-product-item__brand">Sporter</span>
                                <span class="home-product-item__origin-name">Vi???t Nam</span>
                            </div>
                          
                        </a>     ';
                    if(isset($_GET['url']))
                        include($_GET['url']); 
                                }
                            }
?>
                        
                    </div>
          
                    
                </div>              
            </div>
        </div>
         
        <!-- FOOTER -->
        <div class="footer-main">
            <div class="size_container ">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="footer-body">
                            <h3 class="footer-heading">V??? SPORTER.COM</h3>
                            <p>Sporter ??? chuy??n b??n qu???n ??o th??? thao gi?? r??? c??c m???t h??ng qu???n ??o th??? thao nam, h??ng VNXK ch??nh h??ng cao c???p, ch???t l?????ng kh??ng v?? l???i nhu???n m?? cung c???p s???n ph???m k??m ch???t l?????ng t???i tay ng?????i ti??u d??ng n??n Qu?? kh??ch h??ng ho??n to??n y??n t??m v??? s???n ph???m t???i Sporter Shop.
                                Qu???n ??o th??? thao nam t???i Sporter may theo quy chu???n h??ng xu???t nh???p kh???u v???i ti??u ch?? ?????p r??? x???n ch???t l?????ng ???????c ki???m ?????nh an to??n v???i ng?????i ti??u d??ng, ?????c bi???t gi?? c??? lu??n ??? m???c c???nh tranh th??? tr?????ng. V???i ngu???n h??ng ????? b??? th??? thao nam h??ng xu???t nh???p kh???u t??? adidas, nike, porsche??? n??n Kh??ch h??ng ho??n to??n y??n t??m v??? ngu???n g???c xu???t x??? t???i Sporter Shop.</p>
                            <p>?????a ch???: 123 Nh??m 6, Kim Giang, Thanh Xu??n, H?? N???i, Vi???t Nam</p>
                            <p>HOTLINE: 0385 661 623</p>
                        </div>  
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-body">
                            <h3 class="footer-heading">CH??? D???N</h3>
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
</body>
</html>