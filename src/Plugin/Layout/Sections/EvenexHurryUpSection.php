<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Hurry Up section
 * @Layout(
 *  id = "evenex_hurry_up_section",
 *  label = @Translation("Evenex: Hurry Up section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "hurry_up_section",
 *  library = "evenex/hurry_up_section",
 *  default_region = "title",
 *  regions = {
 *      "image" = {
 *       "label" = @Translation("Evenex: image region"),
 *      },
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "subTitle" = {
 *       "label" = @Translation("Evenex: subtitle region"),
 *      },
 *      "text" = {
 *       "label" = @Translation("Evenex: text region"),
 *      },
 *      "link" = {
 *       "label" = @Translation("Evenex: link region"),
 *      },
 *      "icon" = {
 *       "label" = @Translation("Evenex: icon region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexHurryUpSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/hurry_up.png");
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
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '',
                        ]
                    ],
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => '',
                        ]
                    ],
                    'subTitle' => [
                        'text_html' => [
                            'label' => 'Sub Title',
                            'value' => '',
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'text',
                            'value' => '',
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'Link',
                            'value' => '',
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => '',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Background Image',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
