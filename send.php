<?
if((isset($_POST['fname'])&&$_POST['lname']!="")&&(isset($_POST['email'])&&$_POST['message']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
        $to = 'arniusss@yahoo.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Kelevra (Github)'; //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Firstname: '.$_POST['fname'].'</p>
                        <p>Lastname: '.$_POST['lname'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: " . $_POST['fname'] . " <" . $_POST['email'] . ">". $_POST['message'] ."\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
