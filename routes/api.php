<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ArticleController;
use App\Http\Resources\RainfallCollection;
use App\Http\Resources\RunoffCollection;
use App\Http\Resources\StationInfoCollection;
use App\Http\Resources\StationInfoLastUpdateRainfallCollection;
use App\Http\Resources\StationInfoRainfallCollection;
use App\Http\Resources\WaterResourceCollection;
use App\Models\Rainfall;
use App\Models\Runoff;
use App\Models\StationInfo;
use App\Models\WaterResource;
use Carbon\Carbon;
Route::get('articles', [ArticleController::class,'index']);
Route::get('articles/{id}', [ArticleController::class,'show']);
Route::post('articles', [ArticleController::class,'store']);
Route::put('articles/{id}', [ArticleController::class,'update']);
Route::delete('articles/{id}', [ArticleController::class,'delete']);

Route::get('v1.0/Rainfall', function(Request $request) {
    //ini_set('memory_limit', -1);
    $criteria = '';
    try {
        if(!isset($request->startDate))
            $request->startDate="2022-07-28 07:00:00";
        if(!isset($request->endDate))
            $request->endDate="2022-07-29 07:00:00";

        if(isset($request->interval) && isset($request->latest) && $request->latest=='false'){
            /*$data = StationInfo::select('station_infos.*')
                ->join('rainfalls', 'rainfalls.station_info_id', '=', 'station_infos.id')
                ->where(["rainfalls.interval"=>$request->interval])
                ->groupBy("station_infos.id")->limit(10)->get();*/            
            $data = StationInfo::select('station_infos.*')
                ->join('rainfalls', 'rainfalls.station_info_id', '=', 'station_infos.id')
                ->whereBetween('rainfalls.measureDatetime',["$request->startDate" , "$request->endDate"])
                ->groupBy("station_infos.id")->get();
            $stationRainfallCollection = new StationInfoRainfallCollection($data);
            return $stationRainfallCollection;
        }elseif(isset($request->interval) && isset($request->latest) && $request->latest=='true'){            
            $data = StationInfo::select('station_infos.*')
                ->join('rainfalls', 'rainfalls.station_info_id', '=', 'station_infos.id')
                ->whereBetween('rainfalls.measureDatetime',["$request->startDate" , "$request->endDate"])
                ->groupBy("station_infos.id")->get();
            $stationRainfallCollection = new StationInfoLastUpdateRainfallCollection($data);
            return $stationRainfallCollection;
        }/*elseif(isset($request->latest) && $request->latest=='false'){
            $timeBegin = Carbon::today();
            $timeBegin->setTime(07, 00, 00);
            $timeEnd = Carbon::tomorrow();
            $timeEnd->setTime(07, 00, 00);
            //$data = Rainfall::where('measureDatetime','>',$timeBegin)->where('measureDatetime','<',$timeEnd)->get();    
            $data = StationInfo::select('station_infos.*')
                ->join('rainfalls', 'rainfalls.station_info_id', '=', 'station_infos.id')
                //->where(["rainfalls.interval"=>$request->interval])
                ->whereBetween('rainfalls.measureDatetime',["$timeBegin" , "$timeEnd"])
                ->groupBy("station_infos.id")->limit(10)->get();
        }*/
        else{
            return response()->json(['error' => 'โครงสร้างหรือรูปแบบข้อมูล request ที่ร้องขอมีข้อมูลไม่ครบถ้วน หรือมีรูปแบบที่ไม่ถูกต้อง'], 400);
        }
        
    } catch (\Exception $e) {

        return $e->getMessage();
    }
});
Route::get('v1.0/Runoff', function() {
    return new RunoffCollection(Runoff::all());
});
Route::get('v1.0/WaterResourceInfo', function() {
    return new WaterResourceCollection(WaterResource::all());
});
Route::get('v1.0/StationInfo', function() {
    return new StationInfoCollection(StationInfo::all());
});
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
