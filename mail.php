<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$textarea = $_POST['textarea'];

    $to = "mail@gmail.com";
    $subject = $name;
    $message = $textarea;
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; Charset=utf-8\r\n";
    $headers .= "From: ООО ЛИДЕРТЕХСТРОЙ <$email>\r\n";
    mail($to, $subject, $message, $headers);
    echo("Спасибо! Ваше сообщение отправлено");
?>
