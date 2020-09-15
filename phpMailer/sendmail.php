<?php 

use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];


	try{
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'akun@gmail.com';
		$mail->Password = 'passwordgmail';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = '465';


		$mail->setFrom('akun@gmail.com');
		$mail->addAddress('akun@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'message received (contact page)';
		$mail->Body = '<h3>Name : $name <br> Email : $email <br> Message : $message</h3>';

		$mail->send();
		$alert = '<div class="alert-success">
					<span>Message Sent! Thank you for contacting me.</span>
				</div>';
	} catch(Exception $e){
		$alert= '<div class="alert-error">
			<span>'.$e->getMessage().'</span>
		</div>';
	}
	
}



 ?>