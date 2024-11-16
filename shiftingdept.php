<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

    // Prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO shifting_dpt (inchargeName, date, startHour, startMinute, endHour, endMinute, mtype, MachineCount, employeeCount, tetype, Weight1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ssiiiiiiiss", $inchargeName, $date, $startHour, $startMinute, $endHour, $endMinute, $machinetype, $machineCount, $employeeCount, $teatype, $weight1);

    // Check if the required keys exist in $_POST
    $inchargeName = isset($_POST["inchargeName"]) ? $_POST["inchargeName"] : '';
    $date = isset($_POST["date"]) ? $_POST["date"] : '';
    $startHour = isset($_POST["startHour"]) ? $_POST["startHour"] : '';
    $startMinute = isset($_POST["startMinute"]) ? $_POST["startMinute"] : '';
    $endHour = isset($_POST["endHour"]) ? $_POST["endHour"] : '';
    $endMinute = isset($_POST["endMinute"]) ? $_POST["endMinute"] : '';
    $machinetype = isset($_POST["machineName"]) ? $_POST["machineName"] : '';
    $machineCount = isset($_POST["count"]) ? $_POST["count"] : '';
    $employeeCount = isset($_POST["employeeCount"]) ? $_POST["employeeCount"] : '';
    $teatype = isset($_POST["Tea_Type"]) ? $_POST["Tea_Type"] : '';
    $weight1 = isset($_POST["Weight1"]) ? $_POST["Weight1"] : '';

    // Fetch the weight from the database for the selected tea type
    $sql_weight = "SELECT a_weight FROM teatype WHERE tetype = ?";
    $stmt_weight = $conn->prepare($sql_weight);
    $stmt_weight->bind_param("s", $teatype);
    $stmt_weight->execute();
    $result_weight = $stmt_weight->get_result();

    if ($result_weight->num_rows > 0) {
        $row = $result_weight->fetch_assoc();
        $current_weight_from_db = $row["a_weight"];
        
        // Add current weight to the new weight
        $weight1 += $current_weight_from_db;

        // Update the weight in the teatype table
        $sql_update_weight = "UPDATE teatype SET a_weight = ? WHERE tetype = ?";
        $stmt_update_weight = $conn->prepare($sql_update_weight);
        $stmt_update_weight->bind_param("ss", $weight1, $teatype);

        if ($stmt_update_weight->execute()) {
            echo "<script>alert('Weight updated successfully');</script>"; // Display popup message
        } else {
            echo "Error updating weight: " . $conn->error;
            exit(); // Terminate script
        }
    } else {
        // Handle the case where the tea type is not found in the database
        echo "Error: Tea type not found in the database.";
        exit(); // Terminate script
    }

    // Execute prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Data inserted successfully');</script>"; // Display popup message
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statements and connection
    $stmt->close();
    $stmt_weight->close();
    $stmt_update_weight->close();
    $conn->close(); // Close connection
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Senior Asst Factroy officer page</title>
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

<div class="collapse" id="navbarToggleExternalContent">
  <div class="custom-collapsed-content p-4">
    <h5 class="custom-collapsed-heading h4">Collapsed content</h5>
    <span class="custom-collapsed-text">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar custom-navbar-color-green"></nav>
  <nav class="navbar navbar-dark  bg-dark">
    <div class="btn-group">
      <button class="btn btn-secondary btn-sm" type="button">
         Senior Asst Factroy Officer
      </button>
    </div>

    <div class="btn-group">
    <a href="index.php" class="btn btn-secondary btn-sm">
  Log out
</a>

    </div>
  </div>
</nav>
<body>
  
 <div class="container-fluid">
    <div class="logo-container">
     <img src="img/l2.PNG" alt="logo" width="250">
    </div>
    <section class="h-70">
      <div class="container h-70">
       <label class="withering-label">Shifting Department</label>
      </div>
    </section>
    
 </div>

 <div class="d-flex justify-content-center">
  <div class="card mt-4">
    <div class="card-body">
      <form id="WitheringForm" action="" method="POST" class="needs-validation" novalidate autocomplete="off">
        <div class="form-group">
          <label for="inputInchargeName" class="mr-2 label-width">Officer Name</label>
          <input type="text" class="form-control" id="inputInchargeName" name="inchargeName" placeholder="" required />
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputDate" class="mr-2">Date</label>
            <input type="date" class="form-control" id="inputDate" name="date" required />
          </div>
  
          <div class="form-group col-md-4">
            <label for="inputStartTimeHour">Start Time</label>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <input type="number" min="1" max="12" class="form-control mr-1" id="inputStartTimeHour" name="startHour" placeholder="HH" required />
              <div class="pl-1 pr-2">:</div>
              <input type="number" min="0" max="59" class="form-control" id="inputStartTimeMinute" name="startMinute" placeholder="MM" required />
              <select class="form-control ml-2" id="inputStartTimeAMPM" name="startAMPM" required>
                <option value="" disabled selected></option>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
              </select>
            </div>
          </div>
          
          
  
          <div class="form-group col-md-4">
            <label for="inputEndTimeHour">End Time</label>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <input type="number" min="1" max="12" class="form-control mr-1" id="inputEndTimeHour" name="endHour" placeholder="HH" required />
              <div class="pl-1 pr-2">:</div>
              <input type="number" min="0" max="59" class="form-control" id="inputEndTimeMinute" name="endMinute" placeholder="MM" required />
              <select class="form-control ml-2" id="inputEndTimeAMPM" name="endAMPM" required>
                <option value="" disabled selected></option>
                <option value="AM">AM</option>
                <option value="PM">PM</option>
              </select>
            </div>
          </div>
          
      </div>
        
</div>
  
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputMachine" class="mr-2">Machine</label>
            <select class="form-control" id="inputMachine" name="machineName" required>
              <option value="" disabled selected>Select Machine</option>
              <option value="Jumbo Fibre Exactactor">Jumbo Fibre Exactactor</option>
              <option value="Bin Feeding Elavator">Bin Feeding Elavator</option>
              <option value="Feeding Elavator"> Feeding Elavator</option>
              <option value="Final Cleaning Fibre Exactor">Final Cleaning Fibre Exactor</option>
              <option value="Winnower">Winnower</option>
            </select>
          </div>
        
          <div class="form-group col-md-4">
            <label for="inputCount" class="mr-2">Count</label>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <input type="number" step="1" class="form-control" id="inputCount" name="count" placeholder="" required />
              
            </div>
          </div>
        </div>
        
    
        <div class="form-row align-items-center"> 
          <div class="add-icon-wrapper form-row align-items-center">
            <i class="bi bi-plus-square-dotted" style="font-size: 1.5rem;"></i>
          </div>
        </div>


        <div class="form-row align-items-center">
          <div class="form-group col-md-4">
            <label for="inputEmployeeCount" class="mr-2 label-width">Labour Count</label>
            <input type="number" class="form-control" id="inputEmployeeCount" name="employeeCount" placeholder="" required />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputTeaType" class="mr-2 label-width">Tea Types</label>
            <select class="form-control" id="inputTeaType" name="Tea_Type" required>
              <option value="" disabled selected>Select Tea Type</option>
              <option value="BOPF">BOPF</option>
              <option value="FBOP">FBOP</option>
              <option value="BOP">BOP</option>
              <option value="BOP1">BOP 1</option>
              <option value="OP">OP</option>
              <option value="OPA">OPA</option>
              <option value="Dust">Dust</option>
              <option value="Dust1">Dust 1</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label for="inputWeight" class="mr-2 label-width">Weight</label>
            <div class="d-flex flex-row justify-content-between align-items-center">
              <input type="number" step="1" class="form-control" id="inputWeight" name="Weight1" placeholder="" required />
              <span class="pl-1 pr-2">Kg</span>
            </div>
          </div>
        </div>

        <!-- Start Submit Button -->
        <div class="submit-button-wrapper">
          <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
        </div>
        <!-- End Submit Button -->
      </form>
    </div>
  </div>
   

</body>
</html>