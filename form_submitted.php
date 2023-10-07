<?php
  if(isset($_POST['submit'])) {
    $to = "yourmail@gmail.com";
    $subject = "Form Submission";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $email;
    mail($to, $subject, $message, $headers);
    echo "Email sent successfully.";
  }
// not full
?>