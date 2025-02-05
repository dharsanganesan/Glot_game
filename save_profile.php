<?php
// Include the header (if necessary)
include("header.php");

// Initialize the session to store user data
session_start();

// Assuming user information is stored in the session, fetch and save the new details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the updated data from the form
    $name = $_POST['name'];           // Full Name
    $permanent_code = $_POST['permanent_code']; // Permanent Code (not editable)
    $gender = $_POST['gender'];       // Gender
    $dob = $_POST['dob'];             // Date of Birth

    // Assuming you're storing user data in the session
    $_SESSION['name'] = $name;
    $_SESSION['gender'] = $gender;
    $_SESSION['dob'] = $dob;

    // You can also store these details in a database here if needed

    // Redirect to profile.php after saving the data
    header("Location: profile.php");
    exit();
}
?>

