<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Last Year section
 * @Layout(
 *  id = "evenex_last_year_info_section",
 *  label = @Translation("Evenex: Last year section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "last_year_section",
 *  library = "evenex/last_year_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image region"),
 *      },
 *      "videoIcon" = {
 *       "label" = @Translation("Evenex: video icon region"),
 *      },
 *      "description" = {
 *       "label" = @Translation("Evenex: description region"),
 *      },
 *      "link" = {
 *       "label" = @Translation("Evenex: link region"),
 *      },
 *      "icon" = {
 *       "label" = @Translation("Evenex: icon region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexLastYearSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/last_year.png");
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
                        'text' => [
                            'label' => 'Title',
                            'value' => 'Get the latest info about Evenex',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Background Image',
                            'value' => '',
                        ]
                    ],
                    'videoIcon' => [
                        'text_html' => [
                            'label' => 'Video Icon',
                            'value' => '',
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
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
                            'label' => 'icon',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
