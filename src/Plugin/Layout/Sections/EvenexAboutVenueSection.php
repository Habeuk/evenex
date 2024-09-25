<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex About Venue section
 * @Layout(
 *  id = "evenex_about_venue_section",
 *  label = @Translation("Evenex: About Venue section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "about_venue_section",
 *  library = "evenex/about_venue_section",
 *  default_region = "info",
 *  regions = {
 *      "info" = {
 *       "label" = @Translation("Evenex: info region"),
 *      },
 *      "map" = {
 *       "label" = @Translation("Evenex: map region"),
 *      },
 *  }
 * )
 */

class EvenexAboutVenueSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/about_venue_section.png");
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
                    'info' => [
                        'text_html' => [
                            'label' => 'Info',
                            'value' => '',
                        ]
                    ],
                    'map' => [
                        'text_html' => [
                            'label' => 'Map',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
