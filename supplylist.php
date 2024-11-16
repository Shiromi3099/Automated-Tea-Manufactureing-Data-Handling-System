<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";

// Create connection
$conn = new mysqli("localhost", "root", "", "atmdhs");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['searchName'])) {
    $searchName = $_GET['searchName'];
    $query = "SELECT * FROM supply WHERE supplier_name LIKE '%$searchName%'";
} else {
    $query = "SELECT * FROM supply";
}

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Finance Dashbord</title>
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
                  <div class="ms-3">
                    <h6 class="mb-0" style="color: white;"></h6>
                    <span style="color:Green;">Finance Department</span>
                  </div>
              </div> 
                <div class="navbar-nav w-100">
                    <a href="financedash.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Reports</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="teatypeortota.php" class="dropdown-item">Tea Types Order</a>
                            <a href="teaorderlist.php" class="dropdown-item">Tea order</a>
                            <a href="supplylist.php" class="dropdown-item">Supply</a>
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
             
                <form class="d-none d-md-flex ms-4" method="get" action="supplylist.php">
                  <input name="searchName" class="form-control bg-dark border-0" type="text" placeholder="Search by Name">
                  <button id="searchButton" type="submit">Search</button>
                </form>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Finance Departmnt </span>
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
                        <h6 class="mb-0">Supplier Table</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Id</th>
                                    <th scope="col">Supplier Name</th>
                                    <th scope="col">RAW Material Type</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Date</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                      
                                
                            <tr>
                            <?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?php echo isset($row['supply_id']) ? $row['supply_id'] : ''; ?></td>
    <td><?php echo isset($row['supplier_name']) ? $row['supplier_name'] : ''; ?></td>
    <td><?php echo isset($row['r_type']) ? $row['r_type'] : ''; ?></td>
    <td><?php echo isset($row['quantity']) ? $row['quantity'] : ''; ?></td>
    <td><?php echo isset($row['date']) ? $row['date'] : ''; ?></td>
    <td>
        <a href="fsreport.php?supply_id=<?php echo $row['supply_id']; ?>" class="btn btn-secondary btn-sm">Report</a>
    </td>
</tr>
<?php
}
?>



</tbody>
</table>
</div>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>

        </td>
    </tr>

                         </thead>
                         
                         <tbody>
                             
                            </tbody>

                      </table>
 
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