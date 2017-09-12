<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';

    public function getEnabled()
    {
        $data = $this->where('enabled', 1)->get();
        return $data;
    }

    static function getConfigOption($enabledConfig, $item)
    {
        foreach ($enabledConfig as $config)
        {
            if ($config->name == $item)
            {
                return $config;
            }
        }
    }

    /*
     * I don't like the soloution I made because I want the config to be accessible without pissing around on every controller. I want it global.
     * The config helper can help us and setting the config to cache
     * config()

The config function gets the value of a configuration variable. The configuration values may be accessed using "dot" syntax, which includes the name of the file and the option you wish to access. A default value may be specified and is returned if the configuration option does not exist:

$value = config('app.timezone');

$value = config('app.timezone', $default);
The config helper may also be used to set configuration variables at runtime by passing an array of key / value pairs:

config(['app.debug' => true]);

    // Fetch your config from the database table / cache as an array
$settings = Setting::lists('value', 'key');

// Then update the configuration by passing that array into the config helper
config($settings);

    https://laracasts.com/discuss/channels/laravel/using-a-database-for-configuration-settings
     */
}
