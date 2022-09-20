<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StationInfoRainfallResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    { //dd($request);
        return [
            "resourceType"=> "RainfallMeasurement",
            "agencyCode"=> "$this->agencyCode",
            "station"=> [
                "type"=> "Station",
                "id"=> "$this->id",
                "reference"=> sprintf("Station/%s-%s",$this->agencyCode,$this->id)
                ],
            "measurements"=>RainfallResource::collection($this->conditionRainfall($request))];        
            //"measurements"=>$this->collection->map->toArray($request)->all()];        
    }
    
}
