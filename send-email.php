<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Set email details
    $to = "malikaa3835@gmail.com"; // Replace with your actual email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    $fullMessage = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Your message has been sent successfully!');</script>";
        echo "<script>window.location.href = 'index.html';</script>"; // Change to your homepage
    } else {
        echo "<script>alert('Failed to send message. Please try again later.');</script>";
    }
}
?>
