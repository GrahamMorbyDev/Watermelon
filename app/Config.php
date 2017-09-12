<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    public function getEnabled()
    {
        $data = $this->where('enabled', 1)->get();
        if($data)
        {
            return $data;
        }

        return false;
    }
}
