<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex hero section
 * @Layout(
 *  id = "evenex_hero_section",
 *  label = @Translation("Evenex: Hero section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "hero_section",
 *  library = "evenex/hero_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "date" = {
 *       "label" = @Translation("Evenex: date region"),
 *      },
 *      "callToActionIcon" = {
 *       "label" = @Translation("Evenex: call to action icon region"),
 *      },
 *      "callToAction" = {
 *       "label" = @Translation("Evenex: call to action region"),
 *      },
 *      "calenderIcon" = {
 *       "label" = @Translation("Evenex: calender icon region"),
 *      },
 *      "calenderLink" = {
 *       "label" = @Translation("Evenex: calender link region"),
 *      },
 *      "image" = {
 *       "label" = @Translation("Evenex: image region"),
 *      },
 *      "location" = {
 *       "label" = @Translation("Evenex: location region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexHeroSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/hero_section.png");
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
                        'text_html' => [
                            'label' => 'Title',
                            'value' => '',
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '',
                        ]
                    ],
                    'callToActionIcon' => [
                        'text_html' => [
                            'label' => 'Call To Action Icon',
                            'value' => '',
                        ]
                    ],
                    'callToAction' => [
                        'text_html' => [
                            'label' => 'Call To Action',
                            'value' => '',
                        ]
                    ],
                    'calenderIcon' => [
                        'text_html' => [
                            'label' => 'Calender Icon',
                            'value' => '',
                        ]
                    ],
                    'calenderLink' => [
                        'text_html' => [
                            'label' => 'Calender Link',
                            'value' => '',
                        ]
                    ],
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '',
                        ]
                    ],
                    'location' => [
                        'text_html' => [
                            'label' => 'Location',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
