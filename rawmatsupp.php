<?php
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

if (isset($_GET['searchName'])) {
    $searchName = $_GET['searchName'];
    $query_firewood = "SELECT supplier_name, quantity, date FROM supply WHERE r_type='firewood' AND supplier_name LIKE '%$searchName%'";
    $query_fuel = "SELECT supplier_name, quantity, date FROM supply WHERE r_type='fuel' AND supplier_name LIKE '%$searchName%'";
    $query_tea_leaves = "SELECT supplier_name, quantity, date FROM supply WHERE r_type='tealeavees' AND supplier_name LIKE '%$searchName%'";
} else {
    // SQL query to select records where r_type is 'firewood'
    $query_firewood = "SELECT supplier_name, quantity, date FROM supply WHERE r_type='firewood'";
    // SQL query to select records where r_type is 'fuel'
    $query_fuel = "SELECT supplier_name, quantity, date FROM supply WHERE r_type='fuel'";
    // SQL query to select records where r_type is 'tea leaves'
    $query_tea_leaves = "SELECT supplier_name, quantity, date FROM supply WHERE r_type='tealeavees'";
}

$result_firewood = mysqli_query($conn, $query_firewood);
$result_fuel = mysqli_query($conn, $query_fuel);

// Debugging Step 2: Echo the query to check for errors
echo "Query for tea leaves: $query_tea_leaves<br>";

// Debugging Step 3: Error handling for the query
$result_tea_leaves = mysqli_query($conn, $query_tea_leaves);
if (!$result_tea_leaves) {
    echo "Query failed: " . mysqli_error($conn); // Display the error message
    // die("Query failed: " . mysqli_error($conn));
}

?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>rawmaterial sup</title>
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
    <link href="css/raw.css" rel="stylesheet">
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
                    <div class="ms-3">
                        <h6 class="mb-0" style="color: white;"></h6>
                        <span style="color:Green;">Factory Officer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="fodash.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Department</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="dashwith.php" class="dropdown-item">Withering Department</a>
                            <a href="dashroll.php" class="dropdown-item">Rolling Department</a>
                            <a href="dashaera.php" class="dropdown-item">Aeration Department</a>
                            <a href="dashshift.php" class="dropdown-item">Shifting Department</a>
                            <a href="dashpack.php" class="dropdown-item">Packing Department</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Raw Materials</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="supplier.php" class="dropdown-item">Supply</a>
                            <a href="rawmatsupp.php" class="dropdown-item">Supply list</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="packingdpt.php" class="nav-item nav-link active" <i class="far fa-file-alt me-2"></i>Packing Department</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Factory Officer</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <!-- Fire Wood and Fuel Tables Container -->
                   
                    <div class="col-md-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Fire Wood</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Quantity (meaters)</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($result_firewood) > 0) {
                                            while ($row = mysqli_fetch_assoc($result_firewood)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['supplier_name'] . "</td>";
                                                echo "<td>" . $row['quantity'] . "</td>";
                                                echo "<td>" . $row['date'] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Fuel Table Container -->
                    <div class="col-md-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Fuel</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Quantity(liters)</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($result_fuel) > 0) {
                                            while ($row = mysqli_fetch_assoc($result_fuel)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['supplier_name'] . "</td>";
                                                echo "<td>" . $row['quantity'] . "</td>";
                                                echo "<td>" . $row['date'] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Tea Leaves Table Container -->
                    <div class="col-md-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Tea Leaves</h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Quantity (Kg)</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (mysqli_num_rows($result_tea_leaves) > 0) {
                                            while ($row = mysqli_fetch_assoc($result_tea_leaves)) {
                                                echo "<tr>";
                                                echo "<td>" . $row['supplier_name'] . "</td>";
                                                echo "<td>" . $row['quantity'] . "</td>";
                                                echo "<td>" . $row['date'] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='3'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Content End -->
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
