<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RunoffResource extends JsonResource
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
            "resourceType"=> "WaterLevel",
            'value'=> $this->value,
            'measureDatetime'=> $this->measureDatetime,
            'qualityFlag'=> $this->qualityFlag,
            'comment'=> $this->comment,
            'qcLevel'=> $this->qcLevel,
        ];
    }
}
