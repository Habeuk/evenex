<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Location section
 * @Layout(
 *  id = "evenex_about_location_section",
 *  label = @Translation("Evenex: Location section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "location_section",
 *  library = "evenex/location_section",
 *  default_region = "info",
 *  regions = {
 *      "titleOne" = {
 *       "label" = @Translation("Evenex: title one region"),
 *      },
 *      "titleTwo" = {
 *       "label" = @Translation("Evenex: title two region"),
 *      },
 *      "location" = {
 *       "label" = @Translation("Evenex: location region"),
 *      },
 *      "address" = {
 *       "label" = @Translation("Evenex: address region"),
 *      },
 *      "link" = {
 *       "label" = @Translation("Evenex: link region"),
 *      },
 *      "map" = {
 *       "label" = @Translation("Evenex: map region"),
 *      },
 *  }
 * )
 */

class EvenexLocationSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/location_section.png");
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
            'region_css_titleOne' => 'h4',
            'region_css_titleTwo' => 'h4',
            'region_css_link' => 'h4',
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'titleOne' => [
                        'text_html' => [
                            'label' => 'Title One',
                            'value' => '',
                        ]
                    ],
                    'titleTwo' => [
                        'text_html' => [
                            'label' => 'Title Two',
                            'value' => '',
                        ]
                    ],
                    'location' => [
                        'text_html' => [
                            'label' => 'Location',
                            'value' => '',
                        ]
                    ],
                    'address' => [
                        'text_html' => [
                            'label' => 'Address',
                            'value' => '',
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'Link',
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
