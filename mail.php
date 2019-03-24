<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="Refresh" content="0; URL=http://index.html/">
</head>
<body>
    

<?php
    $sendto = "tshl20141@gmail.com"; //куда отправлять письмо
    $username = $_POST['name']; //Имя заказчика
    $usertel = $_POST['telephone']; //Телефон заказчика

    $Zakaz = $_POST['tKKM']; //Данные из вып. списка

    //Заголовок письма
    $subject = "Новое сообщение";
    $headers = "From: " . strip_tags($sendto) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendto) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    //Тело письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
    $msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
    $msg .= "<p><strong>Номер телефона:</strong> ".$usertel."</p>\r\n";
    $msg .= "<p>".$Zakaz."</p>\r\n";
    $msg .= "</body></html>";
    //Ответное сообщение
    if(@mail($sendto, $subject, $msg, $headers)) {
        echo "0"; 
        } else {
        echo "1";
        }
?>
</body>
</html>