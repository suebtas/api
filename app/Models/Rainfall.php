<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rainfall extends Model
{
    use HasFactory;
    public function stationInfo(){
        return $this->belongsTo('App\Models\StationInfo');
    }
}
