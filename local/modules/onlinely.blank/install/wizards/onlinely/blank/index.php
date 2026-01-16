<?php

use Bitrix\Main\Localization\Loc;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

Loc::loadMessages(__FILE__);

class OnlinelyBlankStartStep extends CWizardStep
{
    public function InitStep(): void
    {
        $this->SetStepId('start');
        $this->SetTitle(Loc::getMessage('ONLINELY_BLANK_WIZARD_STEP_START_TITLE'));
        $this->SetNextStep('finish');
        $this->SetNextCaption(Loc::getMessage('ONLINELY_BLANK_WIZARD_NEXT'));
    }

    public function ShowStep(): void
    {
        $this->content = '<p>' . Loc::getMessage('ONLINELY_BLANK_WIZARD_STEP_START_TEXT') . '</p>';
    }
}

class OnlinelyBlankFinishStep extends CWizardStep
{
    public function InitStep(): void
    {
        $this->SetStepId('finish');
        $this->SetTitle(Loc::getMessage('ONLINELY_BLANK_WIZARD_STEP_FINISH_TITLE'));
        $this->SetFinishStep(true);
    }

    public function ShowStep(): void
    {
        $this->content = '<p>' . Loc::getMessage('ONLINELY_BLANK_WIZARD_STEP_FINISH_TEXT') . '</p>';
    }
}
