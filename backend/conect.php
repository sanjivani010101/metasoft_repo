<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $company_name = trim($_POST['company_name']);
    $email = trim($_POST['email']);
    $countrycode = trim($_POST['countrycode']);
    $mobile = trim($_POST['mobile']);
    $message = trim($_POST['message']);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `contact` (`name`, `company_name`, `email`, `countrycode`, `mobile`, `message`) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $company_name, $email, $countrycode, $mobile, $message);
    
    if ($stmt->execute()) {
        echo "Your message has been submitted successfully!";
    } else {
        echo "Failed to submit. Please try again.";
    }

    $stmt->close();
    $conn->close();
}
?>
