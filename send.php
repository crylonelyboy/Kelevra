<?php

$to = "arniusss@yahoo.com";

if (isset($_POST['submit']))
{
    #Тут делаем проверки и выводим ошибки если, что то не так
}
else #Если ошибок не обнаружено переходим созданию письма
{
    $subject = "Kelevra";
    $message = "Firstname: " . $_POST['fname'];
	$message = "Lastname: " . $_POST['lname'];
    $message .= "<br>Message: " . $_POST['message'];
    $message .= "<br>Email: " . $_POST['email'];
 
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
    $headers .= "From: " . $_POST['fname'] . " <" . $_POST['email'] . ">". $_POST['message'] ."\r\n";
 
    mail($to, $subject, $message, $headers);
    if (!mail($to, $subject, $message, $headers))
    {
     #Вышла ошибка, сообщение не ушло
    }
    else
    {
     #Все ок!
    }
}
?>
