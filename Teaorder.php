<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




// SQL query to select image paths
$sqlSelectImages = "SELECT tetype, image FROM teatype";
$result = $conn->query($sqlSelectImages);

// Associative array to store image paths
$imagePaths = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $imagePaths[$row['tetype']] = $row['image'];
    }
}




// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Detail bopf</title>
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
            <h1 class="m-0">ATMDHS</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="teabuyerdash.php" class="nav-item nav-link">Back</a>
                </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Various Tea Powders</h1>
            </div>
            <div class="row gx-4">
            

            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo $imagePaths['BOPF']; ?>" alt="">
                        <div class="product-overlay">
                        <a class="d-block h5" href="bopforder.php?tetype=BOPF">BOPF</a>
    <input type="hidden" name="tetype" value="BOPF"> 
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="bopforder.php">BOPF</a>
                    </div>
                </div>
            </div>
            
            
            
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['FBOP']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="fboforder.php?tetype=FBOP">FBOP</a>
    <input type="hidden" name="tetype" value="FBOP"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="fboforder.php">FBOP</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['BOP']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="boporder.php?tetype=BOP">BOP</a>
    <input type="hidden" name="tetype" value="BOP"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="boporder.php">BOP</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['BOP1']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="bop1order.php?tetype=BOP1">BOP1</a>
    <input type="hidden" name="tetype" value="BOP1"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="bop1order.php">BOP 1</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['OP']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="oporder.php?tetype=OP">OP</a>
    <input type="hidden" name="tetype" value="OP"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="oporder.php">OP</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['OPA']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="opaorder.php?tetype=OPA">OPA</a>
    <input type="hidden" name="tetype" value="OPA"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="opaorder.php">OPA</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['DUST']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="dustorder.php?tetype=DUST">DUST</a>
    <input type="hidden" name="tetype" value="DUST"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="dustorder.php">DUST</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo $imagePaths['DUST1']; ?>" alt="">
                            <div class="product-overlay">
                            <a class="d-block h5" href="dust1order.php?tetype=DUST1">DUST1</a>
    <input type="hidden" name="tetype" value="DUST1"> <!-- Set the default value -->
    <button class="btn btn-outline-dark" type="submit">
        <i class="bi-cart-fill me-1"></i>
    </button>
</form>

                        </div>
                        </div>
                        <div class="text-center p-4">
                                <a class="d-block h5" href="dust1order.php">DUST 1</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  


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

         
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Copyright © 2012 Lankem Tea & Rubber Plantations (Pvt.) Limited.</a>, <br>All Right Reserved.</br>
                </div>
            </div>
        </div>
    </div>
  


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