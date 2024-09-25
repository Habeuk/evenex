<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Testimonial section
 * @Layout(
 *  id = "evenex-testimonial-section",
 *  label = @Translation("Evenex: Testimonial section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_testimonial_section",
 *  library = "evenex/evenex_testimonial_section",
 *  default_region = "testimonials",
 *  regions = {
 *      "testimonials" = {
 *       "label" = @Translation("Evenex: testimonials"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image"),
 *      },
 *  }
 * )
 */

class EvenexTestimonialSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formaswipertage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_testimonial_section.png");
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
                    'testimonials' => [
                        'text_html' => [
                            'label' => 'Testimonials',
                            'value' => '',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Background Image',
                            'value' => '',
                        ]
                    ],
                ],
            ],
        ];
    }
}
