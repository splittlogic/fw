<?php


/*
|--------------------------------------------------------------------------
| resources - Trait for Laravel resource elements
|--------------------------------------------------------------------------
|
|   Functions:
|
|       bootstrap()     - Toggle Bootstrap page view setting (default is on)
|       bootstrapCSS()  - Return Bootstrap Styling based on bootstrap_setting
|       bootstrapJS()   - Return Bootstrap JavaScript based on bootstrap_setting
|       view()          - Custom view function to automatically switch between
|                           Livewire and regular view
*/


namespace splittlogic\fw\Traits;

trait resources
{


    // Variables
        // Toggle for Bootstrap page view (default is on)
        protected static $bootstrap_setting = 'on';


    // Toggle Bootstrap page view setting (default is on)
    public static function bootstrap($value = null)
    {

        if (is_null($value))
        {

            if (self::$bootstrap_setting == 'on')
            {
                self::$bootstrap_setting = 'off';
            } else {
                self::$bootstrap_setting = 'on';
            }

        } else {

            self::$bootstrap_setting = $value;

        }

        return new static();

    }


    // Return Bootstrap Styling based on bootstrap_setting
    public static function bootstrapCSS()
    {
        
        // Check for Bootstrap setting
        if (self::$bootstrap_setting == 'on')
        {

            // Get Bootstrap CSS
            $file = base_path('vendor/splittlogic/fw/resources/extras/bootstrap-5.3.2/bootstrap.min.css');
            if (file_exists($file))
            {
                $css = file_get_contents($file);
                return '<style>' . $css . '</style>';
            }
            
        } else {
            return;
        }
        
    }


    // Return Bootstrap JavaScript based on bootstrap_setting
    public static function bootstrapJS()
    {

        // Check for Bootstrap setting
        if (self::$bootstrap_setting == 'on')
        {

            // Get Bootstrap JS
            $file = base_path('vendor/splittlogic/fw/resources/extras/bootstrap-5.3.2/bootstrap.min.js');
            if (file_exists($file))
            {
                $js = file_get_contents($file);
                return '<script>' . $js . '</script>';
            }

        } else {
            return;
        }

    }


    // Custom view function to automatically switch between Livewire and
    // regular view
    public static function view($page, $params = array())
    {

        return view($page, $params)
            ->layout('fw::layouts.app');

    }


}
