<?php
	if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) {
		$headers = 'From: Al Anko\r\n'.
					'Reply-To: alesha.anisenko@gmail.com\r\n';

		$theme = 'Новое сообщение';

		$letter = 'Данные сообщения:\r\n';
		$letter .='Имя: '.$_POST['name'].'\r\n';
		$letter .='Email: '.$_POST['email'].'\r\n';
		$letter .='Телефон: '.$_POST['phone'].'\r\n';
		$letter .='Сообщение: '.$_POST['message'].'\r\n';

		if (mail('alesha.anisenko@gmail.com', $theme, $letter, $headers)) {
			header('Location:/thanks.php');
		} else {
			header('Location:/');
		}

	} else {
		header('Location:/');
	}
?>