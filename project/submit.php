<?php
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])){

	$headers = 'andis.2105@gmail.com\r\n'.
				'Reply-To: andi.0096@yandex.ru\r\n'.
				'X-Mailer: PHP/'. phpversion();
	$theme = 'Новое сообщение';

	$letter = 'Данные сообщения:\r\n';
	$letter .='Имя: '.$_POST['name'].' \r\n';
	$letter .='Email: '.$_POST['email'].' \r\n';
	$letter .='Телефон: '.$_POST['phone'].' \r\n';
	$letter .='Сообщение: '.$_POST['message'].' \r\n';

if (mail('andi.0096@yandex.ru', $theme , $letter)){
	header('Location:/thankyou.php');


} 
else 
{
	header('Location:/error.php');
}


 }
else 
{
	header('Location:/error.php');
}

?>