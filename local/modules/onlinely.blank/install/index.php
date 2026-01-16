<?php

use Bitrix\Main\IO\Directory;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class onlinely_blank extends CModule
{
    public $MODULE_ID = 'onlinely.blank';
    public $MODULE_GROUP_RIGHTS = 'Y';
    public $MODULE_VERSION;
    public $MODULE_VERSION_DATE;
    public $MODULE_NAME;
    public $MODULE_DESCRIPTION;
    public $PARTNER_NAME;
    public $PARTNER_URI;

    public function __construct()
    {
        $arModuleVersion = [];
        include __DIR__ . '/version.php';

        $this->MODULE_VERSION = $arModuleVersion['VERSION'] ?? '1.0.0';
        $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'] ?? date('Y-m-d');
        $this->MODULE_NAME = Loc::getMessage('ONLINELY_BLANK_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('ONLINELY_BLANK_MODULE_DESCRIPTION');
        $this->PARTNER_NAME = Loc::getMessage('ONLINELY_BLANK_PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('ONLINELY_BLANK_PARTNER_URI');
    }

    public function DoInstall(): void
    {
        global $APPLICATION;

        if (!ModuleManager::isModuleInstalled($this->MODULE_ID)) {
            $this->installFiles();
            ModuleManager::registerModule($this->MODULE_ID);
        }

        $APPLICATION->IncludeAdminFile(
            Loc::getMessage('ONLINELY_BLANK_INSTALL_TITLE'),
            __DIR__ . '/step.php'
        );
    }

    public function DoUninstall(): void
    {
        global $APPLICATION;

        if (ModuleManager::isModuleInstalled($this->MODULE_ID)) {
            $this->uninstallFiles();
            ModuleManager::unRegisterModule($this->MODULE_ID);
        }

        $APPLICATION->IncludeAdminFile(
            Loc::getMessage('ONLINELY_BLANK_UNINSTALL_TITLE'),
            __DIR__ . '/unstep.php'
        );
    }

    private function installFiles(): void
    {
        $wizardSource = __DIR__ . '/wizards/onlinely/blank';
        $wizardTarget = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/wizards/onlinely/blank';

        if (Directory::isDirectoryExists($wizardSource)) {
            CopyDirFiles($wizardSource, $wizardTarget, true, true);
        }
    }

    private function uninstallFiles(): void
    {
        $wizardTarget = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/wizards/onlinely/blank';

        if (Directory::isDirectoryExists($wizardTarget)) {
            Directory::deleteDirectory($wizardTarget);
        }
    }
}
