<?php

        $name = trim($_POST["name"]);
		$phone = trim($_POST["phone"]);
		$text = trim($_POST["text"]);

		/* Создаем соединение */
		$link = mysqli_connect('localhost', 'root', '', 'site_base') or die('Cant connect: ');
	 
		/* Составляем запрос для вставки информации в таблицу
		name...date - название конкретных полей в базе;
		в $_POST["test_name"]... $_POST["test_mess"] - в этих переменных содержатся данные, полученные из формы */
		$query = "INSERT INTO `Site` VALUES ('$name','$phone','$text')";
		 
		/* Выполняем запрос. Если произойдет ошибка - вывести ее. */
		mysqli_query($link, $query) or die('Cant query: ');
		 
		/* Закрываем соединение */
		mysqli_close();
    
?>