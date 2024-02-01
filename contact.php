<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Set the recipient email address
    $to = "singhvinay114@gmail.com"; // Replace with your actual email address

    // Set the subject of the email
    $subject = "New Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n"; // Correct variable name
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n"; // Correct variable name
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Display a confirmation message
    echo "Thank you, $name! Your message has been received and will be processed shortly.";
} else {
    // If the form is not submitted via POST, redirect to the form page
    header("Location: index.html");
    exit();
}
?>



