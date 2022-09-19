<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RainfallResource extends JsonResource
{
    /*
    			"resourceType"=> "Rainfall",
            'value'=> $this->value,
            'measureDatetime'=> $this->measureDatetime,
            'createDatetime'=>$this->createDatetime,
            'updateDatetime'=>$this->updateDatetime,
            'qualityFlag'=> $this->qualityFlag,
            'comment'=> $this->comment,
            'qcLevel'=> $this->qcLevel,
    */
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
			"resourceType"=> "Rainfall",
            'value'=> $this->value,
            'measureDatetime'=> $this->measureDatetime,
            'createDatetime'=>$this->createDatetime,
            'updateDatetime'=>$this->updateDatetime,
            'qualityFlag'=> $this->qualityFlag,
            'comment'=> $this->comment,
            'qcLevel'=> $this->qcLevel,
        ];
        /*return [
            "resourceType"=> "RainfallMeasurement",
            "agencyCode"=> "$this->agencyCode",
            "station"=> [
                "type"=> "Station",
                "id"=> "$this->id",
                "reference"=> "Station/$this->agencyCode-$this->id"
                ],
            "measurements"=>null];     */   
    }
    
}
