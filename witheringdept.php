<?php


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "atmdhs";

    // Create connection
    $conn = new mysqli("localhost", "root", "", "atmdhs");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "connection failed";
    }

    $inchargeName = $_POST["inchargeName"];
    $date = $_POST["date"];
    $startHour = $_POST["startHour"];
    $startMinute = $_POST["startMinute"];
    $endHour = $_POST["endHour"];
    $endMinute = $_POST["endMinute"];
    $rainfall = $_POST["rainfall"];
    $teaLeafTemperature = $_POST["teaLeafTemperature"];
    $employeeCount = $_POST["employeeCount"];
    $Weight1 = $_POST["Weight1"];



    $sql = "INSERT INTO withering_dpt (inchargeName, date, startHour, startMinute, endHour, endMinute, rainfall, teaLeafTemperature, employeeCount, Weight1)
            VALUES ('$inchargeName', '$date', '$startHour', '$startMinute', '$endHour', '$endMinute', '$rainfall','$teaLeafTemperature', '$employeeCount', '$Weight1')";

   
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Data inserted successfully');</script>"; // Display popup message
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
   
    


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Junior Asst Factroy officer page</title>
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


<nav class="navbar navbar-dark  bg-dark">
    <div class="btn-group">
      <button class="btn btn-secondary btn-sm" type="button">
         Junior Asst Factroy Officer
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
       <label class="withering-label">Withering Department</label>
      </div>
    </section>
    
 </div>

 <div class="d-flex justify-content-center">
  <div class="card mt-4">
   <div class="card-body">
    <form id="WitheringForm" action="" method="post" class="needs-validation" novalidate autocomplete="off">
      <div class="form-group">
        <label for="inputInchargeName" class="mr-4"> Officer Name</label>
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
              <option value="" disabled selected>Select</option>
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
              <option value="" disabled selected>Select</option>
              <option value="AM">AM</option>
              <option value="PM">PM</option>
            </select>
          </div>
        </div>
        
    </div>
      <div class="form-group">
        <label for="inputRainfall" class="mr-2">Rainfall</label>
        <input type="number" step="" class="form-control" id="inputRainfall" name="rainfall" placeholder="" required />
      </div>

      <div class="form-group">
        <div class="d-flex align-items-center">
          <label for="inputTeaLeafTemperature" class="mr-2">Tea Leaf Temperature</label>
          <input type="number" step="0.1" class="form-control" id="inputTeaLeafTemperature" name="teaLeafTemperature" placeholder="" required />
          <span class="pl-1">°C</span>
        </div>
      </div>

      <div class="form-row align-items-center"> <!-- Use form-row and align-items-center to align label and input horizontally -->
        <div class="form-group col-md-4">
          <label for="inputEmployeeCount" class="mr-2">Labour Count</label>
          <input type="number" class="form-control" id="inputEmployeeCount" name="employeeCount" placeholder="" required />
        </div>
      </div>
      
      <div class="form-group col-md-4">
  <label for="inputWitheredWeight">TeaLeaf Weight</label>
  <div class="d-flex flex-row justify-content-between align-items-center">
    <input type="number" step="1" class="form-control" id="inputWitheredWeight" name="Weight1" placeholder="Withered tea leaf Weight" required />
    <span class="pl-1 pr-2">Kg</span>
  </div>
</div>



      <!-- Start Submit Button -->
      <div class="submit-button-wrapper">
        <button class="btn btn-primary btn-block col-lg-2" type="submit">Submit</button>
      </div>
      <!-- End Submit Button -->
    </form>
  </div>
</body>
 
