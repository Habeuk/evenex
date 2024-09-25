<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Schedule section
 * @Layout(
 *  id = "evenex_schedule_section",
 *  label = @Translation("Evenex: Schedule section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_schedule_section",
 *  library = "evenex/evenex_schedule_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "dayOne" = {
 *       "label" = @Translation("Evenex: day one region"),
 *      },
 *      "dayTwo" = {
 *       "label" = @Translation("Evenex: day two region"),
 *      },
 *      "dayThree" = {
 *       "label" = @Translation("Evenex: day three region"),
 *      },
 *      "dayOneContent" = {
 *       "label" = @Translation("Evenex: day one content region"),
 *      },
 *      "dayTwoContent" = {
 *       "label" = @Translation("Evenex: day two content region"),
 *      },
 *      "dayThreeContent" = {
 *       "label" = @Translation("Evenex: day three content region"),
 *      },
 *  }
 * )
 */

class EvenexScheduleSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_schedule_section.png");
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
            'region_css_title' => 'h1',
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => '',
                        ]
                    ],
                    'dayOne' => [
                        'text_html' => [
                            'label' => 'Day One',
                            'value' => '',
                        ]
                    ],
                    'dayTwo' => [
                        'text_html' => [
                            'label' => 'Day Two',
                            'value' => '',
                        ]
                    ],
                    'dayThree' => [
                        'text_html' => [
                            'label' => 'Day Three',
                            'value' => '',
                        ]
                    ],
                    'dayOneContent' => [
                        'text_html' => [
                            'label' => 'Day One Content',
                            'value' => '',
                        ]
                    ],
                    'dayTwoContent' => [
                        'text_html' => [
                            'label' => 'Day Two Content',
                            'value' => '',
                        ]
                    ],
                    'dayThreeContent' => [
                        'text_html' => [
                            'label' => 'Day Three Content',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
