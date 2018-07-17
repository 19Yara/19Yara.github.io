<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("YarikNaym@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: YarikNaym@gmail.com \r\n"))
 {     echo "Реестрация пройшла успешно";
} else { 
    echo "При регистрации возникли ошибки";
}?>