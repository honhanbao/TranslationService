<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "nhanbaoho@gmail.com";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        header('Location: ./response.html?name=' . urlencode($name) . '&email=' . urlencode($email) . '&subject=' . urlencode($subject) . '&message=' . urlencode($message));
        exit();
    } else {
        echo "Email sending failed.";
    }
} else {
    echo "Invalid request method.";
}
?>
