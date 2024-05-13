<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required!";
    exit;
}

// Set email variables
$to = "yushikajhundoo@gmail.com"; // Change this to your email address
$subject = "OVisita - New Message From $name";
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send email
if (mail($to, $subject, $body)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send message. Please try again later.";
}
?>
