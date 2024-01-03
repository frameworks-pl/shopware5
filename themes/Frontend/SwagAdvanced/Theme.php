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
        $tabPanel = $this->createTabPanel('main_tab_panel');
        $tabPanel->addTab($this->createColorTab());

        #using snippet for translations
        #snippet id (?) must start and end with underscore - becuase shopare is 'expecting' that
        $tab = $this->createTab(
            'main_tab',
            '__workshop_tab_name__'
        );
        $tab->addElement($tabPanel);
        $container->addElement($tab);
    }

    /**
     * @return Form\Container\Tab
     */
    private function createColorTab() {
        $tab = $this->createTab('color_tab', 'Colors');

        $backgroundColor = $this->createColorPickerField(
            'backgroundColor',
            'Background color',
            '#FF0000'
        );

        $fieldset = $this->createFieldSet('color_fieldset', 'Colors');

        $primaryColor = $this->createColorPickerField(
            'brand-primary',
            'Primary color',
            '#FFCCCC'
        );

        $fieldset->addElement($backgroundColor);
        $fieldset->addElement($primaryColor);
        $tab->addElement($fieldset);

        return $tab;

    }
}