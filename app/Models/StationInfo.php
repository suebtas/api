<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StationInfo extends Model
{
    use HasFactory;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function rainfall($request)
    {//dd($request);
        return $this->hasMany('App\Models\Rainfall');
    }
    public function conditionRainfall($request)
    {
        //dd($request);
        $obj = $this->rainfall($request);//->where("interval",$this->interval);
        if(isset($request->startDate) && isset($request->endDate))
            $obj = $obj->whereBetween('measureDatetime',["$request->startDate" , "$request->endDate"]);
        return $obj->get();
    }
    public function rainfallLastUpdate($request)
    {
        //dd($request);
        return $this->rainfall($request)->orderByDesc("measureDatetime")->limit(1)->get();
    }
}
