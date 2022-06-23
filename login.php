<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
<header>
    <div class="all-header">
        <div class="lang">
            <a href="#">en</a>
            <a href="#" class="active">ru</a>
        </div>
        <div class="header-main">

            <img src="img/logo.svg" alt="logo">
            <input type="search" name="search" id="search" placeholder="начните поиск трека, исполнителя ...">
            <a href="#">Загрузить песню</a>
            <a href="index.php"><button class="btn_home">Главная</button></a>
            <?php if (!isset($_COOKIE['log'])): ?>
            <a href="login.php"><button class="btn_auth">Войти</button></a>
            <a href="register.php"><button class="btn_reg">Регистрация</button></a>
            <?php else: ?>
                <a href="login.php"><button class="exit_user" id="exit_user">Выйти</button></a>
                <a href="#"><button class="user_account">Кабинет пользователя</button></a>
            <?php endif; ?>
        </div>
    </div>
</header>
<main>
    <div class="reg">
        <?php if (!isset($_COOKIE['log'])): ?>
            <h1>Авторизация</h1>
            <form class="form-control">
                <input type="text" name="login" placeholder="Введите логин" id="login"><br>
                <input type="password" name="password" placeholder="Введите пароль" id="password"><br>
                <div class="error-mess" id="error-block"></div>
                <button type="button" id="login_user">Войти</button>
            </form>
        <?php else: ?>
            <h2>Привет, <?= $_COOKIE['log'] ?> вы авторизованы.</h2>
        <?php endif; ?>
    </div>
</main>
<footer>
    <p>Политика конфиденциальности</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#login_user').click(function() {
        let login = $('#login').val();
        let pass = $('#password').val();

        $.ajax({
            url: 'ajax/login.php',
            type: 'POST',
            cache: false,
            data: {
                'login': login,
                'password': pass
            },
            dataType: 'html',
            success: function(data) {
                if(data === "Done") {
                    $("#login_user").text("Все готово");
                    $("#error-block").hide();
                    document.location.reload(true);
                } else {
                    $("#error-block").show();
                    $("#error-block").text(data);
                }
            }
        });
    });

    $('#exit_user').click(function() {
        $.ajax({
            url: 'ajax/exit.php',
            type: 'POST',
            cache: false,
            data: {},
            dataType: 'html',
            success: function(data) {
                    document.location.reload(true);
            }
        });
    });
</script>
</body>
</html>

