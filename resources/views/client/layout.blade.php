<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ghoriginal</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/front/img/favicon.png" rel="icon">
    <link href="/assets/front/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="/assets/front/css/front.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto"><a href="#">Ghoriginal</a></h1>
        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Products</a></li>
                <li><a href="#services">Pay methods</a></li>
                <li><a href="#portfolio">Basket</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                {{--                <h1>Ghoriginal</h1>--}}
                {{--                <h2>Description text</h2>--}}
            </div>
        </div>
        <div class="text-center">

        </div>
        @yield('content')
    </div>

</section>

<main id="main">

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Feedback</h2>
                <p></p>
            </div>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="/assets/front/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="/assets/front/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="/assets/front/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="/assets/front/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                </div>

                <div class="testimonial-item">
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                    <img src="/assets/front/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                </div>

            </div>

        </div>
    </section>
</main>

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy;  <strong><span>Ghoriginal</span></strong>.
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">AVEHA</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Template Main JS File -->
<script src="/assets/front/js/front.js"></script>

</body>

</html>
