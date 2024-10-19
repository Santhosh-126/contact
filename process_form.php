<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $message = $_POST['textarea'];

    // Email details
    $to = "santhoshkumarx2002@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Phone: $phone\n" .
            "Message: $message\n";

    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
