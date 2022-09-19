<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Article;
class Raininfall{
    public $entry;
    function __construct($entry){
        $this->entry = ["resourceType"=> "RainfallMeasurement",
                        "agencyCode"=> "G09006",
                        "station"=> [
                            "type"=> "Station",
                            "id"=> "G09006-1032662",
                            "reference"=> "Station/G09006-1032662"
                        ],
                        "measurements"=>$entry];
    }
    public function toJSON(){
        {
            return ["meta"=>[
                "apiVersion"=> "1.0",
                "providerAgencyCode"=> "G09006",
                "waterDataType"=> "A001",
                "interval"=> "C-15"],
            "resourceType"=> "Bundle",
            "type"=> "searchset",
            "total"=> count($this->entry),
            "entry"=> $this->entry];
        }
        
    }
}
class ArticleController extends Controller
{
    public function index()
    {
        $articles=  Article::all();
        $raw = new Raininfall($articles);
        return response()->json($raw->toJSON());
    }
 
    public function show($id)
    {
        $article = Article::find($id);
        return response()->json($article,200);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return response()->json(null, 204);
    }
}
