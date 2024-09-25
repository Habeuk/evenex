<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Info section
 * @Layout(
 *  id = "evenex_info_section",
 *  label = @Translation("Evenex: Info section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "info_section",
 *  library = "evenex/info_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "locationIcon" = {
 *       "label" = @Translation("Evenex: location icon region"),
 *      },
 *      "locationTitle" = {
 *       "label" = @Translation("Evenex: location title region"),
 *      },
 *      "address" = {
 *       "label" = @Translation("Evenex: address region"),
 *      },
 *      "timeIcon" = {
 *       "label" = @Translation("Evenex: time icon region"),
 *      },
 *      "timeTitle" = {
 *       "label" = @Translation("Evenex: time title region"),
 *      },
 *      "schedule" = {
 *       "label" = @Translation("Evenex: schedule region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexInfoSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/info_section.png");
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
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => 'About venue',
                        ]
                    ],
                    'locationIcon' => [
                        'text_html' => [
                            'label' => 'Location Icon',
                            'value' => '',
                        ]
                    ],
                    'locationTitle' => [
                        'text' => [
                            'label' => 'Location Title',
                            'value' => 'Gotham Hall',
                        ]
                    ],
                    'address' => [
                        'text_html' => [
                            'label' => 'Address',
                            'value' => '1356 Broadway, New York NY 10018, USA',
                        ]
                    ],
                    'timeIcon' => [
                        'text_html' => [
                            'label' => 'Time Icon',
                            'value' => '',
                        ]
                    ],
                    'timeTitle' => [
                        'text' => [
                            'label' => 'Time title',
                            'value' => '',
                        ]
                    ],
                    'schedule' => [
                        'text' => [
                            'label' => 'schedule',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
