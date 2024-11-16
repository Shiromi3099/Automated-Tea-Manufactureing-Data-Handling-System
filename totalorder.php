<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders for the logged-in user
if (!isset($_SESSION["loggedin"]) || !isset($_SESSION["user_id"])) {
    die("User not logged in.");
}

$user_id = $_SESSION["user_id"];

// Fetch total orders for each tea type for the specific user
$total_orders_query = "SELECT tetype, SUM(order_weight) AS total_quantity FROM teaorder WHERE user_id = ? GROUP BY tetype";
$total_orders_stmt = $conn->prepare($total_orders_query);

if (!$total_orders_stmt) {
    die("Error in preparing statement: " . $conn->error);
}

$total_orders_stmt->bind_param("i", $user_id);
$total_orders_stmt->execute();
$total_orders_result = $total_orders_stmt->get_result();

if (!$total_orders_result) {
    die("Error in SQL query: " . $conn->error);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tea Buyer Dashbord</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min1.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style02.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>ATMDHS</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                <?php
            // Fetch username based on user_id
            $user_id = $_SESSION["user_id"];
            $username_query = "SELECT username FROM users WHERE user_id = $user_id";
            $username_result = $conn->query($username_query);

            if ($username_result) {
                $row = $username_result->fetch_assoc();
                $username = $row["username"];
                echo '<div class="ms-3">
                      
                        <h4 style="color:Green;"> ' . $username . '</h4>
                    </div>';
            } else {
                echo "Error fetching username: " . $conn->error;
            }
            ?>
            </div>
                <div class="navbar-nav w-100">
                    <a href="teabuyerdash.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2">Orders</i></a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="totalorder.php" class="dropdown-item">order list</a>
                            <a href="Teaorder.php" class="dropdown-item">Add New Orders</a>
                            
                        </div>
                    </div>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                  
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Add New order</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            
                            <hr class="dropdown-divider">
                            <a href="Teaorder.php" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New Orders</h6>
                            </a>                           
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Tea Buyer</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                        
 
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid1 pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Total Tea order</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Tea Type</th>
                                    <th scope="col">Total order(kgs)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
        // Loop through the fetched data and populate the table rows
        while ($row = $total_orders_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['tetype'] . "</td>";
            echo "<td>" . $row['total_quantity'] . "</td>";
            echo "</tr>";
        }
        ?>
  

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>