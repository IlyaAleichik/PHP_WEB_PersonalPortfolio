<?php

$connect = mysqli_connect('localhost', 'aicgt', 'Mic20208', 'aicgt');

if (!$connect) {
    die('Error connect to DataBase');
}

$pattern_name = '/[A-Za-z0-9а-яА-Я]{3,}/';
$pattern_mail = '/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i';
$pattern_phone = '/^((8|\+374|\+994|\+995|\+375|\+7|\+380|\+38|\+996|\+998|\+993)[\- ]?)?\(?\d{3,5}\)?[\- ]?\d{1}[\- ]?\d{1}[\- ]?\d{1}[\- ]?\d{1}[\- ]?\d{1}(([\- ]?\d{1})?[\- ]?\d{1})?$/i';
$filename = 'datatext.txt';
$text = "Имя: " . $_POST['name'] . "\nEmail: " . $_POST['email'] . "\nPhone" . $_POST['phone'] . "\n";
//записываем текст в файл


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if (preg_match($pattern_name, $_POST['name']) && preg_match($pattern_mail, $_POST['email'])) {
    file_put_contents($filename, $text, FILE_APPEND);
    mysqli_query($connect, "INSERT INTO `request` (`name`, `phone`, `email`) VALUES ('$name', '$phone', '$email')");
    mail($email, "Заявка", "Ваша заявка принята, я вам скоро перезвоню Мои контакты: MTS: +375(33)3343156");
} else {
    header('Location: ../index.php');
}
