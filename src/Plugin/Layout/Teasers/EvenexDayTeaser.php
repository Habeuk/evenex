<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Day teaser
 *
 * @Layout(
 *   id = "evenex_day_teaser",
 *   label = @Translation(" Evenex : Day teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "day_teaser",
 *   default_region = "day",
 *   regions = {
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *     "day" = {
 *       "label" = @Translation("day"),
 *     },
 *     "date" = {
 *       "label" = @Translation("date"),
 *     },
 *     "place" = {
 *       "label" = @Translation("place"),
 *     },
 *     "room" = {
 *       "label" = @Translation("room"),
 *     },
 *   }
 * )
 */

class EvenexDayTeaser extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager)
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/day_teaser.png");
    }

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
     */
    public function build(array $regions)
    {
        // TODO Auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);
        return $build;
    }

    /**
     * 
     * {@inheritdoc}
     * 
     */
    function defaultConfiguration()
    {
        return [
            'load_libray' => true,
            'region_css_day' => 'h3',
            'region_css_date' => 'h5',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'day' => [
                        'text_html' => [
                            'label' => 'Day',
                            'value' => ''
                        ]
                    ],
                    'icon' => [
                        'text' => [
                            'label' => 'Icon',
                            'value' => ''
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => ''
                        ]
                    ],
                    'place' => [
                        'text_html' => [
                            'label' => 'Place',
                            'value' => ''
                        ]
                    ],
                    'room' => [
                        'text_html' => [
                            'label' => 'Room',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
