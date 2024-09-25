<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * Evenex after party teaser
 *
 * @Layout(
 *   id = "evenex-after-party-elementr",
 *   label = @Translation(" Evenex : after party teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "evenex_after_party_element",
 *   library = "evenex/evenex_after_party_element",
 *   default_region = "title",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("title"),
 *     },
 *     "subtitle" = {
 *       "label" = @Translation("subtittle"),
 *     },
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *   }
 * )
 */
class EvenexAfterPartyElement extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/evenex_after_party_element.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
   */
  public function build(array $regions) {
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
  function defaultConfiguration() {
    return [
      'load_libray' => true,
      'region_css_tilte' => 'h4',
      "derivate" => [
        'value' => '',
        'options' => [
          'evenex-ap--instagram' => 'instagram'
        ]
      ],
      'infos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Layout informations',
          'loader' => 'static'
        ],
        'fields' => [
          'title' => [
            'text' => [
              'label' => 'Title',
              'value' => ''
            ]
          ],
          'subtitle' => [
            'text_html' => [
              'label' => 'Description',
              'value' => ''
            ]
          ],
          'image' => [
            'text_html' => [
              'label' => 'Image',
              'value' => ''
            ]
          ],
          'icon' => [
            'text_html' => [
              'label' => 'Icon',
              'value' => ''
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}
