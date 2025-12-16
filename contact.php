<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chawla Textiles</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- header -->
    <?php include('header.php') ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header pt-5 mb-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white p-5">
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">Contact Us</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="pt-6 pb-6">
        <div class="container-fluid contact py-5 wow fadeIn" data-wow-delay="0.1s">

            <div class="container pt-5">
                <div class="row gy-5 gx-0">
                    <div class="col-lg-6 pe-lg-5 wow fadeIn" data-wow-delay="0.3s">
                        <h1 class="display-6 text-uppercase text-white mb-4">Have Any Query? Feel Free To Contact Us
                        </h1>

                        <h4 class="lh-base text-white mb-5 wow fadeIn" data-wow-delay="0.4s">
                            For any business inquiry, bulk order, or product details, connect with Chawla Textiles
                            anytime.
                        </h4>

                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.5s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-envelope-at text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Mail Us</h6>
                                <span class="text-white">chawlatextiles@gmail.com</span>
                            </div>
                        </div>

                        <hr class="bg-body">

                        <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.6s">
                            <div class="btn-lg-square bg-white">
                                <i class="bi bi-telephone text-dark fs-3"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="text-white text-uppercase">Call Us</h6>
                                <span class="text-white">+91 9876543210</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-n5 wow fadeIn" data-wow-delay="0.7s">
                        <div class="bg-white p-5">
                            <h2 class="text-uppercase mb-4">Contact Us</h2>
                            <div class="row g-3">

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 bg-light" id="mail"
                                            placeholder="Your Email">
                                        <label for="mail">Your Email</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="mobile"
                                            placeholder="Your Mobile">
                                        <label for="mobile">Your Mobile</label>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 bg-light"
                                            placeholder="Leave a message here" id="message"
                                            style="height: 130px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>

                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-100 py-3" type="button"
                                        onclick="sendWhatsApp()">Submit Now</button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid px-0 wow fadeInUp" data-wow-delay="0.5s">
            <iframe class="w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d55612.262615232656!2d76.93165921798264!3d29.406388587997014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKhasra%20Number%201535%20Janak%20Garden%20Purewal%20Colony%2C%20Panipat-132103%2C%20Haryana%2C%20India!5e0!3m2!1sen!2sin!4v1764936248205!5m2!1sen!2sin"
                frameborder="0" style="min-height: 500px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
    <!-- Contact End -->

    <!-- footer -->
    <?php include('footer.php') ?>