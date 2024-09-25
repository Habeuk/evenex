<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex speaker teaser
 *
 * @Layout(
 *   id = "evenex_speaker_teaser",
 *   label = @Translation(" Evenex : Speaker teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "speaker_teaser",
 *   library = "evenex/speaker_teaser",
 *   default_region = "name",
 *   regions = {
 *     "name" = {
 *       "label" = @Translation("name"),
 *     },
 *     "job" = {
 *       "label" = @Translation("job"),
 *     },
 *     "social" = {
 *       "label" = @Translation("social"),
 *     },
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *   }
 * )
 */

class EvenexSpeakerTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/speaker_teaser.png");
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
                        'text_html' => [
                            'label' => 'Job',
                            'value' => ''
                        ]
                    ],
                    'social' => [
                        'text_html' => [
                            'label' => 'social',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
