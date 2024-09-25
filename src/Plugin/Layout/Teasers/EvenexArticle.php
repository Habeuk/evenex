<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex article teaser
 *
 * @Layout(
 *   id = "evenex-article",
 *   label = @Translation(" Evenex : Article teaser 2"),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "evenex_article",
 *   library = "evenex/evenex_article",
 *   default_region = "title",
 *   regions = {
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "category" = {
 *       "label" = @Translation("category"),
 *     },
 *     "date" = {
 *       "label" = @Translation("date"),
 *     },
 *   }
 * )
 */

class EvenexArticle extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/evenex_article_teaser.png");
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
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ''
                        ]
                    ],
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => 'Attracting more than 2,600 global from publications'
                        ]
                    ],
                    'category' => [
                        'text_html' => [
                            'label' => 'Category',
                            'value' => 'technology'
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'date',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
