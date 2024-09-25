<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Latest Info section
 * @Layout(
 *  id = "evenex_lastest_info_section",
 *  label = @Translation("Evenex: Latest Info section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "latest_info_section",
 *  library = "evenex/latest_info_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "tag" = {
 *       "label" = @Translation("Evenex: tag region"),
 *      },
 *      "description" = {
 *       "label" = @Translation("Evenex: description region"),
 *      },
 *      "where" = {
 *       "label" = @Translation("Evenex: where region"),
 *      },
 *      "address" = {
 *       "label" = @Translation("Evenex: address region"),
 *      },
 *      "when" = {
 *       "label" = @Translation("Evenex: when region"),
 *      },
 *      "date" = {
 *       "label" = @Translation("Evenex: date region"),
 *      },
 *      "imageOne" = {
 *       "label" = @Translation("Evenex: imageOne region"),
 *      },
 *      "imageTwo" = {
 *       "label" = @Translation("Evenex: imagetwo region"),
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

class EvenexLatestInfo extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/latest_info_section.png");
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
                            'value' => '',
                        ]
                    ],
                    'tag' => [
                        'text_html' => [
                            'label' => 'Tag',
                            'value' => '',
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'Gotham Hall',
                        ]
                    ],
                    'address' => [
                        'text_html' => [
                            'label' => 'Address',
                            'value' => '',
                        ]
                    ],
                    'where' => [
                        'text_html' => [
                            'label' => 'Where',
                            'value' => '',
                        ]
                    ],
                    'when' => [
                        'text_html' => [
                            'label' => 'When',
                            'value' => '',
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '',
                        ]
                    ],
                    'imageOne' => [
                        'text_html' => [
                            'label' => 'ImageOne',
                            'value' => '',
                        ]
                    ],
                    'imageTwo' => [
                        'text_html' => [
                            'label' => 'ImageTwo',
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
