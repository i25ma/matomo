<?php
/**
 * Matomo - free/libre analytics platform
 *
 * @link https://matomo.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */
namespace Piwik\Plugins\ProfessionalServices\Widgets;

use Piwik\Container\StaticContainer;
use Piwik\Widget\Widget;
use Piwik\Widget\WidgetConfig;

class PromoMedia extends Widget
{
    public static function configure(WidgetConfig $config)
    {
        $config->setCategoryId('ProfessionalServices_PromoMedia');
        $config->setSubcategoryId('ProfessionalServices_PromoOverview');
        $config->setName('ProfessionalServices_PromoHeatmapsOverview');
        $config->setIsNotWidgetizable();

        $promoWidgetApplicable = StaticContainer::get('Piwik\Plugins\ProfessionalServices\PromoWidgetApplicable');

        $isEnabled = $promoWidgetApplicable->check('MediaAnalytics');
        $isEnabled = false;
        $config->setIsEnabled($isEnabled);
    }

    public function render()
    {
        return 'content';
    }
}
