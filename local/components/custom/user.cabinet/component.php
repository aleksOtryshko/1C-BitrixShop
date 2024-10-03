<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!$USER->IsAuthorized()) {
    echo "Вы не авторизованы.";
} else {
    echo "<h2>Добро пожаловать, " . $USER->GetFullName() . "!</h2>";
    echo "<p>Ваш email: " . $USER->GetEmail() . "</p>";
    echo "<a href='/personal/orders/'>Ваши заказы</a>";
}
?>
