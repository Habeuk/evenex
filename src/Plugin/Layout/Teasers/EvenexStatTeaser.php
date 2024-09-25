<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex stat element template
 *
 * @Layout(
 *   id = "evenex_stat_teaser",
 *   label = @Translation(" Evenex : Stat teaser element "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "stat",
 *   default_region = "element",
 *   regions = {
 *     "number" = {
 *       "label" = @Translation("number"),
 *     },
 *     "element" = {
 *       "label" = @Translation("element"),
 *     },
 *   }
 * )
 */

class EvenexStatTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/stat.png");
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
            'region_css_number' => 'h1',
            'region_css_element' => 'h3',
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
                    'element' => [
                        'text' => [
                            'label' => 'Element',
                            'value' => 'Speaker'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
