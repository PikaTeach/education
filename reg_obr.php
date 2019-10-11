<?php
  if (empty($_POST['login']) or empty($_POST['name']) or empty($_POST['lastname']) or empty($_POST['pass']))
    exit("input is empty");
    
  $login  =   $_POST['login'];
  $name   =   $_POST['name'];
  $lastname = $_POST['lastname'];
  $pass   =   $_POST['pass'];
  
  $dbhost = 'localhost';
  $dbuser = 'pikabeget_sql';
  $dbpass = 'bFO9*B46';
  $dbname = 'pikabeget_sql';
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  $mysqli->set_charset("utf8");
  
  $result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'");
  $result = $result->fetch_assoc();
  if(!empty($result)) exit("Login login is not available");
  //var_dump($result);
  //$result = $mysqli->query("INSERT INTO `users`(`login`, `pass`, `name`, `lastname`) VALUES ('$login','$pass','$name','$lastname')");
  //var_dump($mysqli);
  if ($result) echo "success<br>";
  else echo "error<br>";
  
  echo "$login\n$name\n$lastname\n$pass";
?>