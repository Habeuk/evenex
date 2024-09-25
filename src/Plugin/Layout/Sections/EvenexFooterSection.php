<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Footer section
 * @Layout(
 *  id = "evenex_footer_section",
 *  label = @Translation("Evenex: Footer section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "footer_section",
 *  library = "evenex/footer_section",
 *  default_region = "logo",
 *  regions = {
 *      "logo" = {
 *       "label" = @Translation("Evenex: logo region"),
 *      },
 *      "copyright" = {
 *       "label" = @Translation("Evenex: copyright region"),
 *      },
 *      "description" = {
 *       "label" = @Translation("Evenex: description region"),
 *      },
 *      "social" = {
 *       "label" = @Translation("Evenex: icon region"),
 *      },
 *      "bottomImage" = {
 *       "label" = @Translation("Evenex: bottom image region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexFooterSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/footer_section.png");
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
                    'logo' => [
                        'text_html' => [
                            'label' => 'Logo',
                            'value' => '',
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => '',
                        ]
                    ],
                    'copyright' => [
                        'text_html' => [
                            'label' => 'Copyright',
                            'value' => '',
                        ]
                    ],
                    'social' => [
                        'text_html' => [
                            'label' => 'Social',
                            'value' => '',
                        ]
                    ],
                    'bottomImage' => [
                        'text_html' => [
                            'label' => 'Bottom Image',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
