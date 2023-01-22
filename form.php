<?php
$name=$_POST['name'];
$email=$_POST['subject'];
$message=$_POST['message'];


$email_from='info@school4.talgar.kz';
$email_subject='новое письмо';
$email_body="Имя:$name.\n";
			"E-mail:$email.\n";
			"Сообщение:$message.\n";
$to=''
$headers="От:$email_from \r\n";
$headers .="Ответ: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
header("страница: contact.html")
	
?>
