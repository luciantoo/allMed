<?php

$action = $_GET["action"];

switch ($action) {
  case "help":
    include 'help.php';
    break;
  case "register":
	include 'register.html';
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
  case "create":
	include 'create.php';
	break;
  case "previous":
	include 'previous.php';
	break;
  case "approve":
	include 'approve.php';
	break;
  case "details":
	include 'detail.php';
	break;
  case "edit":
	include 'edit.php';
	break;
  case "request":
	include 'request.php';
	break;
  default:
    include 'notfound.php';
}