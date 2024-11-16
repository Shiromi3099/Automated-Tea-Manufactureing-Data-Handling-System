

<?php

if (isset($_POST['<a href="login01.php" class="nav-item nav-link">Log In</a>
'])) {
  
    
  
    header(" location:C:/xampp/htdocs/demo/login.php"); 
    exit(); 
}
?>
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <title>Automated Tea Manufacture Data Handeling system</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">ATMDHS </h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="product.php" class="nav-item nav-link">Products</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
                <a href="login.php" class="nav-item nav-link">Log In</a>
            </div>
        </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5"> 
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/bg 1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <h2 class="display-1 text-white" mb-7 animated slideInRight">Agarapathana Tea Powder</h2>
                                    <br> </br>
                                    <h3 class="fs-2 text-white">A Sip Filled Delight</h3>
                                    <br> </br>
                                    <br> </br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/bg2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <h3 class="fs-4 text-white">A Sip Filled Delight</h3>
                                    <br>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Agarapathana Tea Powder</h1>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">31</h1>
                                <small class="fs-5 fw-bold">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="img/im4.jfif">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="img/im2.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="img/im3.jfif">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Know About Our Tea Plantation& Our History</h1>
                    <p class="mb-4">All of AgarapathanA PLC  black  tea factories are ISO 22000:2005 certified, and its tea plantations are accredited with Rainforest Alliance and UTZ certifications. Additionally being compliant with the Ethical Tea Partnership (ETP) certifies the Company's commitment to good agricultural practices with highly stringent adherence to environmental best practices, while signifying a responsible approach to augmenting ethical business practices in worker safety and health and preservation of bio-diversity within the plantations.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/service.png" alt="">
                            <h5 class="mb-3">Dedicated Services</h5>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/product.png" alt="">
                            <h5 class="mb-3">Organic Products</h5>
                            
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="about.php">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Why Us!</p>
                    <h1 class="mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Agarapathana PLC is always been intricately connected to people as well as to environmental eco systems that makes the business grow and flourish. We have taken a holistic approach, by developing multiple strategies to focus on enhancing not only our financial performances, but also crucially looking at how we can enrich the lives of our people.</p>
                    
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">31</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Years Experience</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">75</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/h1.jpg" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">6,688 </h1>
                                    <span class="fs-5 fw-semi-bold text-primary"> Hectares</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/e1.jpg" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">35</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Tea Estates</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                
                <h1 class="mb-5">Our Vison,Mission & Values</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/v1.png" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/v1.png" alt="">
                            </div>
                            <h5 class="mb-3">Vision</h4>
                            <p class="mb-4"> "To be the foremost producer of High Quality Tea "</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/m1.png" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/m1.png" alt="">
                            </div>
                            <h5 class="mb-3">Mission</h5>
                            <p class="mb-4">"To maximise land and labour productivity and achieve excellence in the profitable management of the Company in an acceptable and socially responsible manner."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/v2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/v2.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Value</h5>
                            <p class="mb-4">Our Customers: We provide consistently good quality products and excellent service at competitive prices, whilst ensuring continuity of supplies. We are conscious of customer requirements and ever changing market trends and orient our production to suit specific needs.<br></p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 500px;">
                
            <h1 class="mb-5">Gallery</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/g9" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g9.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/g4.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g4.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/g2.webp" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g2.webp" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/g6.webp" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g6.webp" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/g7.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g7.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-15">
                        <a class="d-block" href="img/g1.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/g4.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/g8.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/g8.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Various Tea Powders</h1>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/bopf.jpg" alt="">
                            <div class="product-overlay">    
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">BOPF</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/bop.png" alt="">
                            <div class="product-overlay">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">BOP</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <section class="regular slider">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/op.png" alt="">
                            <div class="product-overlay">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">OP</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/opa.jpg" alt="">
                            <div class="product-overlay">
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">OPA</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <a class="btn btn-secondary rounded-pill py-3 px-3 mt-2"align-items-end href="product.php">>></a>
    </div>
    <!-- Product End -->

        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Certification</p>
                <h1 class="mb-5">Master in Ethical way</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="img/iso.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/haccp.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/gmp.png" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/rainforest.jfif" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="Certification">
                            <img class="img-fluid mb-3" src="img/iso.png" alt="">
                            <p class="fs-5">ISO 22000:2005 specifies requirements for a food safety management system where an organization in the food chain needs to demonstrate its ability to control food safety hazards in order to ensure that food is safe at the time of human consumption.</p>
                            <h5>ISO 22000:2005</h5>
                            <span class="text-primary">Food and Safty commitment</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/haccp.png" alt="">
                            <p class="fs-5">HACCP certification is an international standard defining the requirements for effective control of food safety. It is built around seven principles: Conduct Hazard Analysis of biological, chemical or physical food hazards. Determine critical control points</p>
                            <h5>HACCP</h5>
                            <span class="text-primary">Food and Safty commitment</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/gmp.png" alt="">
                            <p class="fs-5">Good Manufacturing Practice (GMP) is a system for ensuring that products are consistently produced and controlled according to quality standards. It is designed to minimize the risks involved in any production process that cannot be eliminated through testing the final product.</p>
                            <h5>Good Manufacturing Practice (GMP)</h5>
                            <span class="text-primary">Food and Safty commitment</span>
                        </div>
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/rainforest.jfif" alt="">
                            <p class="fs-5">The Rainforest Alliance is an international non-profit organization that is working around the world to protect forests, improve the livelihoods of farmers and forest communities, promote their human rights, and help them mitigate and adapt to the climate crisis. The Rainforest Alliance Certified™ seal is awarded to farms, forests, and businesses that meet rigorous environmental and social standards.</p>
                            <h5>Rainforest Alliance</h5>
                            <span class="text-primary">Environmental and Social Commitments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-3">
                    <img class="img-fluid mb-3" src="img/l2.png" alt="Alternate Text" />
                    <p class="txt_whtie pt_25">PRODUCTS OF EXCELLENCE</p>
                    </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>53 1/ 1,. Sir Baron Jayathilake Mawatha, Colombo 1</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> 0115 388 388</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@lankemplantaion.lk </p>
                <div class="d-flex pt-3">
                <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Productions</h5>
                    <h6 class="text-light">BOPF</h6>
                    <h6 class="text-light">FBOP</h6>
                    <h6 class="text-light">BOP</h6>
                    <h6 class="text-light">OP</h6>
                    <h6 class="text-light">OPA</h6>
                    <h6 class="text-light">DUST</h6>
                    <h6 class="text-light">DUST 1</h6>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Copyright © 2012 Lankem Tea & Rubber Plantations (Pvt.) Limited.</a>, <br>All Right Reserved.</br>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


