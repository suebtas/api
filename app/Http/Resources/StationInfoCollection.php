<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StationInfoCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "meta"=> [
                "apiVersion"=> "1.0",
                "providerAgencyCode"=> "G09006",
                "waterDataType"=> "B001"
            ],
            "resourceType"=> "Bundle",
            "type"=> "searchset",
            "total"=> $this->collection->count(),
            "entry"=> $this->collection];
    }
}
