<?php

namespace Shopware\Themes\SwagAdvanced;

use Shopware\Components\Form as Form;

class Theme extends \Shopware\Components\Theme
{
    protected $extend = 'Responsive';

    protected $name = <<<'SHOPWARE_EOD'
Theme
SHOPWARE_EOD;

    protected $description = <<<'SHOPWARE_EOD'
Text
SHOPWARE_EOD;

    protected $author = <<<'SHOPWARE_EOD'
Janusz
SHOPWARE_EOD;

    protected $license = <<<'SHOPWARE_EOD'
MIT
SHOPWARE_EOD;

    public function createConfig(Form\Container\TabContainer $container)
    {
        $tab = $this->createTab('first_tab', 'My first tab', []);
        $fieldset = $this->createFieldSet('first_fieldset', 'My Fieldset', []);
        $textField = $this->createTextField('first_fieldset', 'My first textfield', 'Some text', []);

        $fieldset->addElement($textField);
        $tab->addElement($fieldset);
        $container->addTab($tab);
    }
}