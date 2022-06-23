<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SoundBurner - площадка для музыкантов</title>
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
            <a href="#"><button class="btn_home">Главная</button></a>
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
    <div class="section">
        <h3><span></span>Chill</h3>
        <div class="flex-container">
            <div class="img-block">
                <img src="img/mask_group_4.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group_4.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group_4.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
                <div class="button-play"><i class="fas fa-play"></i></div>
            </div>
        </div>
    </div>
    <div class="section">
        <h3><span></span>Party</h3>
        <div class="flex-container">
            <div class="img-block">
                <img src="img/mask_group_2.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group_2.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group_2.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
                <div class="button-play"><i class="fas fa-play"></i></div>
            </div>
        </div>
    </div>
    <div class="section">
        <h3><span></span>Workout</h3>
        <div class="flex-container">
            <div class="img-block">
                <img src="img/mask_group_5.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group_5.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group_5.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
                <div class="button-play"><i class="fas fa-play"></i></div>
            </div>
        </div>
    </div>
    <div class="section">
        <h3><span></span>Sleep</h3>
        <div class="flex-container">
            <div class="img-block">
                <img src="img/mask_group-3.svg" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group-3.svg" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group-3.svg" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
                <div class="button-play"><i class="fas fa-play"></i></div>
            </div>
        </div>
    </div>
    <div class="section">
        <h3><span></span>Charts: New & hot</h3>
        <div class="flex-container">
            <div class="img-block">
                <img src="img/mask_group-4.svg" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group-4.svg" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group-4.svg" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
                <div class="button-play"><i class="fas fa-play"></i></div>
            </div>
        </div>
    </div>
    <div class="section">
        <h3><span></span>Charts: Top 50</h3>
        <div class="flex-container">
            <div class="img-block">
                <img src="img/mask_group.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
            </div>
            <div class="img-block">
                <img src="img/mask_group.png" alt="Обложка">
                <h4>Never Chill Before</h4>
                <p>Pineapple Express</p>
                <div class="button-play"><i class="fas fa-play"></i></div>
            </div>
        </div>
    </div>
</main>
<footer>
    <p>Политика конфиденциальности</p>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
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
