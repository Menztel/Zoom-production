<?php

require('includes/PHPMailer/src/PHPMailer.php');
require('includes/PHPMailer/src/SMTP.php');
require('includes/PHPMailer/src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['lastname'])
&& isset($_POST['firstname'])
&& isset($_POST['email'])
&& isset($_POST['phone'])
&& isset($_POST['phone'])) {

// Récupération des informations du formulaire
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


}