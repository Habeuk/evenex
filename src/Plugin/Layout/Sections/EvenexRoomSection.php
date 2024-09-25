<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Room section
 * @Layout(
 *  id = "evenex_room_section",
 *  label = @Translation("Evenex: Room section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_room_section",
 *  library = "evenex/room_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "imageOne" = {
 *       "label" = @Translation("Evenex: imageOne region"),
 *      },
 *      "imageTwo" = {
 *       "label" = @Translation("Evenex: imageTwo region"),
 *      },
 *      "description" = {
 *       "label" = @Translation("Evenex: description region"),
 *      },
 *      "icon" = {
 *       "label" = @Translation("Evenex: icon region"),
 *      },
 *      "link" = {
 *       "label" = @Translation("Evenex: link region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexRoomSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/room_section.png");
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
            'region_css_title' => 'h4',
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
                            'value' => '',
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => '',
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'Icon',
                            'value' => ''
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'Link',
                            'value' => ''
                        ]
                    ],
                    'imageOne' => [
                        'text_html' => [
                            'label' => 'Image One',
                            'value' => ''
                        ]
                    ],
                    'imageTwo' => [
                        'text_html' => [
                            'label' => 'imageTwo',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
