<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Advantage section
 * @Layout(
 *  id = "evenex-advantage",
 *  label = @Translation("Evenex: Advantage section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_advantages_section",
 *  library = "evenex/advantages_section",
 *  default_region = "tabOne",
 *  regions = {
 *      "tabOne" = {
 *       "label" = @Translation("Evenex: tab one region"),
 *      },
 *      "tabTwo" = {
 *       "label" = @Translation("Evenex: tab two region"),
 *      },
 *      "tabThree" = {
 *       "label" = @Translation("Evenex: tab three region"),
 *      },
 *      "contentOne" = {
 *       "label" = @Translation("Evenex: content one region"),
 *      },
 *      "contentTwo" = {
 *       "label" = @Translation("Evenex: content two region"),
 *      },
 *      "contentThree" = {
 *       "label" = @Translation("Evenex: content Two region"),
 *      },
 *  }
 * )
 */

class EvenexAdvantage extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_advantage.png");
    }

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::build
     */
    public function build(array $regions)
    {
        // TODO auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'load_library' => true,
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'tabOne' => [
                        'text_html' => [
                            'label' => 'Tab One',
                            'value' => '',
                        ]
                    ],
                    'tabTwo' => [
                        'text_html' => [
                            'label' => 'tab Two',
                            'value' => '',
                        ]
                    ],
                    'tabThree' => [
                        'text_html' => [
                            'label' => 'Tab Three',
                            'value' => '',
                        ]
                    ],
                    'contentOne' => [
                        'text_html' => [
                            'label' => 'Content One',
                            'value' => '',
                        ]
                    ],
                    'contentTwo' => [
                        'text_html' => [
                            'label' => 'Content Two',
                            'value' => '',
                        ]
                    ],
                    'contentThree' => [
                        'text_html' => [
                            'label' => 'content Three',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
