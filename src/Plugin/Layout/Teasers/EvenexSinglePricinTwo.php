<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex single pricing 2
 *
 * @Layout(
 *   id = "evenex-single-pricing-two",
 *   label = @Translation(" Evenex : Single Pricing "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "evenex_single_pricing_two",
 *   library = "evenex/evenex_single_pricing_two",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "subtitle" = {
 *       "label" = @Translation("subtitle"),
 *     },
 *     "list" = {
 *       "label" = @Translation("list"),
 *     },
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *     "price" = {
 *       "label" = @Translation("price"),
 *     },
 *   }
 * )
 */

class EvenexSinglePricinTwo extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/evenex_single_pricing_two.png");
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
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => ''
                        ]
                    ],
                    'subtitle' => [
                        'text' => [
                            'label' => 'Sub Title',
                            'value' => ''
                        ]
                    ],
                    'list' => [
                        'text_html' => [
                            'label' => 'List',
                            'value' => ''
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'Link',
                            'value' => ''
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => ''
                        ]
                    ],
                    'price' => [
                        'text_html' => [
                            'label' => 'Price',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
