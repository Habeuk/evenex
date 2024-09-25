<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex activity teaser
 *
 * @Layout(
 *   id = "evenex_activity_teaser",
 *   label = @Translation(" Evenex : Activity teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "activity_teaser",
 *   library = "evenex/activity_teaser",
 *   default_region = "title",
 *   regions = {
 *     "speakers" = {
 *       "label" = @Translation("speakers"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "scheduleIcon" = {
 *       "label" = @Translation("schedule icon"),
 *     },
 *     "scheduleTime" = {
 *       "label" = @Translation("schedule time"),
 *     },
 *     "placeIcon" = {
 *       "label" = @Translation("place icon"),
 *     },
 *     "placeRoom" = {
 *       "label" = @Translation("place room"),
 *     },
 *   }
 * )
 */

class EvenexActivityTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/activity.png");
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
            'region_css_tilte' => 'h4',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'speakers' => [
                        'text_html' => [
                            'label' => 'Speakers',
                            'value' => ''
                        ]
                    ],
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => ''
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => 'technology'
                        ]
                    ],
                    'scheduleIcon' => [
                        'text_html' => [
                            'label' => 'Schedule Icon',
                            'value' => ''
                        ]
                    ],
                    'scheduleTime' => [
                        'text_html' => [
                            'label' => 'Schedule Time',
                            'value' => ''
                        ]
                    ],
                    'placeIcon' => [
                        'text_html' => [
                            'label' => 'Place Icon',
                            'value' => ''
                        ]
                    ],
                    'placeRoom' => [
                        'text_html' => [
                            'label' => 'Place Room',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
