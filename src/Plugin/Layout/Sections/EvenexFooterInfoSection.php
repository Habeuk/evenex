<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Footer Info section
 * @Layout(
 *  id = "evenex_footer_info_section",
 *  label = @Translation("Evenex: Footer Info section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "footer_info_section",
 *  library = "evenex/footer_info_section",
 *  default_region = "day",
 *  regions = {
 *      "day" = {
 *       "label" = @Translation("Evenex: day region"),
 *      },
 *      "date" = {
 *       "label" = @Translation("Evenex: date region"),
 *      },
 *      "hour" = {
 *       "label" = @Translation("Evenex: hour region"),
 *      },
 *      "locationIcon" = {
 *       "label" = @Translation("Evenex: locationIcon region"),
 *      },
 *      "location" = {
 *       "label" = @Translation("Evenex: location region"),
 *      },
 *      "social" = {
 *       "label" = @Translation("Evenex: social region"),
 *      },
 *      "icon" = {
 *       "label" = @Translation("Evenex: icon region"),
 *      },
 *      "link" = {
 *       "label" = @Translation("Evenex: link region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexFooterInfoSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/footer_info.png");
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
                    'day' => [
                        'text_html' => [
                            'label' => 'Day',
                            'value' => '',
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '',
                        ]
                    ],
                    'hour' => [
                        'text_html' => [
                            'label' => 'Hour',
                            'value' => '',
                        ]
                    ],
                    'locationIcon' => [
                        'text_html' => [
                            'label' => 'LocationIcon',
                            'value' => '',
                        ]
                    ],
                    'location' => [
                        'text_html' => [
                            'label' => 'Location',
                            'value' => '',
                        ]
                    ],
                    'social' => [
                        'text_html' => [
                            'label' => 'Social',
                            'value' => '',
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => '',
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'Link',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
