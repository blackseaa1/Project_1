<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bookly End Of Alley</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="./assets/uploads/apple-icon.png">
    <!-- them icon -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/uploads/favicon.ico">

    <link rel="stylesheet" href="assets/style/common/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/common/normalize.css">
    <link rel="stylesheet" href="./assets/style/common/base.css">
    <link rel="stylesheet" href="./asset/style/common/reset.css">
    <link rel="stylesheet" href="./assets/style/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="assets/font/fontawesome-pro-5.13.0-web/css/all.min.css">

</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
                <div class="content">
                    <h3 class="fw-bold text-secondary">Bookly</h3>
                    <p class="">End Of Alley</p>
                </div>
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Về Chúng Tôi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shop.html">Cửa Hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Liên Hệ</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                        data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="shop-cart.php">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <!-- <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a> -->

                        <!-- Thêm đăng nhập đăng kí -->
                    </a>
                    <div class=""><a class="nav-icon position-relative text-decoration-none" href="shop-cart.php">
                        </a><a href="./login.html" class="btn btn-outline-success border border-success me-2">Đăng Nhập</a>
                        <a href="./register.html" class="btn btn-success text-white">Đăng Kí</a>
                    </div>
                    <!-- Kết thúc đăng nhập đăng kí -->
                    <!-- Người dùng  -->
                    <!-- <div class="flex-shrink-0 dropdown">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div> -->
                    <!-- Kết thúc người dùng -->
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
<section>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
                        <div class="promo pe-md-3 pe-lg-5">
                            <h1 class="headline mb-3">
                                DEVBOOK LANDING <br>SELF-PUBLISHING YOUR BOOK   
                            </h1><!--//headline-->
                            <div class="subheadline mb-4">
                                Mẫu sách miễn phí dành cho nhà phát triển và lập trình viên muốn tự xuất bản sách. Tải xuống ngay bây giờ và bắt đầu bán sách của bạn ngay lập tức!
                                
                            </div><!--//subheading-->
                            
                            <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
                                <div class="col-12 col-md-auto">
                                    <a class="btn btn-success w-100" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devbook-free-bootstrap-5-book-ebook-landing-page-template-for-developers/">Mua Ngay $29</a>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <a class="btn btn-outline-success border border-success scrollto w-100" href="#benefits-section">Tìm Hiểu Thếm</a>
                                </div>
                            </div><!--//cta-holder-->
                        </div><!--//promo-->
                    </div><!--col-->
                    <div class="col-12 col-md-5 mb-5 align-self-center">
                        <div class="book-cover-holder">
                            <img class="img-fluid book-cover" src="assets/img/devbook-cover.png" alt="book cover">
                            <div class="book-badge d-inline-block shadow ">
                                New<br>Release
                            </div>
                        </div><!--//book-cover-holder-->
                        <div class="text-center"><a class="theme-link scrollto" href="#reviews-section">Xem tất cả các đánh giá sách</a></div>
                    </div><!--col-->
                </div><!--//row-->
            </div><!--//container-->
          </div>
          <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
                        <div class="promo pe-md-3 pe-lg-5">
                            <h1 class="headline mb-3">
                                DEVBOOK LANDING <br>SELF-PUBLISHING YOUR BOOK   
                            </h1><!--//headline-->
                            <div class="subheadline mb-4">
                                Mẫu sách miễn phí dành cho nhà phát triển và lập trình viên muốn tự xuất bản sách. Tải xuống ngay bây giờ và bắt đầu bán sách của bạn ngay lập tức!
                                
                            </div><!--//subheading-->
                            
                            <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
                                <div class="col-12 col-md-auto">
                                    <a class="btn btn-success w-100" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devbook-free-bootstrap-5-book-ebook-landing-page-template-for-developers/">Mua Ngay $29</a>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <a class="btn btn-outline-success border border-success scrollto w-100" href="#benefits-section">Tìm Hiểu Thếm</a>
                                </div>
                            </div><!--//cta-holder-->
                        </div><!--//promo-->
                    </div><!--col-->
                    <div class="col-12 col-md-5 mb-5 align-self-center">
                        <div class="book-cover-holder">
                            <img class="img-fluid book-cover" src="assets/img/devbook-cover.png" alt="book cover">
                            <div class="book-badge d-inline-block shadow ">
                                New<br>Release
                            </div>
                        </div><!--//book-cover-holder-->
                        <div class="text-center"><a class="theme-link scrollto" href="#reviews-section">Xem tất cả các đánh giá sách</a></div>
                    </div><!--col-->
                </div><!--//row-->
            </div><!--//container-->
          </div>
          <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
                        <div class="promo pe-md-3 pe-lg-5">
                            <h1 class="headline mb-3">
                                DEVBOOK LANDING <br>SELF-PUBLISHING YOUR BOOK   
                            </h1><!--//headline-->
                            <div class="subheadline mb-4">
                                Mẫu sách miễn phí dành cho nhà phát triển và lập trình viên muốn tự xuất bản sách. Tải xuống ngay bây giờ và bắt đầu bán sách của bạn ngay lập tức!
                                
                            </div><!--//subheading-->
                            
                            <div class="cta-holder row gx-md-3 gy-3 gy-md-0">
                                <div class="col-12 col-md-auto">
                                    <a class="btn btn-success w-100" href="https://themes.3rdwavemedia.com/bootstrap-templates/startup/devbook-free-bootstrap-5-book-ebook-landing-page-template-for-developers/">Mua Ngay $29</a>
                                </div>
                                <div class="col-12 col-md-auto">
                                    <a class="btn btn-outline-success border border-success scrollto w-100" href="#benefits-section">Tìm Hiểu Thếm</a>
                                </div>
                            </div><!--//cta-holder-->
                        </div><!--//promo-->
                    </div><!--col-->
                    <div class="col-12 col-md-5 mb-5 align-self-center">
                        <div class="book-cover-holder">
                            <img class="img-fluid book-cover" src="assets/img/devbook-cover.png" alt="book cover">
                            <div class="book-badge d-inline-block shadow ">
                                New<br>Release
                            </div>
                        </div><!--//book-cover-holder-->
                        <div class="text-center"><a class="theme-link scrollto" href="#reviews-section">Xem tất cả các đánh giá sách</a></div>
                    </div><!--col-->
                </div><!--//row-->
            </div><!--//container-->
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon text-bg-success rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon text-bg-success rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="bg-light">
       <div class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Danh Mục Của Tháng</h1>
                <p>
                    Nếu không bị dục vọng làm cho mờ mắt, thì không ra, có lỗi là bỏ bổn phận, mềm lòng, đó là cực nhọc.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3" style="text-align:center;">
                <a href="#"><img src="./assets/img/book1.jpg" class="img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Tâm Lý Học</h5>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3" style="text-align:center;">
                <a href="#"><img src="./assets/img/book1.jpg" class="img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Tội Phạm</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3" style="text-align:center;">
                <a href="#"><img src="./assets/img/book1.jpg" class="img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Làm Giàu</h2>
                <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
            </div>
        </div>
       </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Sản Phẩm Nổi Bật</h1>
                    <p>
                        Anh ta sẽ chỉ trích trong niềm vui, anh ta muốn làm một sợi tóc trong nỗi đau, và anh ta sẽ không được sinh ra. Trừ khi họ bị dục vọng che mắt, nếu không họ sẽ không ra ngoài.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/bookupdate/book-1.png" style="width: 414px; height: 530px;" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$240.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Gym Weight</a>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia
                                deserunt.
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/bookupdate/book-1.png" style="width: 414px; height: 530px;" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$480.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Cloud Nike Shoes</a>
                            <p class="card-text">
                                Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo
                                ullamcorper.
                            </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="./assets/img/bookupdate/book-1.png" style="width: 414px; height: 530px;" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right">$360.00</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">Summer Addides
                                Shoes</a>
                            <p class="card-text">
                                Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et
                                scelerisque ipsum lobortis nec.
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5 ">
                    <div class=" border-end border-light">
                        <h2 class="h2 text-success  pb-3 logo">
                            <div class="content">
                                <img class="image_footer" src="./assets/uploads/apple-icon-footer.png" alt="">
                            </div>
                        </h2>
                        <ul class="list-unstyled text-light footer-link-list">
                            <li>
                                <i class="fas fa-map-marker-alt fa-fw"></i>
                                P214, Tòa nhà A17 Bách Khoa, 17 Tạ Quang Bửu, Hai Bà Trưng, Hà Nội
                            </li>
                            <li>
                                <i class="fa fa-phone fa-fw"></i>
                                <a class="text-decoration-none" href="tel:036 779 1116">036 779 1116</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope fa-fw"></i>
                                <a class="text-decoration-none"
                                    href="mailto:tiemsachcuoingo@gmail.com">tiemsachcuoingo@gmail.com</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light pb-3">TÀI KHOẢN CỦA TÔI</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Đăng nhập/Tạo mới tài khoản</a></li>
                        <li><a class="text-decoration-none" href="#">Chi tiết tài khoản</a></li>
                        <li><a class="text-decoration-none" href="#">Thay đổi địa chỉ khách hàng</a></li>
                        <li><a class="text-decoration-none" href="#">Lịch sử mua hàng</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light pb-3">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Trang chủ</a></li>
                        <li><a class="text-decoration-none" href="#">Giới thiệu Bookly</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-white border-light" id="subscribeEmail"
                            placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Tiệm Sách Cuối Ngõ <a rel="sponsored" href="/" target="_blank">| All
                                Rights Reserved!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>