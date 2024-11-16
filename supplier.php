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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $supplierName = $_POST["Suppliername"];
    $date = $_POST["date"];
    $rawmaterial = $_POST["rawmaterial"];
    $quantity = $_POST["Quantity"];
    $measurement = $_POST["measurement"];

    // Retrieve user_id based on supplier name and usr_type = 'supplier'
    $sql = "SELECT user_id FROM users WHERE username = '$supplierName' AND user_type = 'supplier'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, fetch user_id
        $row = $result->fetch_assoc();
        $user_id = $row["user_id"];

        // Insert data into the supply table
        $sql_insert = "INSERT INTO supply (user_id, supplier_name, date, r_type, quantity, measurement) 
                        VALUES ('$user_id', '$supplierName', '$date', '$rawmaterial', '$quantity', '$measurement')";

        if ($conn->query($sql_insert) === TRUE) {
            // Update the quantity in the rawmaterial table
            $update_sql = "UPDATE rawmaterial SET t_quantity = (SELECT SUM(quantity) FROM supply WHERE r_type = '$rawmaterial') WHERE r_type = '$rawmaterial'";
            if ($conn->query($update_sql) === TRUE) {
                echo '<script>alert("Record inserted successfully and quantity updated in rawmaterial table");</script>';
            } else {
                echo "Error updating quantity in rawmaterial table: " . $conn->error;
            }
        } else {
            echo "Error inserting record: " . $conn->error;
        }
    } else {
        echo "Supplier not found.";
    }
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Supply details </title>
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
</head>


<nav class="navbar custom-navbar-color-green"></nav>
  <nav class="navbar navbar-dark  bg-dark">
    <div class="btn-group">
      <button class="btn btn-secondary btn-sm" type="button">
        Factroy Officer
      </button>
    </div>

    <div class="btn-group">
    <a href="fodash.php" class="btn btn-secondary btn-sm">
  BACK
</a>

    </div>
  </div>
</nav>
<body>
  
 <div class="container-fluid">
    <div class="logo-container">
     <img src="img/l2.PNG" alt="logo" width="250">
    </div>
   
    
 </div>

 <div class="d-flex justify-content-center">
            <div class="card mt-4">
                <div class="card-body">
                    <form id="WitheringForm" action="" method="POST" class="needs-validation" novalidate
                        autocomplete="off">

                        <div class="form-group row">
                            <label for="inputInchargeName" class="col-sm-4 col-form-label">Supplier Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputsupplierName" name="Suppliername"
                                    placeholder="" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputDate" class="col-sm-4 col-form-label">Date</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="inputDate" name="date" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputMachine" class="col-sm-4 col-form-label">Raw material</label>
                            <div class="col-sm-8">
                                <select class="form-control" id="inputrawmaterial" name="rawmaterial" required>
                                <option value="" disabled selected>Select Raw material</option>
                                <option value="Tealeavees">Tea Leaves</option>
                                <option value="Fuel">Fuel</option>
                                <option value="Firewood"> Firewood</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputWeight" class="col-sm-4 col-form-label">Quantity</label>
                            <div class="col-sm-8">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <input type="number" step="1" class="form-control" id="inputQuantity"  name="Quantity" placeholder="" required />
                                    <select class="form-control ml-2" id="inputmeasurement" name="measurement" required>
                                          <option value="" ></option>
                                          <option value="Kilograms">kg</option>
                                          <option value="liters ">l</option>
                                          <option value="Meaters">M</option>
                                    </select>
                                </div>
                            </div>
                        </div>
        

        <!-- Start Submit Button -->
        <div class="submit-button-wrapper">
    <button class="btn btn-primary btn-block col-lg-5" type="submit">Submit</button>
</div>
<!-- End Submit Button -->

    </div>
  </div>
   

</body>
</html>