<?php
header("Location: C:\Users\User\Desktop\New folder\mail.php");
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // You can add your logic here to store the user input in a database or send an email
    echo "Thank you for submitting the form!";

    // Example: Send an email using PHP's mail function
    $to = "carlnakhle@gmail.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    mail($to, $subject, $body);

    // Redirect to a thank you page or display a success message
    header("Location: Home.html");
    exit;
  }
?>