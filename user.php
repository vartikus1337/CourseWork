<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="src/css/user.css">
    <link rel="stylesheet" href="src/css/reset.css">
</head>
<body>
    <div id="particles-js"></div>
    <div class="container">
        <div class="wrapper">
            <div class="left block ">
                <img src="src/imgs/user-global.png" alt="">
                <div class="progress"></div>
                <h1 class="linear-gradient-text">38 lvl</h1>
                <div class="stat">
                    <img src="src/imgs/like.png" alt="" width="50px" height="50px">
                    <p>000</p>
                </div>
                <div class="stat">
                    <img src="src/imgs/comment.png" alt="" width="50px" height="50px">
                    <p>000</p>
                </div>
                <div class="stat">
                    <img src="src/imgs/share.png" alt="" width="50px" height="50px">
                    <p>000</p>
                </div>
            </div>
            <div class="right block">
                <div class="name">
                    <h1 class="linear-gradient-text"><?php session_start();  echo $_SESSION['nickname']; ?></h1>
                    <a href="index.html"><img src="src/imgs/Logo.svg" alt=""></a>
                </div>
                <main>
                    <section>
                        <div class="preference">
                            <h2>Full name:</h2>
                            <h2>Status:</h2>
                            <h2>Password:</h2>
                            <h2>Email:</h2>
                        </div>
                        <div class="preference">
                            <?php 
                                session_start();
                                $password = $_SESSION['password'];
                                $full_name = $_SESSION['full_name'];
                                $email = $_SESSION['email'];
                                echo "<h2>$full_name</h2>";
                                echo "<h2>user</h2>";
                                echo "<h2>$password</h2>";
                                echo "<h2>$email</h2>";
                            ?>
                        </div>
                    </section>
                    <footer>
                        <div class="subscribe">
                            <input type="checkbox" name="" id="">
                            <p>Subscribe on notifications</p>
                        </div>
                        <a href="#" onclick="fnDel()">DELETE ACCOUNT</a>
                        <form style="display: none;" action="delacc.php" id="delAcc" method="post"></form>
                    </footer>
                </main>
            </div>
        </div>
    </div>
</body>
<script src="particles.js"></script>
<script src="app.js"></script>
<script>
    function fnDel() {
        document.getElementById("delAcc").submit(); 
    }
</script>
</html>