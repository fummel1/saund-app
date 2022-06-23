<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $pass = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    $error = '';
    if (strlen($login) < 3)
        $error = 'Введите логин';
    else if (strlen($pass) < 5)
        $error = 'Введите пароль';

    if($error != '') {
        echo $error;
        exit();
    }

    require_once "../lib/mysql.php";

    $salt = '34jhjkhui34uihuhnkj';
    $pass = md5($salt . $pass);

    $sql = 'SELECT id FROM users WHERE `login` = ? AND `password` = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$login, $pass]);

    if($query->rowCount() == 0)
        echo " Такого пользователя нет";
    else {
        setcookie('log', $login, time() + 1800, "/");
        echo "Done";
    }
