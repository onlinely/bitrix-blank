<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);
?>
<form action="/bitrix/admin/wizard_install.php" method="get">
    <input type="hidden" name="lang" value="<?= LANGUAGE_ID ?>">
    <input type="hidden" name="wizardName" value="onlinely:blank">
    <input type="hidden" name="install" value="Y">
    <?= bitrix_sessid_post() ?>
    <p><?= Loc::getMessage('ONLINELY_BLANK_INSTALL_SUCCESS') ?></p>
    <p><?= Loc::getMessage('ONLINELY_BLANK_INSTALL_WIZARD_INFO') ?></p>
    <input type="submit" name="install_wizard" value="<?= Loc::getMessage('ONLINELY_BLANK_INSTALL_RUN_WIZARD') ?>">
</form>
