<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Conference section
 * @Layout(
 *  id = "evenex-conference",
 *  label = @Translation("Evenex: Conference section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_conference",
 *  library = "evenex/evenex_conference",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image region"),
 *      },
 *      "date" = {
 *       "label" = @Translation("Evenex: date region"),
 *      },
 *      "countdownDate" = {
 *       "label" = @Translation("Evenex: countdown date region"),
 *      },
 *  }
 * )
 */

class EvenexConference extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_conference.png");
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
            'region_css_title' => 'wbu-title-big',
            'content' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static',
                ],
                'fields' => [
                    'title' => [
                        'text_html' => [
                            'label' => 'Title',
                            'value' => '',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Background image',
                            'value' => '',
                        ]
                    ],
                    'date' => [
                        'text_html' => [
                            'label' => 'Date',
                            'value' => '',
                        ]
                    ],
                    'countdownDate' => [
                        'text_html' => [
                            'label' => 'Countdown Date',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
