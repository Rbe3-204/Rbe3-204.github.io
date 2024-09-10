<?php
$name = $email = $phone = $message = "";
  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "get") {
    $name = test_input($_get["name"]);
    $email = test_input($_get["email"]);
    $phone = test_input($_get["phone"]);
    $message = test_input($_get["message"]);

    // You can add your logic here to store the user input in a database or send an email
    echo "Thank you for submitting the form!";

    /* Example: Send an email using PHP's mail function
    $to = "carlnakhle@gmail.com";
    $subject = "Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    mail($to, $subject, $body);*/

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    echo "<h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $message;
    echo "</h2>";
    // Redirect to a thank you page or display a success message
    header("Location: index.html");
    exit;
  }
?>