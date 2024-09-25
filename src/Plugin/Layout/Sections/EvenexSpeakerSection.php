<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Speaker section
 * @Layout(
 *  id = "evenex_speaker_section",
 *  label = @Translation("Evenex: Speaker section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_speaker_section",
 *  library = "evenex/speaker_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "speakers" = {
 *       "label" = @Translation("Evenex: speakers region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexSpeakerSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/speaker_section.png");
    }

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::build
     */
    public function build(array $regions)
    {
        // TODO auto-generated method stub
        $build = parent::build($regions);
        FormatageModelsThemes::formatSettingValues($build);

        return $build;
    }

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration()
    {
        return parent::defaultConfiguration() + [
            'css' => '',
            'load_library' => true,
            'region_css_title' => 'h1',
            'region_css_speakers' => "col-lg-6 col-md-6",
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'title' => [
                        'text' => [
                            'label' => 'Title',
                            'value' => 'Latest from Newsroom',
                        ]
                    ],
                    'speakers' => [
                        'text_html' => [
                            'label' => 'Speakers',
                            'value' => '',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Background Image',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
