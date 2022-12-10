<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  // Set the recipient email address
  $to = 'cristi4pb@gmail.com';
  // Set the email subject
  $subject = '