<?php 
	$to = "davittchemi555@gmail.com";
	$subject = "Приветствие на сайте";
	$message = "Приветствуем вас на сайте index.php";
	mail($to, $subject, $message);
	echo "Ваше сообщение было отправлено";
 ?>