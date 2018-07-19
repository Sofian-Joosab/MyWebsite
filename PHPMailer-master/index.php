<?php
require 'PHPMailerAutoload.php';


$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'aboobakarmahomed';          // SMTP username
$mail->Password = 'lienes01'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('info@codexworld.com', 'CodexWorld');
$mail->addReplyTo('info@codexworld.com', 'CodexWorld');
$mail->addAddress($_POST['email']);   // Add a recipient
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Isto e um teste</h1>';
$bodyContent .= '<p>Aboo relaxa</b></p>';

$mail->Subject = 'Email from Localhost by CodexWorld';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

<form action="index.php" method="post">
	<table>
		<tr>
			<td>E-mail:</td>
			<td><input type="text" name="email" value=""></td>
		</tr>
	</table>
</form>