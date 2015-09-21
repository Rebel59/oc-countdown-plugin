<?php namespace Rebel59\Countdown\Models;

use Model;

/**
 * settings Model
 */
class Settings extends Model
{

    public $implement      = ['System.Behaviors.SettingsModel'];
    public $settingsCode   = 'r59_countdown_settings';
    public $settingsFields = 'fields.yaml';
    public $requiredPermissions = ['rebel59.countdown.access_countdown'];


     public $rules  = [
        'date'      => 'required',
        'comment'   => 'required'
    ];

}