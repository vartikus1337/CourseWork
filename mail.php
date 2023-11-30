<?php

    ini_set('display_errors', 'On');
    error_reporting('E_ALL');

    $name = strip_tags($_POST['name']);
    $email = strip_tags($_POST['email']);
    $msg = strip_tags($_POST['msg']);

    $to = 'pasha_klevtsov@vk.com';

    $message = "Почта: ".$email."\n";
    $message = "Имя: " . $name."\n";
    $message = "Сообщение: ". $msg."\n";

    if (mail($to_email, $subject, $message)) {
        echo "Письмо отправилось!";
    } else {
        echo "Письмо не отправилось!";
    }
?>

