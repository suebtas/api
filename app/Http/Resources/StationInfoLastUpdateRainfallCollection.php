<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class StationInfoLastUpdateRainfallCollection extends ResourceCollection
{
    public $meta = [
        "apiVersion"=> "1.0",
        "providerAgencyCode"=> "G09006",
        "waterDataType"=> "A002",
        "interval"=> "C-60"];
    public $entry = [
        "resourceType"=> "RainfallMeasurement",
        "agencyCode"=> "G09006",
        "station"=> [
            "type"=> "Station",
            "id"=> "G09006-1032662",
            "reference"=> "Station/G09006-1032662"
            ],
        "measurements"=>null];        
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "meta"=> $this->meta,
            "resourceType"=> "Bundle",
            "type"=> "searchset",
            "total"=> $this->collection->count(),
            "entry"=> $this->collection];
    }
}
