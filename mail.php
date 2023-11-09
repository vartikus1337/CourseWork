<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to_email='egor20063@gmail.com';
    }

    $name=$_POST["name"];
    $email=$_POST["mail"];
    $msg = $_POST["msg"];

    $message = "Почта: ".$email."\n";
    $message = "Имя: " . $name."\n";
    $message = "Сообщение: ". $msg."\n";

    mail($to_email, $subject, $message);
?>