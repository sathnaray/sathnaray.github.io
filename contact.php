<?php



if($_POST["submit"]) {
    $recipient="sathnaray@gmail.com";
    $subject="Contact form submitted from personal website";
    $sender=$_POST["fname"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

if($_POST["message"]) {
    mail("sathnaray@gmail.com", "Contact form submitted from personal website", $_POST["message"], "From: $sender <$senderEmail>");
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>

    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>