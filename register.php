<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
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
            <a href="login.php"><button class="btn_auth">Войти</button></a>
            <a href="register.php"><button class="btn_reg">Регистрация</button></a>
        </div>
    </div>
</header>
<main>
    <div class="reg">
        <h1>Регистрация</h1>
        <p>Здесь вы можете зарегистрироваться</p>
        <form class="form-control">
            <input type="text" name="username" placeholder="Введите имя" id="username"><br>
            <input type="email" name="email" placeholder="Введите email" id="email"><br>
            <input type="text" name="login" placeholder="Введите логин" id="login"><br>
            <input type="password" name="password" placeholder="Введите пароль" id="password"><br>
            <div class="error-mess" id="error-block"></div>
            <button type="button" id="send">Готово</button>
        </form>
    </div>
</main>
<footer>
    <p>Политика конфиденциальности</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#send').click(function() {
        let name = $('#username').val();
        let email = $('#email').val();
        let login = $('#login').val();
        let pass = $('#password').val();

        $.ajax({
            url: 'ajax/reg.php',
            type: 'POST',
            cache: false,
            data: {
                'username': name,
                'email': email,
                'login': login,
                'password': pass
            },
            dataType: 'html',
            success: function(data) {
                if(data === "Done") {
                    $("#send").text("Все готово");
                    $("#error-block").hide();
                    document.location.reload(true);
                } else {
                    $("#error-block").show();
                    $("#error-block").text(data);
                }
            }
        });
    });
</script>
</body>
</html>

