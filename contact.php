<?php
if ($_POST) {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  echo "<h1>Thank you for contacting me, $name!</h1>";
  echo "<p>Your message has been received:</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Message: $message</p>";
}
?>