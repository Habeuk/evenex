<?php

namespace Drupal\evenex\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Evenex Newsletter section php
 * @Layout(
 *  id = "evenex_newsletter_section",
 *  label = @Translation("Evenex: newsletter section"),
 *  category = @Translation("evenex"),
 *  path = "layouts/sections",
 *  template = "newsletter",
 *  library = "evenex/evenex_newsletter",
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

class EvenexNewsletterSection extends FormatageModelsSection
{

    /**
     * {@inheritdoc}
     * @see Drupal\formatage_models\Plugin\Layout\FormatageModels::_construct
     */
    public function __construct(array $configuration, $pludin_id, $plugin_definition, StylesGroupManager $styleGroupManager)
    {
        // TODO auto-generated method stub
        parent::__construct($configuration, $pludin_id, $plugin_definition, $styleGroupManager);
        $this->pluginDefinition->set('icon', $this->pathResolver->getPath('module', 'evenex') . "/icones/sections/newsletter.png");
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
                    'title' => [
                        'text' => [
                            'label' => 'Newsletter title',
                            'value' => 'Get notified about the event! Subscribe today!',
                        ]
                    ],
                    'form' => [
                        'text_html' => [
                            'label' => 'Subscribe form',
                            'value' => '<form action="#" class="form">
                            <div class="form-element ">
                                <input type="email" class="emailField h5" name="" id="">
                                <button type="submit" class="submitField">
                                    <p class="btn-content h5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-.4 4.25l-7.07 4.42c-.32.2-.74.2-1.06 0L4.4 8.25a.85.85 0 1 1 .9-1.44L12 11l6.7-4.19a.85.85 0 1 1 .9 1.44z"/></svg>
                                        <span>Submit</span>
                                    </p>
                                </button>
                            </div>
                        </form>',
                        ]
                    ],
                    'backgroundImage' => [
                        'text_html' => [
                            'label' => 'Newsletter form',
                            'value' => ''
                        ]
                    ],
                ],
            ],
        ];
    }
}
