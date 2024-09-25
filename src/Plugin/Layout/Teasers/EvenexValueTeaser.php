<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Value template
 *
 * @Layout(
 *   id = "evenex_value_teaser",
 *   label = @Translation(" Evenex : Value Teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "value_teaser",
 *   library = "evenex/value_teaser",
 *   default_region = "title",
 *   regions = {
 *     "number" = {
 *       "label" = @Translation("number"),
 *     },
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *   }
 * )
 */

class EvenexValueTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/value_teaser.png");
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
                    'number' => [
                        'text_html' => [
                            'label' => 'Number',
                            'value' => '500'
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => ''
                        ]
                    ],
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
