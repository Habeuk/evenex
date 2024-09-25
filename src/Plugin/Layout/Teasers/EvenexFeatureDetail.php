<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Feature Teaser template
 *
 * @Layout(
 *   id = "evenex-feature-detail",
 *   label = @Translation(" Evenex : feature detail teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "evenex_feature_detail",
 *   library = "evenex/evenex_feature_detail",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "tag" = {
 *       "label" = @Translation("tag"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *     "linkOneIcon" = {
 *       "label" = @Translation("link one icon"),
 *     },
 *     "linkOne" = {
 *       "label" = @Translation("link one"),
 *     },
 *     "linkTwoIcon" = {
 *       "label" = @Translation("link two icon"),
 *     },
 *     "linkTwo" = {
 *       "label" = @Translation("link two"),
 *     },
 *   }
 * )
 */

class EvenexFeatureDetail extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/evenex_feature_detail.png");
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
            'region_css_tag' => 'h3',
            'region_css_title' => 'h1',
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => ''
                        ]
                    ],
                    'tag' => [
                        'text' => [
                            'label' => 'Tag',
                            'value' => ''
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => ''
                        ]
                    ],
                    'linkOneIcon' => [
                        'text_html' => [
                            'label' => 'Link One Icon',
                            'value' => ''
                        ]
                    ],
                    'linkOne' => [
                        'text_html' => [
                            'label' => 'Link One',
                            'value' => ''
                        ]
                    ],
                    'linkTwoIcon' => [
                        'text_html' => [
                            'label' => 'Link Two Icon',
                            'value' => ''
                        ]
                    ],
                    'linkTwo' => [
                        'text_html' => [
                            'label' => 'Link Two',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
