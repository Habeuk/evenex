<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex session teaser
 *
 * @Layout(
 *   id = "evenex_session_teaser",
 *   label = @Translation(" Evenex : Section teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "session_teaser",
 *   library = "evenex/session_teaser",
 *   default_region = "day",
 *   regions = {
 *     "day" = {
 *       "label" = @Translation("day"),
 *     },
 *     "date" = {
 *       "label" = @Translation("date"),
 *     },
 *     "place" = {
 *       "label" = @Translation("place"),
 *     },
 *     "location" = {
 *       "label" = @Translation("place"),
 *     },
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *   }
 * )
 */

class EvenexSessionTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/session.png");
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
                    'date' => [
                        'text' => [
                            'label' => 'Date',
                            'value' => ''
                        ]
                    ],
                    'place' => [
                        'text_html' => [
                            'label' => 'Place',
                            'value' => 'technology'
                        ]
                    ],
                    'location' => [
                        'text_html' => [
                            'label' => 'Location',
                            'value' => ''
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
