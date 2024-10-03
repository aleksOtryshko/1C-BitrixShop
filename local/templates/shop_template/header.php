<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
<header>
    <nav>
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/catalog.php">Каталог</a></li>
            <li><a href="/personal.php">Личный кабинет</a></li>
        </ul>
    </nav>
</header>
<main>
