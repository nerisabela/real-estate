<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "contact@magictoweb.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $fullMessage = "Name: $name\nEmail: $email\nPhone: $phone\n\n$message";

    // Send email
    mail($to, $subject, $fullMessage, $headers);

    // Redirect after submission (you can customize the URL)
    header("Location: thank_you.html");
    exit();
}

?>