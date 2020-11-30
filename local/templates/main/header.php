<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <? $APPLICATION->ShowHead() ?>
    <title><? $APPLICATION->ShowTitle() ?></title>

    <? $APPLICATION->AddHeadScript('https://code.jquery.com/jquery-3.5.1.min.js'); ?>

</head>

<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
