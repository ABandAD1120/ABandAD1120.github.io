<?php
header('Content-Type: application/json'); // Set the content type to JSON

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  $to = "abryan14@tctc.edu"; // Replace with your own email address
  $subject = "Message from Byte Burst Techs Website";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  // Send the email
  if (mail($to, $subject, $body, $headers)) {
    echo json_encode(array("message" => "Your message has been sent successfully! We will get back to you soon."));
  } else {
    echo json_encode(array("message" => "Failed to send the message. Please try again later."));
  }
}
?>


