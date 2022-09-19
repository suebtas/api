<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationInfo extends Model
{
    use HasFactory;
    public function rainfall()
    {
        return $this->hasMany('App\Models\Rainfall');
    }
    public function rainfallLastUpdate()
    {
        return $this->rainfall()->orderByDesc("measureDatetime")->limit(1);
    }
}
