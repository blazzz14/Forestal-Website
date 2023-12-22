<?php
//Submit query to database email host

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = $_POST["form4name"];
    $lastName = $_POST["form4last"];
    $email = $_POST["form4email"];
    $message = $_POST["form4mesg"];
    $sendCopy = isset($_POST["form4checkbox"]) ? true : false;

    // Create the email message
    $subject = "New Form Submission";
    $emailMessage = "First Name: $firstName\n";
    $emailMessage .= "Last Name: $lastName\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Message: $message\n";

    // Send the email
    $to = "business@example.com"; // Replace with your business email
    $headers = "From: $email";

    if ($sendCopy) {
        // If user wants a copy, add their email as a CC
        $headers .= "\r\nCc: $email";
    }

    mail($to, $subject, $emailMessage, $headers);
}
?>


