<?php

$action = $_GET["action"];

switch ($action) {
  case "help":
    include 'help.php';
    break;
  case "register":
	include 'register.php';
	break;
  case "login-failed":
	include 'login-failed.php';
	break;
  case "login":
	include 'login.html';
	break;
  case "logout":
	include 'logout.php';
	break;
  default:
    include 'notfound.php';
}