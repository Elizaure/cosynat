<?php
 require'src/PHPmailer.php';
require'src/SMTP.php';
require'src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port="587";

$mail->Username="cosynat@gmail.com";

$mail->Password="c0synat56&&";
?>
	