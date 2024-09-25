<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex schedule element
 *
 * @Layout(
 *   id = "evenex_schedule_teaser",
 *   label = @Translation(" Evenex : Schedule element "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "schedule_teaser",
 *   default_region = "icon",
 *   regions = {
 *     "day" = {
 *       "label" = @Translation("day"),
 *     },
 *     "time" = {
 *       "label" = @Translation("time"),
 *     },
 *   }
 * )
 */

class EvenexScheduleTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/schedule_element.png");
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
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'day' => [
                        'text' => [
                            'label' => 'Day',
                            'value' => 'Day 01'
                        ]
                    ],
                    'time' => [
                        'text' => [
                            'label' => 'Time',
                            'value' => '09 am'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
