<?php
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
// Get the Base64-encoded PDF data from the form submission
// if (isset($_POST["pdfBase64"])) {
// $base64Pdf = $_POST["pdfBase64"];

include("config/config.php");

$result = mysqli_query($con, "SELECT * FROM resources WHERE r_id = 1");

$base64Pdf = mysqli_fetch_assoc($result)["file_url"];

// Decode the Base64 data
$pdfData = base64_decode($base64Pdf);

// Set headers for PDF download
header("Content-Type: application/pdf");
header("Content-Length: " . strlen($pdfData));
header("Content-Disposition: attachment; filename=\"document.pdf\"");

// Output the PDF data
echo $pdfData;
exit;
    // } else {
    //     // Handle case where pdfBase64 parameter is missing
    //     die("Error: PDF data not found.");
    // }
// } else {
//     // Handle case where request method is not POST
//     die("Error: Invalid request method.");
// }
