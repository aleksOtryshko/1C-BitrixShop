<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог товаров");

// Компонент фильтра товаров
$APPLICATION->IncludeComponent(
    "custom:catalog.filter",
    "",
    array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "1",
    )
);

// Компонент списка товаров
$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "",
    array(
        "IBLOCK_TYPE" => "catalog",
        "IBLOCK_ID" => "1",
        "SECTION_ID" => $_REQUEST["SECTION_ID"],
        "FILTER_NAME" => "arrFilter",
        "PAGE_ELEMENT_COUNT" => "20",
        "LINE_ELEMENT_COUNT" => "3",
    )
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
