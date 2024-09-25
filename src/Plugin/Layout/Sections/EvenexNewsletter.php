<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Newsletter section php
 * @Layout(
 *  id = "evenex-newsletter",
 *  label = @Translation("Evenex: newsletter section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "evenex_newsletter",
 *  library = "evenex/newsletter",
 *  default_region = "title",
 *  regions = {
 *      "title" = {
 *       "label" = @Translation("Evenex: title region"),
 *      },
 *      "form" = {
 *       "label" = @Translation("Evenex: form region"),
 *      },
 *      "backgroundImage" = {
 *       "label" = @Translation("Evenex: background image region"),
 *      },
 *      
 *  }
 * )
 */

class EvenexNewsletter extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/evenex_newsletter.png");
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
                            'value' => 'Get notified about the event! Subscribe today!',
                        ]
                    ],
                    'form' => [
                        'text_html' => [
                            'label' => 'Subscribe form',
                            'value' => '<form action="#" class="evenex-newsletter__form">
                            <input type="text" class="evenex-newsletter__form__input" placeholder="Enter your email">
                            <button type="submit" class="evenex-newsletter__form__button">Submit</button>
                        </form>',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Background Image',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
