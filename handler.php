<?php
session_start();

include "FlashMessage.php";

$message = new FlashMessage();


if (empty($_POST['email'])){
    $message->setMessage('danger', "Please, fill in the email");
    header("LOCATION:test.php"); exit;
    }
elseif (empty($_POST['password'])){
    $message->setMessage('danger', "Please, fill in the password");
    header("LOCATION:test.php"); exit;
    }
$message->setMessage('success', "Everything is OK");
header("LOCATION:test.php"); exit;
