<?php

namespace App;

use Doctrine\Common\Cache\Cache;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Config extends Model
{
    protected $table = 'config';

    public function getEnabled()
    {
        if(Schema::hasTable('config'))
        {
            $data = $this->select('name', 'value')
                ->where('enabled', 1)
                ->get()
                ->keyBy('name')
                ->toArray();

            $settings = null;
            foreach ($data as $item)
            {
                $settings['settings'][$item['name']] = $item['value'];
            }

            if($settings)
                config($settings);
        }
    }
}