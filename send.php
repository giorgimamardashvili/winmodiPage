<?php
/* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['tel'])) {$tel = $_POST['tel'];}
if (isset($_POST['mail'])) {$mail = $_POST['mail'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}
 
/* Сюда впишите свою эл. почту */
$myaddres  = "eanjaparidze75@gmail.com"; // кому отправляем
 
/* А здесь прописывается текст сообщения, \n - перенос строки */
$mes = "consultation!\tel: $tel\name: $name";
 
/* А эта функция как раз занимается отправкой письма на указанный вами email */
$send = mail ($myaddres,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$mail");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Thanck you! we wil contact you!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
</script> 
</head>
<body>
<h1>Thanck you! we wil contact you!</h1>
</body>
</html>