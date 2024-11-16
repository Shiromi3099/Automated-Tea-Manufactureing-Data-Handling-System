<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";

$conn = new mysqli("localhost", "root", "", "atmdhs");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
    <link rel="stylesheet" href="your-css-file.css">
</head>

<body>

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
                    <a href="dashshift.php" class="nav-item nav-link">Back</a>
                </div>
            </div>
        </div>
    </nav>

   
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4">
                    <?php
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM withering_dpt WHERE id = $id";
                        $result = $conn->query($sql);

                       
                        if ($result->num_rows > 0) {
                            $row = $result->fetch_assoc();
                            $inchargeName = $row["inchargeName"];
                            $date = $row["date"];
                            $startHour = $row["startHour"];
                            $startMinute = $row["startMinute"];
                            $endHour=$row["endHour"];
                            $endMinute=$row["endMinute"];
                            $rainfall =$row["rainfall"];
                            $teaLeafTemperature=$row["teaLeafTemperature"];
                            $employeeCount=$row["employeeCount"];
                            $Weight1=$row["Weight1"];
        
                         
                    echo "<div class='user-profile'>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<p class='mb-0'>inchargeName</p>";
                    echo "</div>";
                    echo "<div class='col-sm-9'>";
                    echo "<p class='text-muted mb-0'>" .  $inchargeName . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<hr>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<p class='mb-0'>Date</p>";
                    echo "</div>";
                    echo "<div class='col-sm-9'>";
                    echo "<p class='text-muted mb-0'>" . $date . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<hr>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<p class='mb-0'>Rainfall (mm) </p>";
                    echo "</div>";
                    echo "<div class='col-sm-9'>";
                    echo "<p class='text-muted mb-0'>" .$rainfall . "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "<hr>";
                    echo "<div class='row'>";
                    echo "<div class='col-sm-3'>";
                    echo "<p class='mb-0'>Tea Leaf Temperature(°C) </p>";
                    echo "</div>";
                    echo "<div class='col-sm-9'>";
                    echo "<p class='text-muted mb-0'>" .$teaLeafTemperature. "</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                } else {
                    echo "User with ID $id not found.";
                }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

      </div>
    </div>
  </div>
</section>
</body>



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

</html>