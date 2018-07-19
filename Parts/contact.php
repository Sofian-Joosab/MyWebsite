<?php
require '../PHPMailer-master/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'sofianjoosab12345';          // SMTP username
$mail->Password = 'sofianjoosab69'; // SMTP password
$mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                          // TCP port to connect to

$mail->setFrom('sofian.joosab@website.com', 'Sofian');
$mail->addReplyTo($email, 'Sofian Website');
$mail->addAddress('sofian.joosab@gmail.com');   // Add a recipient
$mail->addCC('');
$mail->addBCC('');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = $message;

$mail->Subject = $subject;
$mail->Body    = $bodyContent;

if(!$mail->send()) {
	header("Location: ../emailerror.php");
} else {
    header("Location: ../emailsent.php");
}
?>