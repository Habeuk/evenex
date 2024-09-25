<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Memory teaser
 *
 * @Layout(
 *   id = "evenex_memory_teaser",
 *   label = @Translation(" Evenex : Memory teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "memory_teaser",
 *   library = "evenex/memory_teaser",
 *   default_region = "title",
 *   regions = {
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *   }
 * )
 */

class EvenexMemoryTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/memory_teaser.png");
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
            'region_css_title' => 'h4',
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
                    'title' => [
                        'text' => [
                            'label' => 'Title',
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
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
