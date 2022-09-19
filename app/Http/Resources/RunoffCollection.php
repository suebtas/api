<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RunoffCollection extends ResourceCollection
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
            "meta"=>[
                "apiVersion"=> "1.0",
                "providerAgencyCode"=> "G09006",
                "waterDataType"=> "A001",
                "interval"=> "C-15"],
            "resourceType"=> "Bundle",
            "type"=> "searchset",
            "total"=> $this->collection->count(),
            "entry"=> [
                    "resourceType"=> "RunoffMeasurement",
                    "agencyCode"=> "G09006",
                    "station"=> [
                        "type"=> "Station",
                        "id"=> "G09006-1032662",
                        "reference"=> "Station/G09006-1032662"
                    ],
            "measurements"=>$this->collection]];
    }
}
