<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"]; #targets name from form
  $email = $_POST["email"]; #targets Email from form
  $message = $_POST["message"]; #targets message from form

  $to = "youremail@example.com"; #to my email address
  $subject = "New message from $name";  #the subject
  $body = "From: $name\nEmail: $email\n\n$message"; #Email ody

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully."; #if sent, echo message
  } else {
    echo "Error: Message could not be sent.";  #if not sent, echo message
  }
}
?>
