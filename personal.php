<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");

// Компонент личного кабинета
$APPLICATION->IncludeComponent(
    "custom:user.cabinet",
    "",
    array(
        "USER_ID" => $USER->GetID(),
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
