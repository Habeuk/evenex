<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Event Schedule Teaser template
 *
 * @Layout(
 *   id = "evenex_event_schedule_teaser",
 *   label = @Translation(" Evenex : event schedule teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "event_shchedule_teaser",
 *   default_region = "title",
 *   regions = {
 *     "image" = {
 *       "label" = @Translation("image region"),
 *     },
 *     "name" = {
 *       "label" = @Translation("name region"),
 *     },
 *     "job" = {
 *       "label" = @Translation("job region"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title region"),
 *     },
 *     "hourIcon" = {
 *       "label" = @Translation("hour icon region"),
 *     },
 *     "hour" = {
 *       "label" = @Translation("hour region"),
 *     },
 *     "roomIcon" = {
 *       "label" = @Translation("room icon region"),
 *     },
 *     "room" = {
 *       "label" = @Translation("room region"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description region"),
 *     },
 *   }
 * )
 */

class EvenexEventScheduleTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/event_schedule_teaser.png");
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
            'region_css_name' => 'h4',
            'region_css_title' => 'h3',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ''
                        ]
                    ],
                    'name' => [
                        'text' => [
                            'label' => 'Name',
                            'value' => ''
                        ]
                    ],
                    'job' => [
                        'text' => [
                            'label' => 'Job',
                            'value' => ''
                        ]
                    ],
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => ''
                        ]
                    ],
                    'hourIcon' => [
                        'text_html' => [
                            'label' => 'Hour Icon',
                            'value' => ''
                        ]
                    ],
                    'hour' => [
                        'text_html' => [
                            'label' => 'Hour',
                            'value' => ''
                        ]
                    ],
                    'roomIcon' => [
                        'text_html' => [
                            'label' => 'Room Icon',
                            'value' => ''
                        ]
                    ],
                    'room' => [
                        'text_html' => [
                            'label' => 'Room',
                            'value' => ''
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
