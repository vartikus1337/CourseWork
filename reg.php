<?php
    function out($msg) {
        echo "<h1> $msg </h1>";
        echo "<h1> Через 5сек вас выкинет на registry.html</h1>";
        header("refresh: 5, url=registry.html");
        exit();
    }

    // Проверка данных

    if( $_POST["nickname"] == NULL
        || $_POST["password"] == NULL
        || $_POST["full_name"] == NULL
        || $_POST["email"] == NULL) 
    {
        echo 'nickname: ' . $_POST['nickname'] . "<br>";
        echo 'password: '.$_POST['password'] . "<br>";
        echo 'full_name: '.$_POST['full_name'] . "<br>";
        echo 'email: '.$_POST['email'] . "<br>";
        out("Что то не заполнено"); 
    } else {
        echo 'nickname: ' . $_POST['nickname'] . "<br>";
        echo 'password: '.$_POST['password'] . "<br>";
        echo 'full_name: '.$_POST['full_name'] . "<br>";
        echo 'email: '.$_POST['email'] . "<br>";
        $nickname = $_POST["nickname"];
        $password = $_POST["password"];
        $full_name = $_POST["full_name"];
        $email = $_POST["email"];
    }

    // Подключение к БД

    $conn = new mysqli("localhost", "root", "", "db");
    if($conn->connect_error){ 
        die("Ошибка: " . $conn->connect_error); 
    }
    echo "Подключение успешно установлено". "<br>";

    // Sql запрос
    
    $sql = "INSERT INTO users ( nick, password, full_name, email) VALUES ('$nickname', '$password','$full_name','$email');";
    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }

    $conn->close();

    // Переадресация

    out('Тебя зарегали!')
?>