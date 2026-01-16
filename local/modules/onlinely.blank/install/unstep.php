<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);
?>
<p><?= Loc::getMessage('ONLINELY_BLANK_UNINSTALL_SUCCESS') ?></p>
