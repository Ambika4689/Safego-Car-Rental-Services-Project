<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST["fullName"]);
    $mobile = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $car = htmlspecialchars($_POST["car"]);
    $bus = htmlspecialchars($_POST["Bus"]);  // Note: "Bus" is the name attribute in your HTML
    $pickupDate = htmlspecialchars($_POST["pickupDate"]);
    $comments = htmlspecialchars($_POST["comments"]);

    // Email settings
    $to = "usha.biradar009@gmail.com";
    $subject = "New Booking from $name";
    $headers = "From: $email";

    // Construct the email body
    $emailBody = "Name: $name\n";
    $emailBody .= "Mobile Number: $mobile\n";
    $emailBody .= "Email: $email\n";
    $emailBody .= "Selected Car: $car\n";
    $emailBody .= "Selected Bus: $bus\n";
    $emailBody .= "Pickup Date: $pickupDate\n";
    $emailBody .= "Additional Comments:\n$comments";

    // Send the email
    if (mail($to, $subject, $emailBody, $headers)) {
        // Redirect to a thank you page after successful submission
        header("Location: thank_you.html");
        exit();
    } else {
        // Display an error message if the email sending fails
        echo "Error sending email. Please try again.";
    }
}
?>
