<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex detail info element template
 *
 * @Layout(
 *   id = "evenex_detail_info_teaser",
 *   label = @Translation(" Evenex : Detail info element "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   library = "evenex/detail_info",
 *   template = "detail_info",
 *   default_region = "icon",
 *   regions = {
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *     "question" = {
 *       "label" = @Translation("question"),
 *     },
 *     "answer" = {
 *       "label" = @Translation("answer"),
 *     },
 *   }
 * )
 */

class EvenexDetailInfoTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/detail_info.png");
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
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => ''
                        ]
                    ],
                    'question' => [
                        'text' => [
                            'label' => 'Question',
                            'value' => 'When'
                        ]
                    ],
                    'answer' => [
                        'text_html' => [
                            'label' => 'Reponse',
                            'value' => 'September 20 - September 22'
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
