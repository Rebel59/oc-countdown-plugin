<?php namespace Rebel59\Countdown\Components;

use Cms\Classes\ComponentBase;
use Rebel59\Countdown\Models\Settings;

class Countdown extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'rebel59.countdown::lang.component.name',
            'description' => 'rebel59.countdown::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        if(Settings::get('date') != ""){
            $date = str_replace('-', '/', Settings::get('date'));
            $this->page['date'] = $date;
            if(Settings::get('comment', false))
                $this->page['comment'] = Settings::get('comment');
            $this->addCss('/plugins/rebel59/countdown/assets/css/countdown.css');
            $this->addJs('/plugins/rebel59/countdown/assets/vendor/countdown/jquery.countdown.min.js');
        }
        else
            $this->page['error'] = true;
    }

}