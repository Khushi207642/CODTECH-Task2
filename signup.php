<?php
if ($_GET) {
  $name = htmlspecialchars($_GET['name']);
  $email = htmlspecialchars($_GET['email']);
  $password = htmlspecialchars($_GET['password']);

  echo "<h1>Thank you, $name!</h1>";
  echo "<p>Your sign-up details have been received:</p>";
  echo "<p>Email: $email</p>";
  echo "<p>Password: $password</p>";
}
?>