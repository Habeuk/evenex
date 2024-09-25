<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Title section
 * @Layout(
 *  id = "evenex-title",
 *  label = @Translation("Evenex: Title section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_title_section",
 *  library = "evenex/evenex_title_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title"),
 *      },
 *      "subtitle" = {
 *       "label" = @Translation("Evenex: subtitle"),
 *      },
 *      "tag" = {
 *       "label" = @Translation("Evenex: tag"),
 *      },
 *      "content" = {
 *       "label" = @Translation("Evenex: content"),
 *      },
 *  }
 * )
 */

class EvenexTitle extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_title.png");
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
            "derivate" => [
                'value' => '',
                'options' => [
                    'evenex-title--background' => 'background',
                ],
            ],
            'load_library' => true,
            'region_css_title' => 'h1',
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
                    'subtitle' => [
                        'text_html' => [
                            'label' => 'SubTitle',
                            'value' => '',
                        ]
                    ],
                    'tag' => [
                        'text_html' => [
                            'label' => 'Tag',
                            'value' => '',
                        ]
                    ],
                    'content' => [
                        'text_html' => [
                            'label' => 'Content',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
