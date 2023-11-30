<?php

    function debug_to_console($data, $context = 'Debug in Console') {
        ob_start();

        $output  = 'console.info(\'' . $context . ':\');';
        $output .= 'console.log(' . json_encode($data) . ');';
        $output  = sprintf('<script>%s</script>', $output);

        echo $output;
    }

    function out($msg) {
        echo "<h1> $msg </h1>";
        header("refresh: 0, url=index.html");
        exit();
    }

    // Получение данных

    $img = $_FILES['img'];
    $title = $_POST['title'];
    $small_text = $_POST['small_text'];
    $text = $_POST['text'];

    // Содержимое изображения

    $img_tmp = addslashes(file_get_contents($_FILES['img']['tmp_name']));

    // Подключение к БД

    $conn = new mysqli("localhost", "root", "", "db_test");
    if($conn->connect_error){ 
        die("Ошибка: " . $conn->connect_error); 
    }
    echo "Подключение успешно установлено". "<br>";

    // Sql запрос
    
    $sql = "INSERT INTO blog ( img, title, small_text, text) VALUES ('$img_tmp', '$title', '$small_text', '$text');";

    if($conn->query($sql)){
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();

    // Переадресация
    
    debug_to_console('Всё ок!');
    out('Всё ок!');
?>