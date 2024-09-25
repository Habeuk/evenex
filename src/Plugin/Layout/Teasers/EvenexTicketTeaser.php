<?php

namespace Drupal\evenex\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex ticket teaser
 *
 * @Layout(
 *   id = "evenex_ticket_teaser",
 *   label = @Translation(" Evenex : Ticket teaser "),
 *   category = @Translation("evenex"),
 *   path = "layouts/teasers",
 *   template = "ticket_teaser",
 *   library = "evenex/ticket_teaser",
 *   default_region = "price",
 *   regions = {
 *     "mainBenefit" = {
 *       "label" = @Translation("main benefit"),
 *     },
 *     "price" = {
 *       "label" = @Translation("price"),
 *     },
 *     "benefit" = {
 *       "label" = @Translation("benefit"),
 *     },
 *     "link" = {
 *       "label" = @Translation("link"),
 *     },
 *     "icon" = {
 *       "label" = @Translation("icon"),
 *     },
 *   }
 * )
 */

class EvenexTicketTeaser extends FormatageModelsSection
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
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/teasers/ticket.png");
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
                    'mainBenefit' => [
                        'text_html' => [
                            'label' => 'mainBenefit',
                            'value' => ''
                        ]
                    ],
                    'price' => [
                        'text' => [
                            'label' => 'price',
                            'value' => ''
                        ]
                    ],
                    'benefit' => [
                        'text_html' => [
                            'label' => 'benefit',
                            'value' => ''
                        ]
                    ],
                    'link' => [
                        'text_html' => [
                            'label' => 'link',
                            'value' => ''
                        ]
                    ],
                    'icon' => [
                        'text_html' => [
                            'label' => 'icon',
                            'value' => ''
                        ]
                    ],
                ]
            ]
        ] + parent::defaultConfiguration();
    }
}
