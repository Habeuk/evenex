<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Sponsors section php
 * @Layout(
 *  id = "evenex_sponsor_section",
 *  label = @Translation("Evenex: sponsor section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "sponsor_section",
 *  library = "evenex/sponsor",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "description" = {
 *       "label" = @Translation("Evenex: description region"),
 *      },
 *      "link" = {
 *       "label" = @Translation("Evenex: call to action region"),
 *      },
 *      "icon" = {
 *       "label" = @Translation("Evenex: call to action region"),
 *      },
 *      "sponsor" = {
 *       "label" = @Translation("Evenex: sponsors region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexSponsorSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/sponsor.png");
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
                            'value' => 'Our official sponsors',
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'description',
                            'value' => 'We have dedicated tracks for every industry Whether you want to hire tech’s top talent.',
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
                    'sponsors' => [
                        'text_html' => [
                            'label' => 'Stats',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
