<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StationInfoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "fullUrl"=> "StationInfo/G09006-103662",
            "resource"=> [
            "resourceType"=> "StationInfo",
				"id"=> $this->id,
				"agencyCode"=> $this->agencyCode,
				"stationCode"=> $this->stationCode,
				"stationName"=> $this->stationName,
				"stationType"=> $this->stationType,
				"stationDescription"=> $this->stationDescription,
				"stationOperingStatus"=> $this->stationOperingStatus,
				"locationCode"=> $this->locationCode,
				"latitude"=> $this->latitude,
				"longitude"=> $this->longitude,
				"altitude"=> $this->altitude,
				"subBasinCode"=> $this->subBasinCode,
				"waterResource"=> [
					"type"=> "WaterResourceInfo",
					"id"=> "G09006-100104",
					"reference"=> "WaterReserveInfo/G09006-100104"
                ],
				"lastUpdate"=> "2022-01-01T17:30:00"
            ]
        ];
    }
}
