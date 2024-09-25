<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Latest info section php
 * @Layout(
 *  id = "evenex_latest_info_section",
 *  label = @Translation("Evenex: Latest info section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "latest_info",
 *  library = "evenex/latest_info",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "detail" = {
 *       "label" = @Translation("Evenex: detail region"),
 *      },
 *      "text" = {
 *       "label" = @Translation("Evenex: text region"),
 *      },
 *      "stat" = {
 *       "label" = @Translation("Evenex: stat region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexLatestInfoSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/latest_info.png");
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
                            'value' => 'Get the latest info about Evenex',
                        ]
                    ],
                    'detail' => [
                        'text_html' => [
                            'label' => 'Detail',
                            'value' => '',
                        ]
                    ],
                    'text' => [
                        'text_html' => [
                            'label' => 'Text',
                            'value' => 'We have dedicated tracks for every industry Whether you want to hire
                            tech’s top talent meet with the policymakers influencing your industry
                            or exchange notes with your peers and competitors. Maybe you want to
                            place your company.'
                        ]
                    ],
                    'stat' => [
                        'text_html' => [
                            'label' => 'Stats',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
