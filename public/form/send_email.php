<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $to = "ВАША ПОЧТА";

    $subject = "Новая заявка";
    $message = "ФИО: $name\n";
    $message .= "Email: $email\n";
    $message .= "Телефон: $phone\n";



    if (mail($to, $subject, $message)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Что-то пошло не так, попробуйте еще раз.";
    }
}

