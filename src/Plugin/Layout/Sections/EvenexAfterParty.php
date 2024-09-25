<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex After Party section
 * @Layout(
 *  id = "evenex-after-party",
 *  label = @Translation("Evenex: After Party section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_after_party_section",
 *  library = "evenex/evenex_after_party_section",
 *  default_region = "content",
 *  regions = {
 *      "content" = {
 *       "label" = @Translation("Evenex: content"),
 *      },
 *  }
 * )
 */

class EvenexAfterParty extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_after_party.png");
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
