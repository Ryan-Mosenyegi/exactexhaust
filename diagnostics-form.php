<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $issue = $_POST['issue'];
    $symptoms = $_POST['symptoms'];

    $to ="mosenyegiryanshabba@gmail.com";
    $subject = "$make $model Diagnostics Request";

    $message = "
    
    New Diagnostics request:

    Name: $name
    Phone: $phone
    Email: $email

    Vehicle: $make $model ($year)

    Issue: $issue
    Symptoms: $symptoms
    ";

    $headers = "From: Website <ymosenyegiryanshabba@gmail.com>";
    $headers .= "\r\nReply-To: $email";

    mail($to, $subject, $message, $headers);

    header("Location: thank-you.html");
    exit();
}
?>