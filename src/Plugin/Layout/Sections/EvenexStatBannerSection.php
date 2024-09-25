<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Stat Bannersection php
 * @Layout(
 *  id = "evenex_stat_banner_section",
 *  label = @Translation("Evenex: stat banner section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "stat_banner_section",
 *  library = "evenex/stat_banner_section",
 *  default_region = "stats",
 *  regions = {
 *      "stats" = {
 *       "label" = @Translation("Evenex: stats region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image"),
 *      },
 *      
 *  }
 * )
 */

class EvenexSTatBannerSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/stat_banner.png");
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
            "derivate" => [
                'value' => '',
                'options' => [
                    'evenex-stat-banner--purple' => 'purple',
                ],
            ],
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'stats' => [
                        'text' => [
                            'label' => 'Stat',
                            'value' => '',
                        ]
                    ],
                    'backgroundImage' => [
                        'text' => [
                            'label' => 'Background Image',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
