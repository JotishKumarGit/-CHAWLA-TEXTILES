<!-- Enquiry Modal -->

<div class="modal fade" id="enquiryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header" style="background:#c58624; color:#fff;">
                <h5 class="modal-title">Send Enquiry</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="enquiryForm">

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-semibold">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label fw-semibold">Email</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label fw-semibold">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>

                        <div class="col-md-6">
                            <label for="subject" class="form-label fw-semibold">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>

                        <div class="col-12">
                            <label for="message" class="form-label fw-semibold">Message</label>
                            <textarea class="form-control" id="message" rows="3" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn w-100 text-white mt-3" style="background:#c58624;">
                        Submit & WhatsApp
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- enquiry  -->
<script>
    document.getElementById("enquiryForm").addEventListener("submit", function(event) {
        event.preventDefault();

        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let phone = document.getElementById("phone").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        // Replace with your WhatsApp business or personal number
        let whatsappNumber = "918888888888";

        let whatsappMessage =
            `*New Website Enquiry*%0A%0A` +
            `*Name:* ${name}%0A` +
            `*Email:* ${email}%0A` +
            `*Phone:* ${phone}%0A` +
            `*Subject:* ${subject}%0A` +
            `*Message:* ${message}`;

        // Open WhatsApp chat
        window.open(`https://wa.me/${whatsappNumber}?text=${whatsappMessage}`, "_blank");
    });
</script>

<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Our Office</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Khasra Number 1535 Janak
                    Garden
                    Purewal Colony, Panipat-132103, Haryana, India</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-light me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="about.html">About Us</a>
                <a class="btn btn-link" href="contact.html">Contact Us</a>
                <a class="btn btn-link" href="blog.html">Blog</a>
                <a class="btn btn-link" href="gallery.html">Gallery</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Business Hours</h5>
                <p class="text-uppercase mb-0">Monday - Friday</p>
                <p>09:00 am - 07:00 pm</p>
                <p class="text-uppercase mb-0">Saturday</p>
                <p>09:00 am - 12:00 pm</p>
                <p class="text-uppercase mb-0">Sunday</p>
                <p>Closed</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase text-light mb-4">Gallery</h5>
                <div class="row g-1">
                    <div class="col-4">
                        <img class="img-fluid" src="img/gallery/g_1.webp" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="img/gallery/g_10.webp" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="img/gallery/g_11.webp" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="img/gallery/g_12.webp" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid" src="img/gallery/g_14.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid text-body copyright py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="fw-semi-bold" href="#">CHAWLA TEXTILES</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Designed By <a class="fw-semi-bold" href="https://trade4export.com">Trade4Export</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- sending message on whatsapp -->
<script>
    function sendWhatsApp() {
        let name = document.getElementById("name").value;
        let mail = document.getElementById("mail").value;
        let mobile = document.getElementById("mobile").value;
        let subject = document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        let whatsappNumber = "919876543210"; // ← Your WhatsApp number (without +)

        let url = "https://wa.me/" + whatsappNumber + "?text=" +
            "Name: " + name + "%0A" +
            "Email: " + mail + "%0A" +
            "Mobile: " + mobile + "%0A" +
            "Subject: " + subject + "%0A" +
            "Message: " + message;

        window.open(url, "_blank");
    }
</script>

<!-- dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // For mobile – click to open submenu
        document.querySelectorAll('.dropdown-submenu > a').forEach(function(element) {
            element.addEventListener('click', function(e) {

                if (window.innerWidth < 992) {
                    e.preventDefault();

                    let parent = this.parentElement;
                    let submenu = this.nextElementSibling;

                    parent.classList.toggle("show");

                    if (submenu) {
                        submenu.style.display =
                            submenu.style.display === "block" ? "none" : "block";
                    }

                    // Close other open menus
                    document.querySelectorAll(".dropdown-submenu").forEach((item) => {
                        if (item !== parent) {
                            item.classList.remove("show");
                            let inner = item.querySelector(".dropdown-menu");
                            if (inner) inner.style.display = "none";
                        }
                    });
                }
            });
        });

    });
</script>

</body>

</html>