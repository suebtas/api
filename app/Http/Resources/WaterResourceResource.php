<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WaterResourceResource extends JsonResource
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
            "resourceType"=> "Storage",
            'measureDatetime'=> $this->measureDatetime,
            'value'=> $this->value,
            'qualityFlag'=> $this->qualityFlag,
            'comment'=> $this->comment,
            'qcLevel'=> $this->qcLevel,
        ];
    }
}
