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
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">Pouf</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item" aria-current="page">Pouf</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- products details -->
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <!-- Left Side: Product Image -->
            <div class="col-md-6">
                <img src="img/Pouf.avif" class="img-fluid rounded" alt="Pouf" style="width:100%; height:auto;">
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h1 class="mb-3">Pouf</h1>
                <p class="mb-3">
                    Add comfort and style to your living space with this beautifully crafted pouf.
                    Designed for versatility, it can be used as a footrest, extra seating, or a decorative accent piece.
                </p>

                <ul class="list-unstyled mb-4">
                    <li>✔ Made with premium-quality fabric for durability</li>
                    <li>✔ Soft and comfortable cushioning</li>
                    <li>✔ Lightweight and easy to move around</li>
                    <li>✔ Perfect for living rooms, bedrooms, and lounge areas</li>
                    <li>✔ Stylish design that complements any decor</li>
                </ul>

                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry
                </button>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>