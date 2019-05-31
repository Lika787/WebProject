<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$comm = $_POST['comm'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$comm = htmlspecialchars($comm);
$fio = urldecode($fio);
$email = urldecode($email);
$tel = urldecode($tel);
$comm = urldecode($comm);
$fio = trim($fio);
$email = trim($email);
$tel = trim($tel);
$comm = trim($comm);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("sbits484@gmail.com", "Заявка с сайта", "ФИО:".$fio. "\r\nE-mail:".$email. "\r\nТел:".$tel. "\r\nКом.:".$comm))
 {   
 	
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>