<?php

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

$arDescription = [
    'NAME' => Loc::getMessage('ONLINELY_BLANK_WIZARD_NAME'),
    'DESCRIPTION' => Loc::getMessage('ONLINELY_BLANK_WIZARD_DESCRIPTION'),
    'VERSION' => '1.0.0',
    'START_TYPE' => 'window',
    'WIZARD_TYPE' => 'solution',
    'IMAGE' => 'images/screenshot.png',
    'LANG' => 'ru',
    'PARTNER_NAME' => Loc::getMessage('ONLINELY_BLANK_PARTNER_NAME'),
    'PARTNER_URI' => Loc::getMessage('ONLINELY_BLANK_PARTNER_URI'),
];
