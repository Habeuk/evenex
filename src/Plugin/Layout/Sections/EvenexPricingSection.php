<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Pricing section
 *
 * @Layout(
 *  id = "evenex_pricing_section",
 *  label = @Translation("Evenex: Pricing section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "pricing_section",
 *  library = "evenex/pricing_section",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("title region"),
 *      },
 *      "tickets" = {
 *       "label" = @Translation("tickets region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("background image region"),
 *      },
 *      "terms" = {
 *       "label" = @Translation("terms region"),
 *      },
 *      "icon_left" = {
 *       "label" = @Translation("icon_left"),
 *      },
 *      "icon_right" = {
 *       "label" = @Translation("icon_right"),
 *      },
 *
 *  }
 * )
 */
class EvenexPricingSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
   */
  public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager) {
    // TODO auto-generated method stub
    parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
    $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/pricing.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build
   */
  public function build(array $regions) {
    // TODO auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    
    return $build;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'css' => '',
      'load_library' => true,
      'region_css_title' => 'h1',
      'content' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Layout informations',
          'loader' => 'static'
        ],
        'fields' => [
          'title' => [
            'text' => [
              'label' => 'Title',
              'value' => 'Latest from Newsroom'
            ]
          ],
          'tickets' => [
            'text_html' => [
              'label' => 'Tickets',
              'value' => ''
            ]
          ],
          'backgroundImage' => [
            'text_html' => [
              'label' => 'Background Image',
              'value' => ''
            ]
          ],
          'terms' => [
            'text_html' => [
              'label' => 'terms',
              'value' => ''
            ]
          ]
        ]
      ]
    ];
  }
  
}
