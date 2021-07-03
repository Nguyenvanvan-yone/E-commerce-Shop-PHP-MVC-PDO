<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Shop PHP| TF</title>
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/css/base.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/css/responsive.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/css/style-grid.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>Public/Frontend/font/fontawesome-free-5.15.1-web/fontawesome-free-5.15.1/css/all.min.css">
</head>
<body>
    <div class="warraper">
        <!-- Header -->
        <div id="header">
            <div class="header__nav-top">
                <div class="grid wide">
                    <nav class="header__nav">
                        <ul class="header__list ">
                            <li class="header__list-item">
                                <a href="" class="header__item-link">Trang Chủ</a>
                            </li>
                            <li class="header__list-item">
                                <a href="" class="header__item-link">Giới Thiệu</a>
                            </li>
                            <li class="header__list-item hidden-on-tablet">
                                <a href="" class="header__item-link">Tin Tức</a>
                            </li>
                            <li class="header__list-item hidden-on-tablet">
                                <a href="" class="header__item-link">Liên Hệ</a>
                            </li>
                            <li class="header__list-item hidden-on-tablet">
                                <a href="<?php echo BASE_URL?>AdminController/ViewLoginAdmin" class="header__item-link">Admin</a>
                            </li>
                        </ul>
                        <ul class="header__list hidden-on-mobile">
                            <li class="header__list-item hidden-on-tablet">
                                <a href="" class="header__item-link">Giỏ Hàng</a>
                            </li>
                            <li class="header__list-item hidden-on-tablet">
                                <a href="" class="header__item-link">Thanh Toán</a>
                            </li>
                            <li class="header__list-item">
                                <a href="" class="header__item-link">Đăng Kí</a>
                            </li>
                            <li class="header__list-item">
                                <a href="" class="header__item-link">Đăng Nhập</a>
                            </li>
                        </ul>
                    </nav>
                   
                </div>
            </div>
            <div class="grid wide">
                <div class=" row header__license">
                    <div class="col-lg-4 col-md-6 col-sm-3">
                        <div class="header__logo">
                            <a href="" class="header__link-logo">
                                <img src="<?php echo BASE_URL ?>Public/Frontend/image/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-0 col-sm-0">
                        <div class="header__contact-phone">
                            <a href="" class="contact-link">
                                <i class="fas fa-phone-alt"></i>
                                <span class="contact-phone">Hotline: 0366361624</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-9">
                        <div class="header__form-group">
                            <form action="" class="header__form">
                                <div class="header__input">
                                    <div class="header__input-text">
                                        <i class="fas fa-search"></i>
                                        <input type="text" placeholder="Từ Khóa..." >
                                    </div>
                                    <input type="submit" value="Tìm Kiếm">
                                </div>
    
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header__menu ">
                    <ul class="header__list-bottom ">
                            <?php 
                                
                                $load = new Load;
                             
                                 if(isset($category) )
                                {
                                    $data['result'] = $category;
                                }
                                else
                                {
                                    $data['result'] = ''; 
                                }
                               
                                $load->view($yield_category,$data); 
                               
                            ?>
                       
                       
                        <li class="header__item-bottom dropdown-list hidden-on-pc">
                            <a href="" class="header__item-link hidden-on-mobile hidden-on-pc">  <i class="fas fa-bars"></i> Khác</a>
                            <a href="" class="header__item-link hidden-on-pc hidden-on-tablet">  <i class="fas fa-bars"></i> All Menu </a>
                            <ul class=" dropdown-mobi-tablet">
                                <li class="header__dropdown-item">
                                    <a href="" class="header__drowdown-link hidden-on-tablet">Sản Phẩm Bán Chạy</a>
                                </li>
                                <li class="header__dropdown-item">
                                    <a href="" class="header__drowdown-link hidden-on-tablet">Hộp Quà Tết</a>
                                </li>
                                <li class="header__dropdown-item">
                                    <a href="" class="header__drowdown-link">Giỏ Tết</a>
                                </li>
                                <li class="header__dropdown-item">
                                    <a href="" class="header__drowdown-link">Giỏ Trái Cây</a>
                                </li>
                                
                        
                            </ul>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </div>
        <!-- End Header -->
        <!-- Slider -->
        <div id="slide">
            <div class="grid">
                <div class="slider ">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="<?php echo BASE_URL ?>Public/Frontend/image/bannerso1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo BASE_URL ?>Public/Frontend/image/banner2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="<?php echo BASE_URL ?>Public/Frontend/image/banner3.jpg" alt="">
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="grid wide ">
                <div class="slide__wellcome hidden-on-mobile">
                    <div class="slide__info">
                        <h2 class="slide__heading">Wellcome  !!!</h2>
                        <p class="slide__text">
                            Công Ty TNHH Thương Mại Dịch Vụ Đầu Tư Vạn Phú
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider -->
        <!-- Content -->
        <div id="content">
            <div class="grid wide">
                <div class="row content__banner">
                    <div class=" col-lg-3 col-md-3 col-sm-12 content__baner-img">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="" class="banner__link">
                                    <img src="<?php echo BASE_URL ?>Public/Frontend/image/Untitled-1.png" alt="" class="banner__img">
                                    <p class="banner__text"> Hộp Quà Tết</p>
                                </a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="" class="banner__link">
                                    <img src="<?php echo BASE_URL ?>Public/Frontend/image/Untitled-2.png" alt="" class="banner__img">
                                    
                                        <p class="banner__text"> Giỏ Tết</p>
                                   
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-3 col-md-3 col-sm-12 content__baner-img">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="" class="banner__link">
                                    <img src="<?php echo BASE_URL ?>Public/Frontend/image/Untitled-3.png" alt="" class="banner__img">
                                    <p class="banner__text"> Giỏ Trái Cây</p>
                                </a>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <a href="" class="banner__link">
                                    <img src="<?php echo BASE_URL ?>Public/Frontend/image/Untitled-4.png" alt="" class="banner__img">
                                    <p class="banner__text"> Sản Phẩm Khác</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-12 content__baner-img-lg">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <a href="" class="banner__link"> <img src="<?php echo BASE_URL ?>Public/Frontend/image/banner.png" alt="" class="banner__img">
                                <p class="banner__text"> Sản Phẩm Bán Chạy</p>
                            </div></a>   
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid wide">
                <div class="content__category">
                    <p class="content__label">
                        Hộp Quà Tết
                    </p>
                </div>
            </div>
            <div class="grid wide">
                <div class="row">
                            <?php 
                               
                                 if(isset($products) )
                                {
                                    $data['product'] = $products;
                                }
                                else
                                {
                                    $data['product'] = ''; 
                                }
                               
                                $load->view($yield_product,$data); 
                            
                            ?>
                   
                </div>
            </div>
            <div class="grid wide">
                <div class="content__category">
                    <p class="content__label">
                       Giỏ Trái Cây
                    </p>
                </div>
            </div>
            <div class="grid wide">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card">
                            <a href="" class="card-link">
                                <div class="card-content" style="background-image: url(<?php echo BASE_URL ?>Public/Frontend/image/tc1.png) ;"> 
                                    <div class="card-body">
                                        <h3 class="card-name">
                                            Giỏ trái cây 1 (Mẫu 1)
                                        </h3>
                                        <p class="card-price">
                                            65,000$ <span> 68,000$</span>
                                        </p>
                                        <a href="" class="btn btn__card">
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="grid wide">
                <div class="content__category">
                    <p class="content__label">
                       Giỏ Tết
                    </p>
                </div>
            </div>
            <div class="grid wide">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card">
                            <a href="" class="card-link">
                                <div class="card-content" style="background-image: url(<?php echo BASE_URL ?>Public/Frontend/image/gq4.png) ;"> 
                                    <div class="card-body">
                                        <h3 class="card-name">
                                            Giỏ trái cây 1 (Mẫu 1)
                                        </h3>
                                        <p class="card-price">
                                            65,000$ <span> 68,000$</span>
                                        </p>
                                        <a href="" class="btn btn__card">
                                            Thêm vào giỏ
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                </div>
            </div>
            <div class="grid wide">
                <div class="content__category">
                    <p class="content__label">
                       Tin Tức 
                    </p>
                </div>
            </div>
            <div class="grid wide">
                <div class=" row content__news">
                    <div class="col-lg-4 ">
                        <div class="card ">
                            <a href="" class="card-link">
                                <div class="card-content content__news-card" style="background-image: url(<?php echo BASE_URL ?>Public/Frontend/image/bn1.jpg) ;"> 
                                    <div class="content__news-body">
                                        <h3 class="card__news-name">
                                            Hướng dẫn việc tặng quà lễ, tết các đối tượng chính sách
                                        </h3>
                                        <p class="card__news-time">
                                            <i class="far fa-calendar-alt"></i> 4/3/2021
                                        </p>
                                        <p class="card__news-description">
                                            Sở Lao động - Thương binh và Xã hội Khánh Hòa vừa ban hành văn bản hướng dẫn tặng quà Tết Nguyên đán Tân Sửu 2021 cho người có công với cách mạng, đối tượng xã hội do sở quản lý.
                                            Theo đó, về quà của Chủ tịch nước có 2 mức. Mức quà 600.000 đồng dành tặng các đối tượng: Người hoạt động cách mạng trước ngày 1-1-1945 đang hưởng trợ cấp ưu đãi hằng tháng; người hoạt động cách mạng từ ngày 1-1-1945 đến ngày khởi nghĩa Tháng Tám năm 1945 đang hưởng trợ cấp ưu đãi hằng tháng; Bà mẹ Việt Nam Anh hùng đang hưởng trợ cấp ưu đãi hằng tháng; Anh hùng Lực lượng vũ trang nhân dân, Anh hùng Lao động trong thời kỳ kháng chiến đang hưởng trợ cấp ưu đãi hằng tháng; thương binh, người hưởng chính sách như thương binh, thương binh loại B, bệnh binh suy giảm khả năng lao động từ 81% trở lên đang hưởng trợ cấp ưu đãi hằng tháng; 
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="card ">
                            <a href="" class="card-link">
                                <div class="card-content content__news-card" style="background-image: url(<?php echo BASE_URL ?>Public/Frontend/image/bn3.png) ;"> 
                                    <div class="content__news-body">
                                        <h3 class="card__news-name">
                                            Hướng dẫn việc tặng quà lễ, tết các đối tượng chính sách
                                        </h3>
                                        <p class="card__news-time">
                                            <i class="far fa-calendar-alt"></i> 4/3/2021
                                        </p>
                                        <p class="card__news-description">
                                            Sở Lao động - Thương binh và Xã hội Khánh Hòa vừa ban hành văn bản hướng dẫn tặng quà Tết Nguyên đán Tân Sửu 2021 cho người có công với cách mạng, đối tượng xã hội do sở quản lý.
                                            Theo đó, về quà của Chủ tịch nước có 2 mức. Mức quà 600.000 đồng dành tặng các đối tượng: Người hoạt động cách mạng trước ngày 1-1-1945 đang hưởng trợ cấp ưu đãi hằng tháng; người hoạt động cách mạng từ ngày 1-1-1945 đến ngày khởi nghĩa Tháng Tám năm 1945 đang hưởng trợ cấp ưu đãi hằng tháng; Bà mẹ Việt Nam Anh hùng đang hưởng trợ cấp ưu đãi hằng tháng; Anh hùng Lực lượng vũ trang nhân dân, Anh hùng Lao động trong thời kỳ kháng chiến đang hưởng trợ cấp ưu đãi hằng tháng; thương binh, người hưởng chính sách như thương binh, thương binh loại B, bệnh binh suy giảm khả năng lao động từ 81% trở lên đang hưởng trợ cấp ưu đãi hằng tháng; 
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="card ">
                            <a href="" class="card-link">
                                <div class="card-content content__news-card" style="background-image: url(<?php echo BASE_URL ?>Public/Frontend/image/bn2.jpg) ;"> 
                                    <div class="content__news-body">
                                        <h3 class="card__news-name">
                                            Hướng dẫn việc tặng quà lễ, tết các đối tượng chính sách
                                        </h3>
                                        <p class="card__news-time">
                                            <i class="far fa-calendar-alt"></i> 4/3/2021
                                        </p>
                                        <p class="card__news-description">
                                            Sở Lao động - Thương binh và Xã hội Khánh Hòa vừa ban hành văn bản hướng dẫn tặng quà Tết Nguyên đán Tân Sửu 2021 cho người có công với cách mạng, đối tượng xã hội do sở quản lý.
                                            Theo đó, về quà của Chủ tịch nước có 2 mức. Mức quà 600.000 đồng dành tặng các đối tượng: Người hoạt động cách mạng trước ngày 1-1-1945 đang hưởng trợ cấp ưu đãi hằng tháng; người hoạt động cách mạng từ ngày 1-1-1945 đến ngày khởi nghĩa Tháng Tám năm 1945 đang hưởng trợ cấp ưu đãi hằng tháng; Bà mẹ Việt Nam Anh hùng đang hưởng trợ cấp ưu đãi hằng tháng; Anh hùng Lực lượng vũ trang nhân dân, Anh hùng Lao động trong thời kỳ kháng chiến đang hưởng trợ cấp ưu đãi hằng tháng; thương binh, người hưởng chính sách như thương binh, thương binh loại B, bệnh binh suy giảm khả năng lao động từ 81% trở lên đang hưởng trợ cấp ưu đãi hằng tháng; 
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>    
                </div>
            </div>

        </div>
        <!-- End Content -->
        <!-- Footer -->
        <div id="footer">
            <div class="grid wide">
                <div class="row">
                    <div class="col-6">
                        <div class="footer__contact">
                            <h3 class="footer__head" style="text-align: left;"> CÔNG TY TNHH TM DV ĐẦU TƯ VẠN PHÚ</h3>
                            <div class="footer__body">
                                <label for="">Địa chỉ:
                                    <a href="" class="footer__link-left">Weba.vn Đoàn Hải Plaza, Số 756 Trường Chinh, Tân Bình, Hồ Chí Minh</a>
                                </label>
                                <label for="">
                                    Hotline:<a href="" class="footer__link-left">0366361624</a>
                                </label>
                                <label for="">E-mail: <a href="" class="footer__link-left">nvvan.19it4@vku.udn.vn</a></label>
                            </div>
                            <img src="<?php echo BASE_URL ?>Public/Frontend/image/logo (1).png" alt="" class="footer__link-img">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="footer__contact">
                            <div class="row">
                                <div class="col-4">
                                    <h3 class="footer__head">  DANH SÁCH MENU </h3>
                                    <ul class="footer__list">
                                        <li class="footer__item"><a href="" class="footer__link-right">Trang chủ</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Giỏ Hàng</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Thanh Toán</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Liên Hệ</a></li>
                                    </ul>
                                </div>
                                <div class="col-4">
                                    <h3 class="footer__head"> DANH MỤC SẢN PHẨM</h3>
                                    <ul class="footer__list">
                                        <li class="footer__item"><a href="" class="footer__link-right">Hộp quà tết</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Giỏ quà tết</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Sản phẩm bán chạy</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Sản phẩm khác</a></li>
                                    </ul>
                                </div>
                                
                                <div class="col-4">
                                    <h3 class="footer__head"> HỖ TRỢ KHÁCH HÀNG</h3>
                                    <ul class="footer__list">
                                        <li class="footer__item"><a href="" class="footer__link-right">Hổ Trợ khách hàng</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Điều khoản & dịch vụ</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Hướng dẫn mua hàng</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Hổ Trợ khách hàng</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Điều khoản & dịch vụ</a></li>
                                        <li class="footer__item"><a href="" class="footer__link-right">Hướng dẫn mua hàng</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               

            </div>
            <div class="footer__and-footer">
                <div class="grid wide">
                    <div class="footer__info">               
                        <div class="footer__license">
                            &#169;  Copy all right <a href="" class="footer__link"> Công Ty TNHH Thương Mại Dịch Vụ Đầu Tư Vạn Phú</a>  2015 - 2019
                        </div>
                        <div class="footer__social">
                            <a href="" class="footer__link"> <i class="fab fa-facebook-square  footer__icon"></i></a>
                            <a href="" class="footer__link"> <i class="fab fa-google-plus-square footer__icon"></i></a>
                            <a href="" class="footer__link"> <i class="fab fa-twitter-square footer__icon"></i></a>
                            <a href="" class="footer__link"><i class="fab fa-youtube-square footer__icon"></i></a>
                            <a href="" class="footer__link"> <i class="fab fa-linkedin footer__icon"></i></a>
                        </div> 
                    </div>
                </div> 
            </div>
            
        </div>
        <!-- End Footer -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>Public/Frontend/Js/owl.carousel.js"></script>
    <script src="<?php echo BASE_URL ?>Public/Frontend/Js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:false,
                loop:true,
                items:1,
                dots:false

        })
    </script>
</body>
</html>