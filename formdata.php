<?php
 
/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$tel = htmlspecialchars($_POST["tel"]);
$bezspama = htmlspecialchars($_POST["bezspama"]);
 
/* Ваш адрес и тема сообщения */
$address = "palitra.mebeli.od@gmail.com";
$sub = "Сообщение с моего сайта";
 
/* Формат письма */
$mes = "Сообщение с моего сайта.\n
Имя отправителя: $name 
Телефон отправителя: $tel";
 
 
if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
/* Отправляем сообщение, используя mail() функцию */
$from  = "From: $name <$tel> \r\n";
if (mail($address, $sub, $mes, $from)) { 
	echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Заказ отправлен! Оставайтесь на связи.</body>';}
else {
 echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Что-то пошло не так. Попробуйте ещё раз.</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */
?>