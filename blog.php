<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Илон маск переименовал twitter</title>
    <link rel="stylesheet" href="src/css/blog.css">
    <link rel="stylesheet" href="src/css/header.css">
    <link rel="stylesheet" href="src/css/reset.css">
</head>
<body>
    <div id="particles-js"></div>
    <header class="blog">
        <a href="index.html"><img src="src/imgs/Logo.svg" alt=""></a>
        <div class="search">
            <div class="title">
                <h3>Илон маск переименовал twitter</h3>
            </div>
            <button><img src="src/imgs/like.png" alt=""></button>
        </div>
        <a class="profile" href="user.html">Profile</a>
    </header>
    <main>
        <div class="block">
            <img src="src/imgs/blog.jpg" alt="">
            <div class="creator">
                <img src="src/imgs/user-global.png" alt="">
                <h1>pashakoder</h1>
            </div>
        </div>
        <p>
            Бизнесмен заявил, что публикации в Twitter будут называться «иксами». Больше никаких ограничений в 140 символов: по
            задумке Маска, пользователи смогут публиковать мультимедиаконтент, в том числе многочасовые видео, и проводить различные
            финансовые операции. Деталей пока мало.
            Ранее Маск говорил, что хочет создать аналог WeChat. Это лидер китайского интернета с более чем 1,2 млрд пользователей.
            Одновременно и мессенджер, и соцсеть, и платежная система. Через WeChat в КНР работают сервисы доставки, проходят оплаты
            коммуналки, через нее можно записаться к врачу и даже подать на развод.
            Многие бизнес-аналитики считают: подобная «перестройка» приведет к потере имиджа, который Twitter выстраивал много лет.
            К тому же пару недель назад Маск отмечал, что соцсеть продолжает терять доходы от рекламы и остается убыточной. Но
            кто-то, например директор по стратегическим коммуникациям Brand Analytics Василий Черный, видит в таком изменении
            позиционирования весьма интересный ход:
        </p>

        <div class="stroke"></div>
        <?php
            $conn = new mysqli("localhost", "root", "", "db");
            if ($conn->connect_error) { 
                die("Ошибка: " . $conn->connect_error); 
            }
            $sql = "SELECT * FROM comms";
            if($result = $conn->query($sql)) {
                foreach($result as $row) {
                    $nick = $row['nick'];
                    $comment = $row['comment'];
                    echo "<div id='comment'><h3>$nick</h3><p>$comment</p></div>";
                }
            }
        ?>
        <form class="comment" action="comment.php" method="post">
            <input id="nick" name="nick" placeholder="nick" type="text">
            <input name="comment" placeholder="comment" type="text">
            <button><img src="src/imgs/sand_comment.png" alt=""></button>
        </form>
    </main>
    
</body>
<script src="particles.js"></script>
<script src="app.js"></script>
</html>