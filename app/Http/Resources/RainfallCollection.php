<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RainfallCollection extends ResourceCollection
{
    public $meta = [
        "apiVersion"=> "1.0",
        "providerAgencyCode"=> "G09006",
        "waterDataType"=> "A002",
        "interval"=> "C-15"];
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
       //$this->entry["measurements"] = $this->collection;
        return [
            "meta"=> $this->meta,
            "resourceType"=> "Bundle",
            "type"=> "searchset",
            "total"=> $this->collection->count(),
            "entry"=> $this->collection];
    }
}
