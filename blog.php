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
                        <h1 class="display-6 text-uppercase mb-3 animated slideInDown">Blog</h1>
                        <nav aria-label="breadcrumb animated slideInDown">
                            <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item" aria-current="page">Blog</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Blog Section -->
    <section id="blog" class="py-5" style="background:#fff;">
        <div class="container">

            <!-- Section Title -->

            <div class="text-center mb-5">
                <h2 style="color:#c58624; font-weight:700;">Latest From Our Blog</h2>
                <p class="text-muted">Insights, news and tips from Chawla Textiles</p>
            </div>

            <!-- Blog Posts Grid -->
            <div class="row g-4">

                <!-- Blog Post Card -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm blog-card">
                        <img src="img/Bathroom_Rug_Mat.webp" class="card-img-top blog-img" alt="Blog Post 1">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Choosing the Perfect Floor Rug for Your Home</h5>
                            <p class="card-text text-muted flex-grow-1">Explore tips on selecting the ideal comfort
                                floor rugs to elevate your living space.</p>
                            <a href="contact.php" class="btn btn-sm text-white mt-2" style="background:#c58624;">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post Card -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm blog-card">
                        <img src="img/Cotton_Cushion_Cover.webp" class="card-img-top blog-img" alt="Blog Post 2">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Top Trends in Textile Design for 2025</h5>
                            <p class="card-text text-muted flex-grow-1">Stay updated with the latest textile patterns
                                and colors that are trending this year.</p>
                            <a href="contact.php" class="btn btn-sm text-white mt-2" style="background:#c58624;">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post Card -->
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm blog-card">
                        <img src="img/Cotton_Table_Mat.webp" class="card-img-top blog-img" alt="Blog Post 3">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">How to Care for Your Textiles and Rugs</h5>
                            <p class="card-text text-muted flex-grow-1">Learn the best practices for cleaning and
                                maintaining your textiles to keep them fresh.</p>
                            <a href="contact.php" class="btn btn-sm text-white mt-2" style="background:#c58624;">Read
                                More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- end blog  -->
  
        <!-- footer -->
    <?php include('footer.php') ?>