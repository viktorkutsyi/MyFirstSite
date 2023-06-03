<?php

$result = mail("luxeon9@ukr.net","Анкета с сайта","С сайта была получена анкета с такими данными: \nИмя: $_POST[name] \nE-mail: $_POST[mail] \nТекст сообщения:\n $_POST[text]");

if ($result) {
	echo "<p>Сообщение отправлено успешно!</p]>";
}
else {
	echo "<p>Сообщение НЕ отправлено</p]>";
}
?>