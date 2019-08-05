<meta charset="utf-8">
<?php
	if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
		$headers = 'From: Al Anko\r\n'.
					'Reply-To: alesha.anisenko@mail.ru \r\n';

		$theme = 'Новое сообщение';

		$letter = 'Данные сообщения:\r\n';
		$letter .='Имя: '.$_POST['name'].'\r\n';
		$letter .='Телефон: '.$_POST['phone'].'\r\n';
		$letter .='Email: '.$_POST['email'].'\r\n';
		$letter .='Тема сообщения: '.$_POST['subject'].'\r\n';
		$letter .='Сообщение: '.$_POST['message'].'\r\n';
		
		if (mail('alesha.anisenko@mail.ru', $theme, $letter, $headers)) {
			header('Location:/thanks.php');
		} else {
			header('Location:/');
		}

	} else {
		header('Location:/');
	}

	// $message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
	// $message .= "Телефон: {$_POST['phone']}<br>";
	// $message .= "Email: {$_POST['email']}<br>";

	// require 'PHPMailer/PHPMailerAutoload.php';

	// $mail = new PHPMailer;
	// $mail->isSMTP();
	// $mail->Host = 'smtp.mail.ru';
	// $mail->SMTPAuth = true;
	// $mail->Username = 'alesha.anisenko';
	// $mail->Password = 'a760431';
	// $mail->SMTPSecure = 'ssl';
	// $mail->Port = '465';
	// $mail->CharSet = 'UTF-8';
	// $mail->From = 'alesha.anisenko@mail.ru';
	// $mail->FromName = 'ПАЛЛИНИ';
	// $mail->addAddress('любая другая почта не обязательно');
	// $mail->isHTML(true);
	// $mail->Subject = 'текст письма';
	// $mail->Body = $message;

	// if( $mail->send() ){
	// echo '<h1 style="color: green; text-align: center;">Ваша заявка принята. Наш менеджер свяжется с Вами в ближайшее время!</h1>';
	// }else{
	// echo '<p style="color: red;">Ошибка!</p>';
	// }
?>