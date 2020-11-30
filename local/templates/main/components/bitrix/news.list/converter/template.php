<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>

<div id="converter">
    <input type="number" id="sum" placeholder="Введите сумму">
    <?

    /* соберем options для селектов */
    $options = '';
    foreach ($arResult['ITEMS'] as $arItem) {
//        var_dump($arItem['PROPERTIES']);die;

        $options .= "<option";
        foreach ($arItem['PROPERTIES'] as $propName => $propVal) {
            $options .= " data-{$propName}='{$propVal['VALUE']}'";
        }
        $options .= ">{$arItem['NAME']}</option>";
    }

    ?>
    <label for="from">Из</label>

    <select name="" id="from">
        <?= $options ?>
    </select>
    <button id="switch">⇄</button>
    <label for="to">В</label>
    <select name="" id="to">
        <?= $options ?>
    </select>
    <div class="result">
        <h6> Вы получите:</h6>
        <div id="result"></div>
        <p id="exchangeRate"></p>
    </div>
</div>
