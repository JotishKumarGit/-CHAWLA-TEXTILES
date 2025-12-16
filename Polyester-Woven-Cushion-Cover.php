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

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary text-white d-none d-lg-flex wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="d-flex gap-2 align-items-center">
                <a href="index.php">
                    <img src="./img/logo.webp" height="100px" width="100%" class="text-white fw-bold m-0" alt="">
                </a>
                <a href="index.php">
                    <h2 class="text-white fw-bold m-0"> CHAWLA TEXTILES</h2>
                </a>

                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Khasra Number 1535 Janak Garden
                        <br>Purewal Colony, Panipat-132103, Haryana, India</small>
                    <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                    <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-primary ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- header -->
    <?php include('header.php') ?>

    <!-- products details -->
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <!-- Left Side: Product Image -->
            <div class="col-md-6">
                <img src="img/Polyester_Woven_Cushion_Cover.webp" class="img-fluid rounded"
                    alt="Polyester Woven Cushion Cover" style="width:100%; height:auto;">
            </div>

            <!-- Right Side: Product Details -->
            <div class="col-md-6">
                <h1 class="mb-3">Polyester Woven Cushion Cover</h1>
                <p class="mb-3">
                    Add a touch of contemporary style to your home with this elegant polyester woven cushion cover.
                    Designed with textured woven patterns, it enhances the look of any living room or bedroom setting.
                </p>

                <ul class="list-unstyled mb-4">
                    <li>✔ Made from high-quality woven polyester fabric</li>
                    <li>✔ Soft, durable, and resistant to wear and tear</li>
                    <li>✔ Textured woven design for a modern and stylish look</li>
                    <li>✔ Easy-to-clean and fade-resistant material</li>
                    <li>✔ Available in multiple colors and sizes</li>
                </ul>

                <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enquiryModal">
                    Enquiry
                </button>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('footer.php') ?>