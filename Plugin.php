<?php namespace Rebel59\Countdown;

use System\Classes\PluginBase;
use System\Classes\SettingsManager;

/**
 * countdown Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'rebel59.countdown::lang.plugin.name',
            'description' => 'rebel59.countdown::lang.plugin.description',
            'author'      => 'rebel59',
            'icon'        => 'icon-clock-o'
        ];
    }

    public function registerSettings()
    {
        return [
            'settings'        => [
                'label'       => 'rebel59.countdown::lang.settings.label',
                'description' => 'rebel59.countdown::lang.settings.description',
                'category'    => 'rebel59.countdown::lang.settings.category',
                'class'       => 'rebel59\countdown\Models\Settings',
                'icon'        => 'icon-clock-o'
            ]
        ];
    }

 public function registerComponents()
    {
        return [
            'Rebel59\Countdown\Components\Countdown'       => 'Countdown',
        ];
    }

    public function registerPermissions()
    {
        return [
            'rebel59.countdown.access_countdown'=> ['tab' => 'Countdown', 'label' => 'rebel59.countdown::lang.permissions.access_countdown']
        ];
    }

}
