<?php
require_once('D:\xammp\htdocs\TCPDF-main\tcpdf.php'); // Include TCPDF library

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmdhs";

$conn = new mysqli("localhost", "root", "", "atmdhs");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if order_id is set and fetch its details
if(isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    $sql = "SELECT * FROM teaorder WHERE order_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $order_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $date = $row['order_date']; // Store order_date separately
    } else {
        die("Invalid Order ID.");
    }
} else {
    die("Order ID not provided.");
}

// Create a new TCPDF instance
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Creator');
$pdf->SetAuthor('Author');
$pdf->SetTitle('Raw Material Supply Report');
$pdf->SetSubject('Raw Material Supply Report');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);

// Header
$htmlHeader = '
<style>
body {
    font-family: Arial, sans-serif;
    font-size: 12px;
}

.header {
    text-align: left;
    margin-bottom: 20px;
    display: flex; /* Use flexbox to align items */
    justify-content: space-between; /* Distribute space between items */
    align-items: center; /* Center items vertically */
}

.header h1 {
    color: #228b22;
    font-size: 20px;
    margin: 0;
    order: 2; /* Move h1 to the right */
}

.company-info {
    text-align: right; /* Align text to the left */
    order: 1; /* Move company info to the left */
}

.company-info .company-name {
    font-size: 16px; /* Adjust font size for the company name */
    font-weight: bold; /* Make the company name bold */
    margin-bottom: 2px; /* Decrease the space below the company name */
    text-align: right;
}



.table {
    border-collapse: collapse;
    width: 100%;
}

.table th,
.table td {
    border: 1px solid #000; /* Add border to table cells */
    padding: 8px;
}

.footer h2 {
    color: #228b22; /* Change color as needed */
    font-size: 15px; /* Change font size as needed */
    font-weight: bold; /* Change font weight as needed */
    margin-bottom: 10px; /* Adjust spacing as needed */
}


.footer p.company-type {
    color: #000000; /* Change color as needed */
    font-size: 10px; /* Change font size as needed */
    margin-bottom: 5px; /* Adjust spacing as needed */
}

/* Style for regular p elements */
.footer p {
    color: #000000; /* Change color as needed */
    font-size: 10px; /* Change font size as needed */
    margin-bottom: 5px; /* Adjust spacing as needed */
}
</style>
<div class="header">

    <div class="company-info">
        <p class="company-name">Agarapathana Tea Plantation PVT Ltd</p>
     
        <h1>TeaOrder Report</h1>
    </div>
   
</div>';
// Body
$htmlBody = '<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>TeaBuyer Name</th>
            <th>Tea Type</th>
            <th>Quantity</th>
            <th>Order Date</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>' . $row['order_id'] . '</td>
            <td>' . $row['teabuyer_name'] . '</td>
            <td>' . $row['tetype'] . '</td>
            <td>' . $row['order_weight'] . '</td>
            <td>' . $row['order_date'] . '</td>
        </tr>
    </tbody>
</table>';

// Footer
$htmlFooter = '<div class="footer">
<h2>Thank you and Best Wishes</h2>
<p class="company-type">PRODUCTS OF EXCELLENCE</p>
<p>53 1/1,. Sir Baron Jayathilake Mawatha, Colombo 1</p>
<p>0115 388 388</p>
<p>info@lankemplantation.lk</p>
</div>';

// Set the file name
$pdfFileName = 'Teaorder Report.pdf';

// Output PDF as a download
$pdf->writeHTML($htmlHeader . $htmlBody . $htmlFooter, true, false, true, false, '');

$pdf->Output($pdfFileName, 'D');

// Close statement and connection
$stmt->close();
$conn->close();
?>

