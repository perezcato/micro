<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ar-coder.site/themes/micro/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 16:44:26 GMT -->
<head>
    <!-- :: Required Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Micro is a HTML5 Responsive Multi-Purpose Template. Freelancers which need a professional way to showcase their projects, services, and sell their products. Designed for niche websites, agency, freelance, blog, magazine, portfolio, photography, corporate and ecommerce shop. It is a very simple, clean and minimalist template. The template looks great and it will appeal to fans of minimalist style. Template Made By HTML5, CSS3, Bootstrap V4. Code is Very Good with commenting each element of the website.">
    <meta name="keywords" content="micro, blog, bootstrap, business, company, consulting, corporate, finance, financial, insurance, portfolio, responsive, services, shop">

    <!-- :: Title -->
    <title>Gold Link</title>

    <!-- :: Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap">

    <!-- :: Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">

    <!-- :: Linearicons CSS -->
    <link rel="stylesheet" href="assets/fonts/linearicons/css/style.css">

    <!-- :: Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- :: Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- :: Style Other Pages CSS -->
    <link rel="stylesheet" href="assets/css/style-other-pages.css">

    <!-- :: Style Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


    <![endif]-->
</head>
<body>
<!-- :: Loading -->
<div class="loading">
    <div class="display-table">
        <div class="table-cell">
            <div class="loading-box">
                <div class="lds-ellipsis">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- :: Navbar -->
<nav class="navbar fixed-top navbar-expand-lg">
    <div style="height: 100vh; background: #ffffff; position: absolute; left: 0; right: 0; right: 0; bottom: 0; z-index: -1">

    </div>
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img
                style="height: 50px; width: 250px; object-position: center; object-fit: cover;"
                src="{{asset('imgs/goldlogo.png')}}"
            />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navtoggleid" aria-controls="navtoggleid" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lnr lnr-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navtoggleid">
            <ul class="navbar-nav ml-auto" style="z-index: 10 !important;">
                <li class="nav-item">
                    <a class="nav-link move-section" href="/" style="color: #17223E">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#about" style="color: #17223E">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/loan" style="color: #17223E">Loan Request</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/#contact" style="color: #17223E">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- :: Header Page -->
<section class="header-page blog" id="blog">
    <div class="overlay"></div>
    <div class="container">
        <div class="banner">
            <div class="head-info text-center">
                <h1>Loan Request</h1>
                <ul class="list-page">
                    <li><a href="/">Home</a></li>
                    <li><i class="fas fa-angle-right"></i></li>
                    <li>Loans</li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="contact-us py-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="/loan" method="post" class="message">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="message-box">
                                <input required name="surname" type="text" placeholder="Your Surname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message-box">
                                <input required name="firstname" type="text" placeholder="Your Firstname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message-box">
                                <input required name="email" type="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message-box">
                                <input required name="telephone" type="tel" placeholder="Your Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message-box">
                                <input required name="address" type="text" placeholder="Your Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message-box">
                                <input required name="amount" type="number" placeholder="Loan Amount">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="message-box">
                                <input required name="purpose" type="text" placeholder="Purpose of Loan">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="message-box">
                                <textarea name="comment" placeholder="Leave Your Comment Here....."></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="message-box">
                                <button type="submit" class="btn-style" style="width: 100%">Request Loan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="row mb-30">
            <div class="col-md-12 mb-30">
                <div class="footer-headline">
                    <h4>Contact Info</h4>
                </div>
                <div class="row">
                    <div class="footer-info col col-md-4">
                        <i class="lnr lnr-location"></i>
                        <div class="info-box">
                            <p>Ho - Volta region</p>
                            <p>1st Floor KCS Building Civic Center</p>
                        </div>
                    </div>
                    <div class="footer-info col col-md-4">
                        <i class="lnr lnr-envelope"></i>
                        <div class="info-box">
                            <p>Email@example.com</p>
                        </div>
                    </div>
                    <div class="footer-info col col-md-4">
                        <i class="lnr lnr-phone-handset"></i>
                        <div class="info-box">
                            <p>00201912149318</p>
                            <p>00204911318912</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright">
            &#64; All Rights Reserved.
        </div>
    </div>
</footer>

<!-- :: Scroll Up -->
<div class="scroll-up">
    <a href="#blog" class="move-section btn-style">
        <i class="lnr lnr-chevron-up"></i>
    </a>
</div>

<!-- :: JS -->
<!-- :: jQuery -->
<script src="assets/js/jquery-3.4.1.js"></script>

<!-- :: Popper -->
<script src="assets/js/popper.min.js"></script>

<!-- :: Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- :: Main -->
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from ar-coder.site/themes/micro/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Apr 2021 16:44:31 GMT -->
</html>
