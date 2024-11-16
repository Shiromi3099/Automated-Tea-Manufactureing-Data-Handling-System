<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";

$conn = new mysqli("localhost", "root", "", "atmdhs");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Start the session
        $_SESSION["loggedin"] = true;

        // Store user ID in the session
        $_SESSION["user_id"] = $row["user_id"];

        // Check user type and redirect accordingly
        $userType = $row["user_type"];

        if ($userType === "admin") {
            header("Location: Dash.php");
        } elseif ($userType === "fo") {
            header("Location:fodash.php");
        } elseif ($userType === "senior-fo") {
            header("Location:shiftingdept.php");
        } elseif ($userType === "asst-fo1") {
            header("Location: Areationdept.php");
        } elseif ($userType === "asst-fo2") {
            header("Location: Rollingdept.php");
        } elseif ($userType === "junior-fo1") {
            header("Location:witheringdept.php");
        } elseif ($userType === "supplier") {
            header("Location: supdash.php");
        } elseif ($userType === "tea-buyer") {
            header("Location: teabuyerdash.php");
        } elseif ($userType === "finance") {
            header("Location: financedash.php");
        } else {
            // Handle other user types or unexpected cases
            echo '<script>alert("Unknown user type. Please contact support.");</script>';
        }

        exit();
    } else {
        // Authentication failed
        echo '<script>alert("Invalid email or password. Please try again.");window.location.href = login.php ;</script>';
    }

    exit();
}

$conn->close();
?>

<!-- Rest of your HTML code -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ATMDHS.log in</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


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
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="img/l2.PNG" alt="logo" width="250">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Log in</h1>
							<form method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                                    <div class="invalid-feedback" id="emailValidationFeedback">
                                Email  is required
                                    </div>
                                </div>
                                

								<div class="mb-3">
                                    <div class="mb-2 w-100">
                                        <label class="text-muted" for="password">Password</label>
                                       
                                    </div>
                                    <div class="password-toggle">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        <span class="toggle-icon" onclick="togglePasswordVisibility()">
                                            <i class="far fa-eye" id="toggleIcon"></i>
                                        </span>
                                    </div>
                                    <div class="invalid-feedback" id="passwordValidationFeedback">
                                        Password is required
                                    </div>
                                </div>
                                
								<div class="d-flex align-items-center">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                        <label for="remember" class="form-check-label">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary ms-auto" onclick="submitForm()">
                                        Login
                                    </button>
                                </div>
                                
							</form>
						</div>
                    </div>
                </div>
            </div>
        </div>>
 </section>
</body>
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
    <script src="js/js1.js"></script>
    <script>
    // Function to set the state of the checkbox
    function setRememberState() {
        var rememberCheckbox = document.getElementById('remember');
        var rememberState = localStorage.getItem('rememberState');
        
        if (rememberState === 'checked') {
            rememberCheckbox.checked = true;
        } else {
            rememberCheckbox.checked = false;
        }
    }

    // Function to store the state of the checkbox
    function storeRememberState() {
        var rememberCheckbox = document.getElementById('remember');

        if (rememberCheckbox.checked) {
            localStorage.setItem('rememberState', 'checked');
        } else {
            localStorage.setItem('rememberState', 'unchecked');
        }
    }

    // Function to submit the form
    function submitForm() {
        // Your form submission logic goes here
        
        // Store the state of the remember checkbox
        storeRememberState();
    }

    // Set the state of the checkbox when the page loads
    window.onload = setRememberState;
</script>
    <script>
        // Function to display the unknown user type alert
        function showUnknownUserTypeAlert() {
            alert("Unknown user type. Please contact support.");
        }

        // Function to display the invalid email or password alert
        function showInvalidCredentialsAlert() {
            alert("Invalid email or password. Please try again.");
        }
    </script>
</body>
    
</html>