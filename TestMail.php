<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "thuzarwinn.87@gmail.com";
    $subject = "Subject of the email";
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully";
    } else {
        echo "Email sending failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Mail Form</title>
</head>
<body>
    <!-- <form action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
    <form action="TestMail" method="post">
        <label for="email">Your Email:</label>
        <input type="email" name="email" required><br>

        <label for="message">Message:</label>
        <textarea name="message" required></textarea><br>

        <input type="submit" value="Send Email">
    </form>
</body>
</html>
