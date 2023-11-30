<?php
    $nick = $_POST['nick'];
    $comment = $_POST['comment'];
    $conn = new mysqli("localhost", "root", "", "db");
    if($conn->connect_error) { 
        die("Ошибка: " . $conn->connect_error); 
    }
    $sql = $sql = "INSERT INTO comms (nick, comment) VALUES ('$nick', '$comment');";
    if(!$conn->query($sql)) {
        echo "Ошибка: " . $conn->error;
    }
    $conn->close();
    header('Location: blog.php');
    exit();
?>  