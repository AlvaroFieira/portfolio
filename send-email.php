<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email configuration
$to = 'alvarofw@gmail.com'; 
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Message content
$email_body = "Name: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Subject: $subject\n\n";
$email_body .= "Message:\n$message\n";

// Send the email
if (mail($to, $subject, $email_body, $headers)) {
    echo "Message sent successfully!";
} else {
    echo "Failed to send the message. Please try again later.";
}
?>
