<?php
    
    $conn = new mysqli("localhost", "root", "");
    if($conn->connect_error){ die("Ошибка: " . $conn->connect_error); }
    echo "Подключение успешно установлено";
    $sql = "INSERT INTO Users (name, age) VALUES ('Tom', 37)";
    if($conn->query($sql)) {
        echo "Данные успешно добавлены";
    } else{
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
?>

function debug_to_console($data, $context = 'Debug in Console') {

    // Buffering to solve problems frameworks, like header() in this and not a solid return.
    ob_start();

    $output  = 'console.info(\'' . $context . ':\');';
    $output .= 'console.log(' . json_encode($data) . ');';
    $output  = sprintf('<script>%s</script>', $output);

    echo $output;
}