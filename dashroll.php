<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";


$conn = new mysqli("localhost", "root", "", "atmdhs");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$query = "SELECT * FROM rolling_dpt";
$result = mysqli_query($conn, $query);

if (isset($_GET['searchDate'])) {
    $searchDate = $_GET['searchDate'];
    $query = "SELECT * FROM rolling_dpt WHERE date = '$searchDate'";
} else {
    $query = "SELECT * FROM rolling_dpt";
}

$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>foDash.roll</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


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
    <link href="css/style02.css" rel="stylesheet">
    <link href="css/search.css" rel="stylesheet">
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Deprtment</a>
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
                        <a href="packingdpt.php" class="nav-item nav-link active"  <i class="far fa-file-alt me-2"></i>Packing Department</a>

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
                
                
                <form class="d-none d-md-flex ms-4" method="get" action="dashroll.php">
    <input name="searchDate" class="form-control bg-dark border-0" type="date" placeholder="Search">
    <button id="searchButton" type="submit">Search</button>
</form>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <span class="d-none d-lg-inline-flex">Factory Officer</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="view.php" class="dropdown-item">My Profile</a>
                            <a href="index.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
           

                  <div class="container-fluid1 pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Rolling Department</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Incharge Officer Name</th>
                                    <th scope="col">Tea Leaf Temperature</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Action</th>
                             </tr>   
                            </thead>
                        <tbody> 
                                
                            <tr>
                              <?php
                                 while ($row = mysqli_fetch_assoc($result)) {
                               ?>
                               <tr>
                                    <td><?php echo $row['id']; ?></td>
                                     <td><?php echo $row['date']; ?></td>
                                     <td><?php echo $row['inchargeName']; ?></td>
                                     <td><?php echo $row['teaLeafTemperature']; ?></td>
                                     <td><?php echo $row['Weight1']; ?></td>
                                    <td>
                                     <a href="viewroll.php?id =<?php echo $row['id']; ?>" class="btn btn-secondary btn-sm">View</a>
                
                                     <a href="editroll.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary btn-sm">Edit</a>
                
                                     <a href="rolldel.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                                  </td>
                              </tr>
                              <?php
                                 }
                                ?>
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
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     <script src="sscript.js"></script>
</body>

</html>