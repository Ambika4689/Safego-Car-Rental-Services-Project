<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can add additional processing logic here, such as sending an email or saving the data to a database.

    echo "Thank you, $name, for your message!";
} else {
    // Handle invalid requests.
    echo "Invalid request.";
}
?>
