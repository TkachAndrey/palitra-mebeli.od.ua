<?php 
	
	$result = mail("palitra.mebeli.od@gmail.com", "Форма с сайта", "С сайта была получена анкета с такими данными: \nИмя: $_POST[name] \nНомер телефона: $_POST[tel];
	if ($result) {
		echo "<p>Сообщение отправлено успешно!</p>";
	}

	else {
		echo "<p>Сообщение  НЕ отправлено!</p>";
	}
?>