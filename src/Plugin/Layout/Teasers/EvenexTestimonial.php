<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex ticket teaser
 *
 * @Layout(
 *   id = "evenex-testimonial",
 *   label = @Translation(" Evenex : Testimonial teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "evenex_testimonial",
 *   library = "evenex/evenex_testimonial",
 *   default_region = "price",
 *   regions = {
 *     "image" = {
 *       "label" = @Translation("image"),
 *     },
 *     "name" = {
 *       "label" = @Translation("name"),
 *     },
 *     "job" = {
 *       "label" = @Translation("job"),
 *     },
 *     "description" = {
 *       "label" = @Translation("description"),
 *     },
 *   }
 * )
 */

class EvenexTestimonial extends FormatageModelsSection
{

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
     */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager)
    {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/evenex_testimonial.png");
    }

    /**
     *
     * {@inheritdoc}
     * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
     */
    public function build(array $regions)
    {
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
    function defaultConfiguration()
    {
        return [
            'load_libray' => true,
            'infos' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Layout informations',
                    'loader' => 'static'
                ],
                'fields' => [
                    'image' => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => ''
                        ]
                    ],
                    'name' => [
                        'text' => [
                            'label' => 'Name',
                            'value' => ''
                        ]
                    ],
                    'job' => [
                        'text_html' => [
                            'label' => 'Job',
                            'value' => ''
                        ]
                    ],
                    'description' => [
                        'text_html' => [
                            'label' => 'Description',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
