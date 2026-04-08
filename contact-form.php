<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $service = $_POST["service"];
    $message = $_POST["message"];

    $to = "ymosenyegiryanshabba@gmail.com";
    $subject = "New Contact Form Submission";

    $message = "
    New contact message:

    Name: $name
    Phone: $phone
    Email: $email
    Service: $service

    Message: $messageText
    ";

    $headers = "From: Website <ymosenyegiryanshabba@gmail.com>";

    mail($to, $subject, $message, $headers);

    header("Location: thank-you.html");
    exit();
}
?>