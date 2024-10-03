<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

global $arrFilter;
$arrFilter = array();

// Фильтр по цене
if (!empty($_REQUEST["PRICE_MIN"]) && is_numeric($_REQUEST["PRICE_MIN"])) {
    $arrFilter[">=PROPERTY_PRICE"] = floatval($_REQUEST["PRICE_MIN"]);
}

if (!empty($_REQUEST["PRICE_MAX"]) && is_numeric($_REQUEST["PRICE_MAX"])) {
    $arrFilter["<=PROPERTY_PRICE"] = floatval($_REQUEST["PRICE_MAX"]);
}
?>

<form method="GET">
    <label>Цена от:</label>
    <input type="text" name="PRICE_MIN" value="<?= htmlspecialchars($_REQUEST['PRICE_MIN'] ?? '') ?>">
    <label>до:</label>
    <input type="text" name="PRICE_MAX" value="<?= htmlspecialchars($_REQUEST['PRICE_MAX'] ?? '') ?>">
    <input type="submit" value="Фильтровать">
</form>
