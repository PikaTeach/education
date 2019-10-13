<?php
  session_start();
  if (empty($_POST['login']) or empty($_POST['pass']))
  exit("Input is empty");
  
  $login = $_POST['login'];
  $pass = $_POST['pass'];
  
  $dbhost = 'localhost';
  $dbuser = 'pikabee_sql';
  $dbpass = 'dM*R1vKV';
  $dbname = 'pikabee_sql';
  $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  $mysqli->set_charset("utf8");
  
  $result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'");
  $result = $result->fetch_assoc();
  
  if($result['pass']!=$pass) exit("0");
  
  $_SESSION['name'] = $result['name']; //супер глобальный массив
  $_SESSION['lastname'] = $result['lastname'];
  $_SESSION['login'] = $result['login'];
  $_SESSION['id'] = $result['id'];
  
  echo "1";//Если авторизовался
?>