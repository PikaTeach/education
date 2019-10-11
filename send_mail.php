<?php
  $name = $_GET['name'];
  $email = $_GET['email'];
  $message = $_GET['message'];
  mail('mail.com','Тема',"$name\n$email\n$message");
?>