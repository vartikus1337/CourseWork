<?php

    // Функция вывода

    function out($msg) {
        echo "<h1> $msg </h1>";
        echo "<h1> Через 5сек вас выкинет на index.html</h1>";
        header("refresh: 15, url=index.html");
        die;
        exit();
    }

    //  Получение nickname

    session_start();
    $nickname = $_SESSION['nickname'];

    // Подключение к БД

    $conn = new mysqli("localhost", "root", "", "db");
    if ($conn->connect_error) { die("Ошибка1: " . $conn->connect_error); }

    // Получение id пользователя для удаления

    $id = 0;
    $sql = "SELECT * FROM users";
    if($result = $conn->query($sql)) {
        foreach ($result as $row) {
            if ($row['nick'] == $nickname) {
                $id = $row['id'];
                break;
            }
        }
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
    $conn->close();

    // Повторное подключение

    $conn = new mysqli("localhost", "root", "", "db");
    if ($conn->connect_error) { die("Ошибка2: " . $conn->connect_error); }

    // Удаление записи по id

    $sql = "DELETE FROM users WHERE id = " . $id;
    if($result = $conn->query($sql)) {
        out('Вы удалены');
        session_destroy();
    } else {
        echo "Ошибка: " . mysqli_error($conn);
    }
    $conn->close();

    //  Переадресация

    out('Не ок');
?>