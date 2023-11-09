<?php
    function out($msg) {
        echo "<h1> $msg </h1>";
        echo "<h1> Через 5сек вас выкинет на login.html</h1>";
        header("refresh: 5, url=login.html");
        exit();
    }

    // Проверка данных

    if ( $_POST["nickname"] == NULL || $_POST["password"] == NULL) {
        out("not nickname or password");
    } else {
        $nickname = $_POST["nickname"];
        $password = $_POST["password"];
    }

    // Подключение к БД

    $conn = new mysqli("localhost", "root", "", "db");
    if ($conn->connect_error) { 
        die("Ошибка: " . $conn->connect_error); 
    }
    echo "Подключение успешно установлено";

    // Sql запрос

    $sql = "SELECT * FROM users";
    if($result = $conn->query($sql)) {
        foreach ($result as $row) {
            if ($row['nick'] == $nickname) {
                if ($row['password'] ==  $password) {
                    out("Вы типа вошли");
                } else {
                    out("Неправильный пароль");
                }
            }
        }
        out("Нет такого пользователя");
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }

    // Переадресация
    out("Всё ок!");
?>